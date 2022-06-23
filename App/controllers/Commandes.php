<?php
class Commandes extends Controller {
    public function __construct()
    {
        $this->commandeModel=$this->model('Commande');
    }  
    public function addCommande(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $_POST=filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $id = $_SESSION['id'];
            extract($_POST);
            $data =[
                'prixCmd' => trim($prixCmd),
                'refCl'=>trim($id),
                'cin' => trim($cin),
                'tel' => trim($tel),
                'adresse' => trim($adresse),
                'adresse_err' => ''
            ];
        print_r($data);
        if(empty($data['adresse'])){
            $data['adresse_err'] = 'S\'il vous plait enter une adresse';
        }
        if(empty($data['adresse_err'])){
            if($this->commandeModel->addCommande($data)){
                redirect('Clients');
            }
        }
    
    }
}
}