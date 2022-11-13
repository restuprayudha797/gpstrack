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
    <title>Power Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
        <a class="nav-link" aria-current="true" href="index.php">Tracking</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link active" href="Saklar.php">power</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Bantuan</a>
      </li>
    </ul>
  </div>
  <div class="tit card-body">
    <b><h3>Klick Tombol Dibawah untuk Mematikan Dan Menghidupkan Motor</h3></b>
  </div>
  <?php if($state[1]['state'] == 1) :  
  
  $link = 'off.php';
  $title = 'ON';
  $color = 'success';
  ?>
    <a href="<?= $link  ?>" class="text-decoration-none">
        <div class="tombol bg-<?= $color ?>">
            <h1 class="text-dark"><?= $title; ?></h1>
        </div>
    </a>
<?php else:
    $link = 'onn.php';
    $title = 'OFF';
    $color = 'danger';
    ?>

    <a href="<?= $link  ?>" class="text-decoration-none">
        <div class="tombol bg-<?= $color ?>">
            <h1 class="text-dark"><?= $title; ?></h1>
        </div>
    </a>
<?php endif; ?>
  
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>