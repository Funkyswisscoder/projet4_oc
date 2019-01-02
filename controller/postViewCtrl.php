<?php
    require('./model/listPostsModel.php');
    require('./model/postViewModel.php');

    $postManager = new PostManager();
    $posts = $postManager->getOnePost($id_post);


    $commentManager = new CommentManager();
    $postComments = $commentManager->getComments($id_post);
    
    require('./view/frontend/postView.php');