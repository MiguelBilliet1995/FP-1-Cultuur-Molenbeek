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
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col">
        <a href="news.html">
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
  <?php include 'includes/footer.php'; ?>

  <script defer src="./scripts/all.js"></script>
  <script src="scripts/script.js"></script>
</body>

</html>