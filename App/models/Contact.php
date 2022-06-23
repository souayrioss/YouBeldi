<?php 
class Contact{
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }
    public function addContact($data){
        $this->db->query("INSERT INTO `contact`(`prenom`, `nom`, `email`, `objet`, `message`) VALUES (:prenom,:nom,:email,:objet,:message)");
        $this->db->bind(':prenom', $data['prenom']);
        $this->db->bind(':nom', $data['nom']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':objet', $data['objet']);
        $this->db->bind(':message', $data['message']);
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    public function getContacts(){
        $this->db->query('SELECT * FROM contact ORDER BY create_at DESC');
        return $this->db->resultSet();
    }

}