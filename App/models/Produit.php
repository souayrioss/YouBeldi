<?php
class Produit{
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }
    public function add($data){
        $this->db->query('INSERT INTO produit (nom,description, categorie, genre,model,couleur, prix, qteStock,image) VALUES(:nom,:description, :categorie, :genre ,:model,:couleur, :prix, :qteStock,:image)');
        // Bind values
        $this->db->bind(':nom', $data['nom']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':categorie', $data['categorie']);
        $this->db->bind(':genre', $data['genre']);
        $this->db->bind(':model', $data['model']);
        $this->db->bind(':couleur', $data['couleur']);
        $this->db->bind(':prix', $data['prix']);
        $this->db->bind(':qteStock', $data['qteStock']);
        $this->db->bind(':image', $data['image']);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    public function update($data){

        $this->db->query("UPDATE produit SET nom=:nom,description=:description,categorie=:categorie,genre=:genre,model=:model,prix=:prix,qteStock=:qteStock,image=:image  WHERE refPrd = :refPrd");
        // Bind values
        $this->db->bind(':refPrd', $data['refPrd']);
        $this->db->bind(':nom', $data['nom']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':categorie', $data['categorie']);
        $this->db->bind(':genre', $data['genre']);
        $this->db->bind(':model', $data['model']);
        $this->db->bind(':prix', $data['prix']);
        $this->db->bind(':qteStock', $data['qteStock']);
        $this->db->bind(':image', $data['image']);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    public function getProduitsByid($id){
        $this->db->query('SELECT * FROM produit WHERE refPrd = :id ');
        // Bind values
        $this->db->bind(':id', $id);
        // Execute
        return $this->db->single();
    }
    public function getCategorieByGenre($genre){
        $this->db->query('SELECT * FROM categorie c,genre g WHERE c.genre_id = g.id and g.genre = :genre GROUP by c.idCategorie');
        // Bind values
        $this->db->bind(':genre', $genre);
        // Execute
        return $this->db->resultSet();
    }
    public function deletePrd($id){
        $this->db->query("DELETE FROM produit  WHERE refPrd = :refPrd");
        // Bind values
        $this->db->bind(':refPrd', $id);
        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
}