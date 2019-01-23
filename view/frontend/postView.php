<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/postView.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <title>Posts' Comments</title>
</head>
<body>
    <section class='centerPosts'>
        <h1>Posts' Comments</h1>

        <?php
        $id_post_comment = htmlspecialchars($id_post);

        $retour = "<div><a id='backLink' href='index.php?redirect=listPosts'>Retour aux articles</a></div>";

        $addComment = "<div><a id='addComment' href='index.php?userComForm=userComForm&id_post=". $id_post ."' id='addComment'>Ajouter un commentaire</a></div>";
        echo $retour;


            while($datas = $posts->fetch()){
                $id_post= htmlspecialchars_decode(nl2br(html_entity_decode($datas['id'])));
                $content = htmlspecialchars_decode(nl2br(html_entity_decode($datas['content'])));
                $content_title = htmlspecialchars_decode(nl2br(html_entity_decode($datas['title'])));

                $title = "<div class='newsComment'> <h2>" . $content_title . " le " . $datas['datetime_fr'] . "</h2> ";
                $paragraph = "<p>" . $content. "</p> </div>";
                echo $title;
                echo $paragraph;
            }
        
            while($datas = $postComments->fetch()){

                $pseudo = htmlspecialchars_decode(nl2br(html_entity_decode($datas['author'])));
                $comm = htmlspecialchars_decode(nl2br(html_entity_decode($datas['comment_content'])));
                $date_com = htmlspecialchars_decode(nl2br(html_entity_decode($datas['comment_date'])));
                $comment_id = htmlspecialchars_decode(nl2br(html_entity_decode($datas['id'])));

            
                echo "<div class='commentUser'><h4>" . $pseudo . " le " . $date_com . "</h4>";
                echo "<p>" . $comm . "</p></div>";
                echo "<a class='signalBtn' href='index.php?signalComment=signalComment&comment_id=". $comment_id ."&id_post=". $id_post ."' class='signalComment'>Signaler ce commentaire</a>";
            
            }
            
        echo $addComment;
        ?>
    </section>
</body>
</html>