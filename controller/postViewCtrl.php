<?php
    require('./model/listPostsModel.php');
    require('./model/postViewModel.php');

    ini_set('display_errors', 1);

    $postManager = new PostManager();
    $posts = $postManager->getOnePost($id_post);


    $commentManager = new CommentManager();
    
    if($action == 'createCom'){
        if(strlen($commentContent) > 0){
            $createComment = $commentManager->postComment($id_post, $commentTitle, $commentContent);            
        }
        else{
            echo "<h1>Comment's Content is too short</h1>";
        }
    }
    
    if($action == 'signalCom'){
        $signals = 'YES';
        $updateComment = $commentManager->updateComment($comment_id, $signals);
    } 

    $postComments = $commentManager->getComments($id_post);
    require('./view/frontend/postView.php');