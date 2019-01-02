<?php
    require('./model/listPostsModel.php');

    $postManager = new PostManager();
    $deleteOnePost = $postManager->deleteOnePost($id_post);

    require('./view/backoffice/adminView.php');