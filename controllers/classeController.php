<?php
    require 'models/classes.php';

    class classeController{

        public function getAllClasse($theme){
            $callModel = new classes();
            $getAllClasse = $callModel->getAllClasse($theme);
            if($getAllClasse){
                return $getAllClasse;
            }
            else {
                return false;
            }
        }

        public function getClasse($theme,$titre){
            $callModel = new classes();
            $getClasse = $callModel->getClasse($theme,$titre);
            if($getClasse){
                return $getClasse;
            }
            else {
                return false;
            }
        }

        public function getQuizz(){
            $callModel = new classes();
            $getQuizz = $callModel->getQuizz();
            if($getQuizz){
                return $getQuizz;
            }
            else {
                return false;
            }
        }
    }