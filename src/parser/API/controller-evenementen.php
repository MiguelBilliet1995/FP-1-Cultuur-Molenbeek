<?php

include_once("../document_root.php");
include_once("../CRUD/evenementenDB.php");
include_once("../CRUD/inschrijvingenDB.php");

if(isset($_POST["delete"])){
  $eventId = $_POST["delete"];

  inschrijvingenDB::deleteAllFromEventId($eventId);

  if(file_exists("../../data/images/evenementen/".evenementenDB::getEventById($eventId)->foto())){
    unlink("../../data/images/evenementen/".evenementenDB::getEventById($eventId)->foto());
  }

  evenementenDB::deleteEvent($eventId);

  echo 0;
  exit();
}

if(isset($_POST["change"])){
  $eventId = $_POST["change"];

  if($_POST["table"]=="event"){

    $field = $_POST["field"];
    evenementenDB::updateOne($eventId, $_POST["field"], $_POST["value"]);

    echo 0;
    exit();

  }else{

    echo "Verkeerde table.";
    exit();
    
  }
}

?>