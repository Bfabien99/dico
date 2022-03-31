<?php

    class classes{

        public function dbConnect() 
        {
            $dsn="mysql:dbname=dico;host=localhost";
            $password = "";
            $user = "root";

            $connect = new PDO($dsn,$user,$password,[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            ]);

            if (!$connect) 
            {
                return new \Exception("Database cannot connect");
            }
            else
            {   
                return $connect;
            }
        }

        public function getAllClasse($theme){
            $db = $this->dbConnect();
            $query = $db->prepare('SELECT titre FROM lecons WHERE theme = '.'"'.$theme.'"'.' ORDER BY ordre ASC');
            $query->execute();
            $result = $query->fetchAll();

            if (!$result) 
            {
                return false;
            }
            else 
            {
                return $result;
            }
        }

        public function getClasse($theme,$titre){
            $db = $this->dbConnect();
            $query = $db->prepare('SELECT * FROM lecons WHERE theme = '.'"'.$theme.'"'.' AND titre = '.'"'.$titre.'"');
            $query->execute();
            $result = $query->fetchAll();

            if (!$result) 
            {
                return false;
            }
            else 
            {
                return $result;
            }
        }

        public function getQuizz(){
            $db = $this->dbConnect();
            $query = $db->prepare('SELECT * FROM quizz ORDER BY id ASC');
            $query->execute();
            $result = $query->fetchAll();

            if (!$result) 
            {
                return false;
            }
            else 
            {
                return $result;
            }
        }
    }