<?php 
include 'confiq/function.php';
$marker = query("SELECT * FROM tb_marker");

foreach($marker as $koordinat){

  $lat = $koordinat['lat'];
  $lng = $koordinat['lng'];
  
}

$state = query("SELECT * FROM ledStatus");


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tracking page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>

    body{

        background-image: url('bg1.jpg');
    }
    </style>
  </head>
  <body>
   
  <?php include 'navbar.php' ?>


<div class="kartu mt-5 p-5">

   <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="#">Tracking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Saklar.php">power</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
<iframe class="mt-3" width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $lat; ?>,<?php echo $lng; ?>&output=embed"></iframe>

  </div>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>