<?php
class Core {
    protected $currentController = "clients" ;
    protected $currentMethod = "index";
    protected $params = [];

    public function __construct(){
        $url = $this->getUrl();
        if(isset($url[0])){
            if(file_exists('../App/controllers/'.$url[0].'.php')){
                $this->currentController = ucwords($url[0]); 
                $this->currentController ;
                unset($url[0]);
                require_once '../App/controllers/' . $this->currentController  . '.php';
                $this->currentController = new $this->currentController ;
                if(isset($url[1])){
                    if(method_exists($this->currentController,$url[1])){
                        $this->currentMethod  = $url[1];
                        unset($url[1]);
                        $this->params = $url ? array_values($url) : [];
                        call_user_func_array([$this->currentController,$this->currentMethod],$this->params);
                    }else{
                        require_once '../App/views/error.php';
                    }
                }else{
                    call_user_func_array([$this->currentController,'index'],$this->params);
                }
            }else{
                require_once '../App/views/error.php';
            }
        }else{
            require_once '../App/controllers/' . $this->currentController  . '.php';
            $this->currentController = new $this->currentController ;
            call_user_func_array([$this->currentController,$this->currentMethod],$this->params);
        }
        
    }
    public function getUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}