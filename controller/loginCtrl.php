<?php
    ini_set('display_errors', 1);
    require('./model/LoginSignUpModel.php');


    $pseudo = htmlspecialchars($_POST['pseudo']);
    $userPwd = htmlspecialchars($_POST['userPwd']);


    $_SESSION['pseudo'] = $pseudo;


    $connectionManager = new ConnectionManager();

    $password_in_db_hashed = $connectionManager->checkLogin($pseudo);
  
    while($datas = $password_in_db_hashed->fetch()){
        if($pseudo == 'admin'){
            if(password_verify($userPwd,$datas['password'])){
                $_SESSION['connexion'] = true;
                require('./controller/admin/adminViewCtrl.php'); 
            }else{
                echo "<h1>You aren't my admin! </h1>";
            }
        }else{
            if(password_verify($userPwd,$datas['password'])){
                $_SESSION['connexion'] = true;
                require('./controller/listPostsCtrl.php');
            } else{
                echo "<h1> Wrong Username or Password</h1>";
            }
        }
    }


