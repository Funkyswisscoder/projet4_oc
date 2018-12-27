<?php

    class User{
        public function signUp($pseudo,$email,$password){
            $db = $this->dbConnect();
            $req = $db->prepare('INSERT INTO Users(pseudo, email, password) 
            VALUES(:pseudo, :email, :password)');
            $req->execute(array(
                'pseudo' => $pseudo,
                'email' => $email,
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