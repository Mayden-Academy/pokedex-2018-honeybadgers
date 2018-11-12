<?php

require_once ('vendor/autoload.php');

use Pokedex\ValueObjects\Email;
use Pokedex\Exceptions\EmailException;

$userEmail = $_POST['tbc'] ?? FALSE; //$_POST['tbc'] needs to be replaced with actual input name

if ($userEmail) {
    try {
        $emailObj = new Email($userEmail);
    } catch (EmailException $e) {
        header('Location:login.php?error=1'); // error1 invalid email address.
        exit();
    } catch (Exception $e) {
        $errorLog = fopen('errorLog.txt', 'w');
        fwrite($errorLog, $e->getMessage() . "\n");
        fclose($errorLog);
        header('Location:login.php?error=2'); //error2 should provide non specific message to user.
        exit();
    }
    //implement database functionality here i.e check if email address exists - add email address/log user in
} else {
    header('Location:login.php?error=3'); //no email detected
    exit();
}

