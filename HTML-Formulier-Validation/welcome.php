<?php
$email = $name = $nameRequired = $emailRequired = ""; 
$display = 'none';
if( isset( $_POST[ 'submit' ] ) && $_SERVER[ 'REQUEST_METHOD' ] == "POST" ) {
    if ( empty( $_POST[ 'name' ] ) ) {
        $nameRequired = "Name is required";
        $display = 'none';
    } else {
        $name = testInput( $_POST[ 'name' ] );
        $display = 'block';
    }

    if ( empty( $_POST[ 'email' ] ) ) {
        $emailRequired = "Email is required";
        $display = 'none';
    } else {
        $email = testInput( $_POST[ 'email' ] );
        if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
            $emailRequired = "Email is not a valid email address";
            $display = 'none';
        } else {
            if ($nameRequired != "") {
                $display = 'none';
            } else {
                $display = 'block';
            }
        }
    }

    //$display = 'block';
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
    <title>Form</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name"><span style="color: red;"> * <?php echo $nameRequired; ?></span><br>
        <label for="email">Email</label><br>
        <input type="text" name="email" id="email"><span style="color: red;"> * <?php echo $emailRequired; ?></span><br>
        <input type="submit" name="submit">
    </form><br>
    <div style="display: <?php echo $display; ?>;">
        <h1>De ingevulde gegevens zijn:</h1>
        <p>Naam: <?php echo $name; ?></p>
        <p>Emailadres:  <?php echo $email; ?></p>
    </div>
</body>
</html>