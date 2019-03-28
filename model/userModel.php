<?php

    class User{
        public function signUp($pseudo, $password){
            $db = $this->dbConnect();
            $req = $db->prepare('INSERT INTO Users(pseudo, password) 
            VALUES(:pseudo, :password)');
            $req->execute(array(
                'pseudo' => $pseudo,
                'password' => $password
            ));
        }

        public function removeUser($pseudo){
            $db = $this->dbConnect();
            $req = $db->prepare('DELETE * FROM Users WHERE pseudo = :pseudo');
            $req->execute(array(
                'pseudo' => $pseudo
            ));
        }

       /* public function updateUser(){
            à travailler (fonction avec paramètres optionnels)
        } */



        private function dbConnect(){
            $db = new PDO('mysql:host=localhost;dbname=OC_writerblog;charset=utf8', 'root', 'root');
            return $db;
        }
    }