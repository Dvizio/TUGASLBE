<?php 

include_once 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Success</title>
</head>
<body>
  <h1>Success</h1>
</body>
</html>

<?php
// melakukan request ke url
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://www.gensh.in/database/enemies");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$html = curl_exec($curl);

$dom = new DOMDocument();
@ $dom->loadHTML($html);


$sectionTag = $dom->getElementsByTagName('section')->item(0);
$allh2 = $sectionTag->getElementsByTagName('h2');

$allh2Items = [];
// ini adalah data semua tag h2 
$allImages = $sectionTag->getElementsByTagName('img');
$allImagesSrc = [];
// ini adalah data semua tag img 

$allLink = $sectionTag->getElementsByTagName('a');
$allLinkItems = [];

foreach ($allImages as $image){
  $imageSrc = $image->getAttribute('src');
  $allImagesSrc[]=$imageSrc;
}

foreach ($allLink as $Link){
  $linkSrc = $Link->getAttribute('href');
  $allLinkItems[]=$linkSrc;
}

foreach ($allh2 as $item) {
    $allh2Items[] = $item->textContent;
    
}
$count =2;
$count1 = 3;
foreach ($allImagesSrc as $image){
  $sql = "INSERT INTO enemies(id,names,image,link) VALUES(null,'$allh2Items[$count]','$image', '$allLinkItems[$count1]');";
    // mysqli_query($conn, $sql); $count++;
    if(mysqli_query($conn, $sql)){
      echo "Records inserted successfully.". '<br/>'; $count++; $count1++;
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }
}

?>