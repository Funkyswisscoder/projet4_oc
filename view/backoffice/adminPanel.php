<?= require('../../controller/adminPanelCtrl.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        while($datas = mysqli_fetch_assoc($allUsers)){
            echo "<h3>" . $datas['pseudo'] . "<h/3>";
        }
    ?>
</body>
</html>