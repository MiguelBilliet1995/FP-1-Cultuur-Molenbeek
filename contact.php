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
  <header>
    <div class="container">
    <a href="index.html"><img src="images/logo-tekst.svg" alt="logo" class="logo"></a>
      <ul>
        <li><a href="index.html" id="home">Home</a></li>
        <li><a href="evenementen.html" id="kalender">Kalender</a></li>
        <li><a href="news.html" id="nieuws">Nieuws</a></li>
        <li><a href="about.html" id="over-ons">Over ons</a></li>
        <li><a href="contact.html" id="contact" class="active">Contact</a></li>
      </ul>
    </div>
  </header>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <img src="./images/sfeer_1.jpg" alt="">
        </div>
        <div class="col-sm-8">
          <form name="contact-form" method="POST">
            <h3>Contact</h3>
            <fieldset class="textinput">
              <label for="contact-name" class="text-input-label">naam</label>
              <input id="contact-name" type="text" name="contact-name">
            </fieldset>
            <fieldset>
              <label for="contact-email" class="text-input-label">email</label>
              <input id="contact-email" type="email" name="contact-email">
            </fieldset>
            <textarea name="contact-message" id="contact-message"></textarea>

            <input id="contact-submit" type="submit" name="contact-submit" class="button button-next">
            <?PHP
            if (isset($_POST['verzend'])) {
            $naar = $_POST['contact-email'];
            $onderwerp = "Bevestiging van ";
            $boodschap = "
            <html>
            <head>
                <title>testemail</title>
            </head>

            <body>
            <h1>test</h1>

            </body>
            </html> ";
            $van = "MIME-Version: 1.0 \r\n";
            $van .= "Content-type: text/html; charset=iso-8859-1\r\n";
            $van .= "From: 'sim@gillmertens.be' . \r\n";
            mail($naar, $onderwerp, $boodschap, $van);
            }
            ?>
          </form>
        </div>
      </div>
    </div>
  </main>

  <footer>
    <div class="container">
      <div class="row">

        <div class="col-sm-4">
          <ul class="footer-navigation">
            <li><a href="index.html">Home</a></li>
            <li><a href="evenementen.html">Kalender</a></li>
            <li><a href="news.html">Nieuws</a></li>
            <li><a href="about.html">Over ons</a></li>
            <li><a href="contact.html" class="active">Contact</a></li>
          </ul>
        </div>

        <div class="col-sm-4">
          <span><b>Contactinfo</b><br />
            info@familiemolenbeek.be<br />
            +32 468 10 99 14 <br>
            <a href="https://www.instagram.com/cultuur_in_molenbeek/" target="_blank"><span class="icon-instagram"></span></a>
          <a href="https://www.facebook.com/Cultuur-in-Molenbeek-770192383096967" target="_blank" ><span class="icon-facebook"></span></a>
          </span>
        </div>

        <div class="col-sm-4">
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
</body>

</html>