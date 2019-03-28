<?php
    ini_set('display_errors', 1);

    require('./model/userModel.php');
    require('./model/LoginSignUpModel.php');

    $pseudo = htmlspecialchars($_POST['pseudo']);
    $password = htmlspecialchars($_POST['password']);
    $passwordCheck = htmlspecialchars($_POST['passwordCheck']);



    $connectionManager = new ConnectionManager();

    $userInDB = $connectionManager->checkSignUp($pseudo);

   // $data = mysqli_fetch_array($userInDB, MYSQLI_NUM);
        if(count($userInDB) > 0) {
            echo "User Already exists<br/>";
        }else{
            if(isset($pseudo) AND isset($password) AND isset($passwordCheck)){
                if($password == $passwordCheck){
                    $addUser = new User();
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $addUser->signUp($pseudo,$password);
                    $_SESSION['connexion'] = true;
                    require('./controller/listPostsCtrl.php');
                }
            }
        }

        
