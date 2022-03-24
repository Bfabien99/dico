<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="shortcut icon" href="../../assets/images/logo/favicon.ico" type="image/x-icon">
    <title><?= !empty($titre) ? $titre : "E'sT" ?></title>
</head>
<body>
    <?php include 'layout/header.php';?>
    <?php if(!empty($cours)):?>
        <h1><?= $cours[0]->titre?></h1>
        <div class="coursbox"><?= nl2br($cours[0]->contenu)?></div>
    <?php endif;?>
</body>
</html>