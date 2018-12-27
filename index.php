<?php

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    //echo session_id();
    
    if (isset($_POST['action'])){
        switch($_POST['action']){
            case "./controller/listPostsCtrl.php":
                require('./controller/listPostsCtrl.php');
            break;
        default:
            require('./controller/welcomeCtrl.php');
        }
    } else {
        require('./controller/welcomeCtrl.php');
    }
    