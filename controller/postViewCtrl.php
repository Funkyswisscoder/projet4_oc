<?php
    require('./model/listPostsModel.php');
    require('./model/postViewModel.php');

    ini_set('display_errors', 1);

    $postManager = new PostManager();
    $posts = $postManager->getOnePost($id_post);


    $commentManager = new CommentManager();
    
    if($action == 'createCom'){
        $createComment = $commentManager->postComment($id_post, $commentTitle, $commentContent);
    }
    
    if($action == 'signalCom'){
        $signals = 'YES';
        $updateComment = $commentManager->updateComment($comment_id, $signals);
        var_dump($updateComment);
    } 

    $postComments = $commentManager->getComments($id_post);
    require('./view/frontend/postView.php');