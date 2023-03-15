<?php
$email = $name = ""; 
$display = 'none';
if( isset( $_POST[ 'submit' ] ) ) {
    $name = $_POST[ 'name' ];
    $email = $_POST[ 'email' ];
    $display = 'block';
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
    <form action="welcome.php" method="post">
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name"><br>
        <label for="email">Email</label><br>
        <input type="email" name="email" id="email"><br>
        <input type="submit" name="submit">
    </form><br>
    <div style="display: <?php echo $display; ?>;">
        <h1>De ingevulde gegevens zijn:</h1>
        <p>Naam: <?php echo $name; ?></p>
        <p>Emailadres:  <?php echo $email; ?></p>
    </div>
</body>
</html>