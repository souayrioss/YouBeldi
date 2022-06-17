<?php
class Controller {
    public function model($model){
        require_once '../App/models/'. $model . '.php';
        return new $model();
    }
    public function view($view,$data =[]){
        if(file_exists('../App/views/'. $view .'.php')){
            require_once '../App/views/'. $view .'.php';
        }else{
            die('view not exist');
        }
    }

}