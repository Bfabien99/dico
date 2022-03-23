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
            background-color: #b3aefc;
        }

        .container{
            width: 90%;
            margin: auto;
            display: flex;
            flex-direction: column;
            gap: 3.5em;
            align-items: center;
            padding-bottom: 5px;
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
            height: 40px;
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

        .conjugateform{
            display:flex;
            align-items: center;
            justify-content: space-around;
            gap: 2em;
        }
        .forms{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
           background-color: #9e97fc;
        }
        .forms h2{
            padding: 20px;
        }
        .forms h3{
            width: 100%;
            padding: 30px 20px;
            background-color: white;
        }
        .conjugationtable{
            display: grid;
            grid-template-columns: repeat(3,1fr);
            grid-gap: 0.5rem;
        }
        .conjugatetable{
            margin-bottom: 2em;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            background-color: #fff;
        }
        .conjugatetable .temps{
            padding: 20px;
            background-color: #59acff;
            color: white;
            width: 100%;
            text-transform: uppercase;
            text-shadow: 0px 0px 2px #828282;
        }
        .conjugatetable .conjugation{
            padding: 20px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: 100%;
        }

        .conjugation .subject{
            font-style: italic;
        }

        .conjugation .verb{

        }

    </style>
</head>
<body>
    <div class="container">
        <form action="" autocomplete="off">
            <input type="search" name="verb" value="<?= $value ?>" placeholder="search a verb">
            <input type="submit" value="search" name="search">
        </form>

        <!-- Affichage de la conjuguaison -->
        <?php if(!empty($results) && $results['result']=='OK'):?>
            
            <!-- Box contenant le verbe conjugué  -->
            <?php if(!empty($results['conjugated_forms'])):?>
                <!-- forme conjuguée  -->
                <div class="conjugateform">
                    <?php foreach ($results['conjugated_forms'] as $conjugated_forms):?>
                        <div class="forms">
                            <h2><?= $conjugated_forms[0]; ?></h2>
                            <h3><?= $conjugated_forms[1]; ?></h3>
                        </div>
                    <?php endforeach;?>
                </div>
            <?php endif;?>

            <?php if(!empty($results['conjugation_tables'])):?>
                <div class="conjugationtable">
                    <?php foreach ($results['conjugation_tables'] as $conjugation_tables):?>

                        <?php foreach ($conjugation_tables as $conjugation):?>
                            <!-- Box contenant la conjuguaison   -->
                            <div class="conjugatetable">
                            <h2 class="temps"><?= $conjugation['heading'] ?></h2>
                            <?php foreach ($conjugation['forms'] as $tense):?>
                                <div class="conjugation">
                                    <h2 class="subject"><?= $tense[0] ;?></h2>
                                    <h3 class="verb"><?= $tense[1] ;?></h3>
                                </div>
                            <?php endforeach;?>
                            </div>
                            <!-- fin Box contenant la conjuguaison  -->
                        <?php endforeach;?>
                            
                    <?php endforeach;?>
                </div>
            <?php endif;?>
            <!-- fin Box contenant le verbe conjugué  -->

        <?php elseif(!empty($_GET['verb']) && empty($results['conjugated_forms'])):?>
                <h3>No match found</h3>
        <?php else:?>
                    <h3>Welcome</h3>
        <?php endif;?>
    </div>
</body>
</html>