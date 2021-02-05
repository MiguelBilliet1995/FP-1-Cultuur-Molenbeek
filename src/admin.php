<?php

  include_once("parser/CRUD/inschrijvingenDB.php");
  include_once("parser/CRUD/evenementenDB.php");
  include_once("parser/CRUD/newsDB.php");

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



  // posts

  //if(isset($_POST["add-event"])){

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $naam = nl2br(htmlspecialchars($_POST["event-naam"],ENT_QUOTES));
    $prijs = $_POST["event-prijs"];
    $datum = $_POST["event-datum"];
    $tijd = $_POST["event-tijd"];
    $locatie = $_POST["event-locatie"];
    $type = $_POST["event-type"];
    $beschrijving = nl2br(htmlspecialchars($_POST["event-beschrijving"],ENT_QUOTES));
    $taalNiveau = $_POST["event-taalniveau"];

    // fix foto

    $target_dir = "/data/images/evenementen/";
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

    $check = getimagesize($_FILES["foto"]["tmp_name"]);
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
      if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
      
        // voeg toe aan database

        if(evenementenDB::addEvent($naam, $prijs, $datum, $tijd, $locatie, $beschrijving, $random /* <- foto */, $type, $taalNiveau)){
          $status[0] = 1;
          $status[1] = "Evenement '".$naam."' succesvol toegevoegd.";
        }else{
          $status[0] = 2;
          $status[1] = "Kan evenement '".$naam."' niet toevoegen.";
        }


      header("location:../blog_detail.php?id=".$id);
      
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Familie Molenbeek - Admin panel</title>

  <link rel="stylesheet" href="https://use.typekit.net/yvs4yrr.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/admin-panel.css">
  <!--<link rel="stylesheet" href="styles/style.css">-->
  <link rel="stylesheet" href="styles/style-fonts.css">
  <script src="scripts/script.js"></script>

