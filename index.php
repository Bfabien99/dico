<?php

use Symfony\Component\VarDumper\Server\DumpServer;

    require '../vendor/autoload.php';
    require 'controllers/classeController.php';
    include 'functions/dico.php';
    include 'functions/conjugation.php';
    include 'functions/cleans.php';
    include 'functions/urldecoder.php';
    $router = new AltoRouter();

    $router->map('GET','/Dico/',function(){
        require 'views/home.php';
    });

    //Dictionnaire en GET
    $router->map('GET','/Dico/dictionnary',function(){
        $value = '';
        if (!empty($_GET['search'])) {
            $_GET['search'] = cleans($_GET['search']);
            $results = search(strtolower($_GET['search']));
            $value = strtolower($_GET['search']);
            $voice = read($value);
        }
        require 'views/dictionnary.php';
    });

    //Conjuguaison en GET
    $router->map('GET','/Dico/conjugate',function(){
        $value = '';
        if (!empty($_GET['verb'])) {
            $_GET['verb'] = cleans($_GET['verb']);
            $results = conjugate(strtolower($_GET['verb']));
            $value = strtolower($_GET['verb']);
        }
        require 'views/conjugate.php';
    });

    //Liste des cours par theme en GET
    $router->map('GET','/Dico/classes/',function(){
        require 'views/classes.php';
    });

    //Formulaire de contact
    $router->map('GET','/Dico/contact',function(){
        require 'views/contact.php';
    });

    //Titre des cours par theme GET
    $router->map('GET','/Dico/classes/[*:theme]/',function($theme){
        $init = new classeController();
        $titres = $init->getAllClasse($theme);
        require 'views/theme.php';
    });

    //Quizz en GET
    $router->map('GET','/Dico/classes/quizz',function(){
        $init = new classeController();
        $quizz = $init->getQuizz();
        require 'views/quizz.php';
    });

    $router->map('POST','/Dico/classes/quizz',function(){
        $ans = true;
        $init = new classeController();
        $quizz = $init->getQuizz();
        require 'views/quizz.php';
    });

    //Cours par titre GET
    $router->map('GET','/Dico/classes/[*:theme]/[*:titre]',function($theme,$titre){
        $titre = urldecoder($titre);
        $titre = str_replace("-", " ", $titre);
        $init = new classeController();
        $cours = $init->getClasse($theme,$titre);
        require 'views/cours.php';
    });

    $match = $router->match();

    if( is_array($match) && is_callable( $match['target'] ) ) 
   {
	    call_user_func_array( $match['target'], $match['params'] ); 
    } 
    else 
    {
	    require 'views/error/404.php';
        die();
    }

    