<?php
include_once 'Database.php';
class DatabaseFactory
{

    private static $verbinding;
    public static function getDatabase() {

        $use_local_DB = true;

        if (self::$verbinding == null) {

            if($use_local_DB==true){
                $mijnComputernaam = "";
                $mijnGebruikersnaam = "";
                $mijnWachtwoord = "";
                $mijnDatabase = "";
            }else{
                $mijnComputernaam = "";
                $mijnGebruikersnaam = "";
                $mijnWachtwoord = "";
                $mijnDatabase = "";
            }

            self::$verbinding = new Database($mijnComputernaam, $mijnGebruikersnaam, $mijnWachtwoord, $mijnDatabase);
        }
        return self::$verbinding;
    }
}