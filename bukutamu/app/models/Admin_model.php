<?php
    Class Admin_model{
        private $table = 'admin';
        private $db;
    
        public function __construct(){
            $this->db = new Database;
        }

        public function login(){
            $email = $_POST['email'];
            $pass = hash('sha256',$_POST['password']);
            
            $query = 'SELECT * FROM '.$this->table.' WHERE `email` =  ? AND `Password` = ?';
            $this->db->Query($query);
            $this->db->bind( 1 , $email);
            $this->db->bind( 2 , $pass);
            return $this->db->Single();
        }

        
    }