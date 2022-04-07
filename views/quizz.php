<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Dico/assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.ico" type="image/x-icon">
    <script src="/Dico/assets/js/jquery-3.6.0.min.js"></script>
    <title>TEST</title>
    <style>
        body{
            width: 100%;
            min-height: 100vh;
            background-color:  #334756;
            font-family: Poppins;
            user-select: none;
        }

        .container{
            width: 90%;
            min-width: 310px;
            min-height: 70vh;
            margin: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2em;
            padding: 5px;
            background-color:  #334756;
            color: white;
            padding-bottom: 20px;
        }

        .section{
            width: 90%;
            min-width: 310px;
            margin: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2em;
            padding: 5px;
            width: 80%;
        }

        form{
            width: 90%;
            display: flex;
            align-items: center;
            margin:0 auto;
            gap: 1em;
            justify-content: center;
            padding: 1em;
            flex-direction: column;
            gap: 1.5em;
        }

        .group{
            margin: 0 auto;
            min-width: 300px;
            width: 50%;
            display: flex;
            flex-direction: column;
            gap:0.5em;
        }

        .group label{
            font-size:1.3rem
        }

        input[type="submit"]{
            width: 25%;
            background-color: #2C394B;
            color: white;
            padding: 10px 10px;
            font-size: 1.3rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.1s;
        }

        input[type="submit"]:hover{
            background-color:#082032;
        }

        .button{
            text-decoration: none;
            width: 30%;
            background-color: tomato;
            color: white;
            padding: 5px 10px;
            font-size: 1.3rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.1s;
            text-align: center;
        }

        .button:hover{
            background-color: red;
        }

        #note{
            font-size:1.5rem;
            font-family: Roboto,Montserrat,serif;
            color: #fee;
        }

        .back{
            background-color: #222;
            padding: 10px;
            border-radius: 5px;
            transition: all 0.1s;
            margin: 10px;
            text-decoration: none;
            color: white;
        }

        .back:hover{
            background-color: #000;
        }

        footer{
            background-color: #334756;
        }

        @media screen and (max-width:780px) {
            input[type="submit"]{
                width: 60%;
            }
        }
    </style>
</head>
<body>
    <?php include 'layout/header.php';?>
    <div class="container">
        <a href="/Dico/classes/" class="back">Retour</a>

        <?php if(!empty($quizz)):?>
            <div class="section">

                <?php $n=1;$note = 0?>

                <h1>Quizz</h1>
                <h3>Un seul choix possible pour chaque question</h3>

                <form action="" method="post" id="form">

                    <?php foreach($quizz as $question):?>
                        
                        <div class="group">

                            <h2><?= $n." ) ".$question->question?></h2>

                            <label for=""><input type="radio" name="<?= $question->id?>" value="<?= $question->option1?>" id="option1"> <?= $question->option1?></label>
                            <label for=""><input type="radio" name="<?= $question->id?>" value="<?= $question->option2?>" id="option2"> <?= $question->option2?></label>
                            <label for=""><input type="radio" name="<?= $question->id?>" value="<?= $question->correct?>" id="option3"> <?= $question->correct?></label>

                            <?php $n++;?>

                            <?php if(!empty($ans)):?>

                                <?php if(!empty($_POST[$question->id])):?>

                                    <?php if($_POST[$question->id] == $question->correct ):?>
                                        <?="<p style='color:green'>✔ Your choice / Ton choix : ".$_POST[$question->id]."</p>";$note++?>
                                    <?php else:?>
                                        <?="<p style='color:red'>✖ Your choice / Ton choix : ".$_POST[$question->id]."</p>"?>
                                        <?="<p style='color:green'>Solution : ".$question->correct."</p>"?>
                                    <?php endif;?>

                                <?php else:?>

                                    <?="<p style='color:green'>Solution : ".$question->correct."</p>"?>

                                <?php endif;?>

                            <?php endif;?>

                        </div>
                    <?php endforeach;?>


                    <?php if(!empty($ans) && !empty($_POST[$question->id])):?>
                        <?php $n = $n-1;?>
                        <h3 id="note">Resultat : <?= $note?> / <?= $n?></h3>

                        <?php if($note< ($n/2)){
                            echo "<p>Essaie encore... 😉</p>";
                        }elseif($note<= ($n*0.8)){
                            echo "<p>Bravo... 👌</p>";
                        }elseif($note == $n){
                            echo "<p>Félicitation, c'est toi le boss! 😎</p>";
                        } 
                        ?>

                    <?php elseif(!empty($ans)):?>
                        <?php $n = $n-1;?>
                        <h3 id="note">Resultat : <?= $note?> / <?= $n?></h3>
                        <h3>Il faut répondre à toutes les questions pour recevoir une appréciation...</h3>

                    <?php endif;?>


                    <?php if(!empty($ans)):?>

                        <a href="/Dico/classes/quizz" class="button">Ressayer</a>

                    <?php else:?>

                        <input type="submit" value="soumettre" name="submit">

                    <?php endif;?>

                </form>

            </div>      
        <?php endif;?>


    </div>

    <footer>
        <span>&copy;2022 - projet_NAN_5.22 - BFabien99</span>
    </footer>
</body>
</html>