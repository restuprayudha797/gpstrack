 <!-- Start Footer Area -->
 <div class="footer section mt-5">
     <!-- Start Footer Top -->
     <div class="footer-top">
         <div class="container">
             <div class="inner-content">
                 <div class="row">
                     <div class="col-lg-4 col-md-6 col-12">
                         <!-- Single Widget -->
                         <div class="single-footer f-about">
                             <div class="logo">
                                 <a href="index.html">
                                     <img src="assets/images/logo/white-logo.svg" alt="#">
                                 </a>
                             </div>
                             <p>Making the world a better place through constructing elegant hierarchies.</p>
                             <h4 class="social-title">Follow Us On:</h4>
                             <ul class="social">
                                 <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                 <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                 <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                 <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                                 <li><a href="javascript:void(0)"><i class="lni lni-pinterest"></i></a></li>
                                 <li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
                             </ul>
                         </div>
                         <!-- End Single Widget -->
                     </div>
                     <div class="col-lg-2 col-md-6 col-12">
                         <!-- Single Widget -->
                         <div class="single-footer f-link">
                             <h3>Solutions</h3>
                             <ul>
                                 <li><a href="javascript:void(0)">Marketing</a></li>
                                 <li><a href="javascript:void(0)">Analytics</a></li>
                                 <li><a href="javascript:void(0)">Commerce</a></li>
                                 <li><a href="javascript:void(0)">Insights</a></li>
                             </ul>
                         </div>
                         <!-- End Single Widget -->
                     </div>
                     <div class="col-lg-2 col-md-6 col-12">
                         <!-- Single Widget -->
                         <div class="single-footer f-link">
                             <h3>Support</h3>
                             <ul>
                                 <li><a href="javascript:void(0)">Pricing</a></li>
                                 <li><a href="javascript:void(0)">Documentation</a></li>
                                 <li><a href="javascript:void(0)">Guides</a></li>
                                 <li><a href="javascript:void(0)">API Status</a></li>
                             </ul>
                         </div>
                         <!-- End Single Widget -->
                     </div>
                     <div class="col-lg-4 col-md-6 col-12">
                         <!-- Single Widget -->
                         <div class="single-footer newsletter">
                             <h3>Subscribe</h3>
                             <p>Subscribe to our newsletter for the latest updates</p>
                             <form action="#" method="get" target="_blank" class="newsletter-form">
                                 <input name="EMAIL" placeholder="Email address" required="required" type="email">
                                 <div class="button">
                                     <button class="sub-btn"><i class="lni lni-envelope"></i>
                                     </button>
                                 </div>
                             </form>
                         </div>
                         <!-- End Single Widget -->
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--/ End Footer Top -->
     <!-- Start Copyright Area -->
     <div class="copyright-area">
         <div class="container">
             <div class="inner-content">
                 <div class="row">
                     <div class="col-lg-6 col-md-6 col-12">
                         <p class="copyright-text">© 2023 Craft - All Rights Reserved</p>
                     </div>
                     <div class="col-lg-6 col-md-6 col-12">
                         <p class="copyright-owner">Designed and Developed by <a href="https:webmerdeka.com" rel="nofollow" target="_blank">Web Merdeka</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- End Copyright Area -->

 <!--/ End Footer Area -->

 <!-- ========================= scroll-top ========================= -->


 <!-- ========================= JS here ========================= -->

 <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
 <script src="<?= base_url() ?>assets/js/wow.min.js"></script>
 <script src="<?= base_url() ?>assets/js/tiny-slider.js"></script>
 <script src="<?= base_url() ?>assets/js/glightbox.min.js"></script>
 <script src="<?= base_url() ?>assets/js/count-up.min.js"></script>
 <script src="<?= base_url() ?>assets/js/imagesloaded.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="<?= base_url() ?>assets/js/isotope.min.js"></script>
 <script src="<?= base_url() ?>assets/js/main.js"></script>
 <script src="<?= base_url() ?>assets/dist/sweetalert2.all.min.js"></script>
 <script src="<?= base_url() ?>assets/dist/my.js"></script>


 <script>
     //========= testimonial 
     tns({
         container: '.testimonial-slider',
         items: 3,
         slideBy: 'page',
         autoplay: false,
         mouseDrag: true,
         gutter: 0,
         nav: true,
         controls: false,
         responsive: {
             0: {
                 items: 1,
             },
             540: {
                 items: 1,
             },
             768: {
                 items: 2,
             },
             992: {
                 items: 2,
             },
             1170: {
                 items: 3,
             }
         }
     });

     //====== counter up 
     var cu = new counterUp({
         start: 0,
         duration: 2000,
         intvalues: true,
         interval: 100,
         append: " ",
     });
     cu.start();

     //========= glightbox
     GLightbox({
         'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
         'type': 'video',
         'source': 'youtube', //vimeo, youtube or local
         'width': 900,
         'autoplayVideos': true,
     });

     //============== isotope masonry js with imagesloaded
     imagesLoaded('#container', function() {
         var elem = document.querySelector('.grid');
         var iso = new Isotope(elem, {
             // options
             itemSelector: '.grid-item',
             masonry: {
                 // use outer width of grid-sizer for columnWidth
                 columnWidth: '.grid-item'
             }
         });

         let filterButtons = document.querySelectorAll('.portfolio-btn-wrapper button');
         filterButtons.forEach(e =>
             e.addEventListener('click', () => {

                 let filterValue = event.target.getAttribute('data-filter');
                 iso.arrange({
                     filter: filterValue
                 });
             })
         );
     });
 </script>

 <script type="text/javascript">
     $(document).ready(function() {
         setTimeout(function() {
             location.reload();
         }, 15000);
     })
 </script>


 </body>

 </html>