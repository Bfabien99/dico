<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.ico" type="image/x-icon">
    <title>Home</title>
    <style>
        body{
            width: 100%;
            min-height: 100vh;
            background-color: #59acff/*#59acff*/;
            font-family: Poppins;
        }

        .container{
            width: 90%;
            min-width: 310px;
            min-height: 70vh;
            margin: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1em;
            padding: 5px;
            background-color: #59acff;
            color: white;
            padding-bottom: 20px;
        }

        .presentation{
            color: #222;
            background-color: white;
            padding: 10px;
            width: 55%;
            border-radius: 5px;
            box-shadow: 0px 8px 5px #2385e8;
            border: 10px solid #1278de;
            display: flex;
            flex-direction: column;
            gap: 2em;
            align-items: center;
            justify-content: center;
        }

        section{
            margin:0 auto;
            display:flex ;
            width: 55%;
            min-height: 500px;
            background-color: white;
            border-radius: 10px;
            border: 10px solid #b3aefc;
            color: #444;
            padding: 15px 15px;
            align-items: center;
            gap: 1em;
            box-shadow: 0px 8px 5px #2385e8;
            transition: all 0.1s;
        }

        section:hover{
            border: 10px solid #9e97fc;
            box-shadow: 0px 10px 10px #1278de;
            color: #000;
        }

        .text{
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 1em;
        }

        .see{
            text-decoration: none;
            color: white;
            background-color: #59acff;
            padding: 10px;
            width: 30%;
            text-align: center;
        }

        .img{
            width: 100%;
            min-width: 300px;
            height: 400px;
            border-radius: 5px;
            box-shadow: 0px 0px 15px #ccc;
        }

        .imgcourse{
            background: url('/Dico/assets/images/pexels-thirdman-6502822.jpg') no-repeat center/cover;
        }

        .imgdico{
            background: url('/Dico/assets/images/edho-pratama-T6fDN60bMWY-unsplash.jpg') no-repeat center/cover;
        }

        .imgconjugate{
            background: url('/Dico/assets/images/verbo-to-be-em-ingles.jpeg') no-repeat bottom/cover;
        }


        @media screen and (max-width:1440px) {
            section,.presentation{
                width: 80%;
            }
        }

        @media screen and (max-width:1100px) {
            section{
                flex-direction: column;
            }
        }

        @media screen and (max-width:850px) {

            .container{
                width: 100%;
                min-width: 200px;
            }

            section,.presentation{
                gap: 1em;
                width: 90%;
                min-width: 10px;
            }

            .img{
                width: 100%;
                min-width: 10px;
            }
        }
    </style>
</head>
<body>
    <?php include 'layout/header.php';?>
    <div class="container">
        <div class="presentation">
            <div class="bloc">
                <h1>Welcome on English's Toolbox</h1>
                <p>La boîte à outils de l'Anglais "English's Toolbox", est une plateforme gratuite qui vous permet d'apprendre l'Anglais assez rapidement et facilement.</p>
            </div>
            
            <div class="bloc">
                <h2>Pourquoi utilisé English's Toolbox</h2>
                <p>English's Toolbox est gratuit, pas besoin de debourser de l'argent ou quoique ce soit pour apprendre.</p>
                <p>Avec English's Toolbox pas besoin d'inscription pour commencer à apprendre. En accedant à la plateforme vous bénéficier de tous ce que English's Toolbox propose.</p>
            </div>
            
            <div class="bloc">
                <h2>Niveau requis</h2>
                <p>English's Toolbox met à votre disposition des cours dont l'apprentissage ne necessite aucun niveau au préalable. Tout le monde peut l'utiliser.</p>
                <br>
                <h3>N'hésiter plus et débuter votre apprentissage de l'Anglais</h3>
            </div>
            
        </div>
        <section>
            <div class="text">
                <h1>Cours</h1>
                <p>Différent cours vous sont proposés.</p>
                <p>Les cours sont classés par thème. Chaque thème dispose d'une série de leçon simple à comprendre.</p>
                <p>Si vous souhaitez réviser, choisissez juste la leçon qui vous convient.</p>
                <h4>Bon apprentissage!</h4>
                <a href="/Dico/classes/" class="see">Consulter</a>
            </div>
            
            <div class="img imgcourse">

            </div>
        </section>

        <section>
            <div class="text">
                <h1>Dictionnaire</h1>
                <p>English's Toolbox dispose de son propre dictionnaire.</p>
                <p>Ce dictionnaire est mis à votre disposition dans le but de vous aidez dans votre apprentissage.</p>
                <p>Le dictionnaire de English's Toolbox est en Anglais, les définitions sont en Anglais.</p>
                <p>En fonctionnant ainsi votre vocabulaire se trouvera enrichi</p>
                <p>Certains mots recherchés peuvent avoir des exemples d'utilisation, une prononciation audio , etc.</p>

                <h4>Vient découvrir ce beau dictionnaire !</h4>
                <a href="/Dico/dictionnary" class="see">Consulter</a>
            </div>
            <div class="img imgdico">

            </div>
        </section>

        <section>
            <div class="text">
                <h1>Conjugaison</h1>
                <p>Vous avez un soucis avec les temps en Anglais ? Vous ne savez pas comment conjuguez un verbe en Anglais ? Pas de souci.</p>
                <p>English's Toolbox met à votre disposition un outil de conjugaison fait maison.</p>
                <p>Quel verbe voulez vous conjuger ? Entrez juste ce verbe et vous English's Toolbox se charge de conjuguer votre verbe dans plus de 20 temps conjugables.</p>
                <h3>Conjugue votre verbe dans +20 temps possibles.</h3>
                <a href="/Dico/conjugate" class="see">Consulter</a>
            </div>
            <div class="img imgconjugate">

            </div>
        </section>

    </div>

    <footer>
        <span>&copy;2022 - projet_NAN_5.22 - BFabien99</span>
    </footer>
</body>
</html>