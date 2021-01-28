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
        <li><a href="about.html" id="over-ons">Over ons</a></li>
        <li><a href="contact.php" id="contact">Contact</a></li>
      </ul>
    </div>
    </div>
  </header>
  
  <div class="container">
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col">
        <a href="news.html"><img src="./images/icons/backarrow.svg" alt="" class="backarrow"></a>
      </div>
    </div>
    
    <img src="images/sfeer_10.jpg" alt="" class="articleimage">

    <div class="row">
      <div class="col-sm-1">

      </div>
      <div class="col-sm-1">
        <h2 class="articletitle">Het circus komt</h2>
      </div>
      <div class="row">
        <div class="col-sm-1">
        </div>
        <div class="col">
          <p class="articledate">Di 26/01 Januari</p> <a href="#" onclick="
            window.open(
              'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
              'facebook-share-dialog', 
              'width=626,height=436'); 
            return false;" class="shareonfacebook">
            <i>Delen</i> <img src="images/icons/facebook-brands.svg" alt="">
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
          <p>
            Op 28 januari zal het circus opstellen op het grote plein in Molenbeek. Een leuke activitetit om samen met
            je
            kinderen te doen. Dit circus staat bekend om zijn gevaarlijke stunts met mensen. Het is zeker de moeite
            waard
            om te zien. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, voluptatum. Aperiam illo est
            molestias aliquid nam, nemo aspernatur deleniti expedita explicabo, fuga rerum ea quasi quidem, doloribus
            dignissimos recusandae dolores.
          </p>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">

        <div class="col-sm-4">
          <ul class="footer-navigation">
            <li><a href="index.html">Home</a></li>
            <li><a href="evenementen.html">Kalender</a></li>
            <li><a href="news.html">Nieuws</a></li>
            <li><a href="about.html">Over ons</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>

        <div class="col-md-4">
          <span><b>Contactinfo</b><br />
            info@familiemolenbeek.be<br />
            +32 468 10 99 14 <br>
            <div class="sociallinks">
              <a href="https://www.instagram.com/cultuur_in_molenbeek/" target="_blank"><img
                  src="images/icons/instagram-logo.svg" alt=""></a>
              <a href="https://www.facebook.com/Cultuur-in-Molenbeek-770192383096967" target="_blank"><img
                  src="images/icons/facebook-brands.svg" alt=""></a>
            </div>
          </span>
        </div>

        <div class="col-sm-4">
          <div class="footerlogos"><img src="images/logos/bib-logo.svg" alt=""><img
              src="images/logos/cultuurinmolebeek.svg" alt=""></div>
          <div class="footerlogos"><img src="images/logos/vk-logo.svg" alt=""><img src="images/logos/molenbeek-logo.svg"
              alt=""></div>
          </ul>
          <div class="year">
            <li>2020-2021</li>
            <li> &copy; Familie Molenbeek</li>
          </div>
          </ul>
        </div>

      </div>
    </div>
  </footer>


  <script defer src="./scripts/all.js"></script>
  <script src="scripts/script.js"></script>
</body>

</html>