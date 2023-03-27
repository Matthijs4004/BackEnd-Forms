<?php
$ability = $person = $number = $vacation = $bestCharacteristic = $worstCharacteristic = $worstHappening =  "";
$formDisplay = "grid";
$answerDisplay = "none";
if ( $_SERVER[ 'REQUEST_METHOD' ] == "POST" ) {
    if ( !empty( $_POST[ 'ability' ] ) ) {
        $ability = testInput( $_POST[ 'ability' ] );
    }
    if ( !empty( $_POST[ 'person' ] ) ) {
        $person = testInput( $_POST[ 'person' ] );
    }
    if ( !empty( $_POST[ 'number' ] ) ) {
        $number = testInput( $_POST[ 'number' ] );
    }
    if ( !empty( $_POST[ 'vacation' ] ) ) {
        $vacation = testInput( $_POST[ 'vacation' ] );
    }
    if ( !empty( $_POST[ 'bestCharacteristic' ] ) ) {
        $bestCharacteristic = testInput( $_POST[ 'bestCharacteristic' ] );
    }
    if ( !empty( $_POST[ 'worstCharacteristic' ] ) ) {
        $worstCharacteristic = testInput( $_POST[ 'worstCharacteristic' ] );
    }
    if ( !empty( $_POST[ 'worstHappening' ] ) ) {
        $worstHappening = testInput( $_POST[ 'worstHappening' ] );
    }
    $formDisplay = "none";
    $answerDisplay = "block";
}

function testInput( $data ) 
{
    $data = trim( $data );
    $data = stripslashes( $data );
    return $data = htmlspecialchars( $data );
}

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
                <form style="display: <?php echo $formDisplay; ?>;" class="form" action="<?php echo htmlspecialchars( $_SERVER[ 'PHP_SELF' ] ); ?>" method="post">
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
                <p style="display: <?php echo $answerDisplay; ?>;">Er zijn veel mensen die niet kunnen <span><?php echo $ability; ?></span>. Neem nou <span><?php echo $person; ?></span>. Zelfs met de hulp van een <span><?php echo $vacation ?></span> of zelfs <span><?php echo $number; ?></span> kan <span><?php echo $person; ?></span> niet <span><?php echo $ability; ?></span>. Dat heet niet te maken met gebrek aan <span><?php echo $bestCharacteristic; ?></span>, maar met een te veel aan <span><?php echo $worstCharacteristic; ?></span>. Te veel <span><?php echo $worstCharacteristic; ?></span> leidt tot <span><?php echo $worstHappening; ?></span> en dat is niet goed als je wilt <span><?php echo $ability; ?></span>. Helaas voor <span><?php echo $person; ?></span></p>
            </main>
            <footer>
                <p>&copy; Matthijs Raatgever 2023</p>
            </footer>
        </div>
    </div>
</body>
</html>