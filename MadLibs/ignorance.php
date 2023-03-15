<?php

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>MadLibs - Onkunde</title>
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
                <h1>Onkunde</h1>
                <form class="form" action="<?php echo htmlspecialchars( $_SERVER[ 'PHP_SELF' ] ); ?>" method="post">
                    <label for="ability">Wat zou je graag willen kunnen?</label>
                    <input type="text" name="ability" id="ability">
                    <label for="person">Met welke persoon kun je goed opschieten?</label>
                    <input type="text" name="person" id="person">
                    <label for="number">Wat is je favoriete getal?</label>
                    <input type="text" name="number" id="number">
                    <label for="vacation">Wat heb je altijd bij je als je op vakantie gaat?</label>
                    <input type="text" name="vacation" id="vacation">
                    <label for="bestCharacteristic">Wat is je beste persoonlijke eigenschap?</label>
                    <input type="text" name="bestCharacteristic" id="bestCharacteristic">
                    <label for="worstCharacteristic">Wat is je slechtste persoonlijke eigenschap?</label>
                    <input type="text" name="worstCharacteristic" id="worstCharacteristic">
                    <label for="worstHappening">Wat is het ergste dat je kan overkomen?</label>
                    <input type="text" name="worstHappening" id="worstHappening">
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