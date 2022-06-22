<?php 
class Admins extends Controller {
    public function __construct()
    {
        $this->adminModel=$this->model('Admin');

    }
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD']== 'POST'){
            //Process form
            $_POST=filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            //init data
            $data =[
                'userName' => trim($_POST['userName']),
                'password' => trim($_POST['password']),
                'userName_err' => '',
                'password_err' => ''
            ];
            if(empty($data['userName'])){
                $data['userName_err']='S\'il vous plaît enter votre userName';
            }
            if(empty($data['password'])){
                $data['password_err']='S\'il vous plaît enter un mots de passe';
            }
            if(!($this->adminModel->findUserByUserName($data['userName']))){
                $data['userName_err'] ='Aucun utilisateur trouvé';
            }
    
            if(empty($data['userName_err']) && empty($data['password_err'])){
                $loggedInUser= $this->adminModel->login($data['userName'], $data['password']);
            if( $loggedInUser){
                $this->createUserSession($loggedInUser);
            }else{
                $data['password_err']='Mot de passe incorrect';
                $this->view('admin/index',$data);        
            }
            }
        else{
            $this->view('admin/index',$data);
        }
        }else{
            //Init data
            $data =[
                'userName' => '',
                'password' => '',
                'userName_err' => '',
                'password_err' => '',
            ];
            // Load view
            $this-> view('admin/index',$data);
        }
    }
    public function createUserSession($admin){
        $_SESSION['id'] = $admin->id;
        $_SESSION['userName'] = $admin->userName;
        $_SESSION['role'] = $admin->role;
        redirect('Produits/dashboard');
    }
    public function logout(){
            unset($_SESSION['id']);
            unset($_SESSION['userName']);
            unset($_SESSION['role']);
            session_destroy();
            redirect('admins');
    }

}