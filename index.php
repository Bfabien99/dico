<?php
    require '../vendor/autoload.php';
    include 'dico.php';
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

    