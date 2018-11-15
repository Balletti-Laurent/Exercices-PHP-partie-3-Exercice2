<!DOCTYPE html>
<html>
    <head lang="fr">
        <meta charset="utf-8">
        <title>Exercice 2</title>
    </head>
    <body>
        <div>
            <?php
            $count1 = 0;
            $count2 = 12;
            while ($count1 <= 20) {
                $result = $count1 * $count2;
                $count1++;
                echo '<div>résultat '. $result .'</div>';
            }
            ?>
        </div>
    </body>
</html>