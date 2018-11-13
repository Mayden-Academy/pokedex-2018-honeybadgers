<?php
namespace Pokedex;


class User
{
    private $email;

    public function __construct(AbstractEmail $email, $db)
    {
        $this->email = $email;

        $stmt = $db->prepare('SELECT `id`, `email` FROM `users` WHERE `email` = :email;');
        $stmt->execute([':email' => $this->email]);
        $count = $stmt->rowCount();

        if (!$count) {
            $stmt = $db->prepare('INSERT INTO `users` (`email`) VALUES (:email);');
            $stmt->execute(['email'=>$this->email]);
        }

    }




}