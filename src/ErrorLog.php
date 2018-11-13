<?php
namespace Pokedex;

class ErrorLog
{

    private const ERROR_LOG = 'errorLog.txt';

    /** This logs messages to the error log
     * @param string $error Message can be user defined or accessed from Exception object
     */
    public static function log(string $errorMessage) {
        $errorLog = fopen(self::ERROR_LOG, 'a');
        fwrite($errorLog, $errorMessage . " " . date("Y/m/d H:i:s") . "\n");
        fclose($errorLog);
    }
}