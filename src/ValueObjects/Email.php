<?php

namespace Pokedex\ValueObjects;

use Pokedex\AbstractEmail;
use Pokedex\Exceptions\EmailException;

class Email extends AbstractEmail {

    private $email;

    /**
     * Email constructor that validates the user email address
     * @param string $email user defined email address
     * @throws EmailException
     */
    public function __construct(string $email) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new EmailException('Invalid email address');
        }
        $this->email = $email;
    }

    /**
     * Function allows the object to return the email address as a string
     * @return string of the email address
     */
    public function __toString()
    {
        return $this->email;
    }

}