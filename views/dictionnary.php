<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,400&family=Roboto+Serif:ital,wght@0,100;0,300;0,400;0,500;1,100;1,200&family=Titillium+Web:ital,wght@0,200;0,400;1,200;1,300&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            width: 100%;
            min-height: 100vh;
            background-color: #9ec7f0;
        }

        .container{
            width: 90%;
            min-width: 710px;
            min-height: 100vh;
            margin: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1em;
            padding: 5px;
            background-color: #59acff;
            color: white;
        }

        form{
            width: 90%;
            display: flex;
            align-items: center;
            margin:0 auto;
            gap: 1em;
            justify-content: center;
            padding: 1em;
        }

        form input{
            height: 30px;
            outline: none;
            border: none;
        }

        form input[type="search"]{
            min-width: 450px;
            padding: 15px;
            border-radius: 2px;
            font-size: 1.4rem;
        }

        form input[type="submit"]{
            min-width: 150px;
            background-color: #006bd6;
            color: white;
            cursor: pointer;
        }

        form input[type="submit"]:hover{
            background-color: #11589e;
        }

        .title{
            display: flex;
            align-items: center;
            gap: 0.5em;
            text-shadow: 0px 0px 2px #383838;
        }

        .title h1{
            font-size: 3rem;
        }

        .speaker{
            width: 50px;
            cursor: pointer;
        }

        .speaker img{
            width: 100%;
        }

        .definitionbox{
            width: 700px;
            padding: 10px;
            box-shadow: 0px 0px 10px #a4a4ab;
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 0.5em;
            background-color: white;
            border-radius: 5px;
            color: #1e2021;
        }

        .type{
            color: grey;
            font-style: italic;
            font-family: Poppins;
        }

        .definition{
            font-family: Montserrat,serif;
            font-size: 1.6rem;
            margin-left: 10px;
        }

        .definition::first-letter,.type::first-letter{
            text-transform: uppercase;
        }

        .example{
            font-family: Poppins;
            color: white;
            background-color: #9e97fc;
            width: fit-content;
            padding: 5px;
            margin: 10px 0;
        }

        .illustration{
            margin:1em auto;
            border-radius: 10px;
            box-shadow: 0px 0px 5px #aaa;
            width: 300px;
            height: 300px;
            display: block;
        }

        .synonymbox h3,.antonymbox h3{
            text-decoration: underline;
        }

        .synonymbox a,.antonymbox a{
            text-decoration: none;
            font-style: italic;
            font-family: Roboto,serif;
            color:#1e2021 ;
        }

        .synonymbox a:hover,.antonymbox a:hover{
            color: #59acff;
        }

        /* Pour les mots soulignés */
        .found{
            text-decoration: underline;
        }

        @media screen and (max-width:750px) {
            .container{
                width: 100%;
                min-width: 100px;
            }

            form{
                justify-content: space-around;
            }

            form input[type="search"]{
                width: 60%;
                min-width: 250px;
            }

            form input[type="submit"]{
                width: 20%;
                min-width: 150px;
            }

            .definitionbox{
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="container">

        <form action="dictionnary" method="get">
            <input type="search" name="search" id="" value="<?php if(!empty($value)) echo $value;?>" placeholder="search a word" minlength="2">
            <input type="submit" value="search" name="submit">
        </form>

        <?php if(!empty($results) || !empty($voice)):?>
            <div class="title">

                <?php if(!empty($_GET["search"])) echo '<h1>'.strtoupper($_GET["search"]).'</h1>'; ?>
                <?php if(!empty($results["pronunciation"])) echo '<h3>-- '.$results["pronunciation"].'</h3>'; ?>

            </div>
            
                <!-- Api2 consommation -->
                <?php if(!empty($voice)):?>
                    <div class="title">
                    <!-- Affiche le phonetic -->
                    <?php if(!empty($voice[0]['phonetic'])) echo '<h2><strong>Phonetic: </strong>'.$voice[0]['phonetic'].'</h2>'?>

                    <!-- Audio du phonetic -->
                    <?php if(!empty($voice[0]['phonetics'][1]['audio'])) echo "<a class='speaker' onclick='play()'><img src='assets/images/icones/icons8-son-90w.png' ></a><audio id='audio' src='{$voice[0]['phonetics'][1]['audio']}'></audio>";?>

                    </div>
                <?php endif;?>
                <!-- Api2 consommation fin-->
                
<!-- Box contenant les definitions -->
                <!-- Api2 consommation -->
                <?php if(!empty($voice[0]['meanings'][0]['definitions'])):?>
                    <div class="definitionbox">

                    <!-- Affiche le type -->
                        <?php if(!empty($voice[0]['meanings'][0]['partOfSpeech'])) echo '<h3 class="type">'.$voice[0]['meanings'][0]['partOfSpeech'].'</h3>';?>

                    <!-- Affiche la definition -->
                        <?php if(!empty($voice[0]['meanings'][0]['definitions'][0]['definition'])) echo '<h2 class="definition">'.str_replace(':','.',$voice[0]['meanings'][0]['definitions'][0]['definition']).'</h2>';?>

                    <!-- Affiche l'exemple -->
                        <?php if(!empty($voice[0]['meanings'][0]['definitions'][0]['example'])) echo '<h3 class="example">Ex: '.contain($_GET['search'],$voice[0]['meanings'][0]['definitions'][0]['example']).'</h3>';?>

                    <!-- Affiche 3 synonymes -->
                        <?php if(!empty($voice[0]['meanings'][0]['synonyms'])):?>
                            <div class="synonymbox">

                                <h3>Synonyms</h3>
                                <?php foreach ($voice[0]['meanings'][0]['synonyms'] as $synonym):?>
                                    <?= '<a href="dictionnary?search='.$synonym.'&submit=search"> - '.$synonym.'</a>';?>
                                <?php endforeach;?>

                            </div>
                        <?php endif;?>

                    <!-- Affiche 3 antonymes -->
                        <?php if(!empty($voice[0]['meanings'][0]['antonyms'])):?>
                            <div class="antonymbox">

                                <h3>Antonyms</h3>
                                <?php foreach ($voice[0]['meanings'][0]['antonyms'] as $antonym):?>
                                    <?= '<a href="dictionnary?search='.$antonym.'&submit=search"> - '.$antonym.'</a>';?>
                                <?php endforeach;?>

                            </div>
                        <?php endif;?>

                    </div>
                <?php endif;?>
                <!-- Api2 consommation fin-->
               
            <?php if(!empty($results["definitions"])): ?>
                <?php foreach ($results["definitions"] as $definition):?>
                    <div class="definitionbox">

                    <!-- Affiche le type -->
                        <?php if(!empty($definition['type'])) echo '<h3 class="type">'.$definition['type'].'</h3>'; ?>

                    <!-- Affiche la definition -->
                        <?php if(!empty($definition['definition'])) echo '<h2 class="definition">'.$definition['definition'].'<p/>'; ?>

                    <!-- Affiche l'exemple -->
                        <?php if(!empty($definition['example'])) echo '<h3 class="example">Ex: '.contain($_GET['search'],$definition['example']).'</h3>'; ?>

                    <!-- Affiche l'image -->
                        <?php if(!empty($definition['image_url'])):?>
                            <img class="illustration" src="<?= $definition['image_url'] ?>" alt="">
                        <?php endif;?>
        
                    </div>
                <?php endforeach;?>
            <?php endif;?>
<!-- Box contenant les definitions fin -->
        <?php elseif(!empty($_GET['search'])):?>
            <h3>No match found</h3>
        <?php else:?>
                <h3>Welcome</h3>
        <?php endif;?>

    </div>
</body>
<script>
      function play() {
        var audio = document.getElementById("audio");
        audio.play();
      }
    </script>
</html>