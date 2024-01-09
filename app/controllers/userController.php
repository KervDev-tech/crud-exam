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
        $create = $this->userModel->create([
            's_title' => 'test', 
            's_artist' => 'test', 
            's_lyrics' => 'test', 
            'datecreated' => date("Y-m-d H:i:s"), 
            'createdby' => 1
        ]);
        var_dump($create);
    }
}