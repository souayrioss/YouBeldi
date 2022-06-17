<?php
    //load condig
    require_once 'config/config.php';
    require_once 'helpers/url_helper.php';
    require_once 'helpers/session_helper.php';
    //load Librairies
    // require_once 'lib/Core.php';
    // require_once 'lib/Controller.php';
    // require_once 'lib/Database.php';
    // Autoload COre Lib
    spl_autoload_register(function($className){
        require_once 'lib/'.$className.'.php';
    });