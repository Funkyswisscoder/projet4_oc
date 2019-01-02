<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Liste des membres:</h2> <br/>
    <?php
        while($datas = mysqli_fetch_assoc($allUsers)){
            $userId = $datas['id'];
            echo "<h3>" . $datas['pseudo'] . "<h/3>";
            echo "<form action='index.php?action=deleteUser&userId=$userId' method='post'> <input type='submit' value='Supprimer l'utilisateur'> </form>";
        }
    ?>
</body>
</html>