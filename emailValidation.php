<?php
session_start();

require_once ('vendor/autoload.php');

use Pokedex\ValueObjects\Email;
use Pokedex\Exceptions\EmailException;
use Pokedex\User;
use Pokedex\DbConnection;
use Pokedex\ErrorLog;

$userEmail = $_POST['email'] ?? FALSE;

if ($userEmail) {
    try {
        $emailObj = new Email($userEmail);
    } catch (EmailException $e) {
        header('Location:login.php?error=1');
        exit();
    } catch (Exception $e) {
        ErrorLog::log($e->getMessage());
        header('Location:login.php?error=2');
        exit();
    }

    $db = new DbConnection;
    $db = $db->getDB();
    $user = new User($emailObj, $db);

    $_SESSION['loggedIn'] = TRUE;
    header('Location:index.php');

} else {
    header('Location:login.php?error=3');
    exit();
}

