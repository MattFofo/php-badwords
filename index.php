<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badwords</title>
    </head>
    <body>
        <?php
            $word = $_GET["word"];
            $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt mollitia labore accusantium, omnis aspernatur qui voluptatum hic, voluptates, rerum numquam repellendus quia earum consequatur. Repellendus libero praesentium ut perspiciatis sapiente?';
        ?>
        <!-- form per prendere input utente e trasmetterlo -->
        <form action="index.php" method="GET">
            <input type="text" name="word">
            <input type="submit">
        </form>

        <!-- stampo parola ottenuta dal GET -->
        <h1><?php echo 'parola da censurare: ' . htmlspecialchars($word) ?></h1>

        <!-- stampo variabile -->
        <p><?php echo $text ?></p>

        <!-- stampo lunghezza paragrafo -->
        <h3><?php echo 'lunghezza paragrafo: ' . strlen($text) ?></h3>

        <!-- ristampo variabile sostituendo la parola ottenuta dal GET -->
        <p><?php echo str_replace(htmlspecialchars(strtolower($word)), '***', strtolower($text)) ?></p>

    </body>
</html>