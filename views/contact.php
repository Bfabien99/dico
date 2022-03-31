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
            background-color: #222;
            font-family: Montserrat,Poppins;
        }

        .container{
            width: 90%;
            min-width: 310px;
            min-height: 95vh;
            margin: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1em;
            padding: 5px;
            background-color: #222;
            color: white;
            padding-bottom: 20px;
            justify-content: center;
        }

        form{
            width: 500px;
            border: 1px solid white;
            display: flex;
            flex-direction: column;
            gap: 1em;
            align-items: center;
            padding: 20px;
        }

        .group{
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 0.5em;
            font-size: 1.3rem;
        }

        .group input{
            height: 40px;
            padding: 10px;
            outline: none;
            border: 1px solid black;
            font-size: 1.4rem;
        }

        .group textarea{
            border: 1px solid black;
            outline:none;
            padding: 10px;
            font-size: 1.3rem;
        }

        input[type="submit"]{
            width: 40%;
            padding: 10px;
            background-color: transparent;
            border: 1px solid white;
            color: white;
            outline: none;
            cursor: pointer;
            transition: all 0.1s;
            font-size: 1.4rem;
        }

        input[type="submit"]:hover{
            background-color: white;
            color: #222;
        }

        @media screen and (max-width:850px) {

            .container{
                width: 100%;
                min-width: 200px;
            }

            form{
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <?php include 'layout/header.php';?>
    <div class="container">
        <h1>Nous contacter</h1>
        <form action="" method="post">
            <div class="group">
                <label for="">Name / Nom</label>
                <input type="text" name="nom" id="">
            </div>
            <div class="group">
                <label for="">Mail / Email</label>
                <input type="text" name="email" id="">
            </div>
            <div class="group">
                <label for="">Subject / Sujet</label>
                <input type="text" name="sujet" id="">
            </div>
            <div class="group">
                <label for="">Message</label>
                <textarea name="message" style="width: 100%;min-height:300px;"></textarea>
            </div>
            <input type="submit" value="Send / Envoyer" name="submit">
        </form>
    </div>
    <footer style="width: 100%;padding:10px;color:white;text-align:center;">
        <span>&copy;2022 - projet_NAN_5.22 - BFabien99</span>
    </footer>
</body>
</html>