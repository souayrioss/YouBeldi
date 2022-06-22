<?php

use Google\Service\AnalyticsData\OrderBy;

class Panier{
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }
    public function addToPanier($data){
        $this->db->query("INSERT INTO `panier`(`user_id`, `produit_id`, `qte`, `couleur`, `size`) VALUES (:user_id , :produit_id, :qte, :couleur, :size)");
        // Bind values
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':produit_id', $data['produit_id']);
        $this->db->bind(':qte', $data['qte']);
        $this->db->bind(':couleur', $data['couleur']);
        $this->db->bind(':size', $data['size']);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    public function getPanierById($id){
        $this->db->query("SELECT pr.nom AS nomPrd,prix,refPrd,p.size,p.couleur,qte ,model,pr.image,c.nom,c.prenom,c.email
        FROM `panier` p
        INNER JOIN`client` c
        ON p.user_id = c.id
        INNER JOIN`produit` pr 
        ON p.produit_id = pr.refPrd 
        and c.id = :id 
        ORDER BY idPanier ");
        $this->db->bind(':id', $id);

        return $this->db->resultSet();
    }

}