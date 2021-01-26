<?php
include_once('parser/CRUD/evenementen.php');
include_once('parser/DatabaseFactory.php');

class newsDB{

    private static function getVerbinding() {
        return DatabaseFactory::getDatabase();
    }

    public static function getAll(){
		$resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM news ORDER BY id DESC");
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getEventById($id){
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM news WHERE id = '?'", array($id));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            return false;
        }
    }

    public static function converteerRijNaarObject($databaseRij){
        return new news($databaseRij['id'], $databaseRij['naam'], $databaseRij['datum'], $databaseRij['artikel'], $databaseRij['foto']);
    }

}
?>