<?php
namespace Pokedex\ViewHelpers;


class LoginViewHelper
{
    public static function outputError($get)
    {
        if (isset($get['error'])) {
            switch ($get['error']) {
                case 1:
                    return 'Your email address is invalid';
                    break;
                case 2:
                    return 'An unknown error has occurred';
                    break;
                case 3:
                    return 'An email address is required';
                    break;
            }
        }

    }

}