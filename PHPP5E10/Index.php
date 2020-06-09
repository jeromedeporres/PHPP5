<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>PHPP5EXO10</title>
</head>
    <body>
        <?php
        $départements = array (
            '02' => 'Aisne',
            '59' => 'Nord',
            '60' => 'Oise',
            '62' => 'Pas-de-Calais',
            '80' => 'Somme');
        foreach($départements as $cle => $element)
        {
        ?><p><?= '[' . $cle . '] ' . $element ?></p><?php
        }
        ?>
    </body>
</html>