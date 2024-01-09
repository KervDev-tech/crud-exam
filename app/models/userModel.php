<?php 

class userModel extends dbModel{
    
    private $conn;

    public function __construct(){
        $this->conn = $this->connect();
    }
    public function read(){

        $query = 'SELECT * FROM song_tb ORDER BY id DESC';
            
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    public function create($data){
        try{

            $this->conn->beginTransaction();

            $query = 'INSERT INTO song_tb (s_title, s_artist, s_lyrics, datecreated, createdby) 
                VALUES (:s_title, :s_artist, :s_lyrics, :datecreated, :createdby)';
                
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