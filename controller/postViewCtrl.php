<?php
    require('./model/listPostsModel.php');
    require('./model/postViewModel.php');

    $postManager = new PostManager();
    $posts = $postManager->getOnePost($id_post);


    $commentManager = new CommentManager();
    $postComments = $commentManager->getComments($id_post);

    if($action == 'createCom'){
        $createComment = $commentManager->postComment($id_post, $commentTitle, $commentContent);
    }
    
    require('./view/frontend/postView.php');