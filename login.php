<?php
require_once ('vendor/autoload.php');

use Pokedex\ViewHelpers\LoginViewHelper;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Cantarell:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/pokestyles.css">
    <title>Pokédex</title>
</head>
<body>
<header>
    <img src="img/pokeball.svg">
    <h1>POKÈDEX</h1>
</header>
<main>
    <form method="post" action="emailValidation.php">
        <input class="email" name="email" id="email" alt="email" type="email" placeholder=" Email...">
        <input class="loginbutton" type="submit" value="Login">
    </form>
    <p class="login-error">
        <?php echo LoginViewHelper::outputError($_GET); ?>
    </p>
</main>
</body>
</html>
