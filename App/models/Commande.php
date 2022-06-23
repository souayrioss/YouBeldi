<?php 
class Commande{
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }
    public function addCommande($data){
        $this->db->query("INSERT INTO `commande`(`prixCmd`, `refCl`, `cin`, `adresse`, `tel`) VALUES (:prixCmd,:refCl,:cin,:adresse,:tel)");
        // Bind values
        $this->db->bind(':prixCmd', $data['prixCmd']);
        $this->db->bind(':refCl', $data['refCl']);
        $this->db->bind(':cin', $data['cin']);
        $this->db->bind(':adresse', $data['adresse']);
        $this->db->bind(':tel', $data['tel']);
        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    public function getComandes(){
        $this->db->query('SELECT * FROM commande c INNER JOIN client cl ON c.refCl =cl.id   ORDER BY `created_at` DESC');
        return $this->db->resultSet();
    
}
}