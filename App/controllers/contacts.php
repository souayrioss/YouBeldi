<?php
class Contacts extends Controller {
    public function __construct()
    {
        $this->contactModel=$this->model('Contact');
    }  
    public function addContact(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $_POST=filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data =[
                'prenom'=>trim($_POST['prenom']),
                'nom' => trim($_POST['nom']),
                'email' => trim($_POST['email']),
                'objet' => trim($_POST['objet']),
                'message' => trim($_POST['message']),
                'nom_err' =>'',
                'prenom_err' =>'',
                'email_err' => '',
                'objet_err' => '',
                'message_err' => ''
            ];
            if(empty($data['email'])){
                $data['email_err']='S\'il vous plaît enter votre email';
            }
            if(empty($data['prenom'])){
                $data['prenom_err']='S\'il vous plaît enter votre prenom';
            }
            if(empty($data['nom'])){
                $data['nom_err']='S\'il vous plaît enter votre nom';
            }
            if(empty($data['objet'])){
                $data['objet_err']='S\'il vous plaît enter une objet';
            }
            if(empty($data['message'])){
                $data['message_err']='S\'il vous plaît enter une message';
            }   
            if(empty($data['email_err'])&&empty($data['prenom_err'])&& empty($data['nom_err']) && empty($data['objet_err']) && empty($data['message_err']) ){
                if($this->contactModel->addContact($data)){ 
                    redirect('clients/aide');
                }else{
                die('something else');
                }
                // print_r($data);
            }else{
                $this->view('client/aide',$data);
            }

        }else{
            $data =[
                'prenom'=> '',
                'nom' => '',
                'email' => '',
                'objet' => '',
                'message' => '',
                'nom_err' =>'',
                'prenom_err' =>'',
                'email_err' => '',
                'objet_err' => '',
                'message_rr' => ''
            ];
            $this->view('client/aide',$data);
        }   
    }
    public function getContacts(){
        $contacts = $this->contactModel->getContacts();
        $data = [
            'contacts' => $contacts,
        ];
        $this->view('admin/dashboard',$data);
    }
}