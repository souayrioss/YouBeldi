<?php 
class Client{
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }
    public function login($email, $password){
        $this->db->query('SELECT * FROM client  WHERE email = :email');
        $this->db->bind(':email', $email);
        $row = $this->db->single();
        $hashed_password = $row->password;
        if(password_verify($password, $hashed_password)){
            return $row;
        }else{
            return false;
        }   
    } 
    public function register($data){
        $this->db->query('INSERT INTO client (nom,prenom, email, password) VALUES(:nom,:prenom, :email, :password)');
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
    public function findUserByEmail($email){
        $this->db->query('SELECT * FROM client WHERE email = :email');
        // Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        // Check row
        if($this->db->rowCount() > 0){
        return true;
        } else {
        return false;
        }
    }
}