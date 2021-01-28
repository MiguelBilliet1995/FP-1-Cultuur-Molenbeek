<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://use.typekit.net/yvs4yrr.css">
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="styles/style-fonts.css">
  <script src="scripts/script.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>

  <?php include 'includes/banner.php'; ?>

  <div class="container">
    <div class="row">

      <div class="cal-container col-sm-4 pe-5">

        <h3>Kalender</h3>

        <div class="calendar">
          <div class="month">
            <p style="display: none;"></p>
            <div class="month-slider">
              <p class="prev">&#8249;</p>
              <div class="date">
                <p></p>
              </div>
              <p class="next">&#8250;</p>
            </div>
          </div>

          <table class="table table-responsive-sm" id="calendar">
            <thead class="weekdays">
              <tr>
                <th>Zon</th>
                <th>Ma</th>
                <th>Di</th>
                <th>Woe</th>
                <th>Don</th>
                <th>Vrij</th>
                <th>Zat</th>
              </tr>
            </thead>
            <tbody id="calendar-body" class="days">

            </tbody>
            <!--<div class="row days"></div>-->
          </table>
        </div>

        <div class="col-sm-4 filter-container">
          <h1 class="form-title">Filter op maat van je gezin</h1>
          <label class="container" for="kleuters">Voor gezinnen met kleuters
            <input type="checkbox" id="kleuters">
            <span class="checkmark">
            </span>
          </label>
          <label class="container" for="tieners">Voor gezinnen met tieners
            <input type="checkbox" id="tieners">
            <span class="checkmark"></span>
          </label>
          <label class="container" for="allAges">Voor gezinnen van alle leeftijden
            <input type="checkbox" id="allAges">
            <span class="checkmark"></span>
          </label>

          <h1 class="form-title">Filter jouw voorkeuren</h1>
          <label class="container" for="AlleDagen">Alle Dagen
            <input type="checkbox" id="AlleDagen">
            <span class="checkmark">
            </span>
          </label>
          <label class="container" for="weekdagen">Weekdagen
            <input type="checkbox" id="weekdagen">
            <span class="checkmark"></span>
          </label>
          <label class="container" for="weekend">Weekend
            <input type="checkbox" id="weekend">
            <span class="checkmark"></span>
          </label>
        </div>
      </div>

      <script src="scripts/cal-script.js"></script>

      <div class="col-sm-8">

        <h3>Evenementen</h3>

        <div class="row">

        <?php
        include_once('parser/CRUD/evenementenDB.php');
        $evenementen = evenementenDB::getAll();

        foreach($evenementen as $evenement){

        ?>
        <div class="card col-sm-6">
            <img src="images/theater.jpg">
            <div class="textbubblecontainer">
              <span class="textbubbles"><img src="images/icons/speechbubblefull.svg" alt=""><img
                  src="images/icons/speechbubblefull.svg" alt=""><img src="images/icons/speechbubbleempty.svg"
                  alt=""><img src="images/icons/speechbubbleempty.svg" alt=""></span>
            </div>
            <div class="info">
              <h2><?php echo $evenement->naam(); ?> <span class="datum"><span class="red"><?php echo $evenement->datum(); ?></span><span class="time"> - <?php echo $evenement->uur(); ?></span></span></h2>
              <span class="location"><img src="images/icons/locationicon.svg" alt=""><?php echo $evenement->locatie() ?></span>

              <p class="description"><?php echo $evenement->beschrijving() ?></p>

              <a href="reserveren.html">
                <div class="button-container">
                  <div class="button button-next" onclick="location.href='reserveren.php?id=<?php echo $evenement->id() ?>'">
                    <p> Schrijf je nu in!</p>
                  </div>
                  <span class="price"><img src="images/icons/pricetag.svg" alt="">€<?php echo $evenement->prijs() ?></span>
                </div>
              </a>
            </div>
          </div>

        <?php
        }
        ?>

        </div>
      </div>
    </div>
  </div>
  <?php include 'includes/footer.php'; ?>
  <script src="scripts/fetch-content.js"></script>
</body>

</html>