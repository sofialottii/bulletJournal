<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $templateParams["titolo"]; ?></title>
    </head>

    <body>
        <header>
            <h1>BULLET JOURNAL</h1>
        </header>
        
        <main>
            <?php
            require($templateParams["nome"]);
            ?>
        </main>

        <footer>
            <p>Sofia Lotti 2025</p>
            <p>Contattami: sofialotti17@gmail.com</p>
        </footer>


    </body>
</html>