</head>
<body>

  <?php //include_once("includes/banner.php") ?>

  <!-- notitiebox -->

  <?php
    switch($status[0]){
      case 1:
  ?>
    <div class="container status-alert ok"><?php echo $status[1]; ?></div>
  <?php
        break;
      case 2:
  ?>
    <div class="container status-alert error"><?php echo $status[1]; ?></div>
  <?php
        break;
    }
  ?>

  <!-- modal boxes -->

  <div class="modalbox-container item">

    <div class="modal-box" id="new-event">
      
      <form action="admin.php" enctype="multipart/form-data" method="post" class="modal-box-form">
        
        <!-- fotobox -->

        <div class="row">
          <h3>Nieuwe evenement toevoegen</h3>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <label for="event-naam">Naam</label>
            <input type="text" name="event-naam" id="event-naam">
          </div>
          <div class="col-sm-6">
            <label for="event-prijs">Prijs (€)</label>
            <input type="number" name="event-prijs" id="event-prijs" min="0" step="0.01" value="0.00">
          </div>
          <div class="col-sm-6">
            <label for="event-datum">Datum</label>
            <input type="date" name="event-datum" id="event-datum">
          </div>
          <div class="col-sm-6">
            <label for="event-tijd">Begin uur</label>
            <input type="time" name="event-tijd" id="event-tijd">
          </div>
          <div class="col-sm-6">
            <label for="event-locatie">Locatie</label>
            <input type="text" name="event-locatie" id="event-locatie">
          </div>
          <div class="col-sm-6">
            <label for="event-type">Categorie</label>
            <select id="event-type" name="event-type">
              <option value="" selected="selected">Kies een type</option>
              <option value="kleuters">Kleuters</option>
              <option value="kinderen">Kinderen</option>
              <option value="jongeren" >Jongeren</option> 
            </select>
          </div>
          <div class="col-sm-6">
            <label for="event-beschrijving">Beschrijving</label>
            <textarea id="event-beschrijving" name="event-beschrijving"></textarea>
          </div>
          <div class="col-sm-6">
            <div class="form-event-picture">
              <input type="file" name="foto" id="foto" accept="image/jpeg">
            </div>
          </div>
          <div class="col-sm-6">
            <label for="event-taalniveau">Taalniveau</label>
            <select id="event-taalniveau" name="event-taalniveau">
              <option value="">Kies een taal niveau</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
          
        </div>

        <div class="row">
          <input type="button" value="Annuleer" onClick="closeAllModalBox()">
          <input type="submit" value="opslaan" name="add-event">
        </div>

      </form>
    </div>



    <!--<div class="modal-box" id="delete-event">
    </div>-->


  </div>

  <!-- admin -->

  <div class="container">
  
    <div class="row">
    
      <div class="card">
        <div class="menu-box">
          <div class="row">
            <div class="col-sm-8">
              <h3>Evenementen</h3>
            </div>
            <div class="col-sm-4">
              <span class="button button-refresh" id="event-refresh-all"></span>
              <span class="button button-undo blocked" id="event-undo-all"></span>
              <span class="button button-save blocked" id="event-save-all"></span>
              <span class="button button-add" id="event-add" onClick="openModalBox('new-event')"></span>
            </div>
          </div>
        </div>

        <div class="content">

          <?php
            $evenementen = evenementenDB::getAll();
            foreach($evenementen as $evenement){
          ?>

          <div class="item">
            <div class="event-top row" id="event-top-<?php echo $evenement->id(); ?>">

              <div class="col-sm-4">
                <label for="event-naam-<?php echo $evenement->id(); ?>">Naam</label>
                <input type="text" class="check-changed" id="event-naam-<?php echo $evenement->id(); ?>" value="<?php echo $evenement->naam(); ?>">
              </div>

              <div class="col-sm-2">
                <label for="event-prijs-<?php echo $evenement->id(); ?>">Prijs</label>
                <input type="number" class="check-changed" id="event-prijs-<?php echo $evenement->id(); ?>" step="0.01" value="<?php echo $evenement->prijs(); ?>">
              </div>

              <div class="col-sm-2">
                <label for="event-datum-<?php echo $evenement->id(); ?>">Datum</label>
                <input type="date" class="check-changed" id="event-datum-<?php echo $evenement->id(); ?>" value="<?php echo $evenement->datum(); ?>">
              </div>

              <div class="col-sm-2">
                <label for="event-uur-<?php echo $evenement->id(); ?>">Begin uur</label>
                <input type="time" class="check-changed" id="event-uur-<?php echo $evenement->id(); ?>" value="<?php echo $evenement->uur(); ?>">
              </div>

              <div class="col-sm-2">
                <span class="button button-delete" id="event-delete-<?php echo $evenement->id(); ?>"></span>
                <span class="button button-detail" id="event-detail-<?php echo $evenement->id(); ?>"></span>
                <span class="button button-undo blocked" id="event-undo-<?php echo $evenement->id(); ?>"></span>
              </div>

            </div>
            <div class="event-bottom row" id="event-bottom-<?php echo $evenement->id(); ?>">

              <div class="col-sm-4">
                <img src="data/images/evenementen/<?php echo $evenement->foto(); ?>" alt="">
              </div>

              <div class="col-sm-4">
                <div class="row">
                  <label for="event-locatie-<?php echo $evenement->id(); ?>">Locatie</label>
                  <input type="text" class="check-changed" id="event-locatie-<?php echo $evenement->id(); ?>" value="<?php echo $evenement->locatie(); ?>">
                </div>

                <div class="row">
                  <label for="event-type-<?php echo $evenement->id(); ?>">Categorie</label>
                  <select class="check-changed" id="event-type-<?php echo $evenement->id(); ?>" value="<?php echo $evenement->type(); ?>">
                    <option value="">Kies een type</option>
                    <?php
                      switch($evenement->type()){
                        case 'kleuters':
                    ?>
                    <option value="kleuters" selected="selected">Kleuters</option>
                    <option value="kinderen">Kinderen</option>
                    <option value="jongeren">Jongeren</option>
                    <?php
                          break;
                        case 'kinderen':
                    ?>
                    <option value="kleuters">Kleuters</option>
                    <option value="kinderen" selected="selected">Kinderen</option>
                    <option value="jongeren">Jongeren</option>
                    <?php
                          break;
                        case 'jongeren':
                    ?>
                    <option value="kleuters">Kleuters</option>
                    <option value="kinderen">Kinderen</option>
                    <option value="jongeren" selected="selected">Jongeren</option>
                    <?php
                          break;
                      }
                    ?>
                    
                  </select>
                </div>

                <div class="row">
                  <label for="event-beschrijving-<?php echo $evenement->id(); ?>">Beschrijving</label>
                  <textarea class="check-changed" id="event-beschrijving-<?php echo $evenement->id(); ?>"><?php echo $evenement->beschrijving(); ?></textarea>
                </div>

                <div class="row">
                  <label for="event-taalniveau-<?php echo $evenement->id(); ?>">Taalniveau</label>
                  <select class="check-changed" id="event-taalniveau-<?php echo $evenement->id(); ?>">
                      <option value="">Kies een taal niveau</option>
                      <option value="1" <?php if($evenement->taalNiveau()==1){?> selected="selected" <?php } ?>>1</option>
                      <option value="2" <?php if($evenement->taalNiveau()==2){?> selected="selected" <?php } ?>>2</option>
                      <option value="3" <?php if($evenement->taalNiveau()==3){?> selected="selected" <?php } ?>>3</option>
                      <option value="4" <?php if($evenement->taalNiveau()==4){?> selected="selected" <?php } ?>>4</option>
                  </select>
                </div>
                
              </div>
              <div class="col-sm-4">
                

                <?php
                  $inschrijvingen = inschrijvingenDB::getInschrijvingenByEventId($evenement->id());

                  if(count($inschrijvingen) < 1){
                ?>
                  Er zijn nog geen registraties.
                <?php
                  }else{
                ?>
                  <label style="left:15px">Inschrijvingen</label>
                  <table>
                  <thead>
                    <tr>
                      <td>Naam</td>
                      <td>Email</td>
                      <td>Aantal personen</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                <?php
                    foreach($inschrijvingen as $inschrijving){
                      ?>
                        <tr>
                          <td><?php echo $inschrijving->voornaam().' '.$inschrijving->naam(); ?></td>
                          <td><?php echo $inschrijving->email(); ?></td>
                          <td><?php echo ($inschrijving->aantal_1() + $inschrijving->aantal_2() + $inschrijving->aantal_3() + $inschrijving->aantal_4()) ?></td>
                          <td>
                            <!--<span class="button button-delete" id="inschrijving-delete-<?php echo $inschrijving->id(); ?>"></span>-->
                          </td>
                        </tr>
                      <?php
                    }
                ?>
                  </tbody>
                  </table>
                <?php
                  }
                ?>
              </div>

            </div>
          </div>

          <?php
            }
          ?>


        </div>
            


      </div>
    
    </div>

  
  </div>

  <script src="scripts/admin.js"></script>
  
</body>
</html>