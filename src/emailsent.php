<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include_once('parser/CRUD/inschrijvingenDB.php');
if(isset($_POST['confirm-reservatie'])){
  $evenement_id = $_GET['id'];
  $voornaam = $_POST['inschrijven-voornaam'];
  $naam = $_POST['inschrijven-naam'];
  $email = $_POST['inschrijven-email'];
  $aantal_1 = $_POST['leeftijd-kind'];
  $aantal_2 = $_POST['leeftijd-tiener'];
  $aantal_3 = $_POST['leeftijd-volwassen'];
  $aantal_4 = $_POST['leeftijd-bejaard'];
  if(inschrijvingenDB::addinschrijving($evenement_id, $voornaam, $naam, $email, $aantal_1, $aantal_2, $aantal_3, $aantal_4)){
    require 'parser/vendor/autoload.php';
    $mail = new PHPMailer(true);
    try{
      $mail->SMTPDebug = 0; 
      $mail->isSMTP(); 
      $mail->Host = 'sent.one.com';
      $mail->SMTPAuth = true; 
      $mail->Username = 'nest-molenbeek@bojraad.be'; 
      $mail->Password = 'wJkEq3ejztAGp4DY'; 
      $mail->SMTPSecure = 'tls'; 
      $mail->Port = '587';
      $mail->setFrom('nest-molenbeek@bojraad.be', 'Nest molenbeek');
      $mail->addAddress($email);
      $mail->isHTML(true); 
      $mail->Subject = "reservatiebevestiging:";
      $data = "
        kaas
      ";
      $mail->Body = $data;
      $mail->send();
      $status = [1, 'registratie succesvol verlopen'];
    }catch(Exception $e){
      $status = [0, $e];
    }
  } else {
    $status = [0, 'registratie mislukt'];
  }
}

if(isset($_POST['confirm-contact'])){
    require 'parser/vendor/autoload.php';
    $mail = new PHPMailer(true);
    try{
      $mail->SMTPDebug = 0; 
      $mail->isSMTP(); 
      $mail->Host = 'sent.one.com';
      $mail->SMTPAuth = true; 
      $mail->Username = 'nest-molenbeek@bojraad.be'; 
      $mail->Password = 'wJkEq3ejztAGp4DY'; 
      $mail->SMTPSecure = 'tls'; 
      $mail->Port = '587';
      $mail->setFrom('nest-molenbeek@bojraad.be', 'Nest molenbeek');
      $mail->addAddress($email);
      $mail->isHTML(true); 
      $mail->Subject = "reservatiebevestiging:";
      $data = "
        kaas
      ";
      $mail->Body = $data;
      $mail->send();
      $status = [1, 'registratie succesvol verlopen'];
    }catch(Exception $e){
      $status = [0, $e];
    }
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
<?php include_once 'includes/banner.php'; ?>
<div class="sent-container container">
  <div class="col-sm-12">
    <div id="mail-sent"> <!-- animatie zelf -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.0/lottie_html.js"></script> <!-- animatie script downloaden -->
        <script src="scripts/mail-sent-anim.js"></script> <!-- parameters animatie aanpassen: mail-sent-anim.js -->
    </div>
  <div class="email-sent-text">

  <?php
  
  if($status[0]== 1){
    ?>
    <h1><?php echo $status[1]; ?></h1>
    <?php
    
    if(isset($_GET['id'])){
    ?>
    <a href="<?php echo $_GET['url'] ?>.php?id=<?php echo $_GET['id']; ?>"><p>terugkeren</p></a>
    <?php
    } else {
      ?>
      <a href="<?php echo $_GET['url'] ?>.php"><p>terugkeren</p></a>
      <?php
    }

    ?>
  <?php


  }else {
    ?>
    <h1><?php echo $status[1]; ?></h1>
    <?php
    if(isset($_GET['id'])){
    ?>
    <a href="<?php echo $_GET['url'] ?>.php?id=<?php echo $_GET['id']; ?>"><p>terugkeren</p></a>
    <?php
    } else {
      ?>
      <a href="<?php echo $_GET['url'] ?>.php"><p>terugkeren</p></a>
      <?php
    }
  }
  ?>
  </div>
  </div>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>