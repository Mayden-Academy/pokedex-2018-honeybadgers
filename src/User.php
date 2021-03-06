<?php
namespace Pokedex;

use Pokedex\Abstracts\AbstractEmail;

class User
{
    private $email;

    /**
     * User constructor that checks if email address exists in the database.  Adds email address if it does not exist.
     * @param AbstractEmail $email the validated email address from the user
     * @param resource $db the database connection
     */
    public function __construct(AbstractEmail $email, \PDO $db)
    {
        $this->email = $email;

        try {
            $stmt = $db->prepare('SELECT `id`, `email` FROM `users` WHERE `email` = :email;');
            $stmt->execute([':email' => $this->email]);
            $count = $stmt->rowCount();

            if (!$count) {
                $stmt = $db->prepare('INSERT INTO `users` (`email`) VALUES (:email);');
                $stmt->execute(['email'=>$this->email]);
            }
        } catch (\Exception $e) {
            ErrorLog::log($e->getMessage());
            header('Location:login.php?error=2');
        }
    }
}