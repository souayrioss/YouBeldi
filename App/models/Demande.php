<?php 
class Demande{
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }
    public function addDemande($id,$demande){
        $this->db->query("INSERT INTO `demande`(`user_id`, `demande`) VALUES (:id , :demande)");
        // Bind values
        $this->db->bind(':id', $id);
        $this->db->bind(':demande', $demande);
        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

}