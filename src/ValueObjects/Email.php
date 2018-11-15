<?php

namespace Pokedex\ValueObjects;

use Pokedex\AbstractEmail;
use \Pokedex\Exceptions\EmailException;

class Email extends AbstractEmail {

    private $email;

    public function __construct($email) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new EmailException('Invalid email address');
        }
        $this->email = $email;
    }

    public function __toString()
    {
        return $this->email;
    }

}