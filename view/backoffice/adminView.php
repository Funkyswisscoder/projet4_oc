<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/adminView.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <title>AdminView</title>
</head>
<body>
    <h1>Admin View</h1>
    <?php

        $create = "<a href='./index.php?redirectCreate=redirectCreate'>Créer un nouvel article</a>";
        $warnings = "<a href='./index.php?redirectWarnings=redirectWarnings'>Voir les commentaires signalés!</a>";
        $deco = "<a href='./index.php?closeSession=closeSession'>Déconnexion</a>";
        echo "<div class='deco'>" .$deco."</div>";
        echo "<div class='newPost'>" .$create. "</div><div class='warningPosts'>" .$warnings. "</div>";
    
    ?>
    
    <div class='centerPosts'>
        <?php
            while($datas = $posts->fetch()){
                $id_post= htmlspecialchars($datas['id']);
                $content = htmlspecialchars($datas['content']);
                $content_title = htmlspecialchars($datas['title']);

                $title = "<h3>" . $content_title . " le " . $datas['datetime_fr'] . "</h3>";
                $paragraph = "<p>" . $content. "<br> <a href='index.php?redirectAdmin=".$id_post."'>Commentaires</a></p>";
                $delete= "<a class='deletePost' href='./index.php?redirectDelete=".$id_post."'>Supprimer</a>";
                $update = "<a class='updatePost' href='./index.php?redirectUpdate=".$id_post."&updateContent=".$content."&updateTitle=".$content_title."'>Modifier</a>";
                



                echo "<div class='eachPost'>".$title.$paragraph."</div>";
                echo $delete . " ou " . $update;

            }
        ?>
    </div>
</body>
</html>