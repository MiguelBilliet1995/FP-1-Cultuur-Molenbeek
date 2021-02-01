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
    <?php
    include_once('parser/CRUD/evenementenDB.php');
    $evenementen = evenementenDB::getEventById($_GET["id"]);

    foreach($evenementen as $evenement){
    ?>
    <div class="container">
        <div class="row">
            <div class="card col-sm-4">
                <img src="images/theater.jpg">
                <div class="textbubblecontainer">
                  <img src="images/icons/speechbubblefull.svg" alt="">
                  <span class="taal">nl</span>
                </div>
                <div class="info">
                    <h2><?php echo $evenement->naam(); ?> <span class="datum"><span class="red"><?php echo $evenement->datum(); ?></span><span class="time"> - <?php echo $evenement->uur(); ?></span></span></h2>
                    <span class="location"><img src="images/icons/locationicon.svg" alt=""><?php echo $evenement->locatie() ?></span>
                    <p class="description"><?php echo $evenement->beschrijving() ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <?php include 'includes/footer.php'; ?>
</body>

</html>