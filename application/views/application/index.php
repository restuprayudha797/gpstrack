<?php


foreach ($marker as $koordinat) {


    $lat = $koordinat['lat'];
    $lng = $koordinat['lng'];
}


?>


<div class="kartu p-5 " style="margin-top: 150px;">

    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="<?= base_url('home/application') ?>">Tracking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= base_url('home/power') ?>">power</a>
                </li>

            </ul>
        </div>
        <div class="card-body">
            <iframe class="mt-3" width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $lat; ?>,<?php echo $lng; ?>&output=embed"></iframe>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

