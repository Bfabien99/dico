<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/logo/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Conjugate</title>
    <style>
        body{
            width: 100%;
            min-height: 100vh;
            background-color: #b3aefc;
            font-family: Poppins,Montserrat,serif;
        }

        .container{
            width: 90%;
            margin: auto;
            display: flex;
            flex-direction: column;
            gap: 3.5em;
            align-items: center;
            padding: 5px;
            padding-bottom: 5px;
            min-height: 95vh;
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
           box-shadow: 0px 5px 5px #9d97f7;
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
            box-shadow: 0px 15px 10px #9d97f7;
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
            color: #837af5;
            font-size: 1.4rem;
            text-shadow: 0px 0px 1px #bbb;
        }

        footer{
            width: 90%;
            margin:0 auto;
            text-align: center;
            color: white;
            text-shadow: 0px 0px 2px #aaa;
        }

        @media screen and (max-width:1400px) {
            .container{
                width: 90%;
                min-width: 100px;
            }

            .conjugationtable{
                grid-template-columns: repeat(2,1fr);
            }
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

            .conjugationtable{
                display: flex;
                flex-direction: column;
                gap: 0.1em;
                width: 90%;
            }
        }

        @media screen and (max-width:600px) {
            .conjugateform{
                display:flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-around;
                gap: 2em;
            }

            form{
                width: 100%;
                justify-content: center;
            }

            form input[type="search"]{
                width: 60%;
                min-width: 10px;
            }

            form input[type="submit"]{
                width: 20%;
                min-width: 10px;
            }
            
        }

        @media screen and (max-width:600px) {
            .container{
                width: 100%;
                min-width: 100px;
            }

            form{
                width: 90%;
                justify-content: space-around;
            }

            form input[type="search"]{
                width: 60%;
                min-width: 10px;
            }

            form input[type="submit"]{
                width: 20%;
                min-width: 10px;
            }

        }

    </style>
</head>
<body>
    <?php include 'layout/header.php';?>
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
                            <div class="conjugatetable" data-aos="fade-up">
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

    <footer>
        <span>&copy;2022 - projet_NAN_5.22 - BFabien99</span>
    </footer>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
    const defile = document.querySelector('.defile');
    window.addEventListener('scroll',function(){
        defile.classList.toggle('show',window.scrollY>=2500);
    });
</script>
</html>