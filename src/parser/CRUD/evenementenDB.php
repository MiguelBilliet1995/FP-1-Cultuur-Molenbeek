<?php
include_once('parser/CRUD/evenementen.php');
include_once('parser/DatabaseFactory.php');

class evenementenDB{

    private static function getVerbinding() {
        return DatabaseFactory::getDatabase();
    }

    public static function getAll(){
		$resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM evenementen ORDER BY id DESC");
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;
    }

    public static function getEventById($id){
        $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM evenementen WHERE id = '?'", array($id));
        if ($resultaat->num_rows == 1) {
            $databaseRij = $resultaat->fetch_array();
            return self::converteerRijNaarObject($databaseRij);
        } else {
            return false;
        }
    }

    public static function addEvent($naam, $prijs, $datum, $uur, $locatie, $beschrijving, $foto, $type){
        $resultaat = self::getVerbinding()->voerSqlQueryUit("INSERT INTO evenementen (naam, prijs, datum, uur, locatie, beschrijving, foto, type) VALUES ('?','?','?','?','?','?','?','?');");
        return true;
    }

    public static function deleteEvent($id){
        $resultaat = self::getVerbinding()->voerSqlQueryUit("DELETE FROM evenementen WHERE id = '?'");
        if($resultaat){
            return true;
        }
    }

    // sorteer functies


    // Bv.: evenementenDB::getEventBy("type","kinderen","prijs","ASC");

    public static function getEventBy($columnName, $data, $sort, $sortingDirection){

        if($sort==null){
            $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM evenementen WHERE ? = '?'", array($columnName, $data));
        }else{
            if($sortingDirection==null){
                $sortingDirection = "DESC";
            }
            $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM evenementen WHERE ? = '?' ORDER BY ? ?", array($columnName, $data, $sort, $sortingDirection));

        }

        
        $resultatenArray = array();
        for ($index = 0; $index < $resultaat->num_rows; $index++) {
            $databaseRij = $resultaat->fetch_array();
            $nieuw = self::converteerRijNaarObject($databaseRij);
            $resultatenArray[$index] = $nieuw;
        }
        return $resultatenArray;

        
    }





    // obeject aanmaken

    public static function converteerRijNaarObject($databaseRij){
        return new evenementen($databaseRij['id'], $databaseRij['naam'],
            $databaseRij['prijs'], $databaseRij['datum'], $databaseRij['uur'],
            $databaseRij['locatie'], $databaseRij['beschrijving'], $databaseRij['foto'], $databaseRij['type']);
    }

}
?>