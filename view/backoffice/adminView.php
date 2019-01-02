<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AdminView</title>
</head>
<body>
    <h1>Admin View</h1>
    <?php
        while($datas = $posts->fetch()){
            $id_post= $datas['id'];
            $content = $datas['content'];
            $content_title = $datas['title'];

            $title = "<div> <h3>" . $content_title . " le " . $datas['datetime_fr'] . "</h3> </div>";
            $paragraph = "<div class='news'> <p>" . $content. "<br> <a href='index.php?redirect=".$id_post."'>Commentaires</a> </p> </div>";
            $supprimer = "<a href='./index.php?redirectDelete=".$id_post."'>Supprimer</a>";
            
            echo $title;
            echo $paragraph;
            echo $supprimer;
        }
    ?>
</body>
</html>