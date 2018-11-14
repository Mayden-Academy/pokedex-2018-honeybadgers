<?php
namespace Pokedex;


class User
{

    private $email;

    public function __construct(AbstractEmail $email)
    {
        $this->email = $email;
        echo $this->email;
    }




}