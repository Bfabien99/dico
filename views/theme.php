<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="shortcut icon" href="../../assets/images/logo/favicon.ico" type="image/x-icon">
    <title><?= !empty($theme) ? $theme : "E'sT" ?></title>
    <style>
        body{
            width: 100%;
            min-height: 100vh;
            background-color: #59acff;
            font-family: Poppins;
        }

        .container{
            width: 90%;
            min-width: 310px;
            min-height: 95vh;
            margin: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 1em;
            padding: 5px;
            background-color: #59acff;
            color: white;
            padding-bottom: 20px;
        }

        .container a{
            text-decoration: none;
            color: white;
        }

        .button{
            background-color: #006edb;
            transition: all 0.1s;
            width: 40%;
            padding: 10px 10px;
            text-align: center;
            font-size: 1.4rem;
            border-radius: 50px;
            margin: 10px 0;
        }

        .button:hover{
            background-color: #208cf7;
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


        @media screen and (max-width:600px) {
            .container{
                width: 100%;
                min-width: 100px;
            }

            .button{
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <?php include 'layout/header.php';?>
    <div class="container">
        <h1><?= strtoupper($theme)?></h1>

        <?php if(!empty($titres)):?>
            <?php foreach($titres as $titre):?>
                <a href="<?=urldecoder($titre->titre)?>" class="button"><?=$titre->titre?></a>
            <?php endforeach;?>
        <?php endif;?>

            <a href="/Dico/classes/" class="back">Retour</a>

    </div>

    <footer style="width: 100%;padding:10px;color:white;text-align:center;">
        <span>&copy;2022 - projet_NAN_5.22 - BFabien99</span>
    </footer>
</body>
</html>