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
  <script src="scripts/script.js"></script>
</head>

<body>
  <?php include_once("includes/banner.php"); ?>


  <div class="container">
    <div class="row index">
      <div class="col-sm-7">
        <div id="bm"></div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.0/lottie_html.js"></script>
        <script src="scripts/homepage-anim.js"></script>
      </div>
      <div class="col align-center">
        <span>
          <h1 id="homepageslogan">Alles is leuker met familie!</h1>
          <p>Er is niets beter dan met familie samen zijn. Wij bij Molenbeek Nest geven inwoners van Molenbeek
            de kans om elke week samen met de familie deel te nemen aan onze activiteiten. Dit is de perfecte manier
            voor nieuwe inwoners om de stad te leren kennen en nieuwe vrienden te maken. </p>
          <a href="evenementen.php">
            <div class="button-container mt-5">
              <div class="button button-next">
                <p>Schrijf je nu in!</p>
              </div>
            </div>
          </a>
      </div>
      </span>
    </div>


    <div class="row">
      <div class="col-sm-4">
      <a href=evenementen.php>
        <div class="photo-square kinderen">
          <img src="./images/illustraties/kleuters.svg">
          <h1>Gezinnen met kleuters</h1>
        </div>
      </a>
      </div>
      <div class="col-sm-4">
      <a href=evenementen.php>
        <div class="photo-square ouders">
          <img src="./images/illustraties/tieners.svg">
          <h1>Gezinnen met tieners</h1>
        </div>
      </a>
      </div>
      <div class="col-sm-4">
      <a href=evenementen.php>
        <div class="photo-square gezin">
          <img src="./images/illustraties/alle-leeftijden.svg">
          <h1>Gezinnen van alle leeftijden</h1>
        </div>
      </a>
      </div>
    </div>
  </div>
  <?php include 'includes/footer.php'; ?>

  <div id="wereldbol"></div>
  <script src="scripts/wereldbol-anim.js"></script>
</body>

</html>