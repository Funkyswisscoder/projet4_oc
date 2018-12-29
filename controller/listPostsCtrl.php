<?php

    require_once('../model/listPostsModel.php');

    function listPosts(){
        $posts = getPosts();
    
    }
    require('../view/frontend/listPostsView.php');