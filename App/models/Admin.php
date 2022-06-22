<?php 
class Admin{
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }
    public function login($userName, $password){
        $this->db->query('SELECT * FROM admin  WHERE userName = :userName');
        $this->db->bind(':userName', $userName);
        $row = $this->db->single();
        $hashed_password = $row->password;
        if(password_verify($password, $hashed_password)){
            return $row;
        }else{
            return false;
        }   
    } 
    public function register($data){
        $this->db->query('INSERT INTO admin (nom,prenom, email, password) VALUES(:nom,:prenom, :email, :password)');
        // Bind values
        $this->db->bind(':nom', $data['nom']);
        $this->db->bind(':prenom', $data['prenom']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    public function findUserByUserName($userName){
        $this->db->query('SELECT * FROM admin WHERE userName = :userName');
        // Bind value
        $this->db->bind(':userName', $userName);

        $row = $this->db->single();

        // Check row
        if($this->db->rowCount() > 0){
        return true;
        } else {
        return false;
        }
    }

}