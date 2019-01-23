<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/listPost.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <title>Posts' List</title>
</head>
<body>
    <header>
        <h2>Jean Forteroche</h2>
        <nav>
            <ul>
                <li><a href='./index.php?redirect=listPosts'>Accueil</a></li>
                <li><a href='./index.php?closeSession=closeSession'>Déconnexion</a></li>
            </ul>
        </nav>
    </header>
    <h1>Bienvenue dans mon blog en ligne!</h1>
    <section class='flexContent'>
        <div class='imgContainer'>
            <img src="./public/images/alaska_oc_4.jpg" alt="View from Alaska's roadtrip">
            <div><h3>Un voyage en Alaska</h3></div>
        </div>
        <div class='centerPosts'>

            <h3>Liste des chapitres:</h3>

            <?php
                while($datas = $posts->fetch()){
                    $id_post= htmlspecialchars_decode(nl2br(html_entity_decode($datas['id'])));
                    $content = htmlspecialchars_decode(nl2br(html_entity_decode($datas['content'])));
                    $content_title = htmlspecialchars_decode(nl2br(html_entity_decode($datas['title'])));
        
                    $title = "<h3>" . $content_title . " le " . $datas['datetime_fr'] . "</h3>";
                    $paragraph = "<p>" . $content. "<br> <a href='index.php?redirect=".$id_post."'>Lire le chapitre</a> </p>";
                    
                    echo "<div class='news'>". $title . $paragraph . "</div>";
                }
            ?>
        </div>
    </section>

</body>
</html>