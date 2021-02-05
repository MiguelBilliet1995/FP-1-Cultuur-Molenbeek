<?php

include_once("../document_root.php");
include_once("../CRUD/evenementenDB.php");

$status = [0,"Dit is een test status"];

  function generateRandomString($length = 6) {
    $characters = 'azertyuiopqsdfghjklmwxcvbn0123456789AZERTYUIOPQSDFGHJKLMWXCVBN';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }

  $target_dir = "../../data/images/evenementen/";
  $random = 0;

  while(true){
    $random = generateRandomString(10);
    if(!file_exists($target_dir.$random.'.jpg')){
      break;
    }
  }

  $target_file = $target_dir.$random.'.jpg';
  $status[0] = 0;
  $status[1] = "";
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $naam = nl2br(htmlspecialchars($_POST["event-naam"],ENT_QUOTES));
    $prijs = $_POST["event-prijs"];
    $datum = $_POST["event-datum"];
    $tijd = $_POST["event-tijd"];
    $locatie = $_POST["event-locatie"];
    $type = $_POST["event-type"];
    $beschrijving = nl2br(htmlspecialchars($_POST["event-beschrijving"],ENT_QUOTES));
    $taalNiveau = $_POST["event-taalniveau"];

    $check = getimagesize($_FILES["event-foto"]["tmp_name"]);
    if($check !== false) {
      $status[0] = 1;
    } else {
      $status[0] = 2;
      $status[1] = "Kan evenement '".$naam."' niet toevoegen. Geen bestand ontvangen.";
    }

  }

  if($imageFileType != "jpg") {
    $status[0] = 2;
    $status[1] = "Kan evenement '".$naam."' niet toevoegen. Ingevoerde bestand is geen foto. Enkel .jpg toegelaten";
  }

  if ($status[0] = 1) {
      if (move_uploaded_file($_FILES["event-foto"]["tmp_name"], $target_file)) {
      
        // voeg toe aan database

        if(evenementenDB::addEvent($naam, $prijs, $datum, $tijd, $locatie, $beschrijving, $random.'.jpg' /* <- foto */, $type, $taalNiveau)){
          $status[0] = 1;
          $status[1] = "Evenement '".$naam."' succesvol toegevoegd.";
        }else{
          $status[0] = 2;
          $status[1] = "Kan evenement '".$naam."' niet aan de database toevoegen.";
        }


      header("location:../../admin.php?status=".$status[0]."&message=".$status[1]);
      
      } else {
        $status[0] = 2;
        $status[1] = "Kan evenement '".$naam."' niet toevoegen.";
        header("location:../../admin.php?status=".$status[0]."&message=".$status[1]);

      }
  }

?>