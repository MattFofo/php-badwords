<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badwords</title>
    </head>
    <body style="display: flex; justify-content: center; align-items: center; ">
        <div class="container" style="display: flex; justify-content: center; align-items: center; flex-direction: column; max-width: 900px;">
            <?php
                $word = $_GET["word"];
                $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt mollitia labore accusantium, omnis aspernatur qui voluptatum hic, voluptates, rerum numquam repellendus quia earum consequatur. Repellendus libero praesentium ut perspiciatis sapiente? Lorem ipsum dolor sit amet consectetur adipisicing elit. In laudantium, numquam vitae aspernatur ex perspiciatis sequi nostrum necessitatibus alias iusto ipsa illum neque odio quaerat, accusamus aut omnis quos error! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae sit quam, cum eaque obcaecati, quaerat maxime rem, placeat ab neque officiis pariatur aliquam fugit ullam minus quidem assumenda reprehenderit nam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa expedita id deserunt recusandae assumenda rerum atque voluptatibus, similique odit! Suscipit libero blanditiis aliquid necessitatibus quam laboriosam corporis, delectus est fuga!';
            ?>
            <!-- form per prendere input utente e trasmetterlo -->
            <form action="index.php" method="GET" style="background-color: lightpink; width: 100%; text-align: center; padding: 2rem">
                Inserisci parola da censurare <input type="text" name="word">
                <input type="submit">
            </form>

            <div style="background-color: lightblue; width: 100%; padding: 2rem">
                <!-- stampo parola ottenuta dal GET -->
                <h3><?php echo 'parola da censurare: ' . htmlspecialchars($word) ?></h3>

            </div>

            <div style="background-color: lightcyan; padding: 2rem; width: 100%;">
                <h2>testo da censurare</h2>
                <!-- stampo testo -->
                <p><?php echo $text ?></p>

                <!-- stampo lunghezza paragrafo -->
                <h3><?php echo 'lunghezza paragrafo: ' . strlen($text) ?></h3>
            </div>

            <div style="background-color: lightgreen; padding: 2rem; width: 100%;">
                <h2>testo censurato</h2>
     
                 <!-- ristampo testo sostituendo la parola ottenuta dal GET -->
                <p><?php echo str_replace(htmlspecialchars(strtolower($word)), '***', strtolower($text)) ?></p>
            </div>   

        </div>

    </body>
</html>