<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/parser/CRUD/inschrijvingen.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/parser/DatabaseFactory.php');

class inschrijvingenDB{

  private static function getVerbinding(){
    return DatabaseFactory::getDatabase();
  }

  public static function getAll(){
    $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM inschrijvingen ORDER BY id DESC");
    $resultatenArray = array();
    for ($index = 0; $index < $resultaat->num_rows; $index++) {
      $databaseRij = $resultaat->fetch_array();
      $nieuw = self::converteerRijNaarObject($databaseRij);
      $resultatenArray[$index] = $nieuw;
    }
    return $resultatenArray;
  }

  public static function getInschrijvingById($id){
    $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM inschrijvingen WHERE id = '?'", array($id));
    if ($resultaat->num_rows == 1) {
      $databaseRij = $resultaat->fetch_array();
      return self::converteerRijNaarObject($databaseRij);
    } else {
      return false;
    }
  }

  public static function getInschrijvingenByEventId($eventId){
    $resultaat = self::getVerbinding()->voerSqlQueryUit("SELECT * FROM inschrijvingen WHERE evenement_id = '?' ORDER BY id DESC", array($eventId));
    $resultatenArray = array();
    for ($index = 0; $index < $resultaat->num_rows; $index++) {
      $databaseRij = $resultaat->fetch_array();
      $nieuw = self::converteerRijNaarObject($databaseRij);
      $resultatenArray[$index] = $nieuw;
    }
    return $resultatenArray;
  }

  public static function deleteInschrijving($id){
    $resultaat = self::getVerbinding()->voerSqlQueryUit("DELETE FROM inschrijvingen WHERE id = '?'", array($id));
    if($resultaat){
      return true;
    }
  }

  public static function deleteAllFromEventId($id){
    $resultaat = self::getVerbinding()->voerSqlQueryUit("DELETE FROM inschrijvingen WHERE evenement_id = '?'", array($id));
    if($resultaat){
      return true;
    }
  }

  public static function addInschrijving($evenementId, $voornaam, $naam, $email, $aantal_1, $aantal_2, $aantal_3, $aantal_4){
    $resultaat = self::getVerbinding()->voerSqlQueryUit("INSERT INTO inschrijvingen (evenement_id, voornaam, naam, email, aantal_1, aantal_2, aantal_3, aantal_4) VALUES ('?','?','?','?','?','?','?','?')",array($evenementId, $voornaam, $naam, $email, $aantal_1, $aantal_2, $aantal_3, $aantal_4));
    if($resultaat){
      return true;
    }
  }

  public static function converteerRijNaarObject($databaseRij){
    return new inschrijvingen($databaseRij['id'], $databaseRij['evenement_id'], $databaseRij['voornaam'],
    $databaseRij['naam'], $databaseRij['email'], $databaseRij['aantal_1'], $databaseRij['aantal_2'],
    $databaseRij['aantal_3'], $databaseRij['aantal_4']);
  }

}


?>