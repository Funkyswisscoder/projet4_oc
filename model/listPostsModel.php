<?php
    class PostManager{

        public function createPost($postTitle, $postContent){
            $db = $this->dbConnect();
            $req = $db->prepare('INSERT INTO Posts(title, content) VALUES(:title, :content)');
            $req->execute(array(
                'title'     => $postTitle,
                'content'   => $postContent
            ));
        }

        public function getPosts(){
            $db = $this->dbConnect();
            $posts = $db->prepare('SELECT * FROM Posts ORDER BY id DESC ');
            
            return $posts;
        }

        private function dbConnect(){
            $db = new PDO('mysql:host=localhost;dbname=OC_writerblog;charset=utf8', 'root', 'root');
            return $db;
        }
    }