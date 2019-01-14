<?php

    class CommentManager{

        public function getComments($id_post){
            $db = $this->dbConnect();
            $comments = $db->prepare('SELECT id, author, comment_content, DATE_FORMAT(comment_date, \'%d/%m/%Y\') AS comment_date FROM Posts_Comments WHERE id_post = ? ORDER BY comment_date DESC');
            $comments->execute(array($id_post));
    
            return $comments;
        }

        public function getSignaledComments(){
            $db = $this->dbConnect();
            $signaledComments = $db->prepare('SELECT id, author, comment_content, DATE_FORMAT(comment_date, \'%d/%m/%Y\') AS comment_date FROM Posts_Comments WHERE signals = "YES" ORDER BY comment_date DESC');
            $signaledComments->execute(array());

            return $signaledComments;
        }

        public function postComment($id_post, $author, $comment_content){
            $db = $this->dbConnect();
            $comments = $db->prepare('INSERT INTO Posts_Comments(id_post, author, comment_content, signals, comment_date) VALUES(:id_post, :author, :comment_content, "NO" , NOW())');
            $commentPosted = $comments->execute(array(
                'id_post'           => $id_post, 
                'author'            => $author, 
                'comment_content'   => $comment_content
            ));
            return $commentPosted;
        }

        public function deleteComment($comment_id){
            $db = $this->dbConnect();
            $req = $db->prepare('DELETE FROM Posts_Comments WHERE id=?');
            $req->execute(array($commment_id));

            return $req;
        }

        public function deleteSignaledComment($comment_id){
            $db = $this->dbConnect();
            $req = $db->prepare('DELETE FROM Posts_Comments WHERE signals="YES"');
            $req->execute(array($comment_id));
            return $req;
        }

        public function updateComment($comment_id, $signals){
            $db = $this->dbConnect();
            $req = $db->prepare('UPDATE Posts_Comments SET signals = :signals WHERE id = :id');
            $req->execute(array(
                'signals'       => $signals,
                'id'            => $comment_id
            ));
            
            return $req;
        }



        private function dbConnect(){
            $db = new PDO('mysql:host=localhost;dbname=OC_writerblog;charset=utf8', 'root', 'root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $db;
        }
    }