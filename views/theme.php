<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="shortcut icon" href="../../assets/images/logo/favicon.ico" type="image/x-icon">
    <title><?= !empty($theme) ? $theme : "E'sT" ?></title>
</head>
<body>
    <?php include 'layout/header.php';?>
    <?php if(!empty($titres)):?>
        <?php foreach($titres as $titre):?>
            <a href="<?=urldecoder($titre->titre)?>"><?=$titre->titre?></a>
        <?php endforeach;?>
    <?php endif;?>
</body>
</html>