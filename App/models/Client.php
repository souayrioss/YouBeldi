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
    public function getProduitById($id){
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
    public function getCategorieFemme($ctg)
    {
            $this->db->query('SELECT p.nom,p.image,p.prix,p.refPrd FROM produit p ,categorie c WHERE p.categorie = c.idCategorie and c.nomCtg = :ctg and p.genre = :genre ');
            // Bind values
            $this->db->bind(':genre', 'femme');
            $this->db->bind(':ctg', $ctg);
            // Execute
            return $this->db->resultSet();
    }
    public function getCategorieHomme($ctg)
    {
            $this->db->query('SELECT p.nom,p.image,p.prix,p.refPrd FROM produit p ,categorie c WHERE p.categorie = c.idCategorie and c.nomCtg = :ctg and p.genre = :genre ');
            // Bind values
            $this->db->bind(':genre', 'homme');
            $this->db->bind(':ctg', $ctg);
            // Execute
            return $this->db->resultSet();
    }
    public function getNPrdFemme(){
        $this->db->query('SELECT * FROM `produit` WHERE `genre` = :genre ORDER by `created_at` DESC LIMIT 7');
        // Execute
        $this->db->bind(':genre', 'femme');
        return $this->db->resultSet();
    }
    public function getNPrdHomme(){
        $this->db->query('SELECT * FROM `produit` WHERE `genre` = :genre ORDER by `created_at` DESC LIMIT 7');
        // Execute
        $this->db->bind(':genre', 'homme');
        return $this->db->resultSet();

    }
}