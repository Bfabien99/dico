<?php
    require '../vendor/autoload.php';
    include 'dico.php';
    include 'conjugation.php';
    $router = new AltoRouter();

    $router->map('GET','/Dico/',function(){
        require 'views/dictionnary.php';
    });
    $router->map('GET','/Dico/dictionnary',function(){
        $value = '';
        if (!empty($_GET['search'])) {
            $results = search(strtolower($_GET['search']));
            $value = strtolower($_GET['search']);
            $voice = read($value);
        }
        require 'views/dictionnary.php';
    });
    $router->map('GET','/Dico/conjugate',function(){
        $value = '';
        if (!empty($_GET['verb'])) {
            $results = conjugate(strtolower($_GET['verb']));
            $value = strtolower($_GET['verb']);
        }
        require 'views/conjugate.php';
    });

    $match = $router->match();

    if( is_array($match) && is_callable( $match['target'] ) ) 
   {
	    call_user_func_array( $match['target'], $match['params'] ); 
    } 
    else 
    {
	// no route was matched
	    require 'views/error/404.php';
        die();
    }

    