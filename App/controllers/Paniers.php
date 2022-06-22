<?php
class Paniers extends Controller {
    public function __construct()
    {
        if (!isset($_SESSION['email'])) {
            redirect('Clients/login');
        }
        $this->panierModel=$this->model('Panier');
    }
    public function index(){
        $id = $_SESSION['id'];
        $paniers = $this->panierModel->getPanierById($id);
        $data =[
            'paniers' => $paniers
        ];
        $this-> view('Products/panier',$data);
    }  
    public function addToPanier(){
        print_r($_POST);
        $id = $_SESSION['id'];
        echo $id;
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $_POST=filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            // print_r($_POST);
            $data =[
                'couleur' => trim($_POST['couleur']),
                'size'=>trim($_POST['size']),
                'qte' => trim($_POST['qte']),
                'produit_id' => trim($_POST['produit_id']),
                'user_id' => $id,
                'couleur_err' =>'',
                'size_err' =>'',
                'produit_id_err' =>''
            ];
            if(empty($data['couleur'])){
                $data['couleur_err']='S\'il vous plaît enter le couleur';
            }
            if(empty($data['size'])){
                $data['size_err']='S\'il vous plaît enter le size';
            } 
            if(empty($data['couleur_err']) && empty($data['size_err']) && empty($data['produit_id_err']) && !empty($data['user_id']) ){ 
                if($this->panierModel->addToPanier($data)){ 
                    redirect('Paniers');
                }else{
                die('something else');
                }
            }else{
                $this->view('products/produit',$data);
            }
        }
    }
}