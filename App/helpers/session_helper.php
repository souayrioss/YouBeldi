<?php
    //
    session_start();

    //Flash message helper
    //EXAMPLE - flash('register_success', 'You are now registered');
    //DISPLAY IN VIEW -  echo flash('register_success' );
    function flash($nom = '', $message = '', $class = 'alert alert-success'){
        if(!empty($nom)){
            if(!empty($message) && empty($_SESSION[$nom])){

                if(!empty($_SESSION[$nom])){
                    unset($_SESSION[$nom]);
                }

                if(!empty($_SESSION[$nom . '_class'])){
                    unset($_SESSION[$nom. '_class']);
                }

                $_SESSION[$nom] = $message;
                $_SESSION[$nom. '_class'] = $class;
            }elseif(empty($message) && !empty($_SESSION[$nom])){
                $class = !empty($_SESSION[$nom . '_class']) ? $_SESSION[$nom . '_class'] : '';
                echo '<div class="' . $class . '" id="msg-flash">' . $_SESSION[$nom] . '</div>';
                unset($_SESSION[$nom]);
                unset($_SESSION[$nom. '_class']);
            }
        }
    }

    function isLoggedIn(){
        if(isset($_SESSION['user_id'])){
            return true;
        }else{
            return false;
        }
    }
