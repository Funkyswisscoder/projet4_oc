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
            $delete= "<a href='./index.php?redirectDelete=".$id_post."'>Supprimer</a>";
            $update = "<a href='./index.php?redirectUpdate=".$id_post."&updateContent=".$content."&updateTitle=".$content_title."'>Modifier</a>";
            $create = "<a href='./index.php?redirectCreate=redirectCreate'>Créer un nouvel article</a>";



            echo $title;
            echo $paragraph;
            echo $delete . " ou " . $update . " ou encore " . $create;

        }
    ?>
</body>
</html>