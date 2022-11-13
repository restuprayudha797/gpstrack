<!-- Start Hero Area -->


<div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>

<?php if ($this->session->flashdata('pesan')) : ?>



<?php endif; ?>

<section class="hero-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12 col-12">
                <div class="hero-content">
                    <h4 class="wow fadeInUp" data-wow-delay=".2s">
                        We Are a Gps Agency</h4>
                    <h1 class="wow fadeInUp" data-wow-delay=".4s">The easiest step to safety
                    </h1>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Use gps tracking for the sake of your
                        <br> motorcycle security
                    </p>
                    <?php if (!$this->session->userdata('username')) : ?>
                        <p>
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Get Started</button>
                        </p>
                        <div class="row">
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample2">
                                    <div class="card card-body">

                                        <form action="<?= base_url('home') ?>" method="post" id="myForm">

                                            <div class="mb-3">
                                                <label for="username" class="form-label">Username</label>
                                                <input type="text" class="form-control" name="username" placeholder="Please enter your username">
                                                <?= form_error('username') ?>
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" name="password" placeholder="Please enter your password">
                                                <?= form_error('password') ?>

                                            </div>
                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-success tombol-kirim">Enter</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php else : ?>


                        <a href="<?= base_url('home/Logout') ?>" class="btn btn-primary">Log out</a>

                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-7 col-12">
                <div class="hero-image">
                    <img class="main-image" src="assets/images/hero/hero-image.png" alt="#">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Area -->

<!-- Start Services Area -->
<div class="services section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">What we offer</h3>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Our Services</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">
                        In the global 5.0 era, Majak has once again lost a motorcycle for that we offer you to increase the security of your motorcycle by using a GPS track.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                <div class="single-service">
                    <div class="main-icon">
                        <i class="lni lni-grid-alt"></i>
                    </div>
                    <h4 class="text-title">Local Products</h4>
                    <p>This tool is the work of our nation's children, namely the Indonesian nation
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
                <div class="single-service">
                    <div class="main-icon">
                        <i class="lni lni-keyword-research"></i>
                    </div>
                    <h4 class="text-title">Digital Marketing</h4>
                    <p>
                        to purchase / subscribe to this tool is very easy, you just need to confirm with our personal contact</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                <div class="single-service">
                    <div class="main-icon">
                        <i class="lni lni-book"></i>
                    </div>
                    <h4 class="text-title">IT Consulting Service</h4>
                    <p>If there is a problem you can directly contact the iot developer / web dev,
                        we are open 24 hours</p>
                </div>

            </div>
        </div>
    </div>
    <!-- End Services Area -->

    <!-- Start About Area -->
    <section class="about section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="image wow fadeInLeft" data-wow-delay=".2s">
                        <img src="assets/images/about/about-image.jpg" alt="#">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="content wow fadeInRight" data-wow-delay=".4s">
                        <h2>We have built a platform/tool ​​to secure your vehicle.</h2>
                        <p>Let's immediately use our products to increase vehicle safety / unite children from a long distance</p>
                        <div class="list">
                            <div class="single-list">
                                <div class="list-icon">
                                    <i class="lni lni-checkmark"></i>
                                </div>
                                <h4>Local products</h4>
                                <p>Guaranteed 100% authentic</p>
                            </div>
                            <div class="single-list">
                                <div class="list-icon">
                                    <i class="lni lni-checkmark"></i>
                                </div>
                                <h4>Digital Marketing</h4>
                                <p>Lowest Price Guarantee</p>
                            </div>
                            <div class="single-list">
                                <div class="list-icon">
                                    <i class="lni lni-checkmark"></i>
                                </div>
                                <h4>IT Consulting Service</h4>
                                <p>fast response</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->

    <!-- awal dari biodata developer -->
    <!-- Start Services Area -->
    <div class="services section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">what is our theme?</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">my team</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">
                            Here is a group of people who created our product</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-evenly   ">
                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url('assets/') ?>images/about/rafif1.png" class="card-img-top">
                    <hr>
                    <div class="card-body">
                        <center>
                            <b class="card-text">Zidan Rafif</b><br><br>
                            <p>Iot Enginer</p>
                        </center>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url('assets/') ?>images/about/yuda.png" class="card-img-top rounded-circle">
                    <hr>
                    <div class="card-body">
                        <center>
                            <b class="card-text">M.Restu Prayudha</b><br><br>
                            <p>Web Developer</p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Area -->
    <!-- akhir dari biodata developer -->

    <!-- Start Call Action Area -->
    <section class="call-action">
        <div class="container">
            <div class="inner-content">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7 col-12">
                        <div class="text">
                            <h2>

                                <br> <span>You are on the home page click start to LOGIN</span>
                            </h2>
                            <p style="display: block;margin-top: 10px;">
                                Please contact admin to use our product </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 col-12">
                        <div class="button">
                            <a href="#" class="btn">
                                get it now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call Action Area -->


    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>