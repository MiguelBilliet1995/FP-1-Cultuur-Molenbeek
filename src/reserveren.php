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
        <div class="col-sm-12">
          <a href="evenementen.php" class="return-btn">Terug</a>
        </div>
        <div class="col-sm-12 col-lg-12 event-id-info">
          <h2>Inschrijven voor: <span class="color-base">wandeling door het bos</span></h2>
        </div>
      </div>



      <div class="row">
        <div class="col-sm-12 col-lg-6 event-id-info">
          <img src='data/images/evenementen/evenementen_2.jpg'>
          <div class="textbubblecontainer">
              <img src="images/icons/speechbubblefull.svg" alt="">
              <span class="language">nl</span>
          </div>
          <p>Elke woensdag organiseert familie Molenbeek in samenwerking met Sport Molenbeek sportieve activiteiten voor kinderen op verschillende Molenbeekse pleinen. Klik verder voor meer info.</p>
          <ul class="event-list">
            <li class="event-list-item"><span class="beschrijving">Locatie:</span> Parijsstraat 30 leuven</li>
            <li class="event-list-item"><span class="beschrijving">Datum:</span> Donderdag, 31januari</li>
            <li class="event-list-item"><span class="beschrijving">Prijs:</span> 4 euro</li>
          </ul>
        </div>
          <div class="col-sm-12 col-lg-6">
            <form action="" method='POST' class="inschrijven">
              <input type="text" name="inschrijven-naam" id="inschrijven-naam" placeholder="naam">
              <input type="text" name="inschrijven-naam" id="inschrijven-naam" placeholder="achternaam">
              <input type="email" name="inschrijven-email" id="inschrijven-email" placeholder="e-mail">
              <div class="participants-container" id="top-duo">
                <div class="label-input-duo">
                  <label for="nultottwaalf">0-12jaar</label>
                  <select name="leeftijd" id="nultottwaalf">
                    <option value="0" selected>0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>

                  <label for="twaalftotachttien">12-18jaar</label>
                  <select name="leeftijd" id="twaalftotachttien">
                    <option value="0" selected>0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>

                <div class="label-input-duo">
                  <label for="achttientotoud">18-65jaar</label>
                  <select name="leeftijd" id="achttientotoud">
                    <option value="0" selected>0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>

                  <label for="oudplus">+65jaar</label>
                  <select name="leeftijd" id="oudplus">
                    <option value="0" selected>0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <input type="submit" name="confirm-reservatie" value="Reserveer">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <?php include 'includes/footer.php'; ?>
</body>

</html>