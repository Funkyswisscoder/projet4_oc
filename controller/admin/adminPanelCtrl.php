<?php
    require('./model/listPostsModel.php');
    require('./model/postViewModel.php');

    ini_set('display_errors', 1);

    /* $postManager = new PostManager();
    $posts = $postManager->getOnePost($id_post); */


    $commentManager = new CommentManager();

    if($action === 'deleteCom'){
        $deleteSignaledComments = $commentManager->deleteSignaledComment($comment_id);
    }

    $getSignaledComments = $commentManager->getSignaledComments();



    require('./view/backoffice/adminPanel.php');

    