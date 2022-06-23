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
            redirect('Clients');
        }
    }
    public function getDemandes(){
        $Demandes = $this->demandeModel->getDemandes();
        $data = [
            'demandes' => $Demandes,
        ];
        $this->view('admin/demande',$data);
    }
}