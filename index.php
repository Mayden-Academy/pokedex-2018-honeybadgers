<?php

session_start();

if (!$_SESSION['loggedIn']) {
    header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pokédex</title>
</head>
<body>

</body>
</html>