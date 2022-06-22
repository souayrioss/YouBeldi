<?php
class Demandes extends Controller {
    public function __construct()
    {
        $this->demandeModel=$this->model('Demande');
    }  
    public function addDemande(){
        $id = $_SESSION['id'];
        $demande=$_POST['getResult'];
        if($this->demandeModel->addDemande($id,$demande)){
            echo 'yeeeees';
        }
        // print_r($_POST);
        // $result = json_decode($_POST['getResult']);
        // print_r($result);
    }
}