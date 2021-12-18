<!Doctype html>
<html lang='en-US'>
<head>
  <meta charset="utf-8">
  <meta name="robots" content="index follow">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Joe Corso">
  <meta name="keywords" content="e-commerce, handmade, glassblowing, art, artist, manufacturing, vateran, veteran owned">
  <meta name="description" content="Welcome to the Official Army Glass e-commerce store! You can find my full catalog of artwork on the Home page.">
  <link href="css/main.css?<?php echo date("Y/m/d_H:i:s") ?>" rel="stylesheet">
  <link href="img/favicon.jpeg" rel="icon" type="image/icon type">
  <title>Home|Army Glass</title>
</head>
<body class="row">
  <header>
    <div class="parallax">
      <?php include 'inc/header.php'; ?>
    </div>
  </header>


  <?php include 'inc/nav.php'; ?>

  <div class="pc tablet mobile">
    <div class="col-4 col-s-4 col-m-12">
        <div class="item">
          <img src="img/items/agspoon.jpg">
          <p>AG, Spoon<br>$35</p>
          <a target="_blank" href="https://square.link/u/wO6VDuZR">Buy</a>
        </div>
    </div>

    <div class="col-4 col-s-4 col-m-12">
        <div class="item">
          <img src="img/items/wigwagrig.png">
          <p>WigWag Rig<br>$150</p>
          <a target="_blank" href="https://square.link/u/dHrsnKEd">Buy</a>
        </div>
    </div>

    <div class="col-4 col-s-4 col-m-12">
        <div class="item">
          <img src="img/items/whiterig.jpg">
          <p>14mm White Rig<br>$150</p>
          <a target="_blank" href="https://square.link/u/6ElUuPVq">Buy</a>
        </div>
    </div>
  </div>

  <footer>
    <?php include 'inc/footer.php'; ?>
  </footer>
</body>
<?php include 'inc/js.php'; ?>
</html>
