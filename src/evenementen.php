<?php
include_once('parser/CRUD/evenementenDB.php');

if(isset($_GET['filter'])) {
  $filter = $_GET['filter'];
  if(isset($_GET['filterdata'])) {
    $filterData = $_GET['filterdata'];
  }
  if(isset($_GET['sort'])){
    $sort = $_GET['sort'];
    if(isset($_GET['sortdirection'])) {
      $sortDirection = $_GET['sortdirection'];
    } else {
      $sortDirection = 'DESC';
    }
  }
  $evenementen = evenementenDB::getEventBy($filter, $filterData, $sort,$sortDirection);
  print_r($evenementen);
}
?>

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
      <div class="cal-container col-sm-12 col-md-12 col-lg-12 col-xl-4">
        <div class="calendar">
          <p id="selected-date">29 januari 2021<p>
          <div class="month">
            <p style="display: none;"></p>
            <div class="month-slider">
              <p class="prev">&#8249;</p>
              <div class="date">
                <p>Januari</p>
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
            <tbody id="calendar-body" class="days"></tbody>
          </table>
        </div>
        <div class="event-filters">
          <section class="ilter-list">
            <h1 class="form-title">Filter op maat van je gezin</h1>
            <label class="single-filter-container" for="kleuters">Voor gezinnen met kleuters
              <input type="checkbox" id="kleuters">
              <span class="checkmark">
              </span>
            </label>
            <label class="single-filter-container" for="tieners">Voor gezinnen met tieners
              <input type="checkbox" id="tieners">
              <span class="checkmark"></span>
            </label>
            <label class="single-filter-container" for="allAges">Voor gezinnen van alle leeftijden
              <input type="checkbox" id="allAges">
              <span class="checkmark"></span>
            </label>
          </section>
          <section class="filter-list">
            <h1 class="form-title">Filter jouw voorkeuren</h1>
            <label class="single-filter-container" for="AlleDagen">Alle Dagen
              <input type="checkbox" id="AlleDagen">
              <span class="checkmark">
              </span>
            </label>
            <label class="single-filter-container" for="weekdagen">Weekdagen
              <input type="checkbox" id="weekdagen">
              <span class="checkmark"></span>
            </label>
            <label class="single-filter-container" for="weekend">Weekend
              <input type="checkbox" id="weekend">
              <span class="checkmark"></span>
            </label>
          </section>
        </div>
      </div>
      <script src="scripts/cal-script.js"></script>
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
        <div class="row filterlist">
          <span class="filteritem">Voor gezinnen met kleuters</span>
          <span class="filteritem">Alle dagen</span>
        </div>
        <div class="row">
          <?php
          $evenementen = evenementenDB::getAll();
          foreach($evenementen as $evenement){
          ?>
          <div class="card col-sm-12 col-md-6">
            <img src="data/images/evenementen/<?php echo $evenement->foto(); ?>">
            <div class="textbubblecontainer">
              <img src="images/icons/speechbubblefull.svg" alt="">
              <span class="language">nl</span>
            </div>
            <div class="info">
              <div class="titleDate">
                <h2><?php echo $evenement->naam(); ?></h2>
                <span class="datum"><?php echo $evenement->datum(); ?></span>
              </div>
              <span class="eventinfo"><img src="images/icons/locationicon.svg" alt=""><?php echo $evenement->locatie() ?></span>
              <span class="eventinfo"><img src="images/icons/clock-icon.svg" alt=""><?php echo $evenement->uur() ?></span>
              <p class="description"><?php echo $evenement->beschrijving() ?></p>
              <!-- <a href="reserveren.php?id=<?php echo $evenement->id() ?>"> -->
              <a href="reserveren.php">
                <div class="button-container">
                  <div class="button button-next">
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