<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/adminView.css">
    <title>Document</title>
</head>
<body>
    <h2>Commentaires signalés:</h2> <br/>
    <?php

    $back = "<a href='index.php?redirectAdminView=redirectAdminView'>Retour aux articles</a>";
    echo $back;
    ?>
    <div class='centerPosts'>
        <?php
                while($datas = $getSignaledComments->fetch()){
                $pseudo = htmlspecialchars_decode(nl2br(html_entity_decode($datas['author'])));
                $comm = htmlspecialchars_decode(nl2br(html_entity_decode($datas['comment_content'])));
                $date_com = htmlspecialchars_decode(nl2br(html_entity_decode($datas['comment_date'])));
                $comment_id = htmlspecialchars_decode(nl2br(html_entity_decode($datas['id'])));
                $deleteCom = "<a href='./index.php?redirectDeleteCom=".$comment_id."'>Supprimer le commentaire signalé</a>";


                echo "<div class='eachPost'><h4>" . $pseudo . " le " . $date_com . "</h4>";
                echo "<p>" . $comm . "</p>";
                echo "<p>" . $deleteCom . "</p></div>";
            }
        ?>
    </div>
 
</body>
</html>