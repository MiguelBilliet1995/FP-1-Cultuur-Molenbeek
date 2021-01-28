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
          <h1>Alles is leuker met de familie.</h1>
          <p>Er is niets beter dan met de familie samen zijn. Wij bij familie Molenbeek geven inwoners van Molenbeek
            de kans om elke week samen met de familie deel te nemen aan onze activiteiten. Dit is de perfecte manier
            voor nieuwe inwoners om de stad te leren kennen en nieuwe vrienden te maken. </p>
          <a href="evenementen.html">
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
        <div class="photo-square kinderen">
          <img src="./images/illustraties/kleuters.svg">
          <h1>Gezinnen met kleuters</h1>
        </div>
        <a href="evenementen.html">
          <div class="button-container mt-3">
            <div class="button button-next w-100">
              <p>Bekijk aanbod</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm-4">
        <div class="photo-square ouders">
          <img src="./images/illustraties/tieners.svg">
          <h1>Gezinnen met tieners</h1>
        </div>
        <a href="evenementen.html">
          <div class="button-container mt-3">
            <div class="button button-next w-100">
              <p>Bekijk aanbod</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm-4">
        <div class="photo-square gezin">
          <img src="./images/illustraties/alle-leeftijden.svg">
          <h1>Gezinnen van alle leeftijden</h1>
        </div>
        <a href="evenementen.html">
          <div class="button-container mt-3">
            <div class="button button-next w-100">
              <p>Bekijk aanbod</p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
  <?php include 'includes/footer.php'; ?>
  <video class="animationsDSK" loop muted height="700" width="700" autoplay>
    <source src="/images/wereldbol.mp4" type="video/mp4">
  </video>
  <video class="animationsGSM" loop muted autoplay height="2436" width="1125">
    <source src="/images/animatie mobile.mp4" type="video/mp4">
  </video>

</body>

</html>