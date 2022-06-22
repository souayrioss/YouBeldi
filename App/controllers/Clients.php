<?php

use Google\Service\MyBusinessLodging\ViewsFromUnit;

class Clients extends Controller {
    public function __construct(){
        $this->clientModel=$this->model('Client');
    }
    public function index(){
        $data = [
            'title' => 'CLient',
            '2'=>'me'
        ];
        $this->view('client/index',$data);
    }
    public function register()
    {
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $_POST=filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            print_r($_POST);
            $data =[
                'prenom'=>trim($_POST['prenom']),
                'nom' => trim($_POST['nom']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'repeat_password' => trim($_POST['repeat_password']),
                'nom_err' =>'',
                'prenom_err' =>'',
                'email_err' => '',
                'password_err' => '',
                'repeat_password_err' => ''
            ];
            if(empty($data['email'])){
                $data['email_err']='S\'il vous plaît enter votre email';
            }else if($this->clientModel->findUserByEmail($data['email'])){
                $data['email_err'] = 'Cet email déja existe';
            }
            if(empty($data['prenom'])){
                $data['prenom_err']='S\'il vous plaît enter votre nom';
            }
            if(empty($data['nom'])){
                $data['nom_err']='S\'il vous plaît enter votre prenom';
            }
            if(empty($data['password'])){
                $data['password_err']='S\'il vous plaît enter un mots de passe';
            }
            else if(strlen($data['password'])<6)
            {
                $data['password_err']='Le mots de passe doit contenir 6 caractéres';
            }
            if($data['password'] != $data['repeat_password']){
                $data['repeat_password_err']='Le mot de passe ne correspondent pas';
            }   
            if(empty($data['email_err'])&&empty($data['prenom_err'])&& empty($data['name_err']) && empty($data['password_err']) && empty($data['repeat_password_err']) && isset($_POST['check1']) && isset($_POST['check2']) ){
                $data['password'] = password_hash($data['password'] , PASSWORD_DEFAULT);
                if($this->clientModel->register($data)){ 
                    redirect('clients/login');
                }else{
                die('something else');
                }
            }else{
                $this->view('auth/register',$data);
            }

        }else{
            $data =[
                'prenom'=> '',
                'nom' => '',
                'email' => '',
                'password' => '',
                'repeat_password' => '',
                'nom_err' =>'',
                'prenom_err' =>'',
                'email_err' => '',
                'password_err' => '',
                'repeat_password_rr' => ''
            ];
            $this->view('auth/register',$data);
        }

    }
    public function login(){
        if ($_SERVER['REQUEST_METHOD']== 'POST'){
            //Process form
            $_POST=filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            //init data
            $data =[
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => ''
            ];
            if(empty($data['email'])){
                $data['email_err']='S\'il vous plaît enter votre email';
            }
            if(empty($data['password'])){
                $data['password_err']='S\'il vous plaît enter un mots de passe';
            }
            if(!($this->clientModel->findUserByEmail($data['email']))){
                $data['email_err'] ='Aucun utilisateur trouvé';
            }
    
            if(empty($data['email_err']) && empty($data['password_err'])){
                $loggedInUser= $this->clientModel->login($data['email'], $data['password']);
            if( $loggedInUser){
                $this->createUserSession($loggedInUser);
            }else{
                $data['password_err']='Mot de passe incorrect';
                $this->view('auth/login',$data);        
            }
            }
        else{
            $this->view('auth/login',$data);
        }
        }else{
            //Init data
            $data =[
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
            ];
            // Load view
            $this-> view('auth/login',$data);
        }
    }    
    public function about(){
        $this->view('client/about');
    }
    public function sousDemande(){
        if (!isset($_SESSION['email'])) {
            redirect('Clients/login');
        }
        $this->view('client/sousDemande');

    }
    public function aide(){
        
        $this->view('client/aide');

    }
    public function createUserSession($user){
        $_SESSION['id'] = $user->id;
        $_SESSION['email'] = $user->email;
        $_SESSION['nom'] = $user->nom;
        $_SESSION['prenom'] = $user->prenom;
        // $_SESSION['role'] = $user->role;
        redirect('clients');
    }
    public function logout(){
        unset($_SESSION['id']);
        unset($_SESSION['email']);
        unset($_SESSION['nom']);
        unset($_SESSION['prenom']);
        session_destroy();
        redirect('clients/login');
    }
    public function isLoggedIn(){
        if(isset($_SESSION['id'])){
            return true ;
        }else{
            return false;
        }
    }
    public function profil(){
        $this-> view('client/profil');
        
    }
    public function produit($id){
        if($produit = $this->clientModel->getProduitById($id)){
            $data = [
                'produit'=> $produit 
            ];
            $this->view('products/produit',$data);
        }else{
            $this->view('error');
        }
        
    } 
    public function femme($categories){

        $produits = $this->clientModel->getCategorieFemme($categories);
        $data=[
            'produits' => $produits
        ];
        $this->view('products/produits',$data);
    }
    public function homme($categories){
        $data = [
            'ctg' => $categories,
        ];
        $this->view('products/produits' , $data);
    }
    public function genre($genre)
    {
        $categories=$this->clientModel->getCategorieByGenre($genre);
        $data = [
            'categories' => $categories
        ];
            $this->view('products/categorie' ,$data);
    }
}