<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts' Comments</title>
</head>
<body>
    <h1>Posts' Comments</h1>

    <?php
    $id_post_comment = htmlspecialchars($id_post);

    $retour = "<a href='index.php?redirect=listPosts'>Retour aux articles</a> </p> </div>";
    echo $retour;

        while($datas = $posts->fetch()){
            $id_post= $datas['id'];
            $content = $datas['content'];
            $content_title = $datas['title'];

            $title = "<div> <h3>" . $content_title . " le " . $datas['datetime_fr'] . "</h3> </div>";
            $paragraph = "<div class='news'> <p>" . $content. "</p> </div>";
            echo $title;
            echo $paragraph;
        }
    
        while($datas = $postComments->fetch()){

            $pseudo = $datas['author'];
            $comm = $datas['comment_content'];
            $date_com = $datas['comment_date'];


            echo "<h4>" . $pseudo . " le " . $date_com . "</h4>";
            echo "<p>" . $comm . "</p>";
        }
    
    ?>
</body>
</html>