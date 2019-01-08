<?php

    require('model/listPostsModel.php');
    $postManager = new PostManager();



    if($action === 'delete'){
        $deleteOnePost = $postManager->deleteOnePost($id_post);
    }

    if($action === 'update'){
        require('./view/backoffice/adminUpdateForm.php');
    }

    if($action === 'executeUpdate'){
        $updateOnePost = $postManager->updateOnePost($id_post, $updateTitle, $updateContent);
    }
    if($action === 'create'){
        require('./view/backoffice/adminCreateForm.php');
    }
    if($action === 'executeCreate'){
        $createPost = $postManager->createPost($createdTitle, $createdContent);
    }
    $posts = $postManager->getPosts();

    require('./view/backoffice/adminView.php');

    