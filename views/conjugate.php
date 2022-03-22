<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="search" name="verb" value="<?= $value ?>" placeholder="search a verb">
        <input type="submit" value="search" name="search">
    </form>
    <?php if(!empty($results) && $results['result']=='OK'):?>
        
        <?php if(!empty($results['conjugated_forms'])):?>
            <?php foreach ($results['conjugated_forms'] as $conjugated_forms):?>
                <h2><?= $conjugated_forms[0]; ?></h2>
                <h3><?= $conjugated_forms[1]; ?></h3>
            <?php endforeach;?>
        <?php endif;?>

        <?php if(!empty($results['conjugation_tables'])):?>
            <?php foreach ($results['conjugation_tables'] as $conjugation_tables):?>

                <?php foreach ($conjugation_tables as $conjugation):?>
                    <div class="conjugatetable" style="border: 1px solid black;">
                    <h2><?= $conjugation['heading'] ?></h2>
                    <?php foreach ($conjugation['forms'] as $tense):?>
                        <h2><?= $tense[0] ;?></h2>
                        <h3><?= $tense[1] ;?></h3>
                    <?php endforeach;?>
                    </div>
                <?php endforeach;?>
                    
            <?php endforeach;?>
        <?php endif;?>
    
    <?php elseif(!empty($_GET['verb']) && empty($results['conjugated_forms'])):?>
            <h3>No match found</h3>
    <?php else:?>
                <h3>Welcome</h3>
    <?php endif;?>
</body>
</html>