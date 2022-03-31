<?php

    class messages{

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

        public function getAllMessage(){
            $db = $this->dbConnect();
            $query = $db->prepare('SELECT * FROM contacts ORDER BY date_envoie ASC');
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

        public function addMessage($nom,$email,$sujet,$message){
            $db = $this->dbConnect();
            $query = $db->prepare('INSERT INTO contacts SET nom = :nom, email = :email, sujet = :sujet, message = :message');
            $result = $query->execute([
                'nom' => $nom,
                'email' => $email,
                'sujet' => $sujet,
                'message' => $message,
            ]);

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