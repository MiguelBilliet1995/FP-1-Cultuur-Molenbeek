<?php
// Takes raw data from the request
$json = file_get_contents('php://input');

// Converts it into a PHP object
$data = json_decode($json);
print_r($data);

// if(isset($_POST['filter'])&&isset($_POST['sort'])){
//   echo "filter en sort";
//   if(!isset($_POST['sortdirection'])){
//     $_POST['sortdirection'] = "DESC";
//   }
//   $evenementen = evenementenDB::getEventBy($_POST['filter'], $_POST['filterdata'], $_POST['sort'], $_POST['sortdirection']);
//   $evenementenJson = json_encode($evenementen);
//   print_r($evenementenJson);
// }elseif(isset($_POST['filter'])&&!isset($_POST['sort'])){
//     mkdir("test/");
//   echo "filter zonder sort";
//   $evenementen = evenementenDB::getEventBy($_POST['filter'], $_POST['filterdata'], null, null);
// }elseif(!isset($_POST['filter'])&&isset($_POST['sort'])){
//   echo "sort zonder filter";
//   if(!isset($_POST['sortdirection'])){
//     $_POST['sortdirection'] = "DESC";
//   }
//   $evenementen = evenementenDB::getEventBy(null, null, $_POST['sort'], $_POST['sortdirection']);
// }

?>