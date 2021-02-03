<?php

require $_SERVER['DOCUMENT_ROOT'].'/lib/rb.php';
include_once("../CRUD/evenementenDB.php");

function evenementenObjArrToJsonArr($objArr){
  $evenementenJSON = array();
  foreach($objArr as $evenement){
    print_r($evenement);
    array_push($evenementenJSON, array('id' => $evenement->id(), 'naam' => $evenement->naam(), 'prijs' => $evenement->prijs(), 'datum' => $evenement->datum(), 'uur' => $evenement->uur(), 'locatie' => $evenement->locatie(), 'beschrijving' => $evenement->beschrijving(), 'foto' => $evenement->foto(), 'type' => $evenement->type()));
  }
  return json_encode($evenementenJSON, JSON_FORCE_OBJECT);
}


$json = file_get_contents('php://input');
$data = json_decode($json);

if($data->filter&&$data->sort){
  if(!$data->sortdirection){
    $sort = "DESC";
  }else{
    $sort = $data->sortdirection;
  }

  $evenementen = evenementenDB::getEventBy($data->filter, $data->filterdata, $data->sort, $sort);
  echo evenementenObjArrToJsonArr($evenementen);

}elseif($data->filter&&!$data->sort){
  $evenementen = evenementenDB::getEventBy($data->filter, $data->filterdata, null, null);
  echo evenementenObjArrToJsonArr($evenementen);

}elseif(!$data->filter&&$data->sort){
  if(!$data->sortdirection){
    $sort = "DESC";
  }else{
    $sort = $data->sortdirection;
  }

  $evenementen = evenementenDB::getEventBy(null, null, $data->sort, $sort);
  echo evenementenObjArrToJsonArr($evenementen);

}

?>