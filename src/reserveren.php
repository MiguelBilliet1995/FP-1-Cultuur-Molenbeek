<?php
if(isset($_POST['confirm-reservatie'])){
  $evenement_id = $_GET['id'];
  $voornaam = $_POST['voornaam'];
  $naam = $_POST['naam'];
  $email = $_POST['email'];
  $aantal_1 = $_POST['leeftijd-kind'];
  $aantal_2 = $_POST['leeftijd-tiener'];
  $aantal_3 = $_POST['leeftijd-volwassen'];
  $aantal_4 = $_POST['leeftijd-bejaard'];

  $query= "INSERT INTO inschrijvingen (evenement_id, voornaam, naam, email, aantal_1, aantal_2, aantal_3, aantal_4) VALUES ('$evenement_id', '$voornaam', '$naam', '$email', '$aantal_1', '$aantal_2', '$aantal_3', '$aantal_4')";
  $inhoud = mysqli_query($connectie, $query) or die ("FOUT: " . mysqli_error($connectie));

  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://use.typekit.net/yvs4yrr.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/style-fonts.css">
  <link rel="stylesheet" href="styles/style.css">
  <script src="scripts/script.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://use.typekit.net/yvs4yrr.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/style-fonts.css">
  <link rel="stylesheet" href="styles/style.css">
  <script src="scripts/script.js"></script>
</head>

<body>
    <?php include 'includes/banner.php';?>
    <div class="container">
      <div class="row">
      <?php
      include_once('parser/CRUD/evenementenDB.php');
      $evenement = evenementenDB::getEventById($_GET['id']);
      ?>

        <div class="col-sm-12">
          <a href="evenementen.php" class="return-btn">Terug</a>
        </div>
        <div class="col-sm-12 col-lg-12 event-id-info">
          <h2>Inschrijven voor: <span class="color-base"><?php echo $evenement->naam();?></span></h2>
        </div>
      </div>



      <div class="row">
        <div class="col-sm-12 col-lg-6 event-id-info">
          <img src='data/images/evenementen/<?php echo $evenement->foto();?>'>
          <div class="textbubblecontainer">
              <span class="language">nl:</span>
              <img src="images/icons/speechbubblefull.svg" alt="">
              <img src="images/icons/speechbubblefull.svg" alt="">
              <img src="images/icons/speechbubbleempty.svg" alt="">
              <img src="images/icons/speechbubbleempty.svg" alt="">
              <img src="images/icons/speechbubbleempty.svg" alt="">
            </div>
          <p><?php echo $evenement->beschrijving();?></p>
          <ul class="event-list">
            <li class="event-list-item"><span class="beschrijving">Locatie:</span> <?php echo $evenement->locatie();?></li>
            <li class="event-list-item"><span class="beschrijving">Datum:</span> <?php echo $evenement->datum();?></li>
            <li class="event-list-item"><span class="beschrijving">Prijs:</span> <?php echo $evenement->prijs();?> euro</li>
          </ul>
        </div>
          <div class="col-sm-12 col-lg-6">
            <form action="" method='POST' class="inschrijven">
              <input type="text" name="inschrijven-naam" id="inschrijven-naam" placeholder="naam">
              <input type="text" name="inschrijven-naam" id="inschrijven-naam" placeholder="achternaam">
              <input type="email" name="inschrijven-email" id="inschrijven-email" placeholder="e-mail">
              <fieldset class="participants-container" id="top-duo">
                <fieldset class="label-input-duo">
                  <label for="nultottwaalf">0-12jaar</label>
                  <select name="leeftijd-kind" id="nultottwaalf">
                    <option value="0" selected>0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>

                  <label for="twaalftotachttien">12-18jaar</label>
                  <select name="leeftijd-tiener" id="twaalftotachttien">
                    <option value="0" selected>0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </fieldset>

                <fieldset class="label-input-duo">
                  <label for="achttientotoud">18-65jaar</label>
                  <select name="leeftijd-volwassen" id="achttientotoud">
                    <option value="0" selected>0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>

                  <label for="oudplus">+65jaar</label>
                  <select name="leeftijd-bejaard" id="oudplus">
                    <option value="0" selected>0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </fieldset>
                <input type="submit" name="confirm-reservatie" value="Reserveer">
              </fieldset>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <?php include 'includes/footer.php'; ?>
</body>

</html>