<?php
    $con=mysqli_connect("localhost","root","root","OC_writerblog");

    if($con) {
        $allUsers = mysqli_query($con, "SELECT pseudo FROM Users where id != '1'");
        require('../view/backoffice/adminPanel.php');
    }