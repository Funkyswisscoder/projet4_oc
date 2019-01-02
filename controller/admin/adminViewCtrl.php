<?php
    require('./model/listPostsModel.php');

    $postManager = new PostManager();
    $posts = $postManager->getPosts();

    require('./view/backoffice/adminView.php');

    