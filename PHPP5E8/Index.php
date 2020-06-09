<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>PHPP5EXO08</title>
</head>
    <body>
        <?php
        $months = array ('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
        foreach( $months as $value ){
        ?><p><?= $value ?></p><?php
        }
        ?>
    </body>
</html>