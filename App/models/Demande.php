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
    public function getDemandes(){
            $this->db->query('SELECT * FROM demande d INNER JOIN client cl ON d.user_id =cl.id   ORDER BY `id_demande` DESC');
            return $this->db->resultSet();
        
    }

}