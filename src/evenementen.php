<?php
include_once('parser/CRUD/evenementenDB.php');


if(isset($_GET['filter'])&&isset($_GET['sort'])){
  echo "filter en sort";
  if(!isset($_GET['sortdirection'])){
    $_GET['sortdirection'] = "DESC";
  }
  $evenementen = evenementenDB::getEventBy($_GET['filter'], $_GET['filterdata'], $_GET['sort'], $_GET['sortdirection']);
}elseif(isset($_GET['filter'])&&!isset($_GET['sort'])){
  echo "filter zonder sort";
  $evenementen = evenementenDB::getEventBy($_GET['filter'], $_GET['filterdata'], null, null);
}elseif(!isset($_GET['filter'])&&isset($_GET['sort'])){
  echo "sort zonder filter";
  if(!isset($_GET['sortdirection'])){
    $_GET['sortdirection'] = "DESC";
  }
  $evenementen = evenementenDB::getEventBy(null, null, $_GET['sort'], $_GET['sortdirection']);
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
          <section class="filter-list col-sm-6 col-xl-12">
            <h1 class="form-title">Filter op maat van je gezin</h1>
            <label for="filter-options">Leeftijdscategorie:</label>
            <select name="family-size-filter" class="filter-listener" id="filter-options">
              <option disabled selected value="">filter op...</option>
              <option value="kleuters">geinnen met kleuters</option>
              <option value="kinderen">geinnen met kinderen</option>
              <option value="jongeren">geinnen met jongeren</option>
            </select>
          </section>
          <section class="filter-list col-sm-6 col-xl-12">
            <h1 class="form-title">Sorteren op</h1>
            <label for="sort-options">Sorteeropties:</label>
            <select name="family-size-filter" class="sort-listener" id="sort-options">
              <option disabled selected value="">filter op...</option>
              <option value="prijs%desc">prijs hoogst</option>
              <option value="prijs%asc">prijs laagst</option>
              <option value="datum%desc">datum dichtst</option>
              <option value="datum%asc">datum verst</option>
            </select>
          </section>
        
        </div>
      </div>
      <script src="scripts/cal-script.js"></script>
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
        <div class="row filterlist">
          <span class="filteritem">Voor gezinnen met kleuters</span>
          <span class="filteritem">Alle dagen</span>
        </div>
        <div class="row layout-btn">
          <button class="active box-layout-btn event-layout-btn" onclick="#"></button>
          <button class="row-layout-btn event-layout-btn" onclick="#"></button>
        </div>
        <div class="row">
          <?php
          if(!$evenementen&&!$_GET["filter"]){
            $evenementen = evenementenDB::getAll();
          }
          foreach($evenementen as $evenement){
          ?>
          <div class="card col-sm-12 col-md-6">
            <img src="data/images/evenementen/<?php echo $evenement->foto(); ?>">
            <div class="textbubblecontainer">
              <span class="language">nl:</span>
              <img src="images/icons/speechbubblefull.svg" alt="">
              <img src="images/icons/speechbubblefull.svg" alt="">
              <img src="images/icons/speechbubbleempty.svg" alt="">
              <img src="images/icons/speechbubbleempty.svg" alt="">
              <img src="images/icons/speechbubbleempty.svg" alt="">
            </div>
            <div class="info">
              <div class="titleDate">
                <h2><?php echo $evenement->naam(); ?></h2>
                <span class="datum"><?php echo $evenement->datum(); ?></span>
              </div>
              <span class="eventinfo"><img src="images/icons/locationicon.svg" alt=""><?php echo $evenement->locatie() ?></span>
              <span class="eventinfo"><img src="images/icons/clock-icon.svg" alt=""><?php echo $evenement->uur() ?></span>
              <p class="description"><?php echo $evenement->beschrijving() ?></p>
              <a href="reserveren.php?id=<?php echo $evenement->id() ?>">
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
  <script src="scripts/jquery-3.5.1.min.js"></script>
  <script src="scripts/sort.js"></script>
</body>

</html>