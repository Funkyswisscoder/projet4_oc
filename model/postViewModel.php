<?php

    class CommentManager{

        public function getComments($id_post){
            $db = $this->dbConnect();
            $comments = $db->prepare('SELECT id, author, comment_content, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date FROM Posts_Comments WHERE id = ? ORDER BY comment_date DESC');
            $comments->execute(array($id_post));
    
            return $comments;
        }

        public function postComment($id_post, $author, $comment_comment){
            $db = $this->dbConnect();
            $comments = $db->prepare('INSERT INTO Posts_Comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
            $commentPosted = $comments->execute(array($id_post, $author, $comment));
    
            return $commentPosted;
        }




        private function dbConnect(){
            $db = new PDO('mysql:host=localhost;dbname=OC_writerblog;charset=utf8', 'root', 'root');
            return $db;
        }
    }