<?php
  include_once'dbconnect.php';
  $sql = "SELECT * FROM enemies";
  $result = mysqli_query($conn,$sql);
  //test
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
    <div class="container">
      <h1>Genshin Monster List</h1>
    </div>
  </header>
  <table class="table" , border: 1px solid #333;>
    <thead>
      <tr>
        <th>Names</th>
        <th>Image</th>
        <th>Link</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = mysqli_fetch_array($result)){ ?>
      <tr>
        <td>
          <?php echo $row['names'] ?>
        </td>
        <td>
          <img src=<?php echo 'https://www.gensh.in/'. $row['image'] ?>>
        </td>
        <td>
          <a href="<?php echo 'https://www.gensh.in/'. $row['link'] ?>">Go to data</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</body>

</html>