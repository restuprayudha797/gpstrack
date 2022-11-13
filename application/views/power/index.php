<div class="kartu mt-5 p-5 " style="margin-top: 150px;">
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" aria-current="true" href="<?= base_url('home/application') ?>">Tracking</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active" href="<?= base_url('home/power') ?>">power</a>
                </li>

            </ul>
        </div>
        <div class="tit card-body">
            <b>
                <h3>Klick Tombol Dibawah untuk Mematikan Dan Menghidupkan Motor</h3>
            </b>
        </div>
        <?php if ($state[1]['state'] == 1) :

            $link = 'http://localhost/gpstrack/home/Off';
            $title = 'Off';
            $color = 'success';
        ?>
            <div class="container p-5">
                <a href="<?= $link ?>" class="btn btn-danger tombol-Off"><?= $title ?></a>
            </div>


        <?php else :
            $link = 'http://localhost/gpstrack/home/On';
            $title = 'On';
            $color = 'danger';
        ?>
            <div class="container p-5">
                <a href="<?= $link ?>" class="btn btn-success"><?= $title ?></a>
            </div>

        <?php endif; ?>

    </div>
</div>