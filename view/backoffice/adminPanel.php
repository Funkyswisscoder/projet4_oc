<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Commentaires signalés:</h2> <br/>
    <?php

    $back = "<a href='index.php?redirectAdminView=redirectAdminView'>Retour aux articles</a>";
    echo $back;
    
        while($datas = $getSignaledComments->fetch()){
            $pseudo = $datas['author'];
            $comm = $datas['comment_content'];
            $date_com = $datas['comment_date'];
            $comment_id = $datas['id'];
            $deleteCom = "<a href='./index.php?redirectDeleteCom=".$comment_id."'>Supprimer le commentaire signalé</a>";


            echo "<h4>" . $pseudo . " le " . $date_com . "</h4>";
            echo "<p>" . $comm . "</p>";
            echo "<p>" . $deleteCom . "</p>";
        }
    ?>
</body>
</html>