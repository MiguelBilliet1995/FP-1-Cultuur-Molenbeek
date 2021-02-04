<?php

  include_once("parser/CRUD/inschrijvingenDB.php");
  include_once("parser/CRUD/evenementenDB.php");
  include_once("parser/CRUD/newsDB.php");

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
              <span class="button button-add" id="event-add"></span>
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
                <input type="text" id="event-naam-<?php echo $evenement->id(); ?>" value="<?php echo $evenement->naam(); ?>">
              </div>

              <div class="col-sm-2">
                <input type="number" id="event-prijs-<?php echo $evenement->id(); ?>" value="<?php echo $evenement->prijs(); ?>">
              </div>

              <div class="col-sm-2">
                <input type="date" id="event-datum-<?php echo $evenement->id(); ?>" value="<?php echo $evenement->datum(); ?>">
              </div>

              <div class="col-sm-2">
                <input type="time" id="event-uur-<?php echo $evenement->id(); ?>" value="<?php echo $evenement->uur(); ?>">
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
                  <input type="text" id="event-locatie-<?php echo $evenement->id(); ?>" value="<?php echo $evenement->locatie(); ?>">
                </div>

                <div class="row">
                  <select id="event-type-<?php echo $evenement->id(); ?>" value="<?php echo $evenement->type(); ?>">
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
                  <textarea id="event-beschrijving-<?php echo $evenement->id(); ?>"><?php echo $evenement->beschrijving(); ?></textarea>
                </div>
                
              </div>
              <div class="col-sm-4">
                <?php
                  $inschrijvingen = inschrijvingenDB::getInschrijvingenByEventId($evenement->id());
                  print_r($inschrijvingen);
                  foreach($inschrijvingen as $inschrijving){
                ?>



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