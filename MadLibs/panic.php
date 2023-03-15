<?php

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>MadLibs - Paniek</title>
</head>
<body>
<div class="container">
<img src="logo.png" alt="logo">
        <div class="container-content">
            <header>
                <nav>
                    <a href="panic.php">Er heerst paniek...</a>
                    <a href="ignorance.php">Onkunde</a>
                </nav>
            </header>
            
            <main>
                <h1>Er heerst paniek...</h1>
                <form class="form" action="<?php echo htmlspecialchars( $_SERVER[ 'PHP_SELF' ] ); ?>" method="post">
                    <label for="noPet">Welk dier zou je nooit als huisdier willen hebben?</label>
                    <input type="text" name="noPet" id="noPet">
                    <label for="person">Wie is de belangrijkste persoon in je leven?</label>
                    <input type="text" name="person" id="person">
                    <label for="country">In welk land zou je graag willen wonen?</label>
                    <input type="text" name="country" id="country">
                    <label for="bored">Wat doe je als je je verveelt?</label>
                    <input type="text" name="bored" id="bored">
                    <label for="toy">Met welk speelgoed speelde je als kind het meest?</label>
                    <input type="text" name="toy" id="toy">
                    <label for="skipClass">Bij welke docent spijbel je het liefst?</label>
                    <input type="text" name="skipClass" id="skipClass">
                    <label for="money">Als je 100.000 euro had, wat zou je dan kopen?</label>
                    <input type="text" name="money" id="money">
                    <label for="hobby">Wat is je favoriete bezigheid?</label>
                    <input type="text" name="hobby" id="hobby">
                    <br>
                    <input type="submit" name="submit" id="submit" value="Verzenden">
                </form>
            </main>
            <footer>
                <p>&copy; Matthijs Raatgever 2023</p>
            </footer>
        </div>
    </div>
</body>
</html>