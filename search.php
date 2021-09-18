<?php
  $keyword = $_GET['keyword'];
  include_once 'dbconnect.php';

  // keyword didapat dari urld
  // misal keyword?=hahaha, berarti keyword bernilai hahaha
  $keyword = $_GET['keyword'];
  // cari data yang namanya mirip keyword
  $sql = "SELECT * FROM enemies WHERE names LIKE '%$keyword%'";
  $result = mysqli_query($conn,$sql);

  // setelah mendapatkan datanya tampilkan data ke html dibawah
  // sehingga ketika kita membuka http://localhost/TUGASLBE/search.php?keyword=$keyword
  // maka server ini (web kalian) akan merespon dengan data html
  // data html ini akan di request oleh javascript
  // javascript yang telah mendapatkan data html akan memindahkan data html ke display.php
 ?>
<?php 
      while ($row = mysqli_fetch_array($result)){ ?>
      <a href="https://www.gensh.in<?php echo $row['link']?> ">
        <div class="card">
          <img src="https://www.gensh.in<?php echo $row['image']?>" alt="" srcset="">
          <h2><?= $row['names'] ; ?></h2>
        </div>
      </a>
    <?php } ?>