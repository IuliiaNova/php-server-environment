<?php
session_start();

if (!isset($_SESSION["user"]) || !isset($_SESSION["password"])) {
    header("Location: ./index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privado</title>
</head>
<body>
    <h1>Private page</h1>
    <?php
    $username = "Iuliia";
    echo "Welcome $username <br><br>";
    echo "<b>Your session dates:</b> <br> Browser: $_SERVER[HTTP_USER_AGENT],<br> IP: $_SERVER[REMOTE_ADDR],<br> Username: $_SESSION[user],<br> Password: $_SESSION[password]<br>";

    ?>
    <br>
    <div>
        <a href="./close_session.php">Close session</a>
    </div>
</body>
</html>