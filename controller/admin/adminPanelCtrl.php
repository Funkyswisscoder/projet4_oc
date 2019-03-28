<?php
    require('./model/listPostsModel.php');
    require('./model/postViewModel.php');

    ini_set('display_errors', 1);



    $commentManager = new CommentManager();

    if($action === 'deleteCom'){
        $deleteSignaledComments = $commentManager->deleteComment($comment_id);
    }

    $getSignaledComments = $commentManager->getSignaledComments();



    require('./view/backoffice/adminPanel.php');

    