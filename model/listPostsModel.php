<?php

    class PostManager{

        public function createPost($postTitle, $postContent){
            $db = $this->dbConnect();
            $req = $db->prepare('INSERT INTO Posts(title, content, creation_date) VALUES(:title, :content, NOW())');
            $req->execute(array(
                'title'     => $postTitle,
                'content'   => $postContent
            ));
        }

        public function getPosts(){
            $db = $this->dbConnect();
            $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y \') AS datetime_fr FROM Posts ORDER BY id DESC ');
            $req->execute();
            return $req;
        }

        public function getOnePost($id_post){
            $db = $this->dbConnect();
            $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS datetime_fr FROM Posts WHERE id = ? ORDER BY id');
            $req->execute(array($id_post));
            return $req;
        }

        public function deleteOnePost($id_post){
            $comManager = new CommentManager();
            $comManager->deleteCommentsForPost($id_post);
            $db = $this->dbConnect();
            $req = $db->prepare('DELETE FROM Posts WHERE id=?');
            $req->execute(array($id_post));

        }

        public function updateOnePost($id_post,$postTitle,$postContent){
            $db = $this->dbConnect();
            $req = $db->prepare('UPDATE Posts SET title = :title, content = :content WHERE id = :id' );
            $req->execute(array(
                'title'     => $postTitle,
                'content'   => $postContent,
                'id'        => $id_post
            ));
        }

        private function dbConnect(){
            $db = new PDO('mysql:host=localhost;dbname=OC_writerblog;charset=utf8', 'root', 'root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $db;
        }
    }

