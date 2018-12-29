<?php

    require('../model/userModel.php');

    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $passwordCheck = htmlspecialchars($_POST['passwordCheck']);

    $con=mysqli_connect("localhost","root","root","OC_writerblog");
    $check="SELECT * FROM Users WHERE pseudo = '$pseudo'";
    $res = mysqli_query($con,$check);
    $data = mysqli_fetch_array($res, MYSQLI_NUM);

    if($data[0] > 1) {
        echo "User Already in Exists<br/>";
    }else{
        if(isset($pseudo) AND isset($password) AND isset($passwordCheck)){
            if($password == $passwordCheck){
                $addUser = new User();
                $password = password_hash($password, PASSWORD_DEFAULT);
                $addUser->signUp($pseudo,$email,$password);
                require('../controller/listPostsCtrl.php');
            }
        }
    }

        
