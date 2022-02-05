<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Unify - UMN Festival 2021</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/unify.css?v=').time()); ?>">
    <link rel="stylesheet" href="/owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/owlcarousel/dist/assets/owl.theme.default.min.css">
    <link rel="icon" href="/images/ufest.png" type="image/x-icon" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>

  <script type="text/javascript">
    $(window).on('load',function(){
    setTimeout(function(){
        $(".preloader").fadeOut();
    },1000);
    });
  </script>
          <!-- preloader script -->
        <script type="text/javascript">
        $(document).ready(function(){
          var owl = $('.owl-carousel');
          owl.owlCarousel({
              loop:true,
              nav:false,
              autoplay:true,
              autoplayTimeout: 3000,
              responsive:{
                  0:{
                      items:4
                  },
                  600:{
                      items:4
                  },
                  960:{
                      items:4
                  },
                  1200:{
                      items:4
                  }
              }
          });
          // owl.on('mousewheel', '.owl-stage', function (e) {
          //     if (e.deltaY>0) {
          //         owl.trigger('prev.owl');
          //     } else {
          //         owl.trigger('next.owl');
          //     }
          //     e.preventDefault();
          // });
          });
        </script>
  <body>
    <div class="preloader">
      <div class="loading">
        <img src="/images/Ufestgif.gif" width="400">
      </div>
    </div>
    <nav id="nav" class="navbar fixed-top navbar-expand-md navbar-light"  style="background-color:#0f4474;">
      <div class="container">
        <a href="/" class="navbar-brand mb-0 h1"><img class="d-inline-block" src="/images/ufest.png" width="30px"alt="">&nbsp UMN Festival 2021</a>
        <button type="button" name="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler" aria-controls="navbarNav" aria-expanded="false" aria-lable="Toggle navigation"><span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active mx-3"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item mx-3"><a href="our-team" class="nav-link">Our Team</a></li>
            <!-- <li class="nav-item mx-3"><a href="/U-Care" class="nav-link">U-Care</a></li> -->
            <li class="nav-item mx-3"><a href="/unify" class="nav-link">Unify</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <section>
    </section>
    <section>
    <div class="container my-4 text-center" data-aos="fade-up">
      <h1>Himpunan</h1>
            <div class="owl-carousel owl-theme">
            <div class="item ">
              <img src="/images/Unify/assets/himpunan/aces.jpg" alt="">
            </div>
            <div class="item">
              <img src="/images/Unify/assets/himpunan/himars.jpg" alt="">
            </div>
            <div class="item">
              <img src="/images/Unify/assets/himpunan/himfera.jpg" alt="">
            </div>
            <div class="item">
              <img src="/images/Unify/assets/himpunan/himma.jpg" alt="">
            </div>
            <div class="item">
              <img src="/images/Unify/assets/himpunan/himsi.jpg" alt="">
            </div>
            <div class="item">
              <img src="/images/Unify/assets/himpunan/himtara.jpg" alt="">
            </div>
            <div class="item">
              <img src="/images/Unify/assets/himpunan/hmdkv.jpg" alt="">
            </div>
            <div class="item">
              <img src="/images/Unify/assets/himpunan/hmftv.jpg" alt="">
            </div>
            <div class="item">
              <img src="/images/Unify/assets/himpunan/hmif.jpg" alt="">
            </div>
            <div class="item">
              <img src="/images/Unify/assets/himpunan/hmp.png" alt="">
            </div>

            </div>
    </div>

  </section>
      <!-- UKM -->
    <section>

      <div class="container my-4 text-center">
        <div class="row" data-aos="fade-up">
          <h1>Unit Kegiatan Mahasiswa</h1>
          <h4>Bidang Ilmiah</h4>
                <div class="owl-carousel owl-theme">
                <div class="item ">
                  <img src="/images/Unify/assets/ukm/bidang-ilmiah/GDC-UMN.jpg" alt="">
                </div>
                <div class="item">
                  <img src="/images/Unify/assets/ukm/bidang-ilmiah/RENCANG-UMN.jpg" alt="">
                </div>
                <div class="item">
                  <img src="/images/Unify/assets/ukm/bidang-ilmiah/UESC-UMN.jpg" alt="">
                </div>
                <div class="item">
                  <img src="/images/Unify/assets/ukm/bidang-ilmiah/UMN-PC.jpg" alt="">
                </div>
                <div class="item">
                  <img src="/images/Unify/assets/ukm/bidang-ilmiah/utoys-UMN.jpg" alt="">
                </div>
                </div>
        </div>
        <div class="row" data-aos="fade-up">
          <h4>Bidang Olahraga</h4>
                <div class="owl-carousel owl-theme">
                <div class="item ">
                  <img src="/images/Unify/assets/ukm/bidang-olahraga/CAPOERA.jpg" alt="">
                </div>
                <div class="item">
                  <img src="/images/Unify/assets/ukm/bidang-olahraga/E-SPORT-UMN.jpg" alt="">
                </div>
                <div class="item">
                  <img src="/images/Unify/assets/ukm/bidang-olahraga/LIONS-BADMINTON.jpg" alt="">
                </div>
                <div class="item">
                  <img src="/images/Unify/assets/ukm/bidang-olahraga/LIONS-BASKET.jpg" alt="">

                </div>
                <div class="item">
                  <img src="/images/Unify/assets/ukm/bidang-olahraga/LIONS-FUTSAL.jpg" alt="">

                </div>
                <div class="item ">
                  <img src="/images/Unify/assets/ukm/bidang-olahraga/LIONS-VOLLEY.jpg" alt="">

                </div>
                <div class="item">
                  <img src="/images/Unify/assets/ukm/bidang-olahraga/SPECTRE-UMN.jpg" alt="">

                </div>
                <div class="item">
                  <img src="/images/Unify/assets/ukm/bidang-olahraga/TAEKWONDO-UMN.jpg" alt="">

                </div>
                <div class="item">
                  <img src="/images/Unify/assets/ukm/bidang-olahraga/TENIS-MEJA.jpg" alt="">

                </div>
                </div>
        </div>
        <div class="row" data-aos="fade-up">
          <h4>Bidang Seni & Budaya</h4>
                <div class="owl-carousel owl-theme">
                <div class="item ">
                  <img src="/images/Unify/assets/ukm/bidang-seni&budaya/J-CAFE-UMN.jpg" alt="">
                </div>
                <div class="item">
                  <img src="/images/Unify/assets/ukm/bidang-seni&budaya/LETS-DANCE.jpg" alt="">

                </div>
                <div class="item">
                  <img src="/images/Unify/assets/ukm/bidang-seni&budaya/MAPALA-UMN.jpg" alt="">
                </div>
                <div class="item">
                  <img src="/images/Unify/assets/ukm/bidang-seni&budaya/MUFOMIC.jpg" alt="">
                </div>
                <div class="item">
                  <img src="/images/Unify/assets/ukm/bidang-seni&budaya/OBSCURA.jpg" alt="">

                </div>
                <div class="item ">
                  <img src="/images/Unify/assets/ukm/bidang-seni&budaya/QORIE.jpg" alt="">

                </div>
                <div class="item">
                  <img src="/images/Unify/assets/ukm/bidang-seni&budaya/Tracce-UMN.jpg" alt="">

                </div>
                <div class="item">
                  <img src="/images/Unify/assets/ukm/bidang-seni&budaya/ULSON-UMN.jpg" alt="">

                </div>
                <div class="item">
                  <img src="/images/Unify/assets/ukm/bidang-seni&budaya/USO-UMN.jpg" alt="">

                </div>
                </div>
        </div>
      </div>
      </div>
    </section>

    <section>
      <div class="container my-4 text-center" data-aos="fade-up">
        <h1>Lembaga Semi Otonom</h1>
              <div class="owl-carousel owl-theme">
              <div class="item ">
                <img src="/images/Unify/assets/lso/duta-anti-narkoba.jpg" alt="">
              </div>
              <div class="item">
                <img src="/images/Unify/assets/lso/kompas-corner.jpg" alt="">
              </div>
              <div class="item">
                <img src="/images/Unify/assets/lso/medical-center.jpg" alt="">
              </div>
              <div class="item">
                <img src="/images/Unify/assets/lso/rumpin.jpg" alt="">
              </div>
              <div class="item">
                <img src="/images/Unify/assets/lso/ubiz.jpg" alt="">
              </div>
              <div class="item">
                <img src="/images/Unify/assets/lso/ustore.jpg" alt="">
              </div>
              </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 my-4 px-4 mb-xl-0 single-footer-widget">
            <h4>Contact Info</h4>
            <div class="footer-address">
              <p>Jl. Scientia Boulevard, Gading, Kec. Serpong, Tangerang, Banten 15227</p>
              <p>Phone : +62-21.5422.0808</p>
              <p>Fax : +62-21.5422.0800</p>
            </div>
            <div class="footer-address pt-3">
              <img src="<?php echo e(URL::asset('/images/BEM Putih.png')); ?>" style="width:20%; max-width:100px;">
              <img src="<?php echo e(URL::asset('/images/UMN Putih.png')); ?>" style="width:30%; max-width:150px;transform: rotate(-90deg);">
            </div>
          </div>
          <div class="col-sm-6 mt-3">
            <div id="map">
              <iframe src="https://maps.google.com/maps?width=100%25&amp;height=300&amp;hl=en&amp;q=Jl.%20Scientia%20Boulevard,%20Gading,%20Kec.%20Serpong,%20Tangerang,%20Banten%2015227+(My%20Business%20Name)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="250px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="footer-bottom row align-items-center text-center text-lg-left no-gutters">
          <p class="footer-text m-0 col-lg-10 col-md-12">Copyright &copy; 2021 | Website ini dikelola oleh role prasara </i> <a href="/" target="_blank">UMN FESTIVAL 2021</a></p>
            <div class="col-lg-2 col-md-12 text-center text-lg-left footer-social">
                <a href="https://www.instagram.com/umnfestival/" target="_blank"><i class="fab fa-instagram" style="font-size: 20px;"></i></a>
                <a href="https://liff.line.me/1645278921-kWRPP32q/?accountId=877tuixh&openerPlatform=native&openerKey=chatMessage" target="_blank"><i class="fab fa-line" style="font-size: 20px;"></i></a>
                <a href="mailto:umnfestival@umn.ac.id" target="_blank"><i class="fa fa-envelope" style="font-size: 20px;"></i></a>
                <a href="/" target="_blank"><i class="fas fa-globe" style="font-size: 20px;"></i></a>
            </div>
        </div>
      </div>
    </footer>


   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/ScrollTrigger.min.js" charset="utf-8"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
      <script src="/js/jquery-mousewheel-main/jquery.mousewheel.js" charset="utf-8"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js" charset="utf-8"></script>
    <script src="/owlcarousel/dist/owl.carousel.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/ScrollTrigger.min.js" charset="utf-8"></script>
</html>
<?php /**PATH D:\Software\xampp\htdocs\UMNFestival2021\resources\views\unify.blade.php ENDPATH**/ ?>