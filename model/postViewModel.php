<?php

    class CommentManager{

        public function getComments($postId){
            $db = $this->dbConnect();
            $comments = $db->prepare('SELECT id, author, comment_content, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM Posts_Comments WHERE post_id = ? ORDER BY comment_date DESC');
            $comments->execute(array($postId));
    
            return $comments;
        }

        public function postComment($postId, $author, $comment_comment){
            $db = $this->dbConnect();
            $comments = $db->prepare('INSERT INTO Posts_Comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
            $commentPosted = $comments->execute(array($postId, $author, $comment));
    
            return $commentPosted;
        }




        private function dbConnect(){
            $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
            return $db;
        }
    }