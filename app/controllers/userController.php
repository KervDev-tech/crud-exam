<?php 

class userController {
    public $userModel;
    public function __construct(){
        $this->userModel = new userModel;
    }

    public function getSong(){
        $result = $this->userModel->read();
        $row_num = $result->rowCount();
        $arr_emp = [];
    
        if($row_num > 0){
            $arr_emp = $result->fetchAll();
        }
    
        return $arr_emp;
    }
    public function insertSong(){
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_btn'])) {
            $create = $this->userModel->create([
                's_title' => $_POST['s_title'], 
                's_artist' => $_POST['s_artist'], 
                's_lyrics' => $_POST['s_lyrics'], 
                'datecreated' => date("Y-m-d H:i:s"), 
                'createdby' => 1,
                'is_active' => 'Y'
            ]);
            if($create){
                return true;
            }
            else{
                return false;
            }
        }
    }
    public function editSong($id){
        $result = $this->userModel->read_one([
            'id' => $id
        ]);
        
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_btn'])) {
            $update = $this->userModel->update([
                's_title' => $_POST['s_title'], 
                's_artist' => $_POST['s_artist'], 
                's_lyrics' => $_POST['s_lyrics'], 
                'dateupdated' => date("Y-m-d H:i:s"), 
                'updatedby' => 2,
                'id' => $_GET['id']
            ]);
            if($update){
                header('location: index.php?update=success');
                exit();
            }
            else{
                return false;
            }
        }

        return $result->fetch();
    }

    public function deleteSong($id){
        $delete = $this->userModel->delete([
            'is_active' => 'N',
            'dateupdated' => date("Y-m-d H:i:s"), 
            'updatedby' => 2,
            'id' => $id
        ]);

        if($delete){
            header('location: index.php?delete=success');
            exit();
        }
        else{
            header('location: index.php?delete=failed');
            exit();
        }
    }
}