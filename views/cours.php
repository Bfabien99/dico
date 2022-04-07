<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="shortcut icon" href="../../assets/images/logo/favicon.ico" type="image/x-icon">
    <title><?= !empty($titre) ? $titre : "E'sT" ?></title>
    <style>
        body{
            width: 100%;
            min-height: 100vh;
            background-color: #59acff;
            font-family: Poppins;
        }

        .container{
            width: 80%;
            min-width: 310px;
            min-height: 45vh;
            margin: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1em;
            padding: 5px;
            background-color: white;
            color: #111;
            padding-bottom: 20px;
            border-radius: 5px;
        }

        .container a{
            text-decoration: none;
            color: white;
        }

        .box{
            display: flex;
            flex-direction: column;
            gap: 2em;
        }

        .box .titre{
            text-align: center;
            font-size: 2.5rem;
            text-decoration: underline;
        }

        .box .cours{
            width: 90%;
            margin: auto;
        }

        .back{
            background-color: #222;
            padding: 10px;
            border-radius: 5px;
            transition: all 0.1s;
            margin: 10px;
        }

        .back:hover{
            background-color: #000;
        }

        .important{
            font-weight: bold;
            color: tomato;
            text-shadow: 0px 0px 0px black;
        }


        @media screen and (max-width:600px) {
            .container{
                width: 100%;
                min-width: 100px;
            }
        }
    </style>
</head>
<body>
    <?php include 'layout/header.php';?>
    <div class="container">
    <a href="/Dico/classes/<?= $theme?>/" class="back">Retour</a>
    <?php if(!empty($cours)):?>
        <div class="box">
            <h1 class="titre"><?= $cours[0]->titre?></h1>
            <div class="cours"><?= nl2br($cours[0]->contenu)?></div>
        </div>
    <?php endif;?>
    </div>

    <footer>
        <span>&copy;2022 - projet_NAN_5.22 - BFabien99</span>
    </footer>
</body>
</html>