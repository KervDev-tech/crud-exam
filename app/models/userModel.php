<?php 

class userModel extends dbModel{
    
    private $conn;

    public function __construct(){
        $this->conn = $this->connect();
    }
    public function read(){

        $query = 'SELECT * FROM song_tb WHERE is_active = "Y" ORDER BY id DESC';
            
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    public function read_one($id){

        $query = 'SELECT * FROM song_tb WHERE id = :id';
            
        $stmt = $this->conn->prepare($query);
        $stmt->execute($id);

        return $stmt;
    }

    public function create($data){
        try{

            $this->conn->beginTransaction();

            $query = 'INSERT INTO song_tb (s_title, s_artist, s_lyrics, datecreated, createdby, is_active) 
                VALUES (:s_title, :s_artist, :s_lyrics, :datecreated, :createdby, :is_active)';
                
            $stmt = $this->conn->prepare($query);

            $stmt->execute($data);

            $this->conn->commit();

        }
        catch(PDOException $e){
            echo 'Error: ' . $e->getMessage();
            $this->conn->rollback();
        }

        return $stmt;
    }

    public function update($data){
        try{

            $this->conn->beginTransaction();

            $query = 'UPDATE song_tb SET s_title = :s_title, s_artist = :s_artist, s_lyrics = :s_lyrics, dateupdated = :dateupdated, updatedby = :updatedby
                WHERE id = :id';
                
            $stmt = $this->conn->prepare($query);

            $stmt->execute($data);

            $this->conn->commit();

        }
        catch(PDOException $e){
            echo 'Error: ' . $e->getMessage();
            $this->conn->rollback();
        }

        return $stmt;
    }

    public function delete($data){
        try{

            $this->conn->beginTransaction();

            $query = 'UPDATE song_tb SET dateupdated = :dateupdated, updatedby = :updatedby, is_active = :is_active
                WHERE id = :id';
                
            $stmt = $this->conn->prepare($query);

            $stmt->execute($data);

            $this->conn->commit();

        }
        catch(PDOException $e){
            echo 'Error: ' . $e->getMessage();
            $this->conn->rollback();
        }

        return $stmt;
    }
}