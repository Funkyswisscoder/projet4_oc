<?php

    require('model/listPostsModel.php');
    require('model/postViewModel.php');

    $postManager = new PostManager();
    $commentManager = new CommentManager();



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
        $action = false;
        header('location:index.php?redirectAdminView=redirectAdminView');
    }
    $posts = $postManager->getPosts();

    require('./view/backoffice/adminView.php');

    