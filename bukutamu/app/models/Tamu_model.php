<?php
    Class Tamu_model{
        private $table = 'bukutamu';
        private $db;
    
        public function __construct(){
            $this->db = new Database;
        }

        public function getAllTamu(){
            $this->db->Query('SELECT * FROM ' . $this->table);
            return $this -> db -> resultSet();
        }
        public function getTamuById($id){  

            $query = 'SELECT * FROM '.$this->table.' WHERE `id` = ?';
            $this->db->Query($query);
            $this->db->bind( 1 , $id);
            return $this->db->single();
        }

        public function tambahTamu($data){
            var_dump($data);
             $query = "INSERT INTO `bukutamu` VALUES ('',:nama,:email,:komentar)";
            
             $this->db->Query($query);
             $this->db->bind( 'nama' , $data['nama']);
            $this->db->bind( 'email', $data['email']);
             $this->db->bind( 'komentar', $data['komentar']);
    
             $this->db->execute();
    
             return $this->db->RowCount();

         
        }

        public function cariDataTamu(){
            $keyword = $_POST['keyword'];
    
            $query = 'SELECT * FROM '.$this->table.' WHERE `nama` LIKE  ?';
            $this->db->Query($query);
            $this->db->bind( 1 , "%$keyword%");
            return $this->db->resultSet();
        }

        public function hapusTamu($data){
            var_dump($data);
             $query = "DELETE FROM `bukutamu` WHERE id = ?";
             $this->db->Query($query);
             $this->db->bind( 1 , $data);
             $this->db->execute();
    
             return $this->db->RowCount();

         
        }
    }