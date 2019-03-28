<?php
    class ConnectionManager{

        public function checkLogin($pseudo){
            $con = $this->dbConnect();
            $password_in_db_hashed = $con->prepare("SELECT password FROM Users WHERE pseudo = ?");
            $password_in_db_hashed->execute(array($pseudo));
            return $password_in_db_hashed;
        }

        public function checkSignUp($pseudo){
            $con = $this->dbConnect();
            $check = $con->prepare("SELECT * FROM Users WHERE pseudo = ?");
            $check->execute(array($pseudo));
            return $check->fetchAll();
        }

        private function dbConnect(){
            $con = new PDO('mysql:host=localhost;dbname=OC_writerblog;charset=utf8', 'root', 'root');
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $con;
        }
    }
    