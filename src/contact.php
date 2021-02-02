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
  <?php include 'includes/banner.php'; ?>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <img class="contactimage" src="./images/contactimg.svg" alt="">
        </div>
        <div class="col-sm-8">
          <h3>Contact</h3>

          <p>info@familiemolenbeek.be</p>
          <p>+32 468 10 99 14</p>
          <br>
          <p id="directbericht">Direct bericht</p>

          <form class="contact-form" action="contactform.php" method="post">
            <fieldset class="textinput">
              <input id="contact-name" type="text" name="name" placeholder="Naam">
            </fieldset>
            <fieldset>
              <input id="contact-email" type="email" name="mail" placeholder="Jouw e-mailadres">
            </fieldset>
            <fieldset>
              <input id="onderwerp" type="text" name="subject" placeholder="Onderwerp">
            </fieldset>
            <textarea name="message" placeholder="Bericht"></textarea>

            <input id="contact-submit" value="Ok" type="submit" name="Versturen" class="button button-next">
          </form>
        </div>
      </div>
    </div>
  </main>
  <?php include 'includes/footer.php'; ?>
</body>

</html>