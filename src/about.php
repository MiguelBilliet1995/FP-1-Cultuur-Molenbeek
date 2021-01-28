<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://use.typekit.net/yvs4yrr.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="styles/style-fonts.css">
</head>

<body>

  <header>
    <div class="container dropup">
      <a href="index.html"><img src="images/logos/logo-met-text.svg" alt="logo" class="logo"></a>
      <button class="dropbtn">Menu</button>
      <ul class="dropup-content">
        <li><a href="index.html" id="home">Home</a></li>
        <li><a href="evenementen.html" id="kalender">Kalender</a></li>
        <li><a href="news.html" id="nieuws">Nieuws</a></li>
        <li><a href="about.html" id="over-ons" class="active">Over ons</a></li>
        <li><a href="contact.php" id="contact">Contact</a></li>
      </ul>
    </div>
    </div>
  </header>

  <div class="container">


    <div class="row about">
      <div class="col-sm-4">
        <img src="./images/about_us.jpg" alt="De oprichters van familie molenbeek">
      </div>
      <div class="col-sm-8 align-bottom">
        <h1>Wij zijn familie Molenbeek.</h1>
        <span class="column-2">
          <p>Familie Molenbeek is een organisatorische samenwerking tussen Cultuur in Molenbeek, Vaartkapoen en de Bib.
            Wij steken de handen in elkaar omeen grootschalig aanboda ctiviteiten aan te bieden voor zowel kinderen als
            volwassenen om zich te ontspannen, nieuwe contacten te leggen, te leren en te ontdekken. Wij leggen ons ten
            volle toe aan het bieden van een duidelijk overzicht voor alle inwoners met een beperkte of uitgebreide
            kennis van de Nederlandse taal. Ons streefdoel is mensen samen te brengen binnen het unieke kader van onze
            gemeente en een platform te creëren dat zich openstelt voor iedereen.</p>
        </span>
      </div>
    </div>

    <div class="row gallery">
      <div class="col-sm-4">
        <img src="./images/boswandeling.jpg" alt="sfeerbeeld 11">
      </div>
      <div class="col-sm-4">
        <img src="./images/sfeer_6.jpg" alt="sfeerbeeld 11">
      </div>
      <div class="col-sm-4">
        <img src="./images/sfeer_14.jpg" alt="sfeerbeeld 11">
      </div>
      <div class="col-sm-4">
        <img src="./images/sfeer_10.jpg" alt="sfeerbeeld 11">
      </div>
      <div class="col-sm-4">
        <img src="./images/sfeer_11.jpg" alt="sfeerbeeld 11">
      </div>
      <div class="col-sm-4">
        <img src="./images/sport.jpg" alt="sfeerbeeld 11">
      </div>
      <div class="col-sm-4">
        <img src="./images/the-art-of-story-telling.jpeg" alt="sfeerbeeld 11">
      </div>
      <div class="col-sm-4">
        <img src="./images/theater.jpg" alt="sfeerbeeld 11">
      </div>
      <div class="col-sm-4">
        <img src="./images/rommelmarkt.jpg" alt="sfeerbeeld 11">
      </div>
    </div>
  </div>
  <?php include 'include/footer.php'; ?>
  <script defer src="./scripts/all.js"></script>
  <script src="scripts/script.js"></script>
</body>

</html>