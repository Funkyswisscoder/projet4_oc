<?php

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }else{
        require('view/frontend/listPostsView.php');
    }

    if(isset($_GET['redirect'])){
        $id_post = -1;
        $id_post = htmlspecialchars($_GET['redirect']);   
    }



    if(isset($_GET['redirect']) AND htmlspecialchars($_GET['redirect'])){
        switch($_GET['redirect']){
            case "loginCtrl";
                require('controller/loginCtrl.php');
            break;
            case "signUpCtrl";
                require('controller/signUpCtrl.php');
            break;
            case "adminView";
                require('admin/adminViewCtrl.php');
            break;
            case "listPosts";
                require('controller/listPostsCtrl.php');
            break;
            case "$id_post";
                require('controller/postViewCtrl.php');
            break;
            default:
                require('controller/welcomeCtrl.php');
        }
    }else if(isset($_GET['redirectDelete']) AND htmlspecialchars($_GET['redirectDelete'])){
        $id_post = $_GET['redirectDelete'];
        require('controller/admin/adminDeletePost.php');
    }else{
        require('controller/welcomeCtrl.php');
    }

/*
    if(isset($_GET['redirect'])){
        if($_GET['redirect'] == 'loginCtrl'){
            require('controller/loginCtrl.php');
        }else if($_GET['redirect'] == 'signUpCtrl'){
            require('controller/signUpCtrl.php');
        }else if($_GET['redirect'] == 'adminView'){
            require('admin/adminViewCtrl.php');
        }else if($_GET['redirect'] == 'listPosts'){
            require('controller/listPostsCtrl.php');
        }else if($_GET['redirect'] == $id_post){
            require('controller/postViewCtrl.php');
        }
    }else{
        require('controller/welcomeCtrl.php');
    }
    */