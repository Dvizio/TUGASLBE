<?php
  include_once 'dbconnect.php';
  $sql = "SELECT * FROM enemies";
  $result = mysqli_query($conn,$sql);
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Genshin Data</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header id="mainHeader">
    <div>
      <br>
      <br>
      <h1>Genshin Monster List</h1>
    </div>
  </header>

  <div class="search">
   <input type="text" placeholder="Search" id="search-input">
  </div>
  <div class="container" id="container-display">
      <?php 
      while ($row = mysqli_fetch_array($result)){ ?>
      <a href="https://www.gensh.in<?php echo $row['link']?> ">
        <div class="card">
          <img src="https://www.gensh.in<?php echo $row['image']?>" alt="" srcset="">
          <h2><?= $row['names'] ; ?></h2>
        </div>
      </a>
    <?php } ?>
  </div>

  <script src="./js/main.js"></script>
</body>
</html>
