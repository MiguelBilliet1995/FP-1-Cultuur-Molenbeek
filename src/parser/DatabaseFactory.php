<?php
include_once 'Database.php';
class DatabaseFactory
{

    private static $verbinding;
    public static function getDatabase() {

        if (self::$verbinding == null) {

            $mijnComputernaam = "sql_db";
            $mijnGebruikersnaam = "app_client";
            $mijnWachtwoord = "wJkEq3ejztAGp4DY";
            $mijnDatabase = "fullproject";

            self::$verbinding = new Database($mijnComputernaam, $mijnGebruikersnaam, $mijnWachtwoord, $mijnDatabase);
        }

        return self::$verbinding;
    }
}