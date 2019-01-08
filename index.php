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

    $action = false;

    if(isset($_GET['redirect']) AND htmlspecialchars($_GET['redirect'])){
        switch($_GET['redirect']){
            case "loginCtrl";
                require('controller/loginCtrl.php');
            break;
            case "signUpCtrl";
                require('controller/signUpCtrl.php');
            break;
            case "listPosts";
                require('controller/listPostsCtrl.php');
            break;
            case "$id_post";
                require('controller/postViewCtrl.php');
            break;
            case "updatePost";
                require('controller/admin/adminUpdatePost.php');
            break;
            default:
                require('controller/welcomeCtrl.php');
        }
    }else if(isset($_GET['redirectAdmin']) AND htmlspecialchars($_GET['redirectAdmin'])){
        $id_post = htmlspecialchars($_GET['redirectAdmin']);
        require('controller/admin/adminPostViewCtrl.php');
    }else if(isset($_GET['redirectAdminView']) AND htmlspecialchars($_GET['redirectAdminView'])){
        require('controller/admin/adminViewCtrl.php');
    }else if(isset($_GET['redirectDelete']) AND htmlspecialchars($_GET['redirectDelete'])){
        $id_post = $_GET['redirectDelete'];
        $action = 'delete';
        require('controller/admin/adminViewCtrl.php');
    }else if(isset($_GET['redirectUpdate']) AND htmlspecialchars($_GET['redirectUpdate'])){
        $action = 'update';
        $id_post = htmlspecialchars($_GET['redirectUpdate']);
        $updateTitle= htmlspecialchars($_GET['updateTitle']);
        $updateContent = htmlspecialchars($_GET['updateContent']);
        require('controller/admin/adminViewCtrl.php');
    }else if(isset($_GET['executeUpdate']) AND htmlspecialchars($_GET['executeUpdate'])){
        $action = 'executeUpdate';
        $id_post = htmlspecialchars($_GET['id_post']);
        $updateTitle= htmlspecialchars($_POST['titleUpdated']);
        $updateContent = htmlspecialchars($_POST['contentUpdated']);
        require('controller/admin/adminViewCtrl.php');
    }else if(isset($_GET['redirectCreate']) AND htmlspecialchars($_GET['redirectCreate'])){
        $action = 'create';
        require('./view/backoffice/adminCreateForm.php');
    }else if(isset($_GET['executeCreate']) AND htmlspecialchars($_GET['executeCreate'])){
        $action = 'executeCreate';
        $createdTitle = htmlspecialchars($_POST['createTitle']);
        $createdContent = htmlspecialchars($_POST['createContent']);
        require('controller/admin/adminViewCtrl.php');
    }else if(isset($_GET['userComForm']) AND htmlspecialchars($_GET['userComForm'])){
        $id_post = htmlspecialchars($_GET['id_post']);
        require('view/frontend/userComForm.php');
    }else if(isset($_GET['executeCreateCom']) AND htmlspecialchars($_GET['executeCreateCom'])){
        $action = 'createCom';
        $id_post = htmlspecialchars($_GET['id_post']);
        $pseudo = htmlspecialchars($_SESSION['pseudo']);
        $commentTitle = htmlspecialchars($_POST['titleCom']);
        $commentContent = htmlspecialchars($_POST['commentContent']);
        require('controller/postViewCtrl.php');
    }
    else{
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