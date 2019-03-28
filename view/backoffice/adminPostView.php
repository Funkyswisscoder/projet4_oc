<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/adminPostView.css">
    <title>Admin Post Comments</title>
</head>
<body>
    <h1>Admin Post Comments</h1>

    <?php
    $id_post_comment = htmlspecialchars($id_post);

    $back= "<a href='index.php?redirectAdminView=redirectAdminView''>Retour aux articles</a> </p> </div>";
    echo $back;

        while($datas = $posts->fetch()){
            $id_post= htmlspecialchars_decode(nl2br(html_entity_decode($datas['id'])));
            $content = htmlspecialchars_decode(nl2br(html_entity_decode($datas['content'])));
            $content_title = htmlspecialchars_decode(nl2br(html_entity_decode($datas['title'])));

            $title = "<div class='news'> <h3>" . $content_title . " le " . $datas['datetime_fr'] . "</h3>";
            $paragraph = " <p>" . $content. "</p> </div>";
            echo $title;
            echo $paragraph;
        }
    
        while($datas = $postComments->fetch()){

            $pseudo = $datas['author'];
            $comm = $datas['comment_content'];
            $date_com = $datas['comment_date'];
            $createCom = "<a href='./index.php?redirect=createCom'>Créer un commentaire</a>";


            echo "<div class='commentAdmin'><h4>" . $pseudo . " le " . $date_com . "</h4>";
            echo "<p>" . $comm . "</p></div>";
        }
    
    ?>
</body>
</html>