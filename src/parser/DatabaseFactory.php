<?php
include_once 'Database.php';
class DatabaseFactory
{

    private static $verbinding;
    public static function getDatabase() {

        $use_local_DB = true;

        if (self::$verbinding == null) {

            if($use_local_DB==true){
                $mijnComputernaam = "localhost";
                $mijnGebruikersnaam = "app_client";
                $mijnWachtwoord = "wJkEq3ejztAGp4DY";
                $mijnDatabase = "fullproject";
            }else{
                $mijnComputernaam = "https://web1.64ip.net/";
                $mijnGebruikersnaam = "gillmert_mb";
                $mijnWachtwoord = "Molenbeek2021";
                $mijnDatabase = "gillmert_molenbeek";
            }

            self::$verbinding = new Database($mijnComputernaam, $mijnGebruikersnaam, $mijnWachtwoord, $mijnDatabase);
        }
        return self::$verbinding;
    }
}