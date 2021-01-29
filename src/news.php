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

  <?php include 'includes/banner.php'; ?>

  <div class="container">
  <?php
        include_once('parser/CRUD/newsDB.php');
        $news = newsDB::getAll();

        foreach($news as $newsartikel){
        ?>
          <div class="row nieuwsartikel">
              <div class="col-sm-4">
                <img src="data/images/news/<?php echo $newsartikel->foto(); ?>" alt="" class="articleimg">
              </div>
              <div class="col-sm-8">
                <h2 class="articletitle"><?php echo $newsartikel->naam(); ?></h2>
                <p class="articledate"><?php echo $newsartikel->datum(); ?></p>
                <p><?php echo $newsartikel->artikel(); ?></p>
              </div>
          </div>
        <?php
        }
        ?>
  </div>
  <?php include 'includes/footer.php'; ?>
  <script defer src="./scripts/all.js"></script>
  <script src="scripts/script.js"></script>
</body>

</html>