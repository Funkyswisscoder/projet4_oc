<?php
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $userPwd = htmlspecialchars($_POST['userPwd']);
    $con=mysqli_connect("localhost","root","root","OC_writerblog");


    if($con) {
        $password_in_db_hashed = mysqli_query($con, "SELECT password FROM Users where pseudo = '$pseudo'");
        while($datas = mysqli_fetch_assoc($password_in_db_hashed)){
            if($pseudo == 'admin'){
                if(password_verify($userPwd,$datas['password'])){
                    require('./adminViewCtrl.php'); 
                }else{
                    echo "<h1>You aren't my admin! </h1>";
                }
            }else{
                if(password_verify($userPwd,$datas['password'])){
                    require('./listPostsCtrl.php');
                } else{
                    echo "<h1> Wrong Username or Password</h1>";
                }
            }
        }
    }

