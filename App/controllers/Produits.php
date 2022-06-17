<?php 
class Produits extends Controller {
    public function __construct()
    {
        $this->produitModel=$this->model('Produit');
    }
    public function index()
    {
        echo 'index produit';
    }
    public function genre($genre)
    {
        $categories=$this->produitModel->getCategorieByGenre($genre);
        $data = [
            'categories' => $categories
        ];
            $this->view('products/categorie' ,$data);
    }
    
    public function add(){ 
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $_POST=filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            // print_r($_POST);
            $data =[
                'nom' => trim($_POST['nom']),
                'categorie'=>trim($_POST['categorie']),
                'genre' => trim($_POST['genre']),
                'model' => trim($_POST['model']),
                'couleur' => json_encode($_POST['couleur']),
                'prix' => trim($_POST['prix']),
                'image' => json_encode($_FILES['image']['name']),
                'qteStock' => trim($_POST['qteStock']),
                'description' => trim($_POST['description']),
                'nom_err' =>'',
                'categorie_err' =>'',
                'genre_err' => '',
                'model_err' => '',
                'prix_err' => '',
                'image_err' => '',
                'qteStock_err' => '',
                'description_err' => ''
            ];
            if(empty($data['genre'])){
                $data['genre_err']='S\'il vous plaît enter le genre';
            }
            if(empty($data['nom'])){
                $data['nom_err']='S\'il vous plaît enter le nom';
            }
            if(empty($data['categorie'])){
                $data['categorie_err']='S\'il vous plaît enter la categorie';
            }
            if(empty($data['model'])){
                $data['model_err']='S\'il vous plaît enter model de produit';
            }
            if(empty($data['prix'])){
                $data['prix_err']='S\'il vous plaît enter une prix';
            }
            if(empty($data['image'])){
                $data['image_err']='S\'il vous plaît enter au moins une photo';
            }
            if(empty($data['qteStock'])){
                $data['qteStock_err']='S\'il vous plaît enter la qteStock';
            }
            if(empty($data['description'])){
                $data['description_err']='S\'il vous plaît enter une description';
            }
            if(empty($data['genre_err']) && empty($data['nom_err']) && empty($data['categorie_err']) && empty($data['model_err']) && empty($data['prix_err']) && empty($data['qteStock_err']) && empty($data['description_err']) ){
                if($this->produitModel->add($data)){ 
                    $length = count($_FILES['image']['tmp_name']);
                    for($i=0 ; $i<$length; $i++ ){
                    $imgName = $_FILES['image']['name'][$i];
                    move_uploaded_file($_FILES['image']['tmp_name'][$i], "./img/$imgName");
                    }
                    redirect('Admins/produits');
                }else{
                die('something else');
                }
                
                echo $length;
                print_r($_FILES['image']['tmp_name']);
            }else{
                $this->view('products/add',$data);
            }

        }else{
            $data =[
                'categorie'=> '',
                'nom' => '',
                'genre' => '',
                'model' => '',
                'prix' => '',
                'qteStock' => '',
                'description' => '',
                'nom_err' =>'',
                'categorie_err' =>'',
                'genre_err' => '',
                'model_err' => '',
                'prix_err' => '',
                'qteStock_err' => '',
                'description_err' => '',
            ];
            $this->view('products/add',$data);
        }
    }
    public function edit(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $_POST=filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            // print_r($_POST);
            if(isset($_POST['show'])){
                $id=$_POST['id'];
                $produit = $this->produitModel->getProduitsByid($id);
                $data=[
                    'produit'=> $produit
                ];
                $this->view('products/edit',$data);
            }
            if(isset($_POST['edit'])){
                $data =[
                    'refPrd' => trim($_POST['refPrd']) ,
                    'nom' => trim($_POST['nom']),
                    'categorie'=>trim($_POST['categorie']),
                    'genre' => trim($_POST['genre']),
                    'model' => trim($_POST['model']),
                    'prix' => trim($_POST['prix']),
                    'image' => json_encode($_FILES['image']['name']),
                    'qteStock' => trim($_POST['qteStock']),
                    'description' => trim($_POST['description']),
                    'nom_err' =>'',
                    'categorie_err' =>'',
                    'genre_err' => '',
                    'model_err' => '',
                    'prix_err' => '',
                    'image_err' => '',
                    'qteStock_err' => '',
                    'description_err' => ''
                ];
                if(empty($data['genre'])){
                    $data['genre_err']='S\'il vous plaît enter le genre';
                }
                if(empty($data['nom'])){
                    $data['nom_err']='S\'il vous plaît enter le nom';
                }
                if(empty($data['categorie'])){
                    $data['categorie_err']='S\'il vous plaît enter la categorie';
                }
                if(empty($data['model'])){
                    $data['model_err']='S\'il vous plaît enter model de produit';
                }
                if(empty($data['prix'])){
                    $data['prix_err']='S\'il vous plaît enter une prix';
                }
                if(empty($data['image'])){
                    $data['image_err']='S\'il vous plaît enter au moins une photo';
                }
                if(empty($data['qteStock'])){
                    $data['qteStock_err']='S\'il vous plaît enter la qteStock';
                }
                if(empty($data['description'])){
                    $data['description_err']='S\'il vous plaît enter une description';
                }
                if(empty($data['genre_err']) && empty($data['nom_err']) && empty($data['categorie_err']) && empty($data['model_err']) && empty($data['prix_err']) && empty($data['qteStock_err']) && empty($data['description_err']) ){
                    if($this->produitModel->update($data)){ 
                        $length = count($_FILES['image']['tmp_name']);
                        for($i=0 ; $i<$length; $i++ ){
                        $imgName = $_FILES['image']['name'][$i];
                        move_uploaded_file($_FILES['image']['tmp_name'][$i], "./img/$imgName");
                        }
                        redirect('Admins/produits');
                    }else{
                    die('something else');
                    }
                }else{
                    $this->view('products/add',$data);
                }
            }
        }else{
        $data =[
            'categorie'=> '',
            'nom' => '',
            'genre' => '',
            'model' => '',
            'prix' => '',
            'qteStock' => '',
            'description' => '',
            'nom_err' =>'',
            'categorie_err' =>'',
            'genre_err' => '',
            'model_err' => '',
            'prix_err' => '',
            'qteStock_err' => '',
            'description_err' => '',
        ];
        $this->view('products/edit',$data);
        }
    }
    public function delete($id){
        if($this->produitModel->deletePrd($id)){
            redirect('Admins/produits');
        }

    }
}