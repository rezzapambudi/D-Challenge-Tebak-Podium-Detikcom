<?php
include "include/head.php";
?>

<body id="page-top">
  <?php
include "include/navbar-unboard.php";
?>

  <style>
    #nav-home a {
      color: #000000 !important;
      font-weight: bold !important;
    }
  </style>
  <!-- TICKER LIVE-->
  <!-- <section class="ticker-live" id="ticker-live">
        <div class="container mycontainer">
            <div class="row">
                <div class="col-12" style="position:relative;">
                    
                        <div class="box-ticker" onclick='bticker()'>
                            <div class="livenow">
                                <div></div>
                            </div>
                            <span class="font-bold mr-1">LIVE NOW</span>
                            <img src="assets/img/content/logo-motogp.png">
                        </div>
                    
                </div>
            </div>
        </div>
    </section> -->
  <!-- END OF TICKER LIVE-->

  <!-- Masthead-->
  <header class="masthead">
    <div class="h-100">
      <div class="intro" style="position: relative;">
        <div class="container h-100">
          <div class="row h-80 align-items-center justify-content-center">
            <div class="col-lg-6 col-12 align-self-end">
              <img src="assets/img/logo-yamaha-2022.png" class="logo-yamahagp-intro img-fluid">
              <h1>Tebak peringkat rider motogp </h1>
              <p>Kumpulkan poin sebanyak-banyaknya dengan mengikuti keseruan d’Challenge Tebak Podium. Semakin
                banyak poin yang kamu kumpulkan, semakin besar juga kesempatan kamu memenangkan Motor Sport
                dari Yamaha!</p>
              <a class="btn-ikuti-quiz btn btn-primary js-scroll-trigger" href="quiz-alt.php" style="">IKUTAN
                SEKARANG <img src="assets/img/landingpage/svg/right.svg"></a>
              <a class="btn-live-streaming btn btn-primary js-scroll-trigger" href="quiz-alt.php" style=""><img
                  src="assets/img/landingpage/svg/play.svg"> LIVE
                STREAMING</a>
            </div>
            <div class="col-lg-6 col-12 align-self-end">


            </div>


          </div>
        </div>


        <div class="image-intro"><img src="assets/img/landingpage/intro.png" class="img-fluid"></div>

      </div>
    </div>
  </header>
  <!-- About-->

  <!-- cara tebak podium -->
  <section class="page-section" id="ctp">
    <div class="">
      <div class="box-ctp" style="position: relative;">
        <div class="image-mechanism mt-5">
          <img src="assets/img/landingpage/mechanism.png" class="img-fluid">
        </div>
        <div class="container-fluid h-100">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-md-6 ">

            </div>
            <div class="col-lg-6 col-md-6 ">
              <div class="box-ctp-inner mt-5">
                <div class="box-ctp-inner-atas">
                  <h2>cara ikut tebak podium</h2>

                </div>
                <div class="box-ctp-inner-bawah">
                  <p>Ikuti langkah-langkah berikut untuk berpartisipasi dalam d’Challenge Tebak Podium</p>
                </div>

                <div id="accordion">
                  <div class="card">
                    <a class="card-link" data-toggle="collapse" href="#collapseOne">
                      <div class="card-header"><img src="assets/img/landingpage/svg/ctp1.png">
                         PILIH RIDER
                      </div>
                    </a>
                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                      <div class="card-body">
                        <p>Pilih rider yang akan berada di podium 1, 2 dan 3 sebelum race berlangsung</p>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                      <div class="card-header"><img src="assets/img/landingpage/svg/ctp2.svg">
                         KUMPULKAN POIN
                      </div>
                    </a>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                        <p>Kumpulkan Poin dari
                          Quiz Tebak Podium pada Setiap
                          Race MotoGP 2022</p>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                      <div class="card-header"><img src="assets/img/landingpage/svg/ctp3.svg">
                         MENANGKAN YAMAHA MT-15
                      </div>
                    </a>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                        <p>Peserta Beruntung akan dipilih
                          pada setiap seri untuk memenangkan
                          Yamaha MT-15</p>
                      </div>
                    </div>
                  </div>

                </div>
                <a href="" class="baca">
                  <h6><img src="assets/img/landingpage/svg/info.svg"> Baca syarat dan ketentuan lengkapnya di sini </h6>
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- hadiah -->
  <section class="page-section" id="hadiah">
    <div class="zone-hadiah">
      <div class="box-hadiah" style="position: relative;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-md-6">
              <div class="box-title-hadiah">
                <div class="box-hadiah-atas">
                  <h2>menangin hadiah keren</h2>

                </div>
                <div class="box-hadiah-bawah">
                  <p>Di setiap seri akan ada 3 detikers dengan poin tertinggi yang akan mendapatkan hadiah keren berikut
                  </p>
                </div>

                <div class="prizes">
                  <img src="assets/img/landingpage/prizes.png" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 text-center">

            </div>

          </div>
          <div class="image-hadiah">
            <img src="assets/img/landingpage/grandprize.png" class="img-fluid">
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- news agreegator -->
  <section class="page-section" id="news">
    <div class="container">
      <div class="box-news-areegator">
        <h2 class="text-center mt-0 mb-5 text-black bold">YAMAHA GP NEWS</h2>

        <div class="row d-flex">


          <div class="col-md-3">
            <div class="card mb-4 box-shadow">
              <div class="box-thumb">
                <img class="card-img-top" style="width: 100%; display: block;"
                  src="assets/img/thumbnail/thumbnail-2.png">
              </div>
              <div class="card-body">
                <a href="{clickurl}">
                  <p class="card-text">Pilih Rider yang Akan Berada di Podium 1,2,3 sebelum Race
                    Berlangsung</p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mb-4 box-shadow">
              <div class="box-thumb">
                <img class="card-img-top" style="width: 100%; display: block;"
                  src="assets/img/thumbnail/thumbnail-3.png">
              </div>
              <div class="card-body">
                <a href="{clickurl}">
                  <p class="card-text">Pilih Rider yang Akan Berada di Podium 1,2,3 sebelum Race
                    Berlangsung</p>
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mb-4 box-shadow">
              <div class="box-thumb">
                <img class="card-img-top" style="width: 100%; display: block;"
                  src="assets/img/thumbnail/thumbnail-4.png">
              </div>
              <div class="card-body">
                <a href="{clickurl}">
                  <p class="card-text">Pilih Rider yang Akan Berada di Podium 1,2,3 sebelum Race
                    Berlangsung</p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mb-4 box-shadow">
              <div class="box-thumb">
                <img class="card-img-top" style="width: 100%; display: block;"
                  src="assets/img/thumbnail/thumbnail-1.png">
              </div>
              <div class="card-body">
                <a href="{clickurl}">
                  <p class="card-text">Pilih Rider yang Akan Berada di Podium 1,2,3 sebelum Race
                    Berlangsung</p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mb-4 box-shadow">
              <div class="box-thumb">
                <img class="card-img-top" style="width: 100%; display: block;"
                  src="assets/img/thumbnail/thumbnail-2.png">
              </div>
              <div class="card-body">
                <a href="{clickurl}">
                  <p class="card-text">Pilih Rider yang Akan Berada di Podium 1,2,3 sebelum Race
                    Berlangsung</p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mb-4 box-shadow">
              <div class="box-thumb">
                <img class="card-img-top" style="width: 100%; display: block;"
                  src="assets/img/thumbnail/thumbnail-3.png">
              </div>
              <div class="card-body">
                <a href="{clickurl}">
                  <p class="card-text">Pilih Rider yang Akan Berada di Podium 1,2,3 sebelum Race
                    Berlangsung</p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mb-4 box-shadow">
              <div class="box-thumb">
                <img class="card-img-top" style="width: 100%; display: block;"
                  src="assets/img/thumbnail/thumbnail-4.png">
              </div>
              <div class="card-body">
                <a href="{clickurl}">
                  <p class="card-text">Pilih Rider yang Akan Berada di Podium 1,2,3 sebelum Race
                    Berlangsung</p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mb-4 box-shadow">
              <div class="box-thumb">
                <img class="card-img-top" style="width: 100%; display: block;"
                  src="assets/img/thumbnail/thumbnail-1.png">
              </div>
              <div class="card-body">
                <a href="{clickurl}">
                  <p class="card-text">Pilih Rider yang Akan Berada di Podium 1,2,3 sebelum Race
                    Berlangsung</p>
                </a>
              </div>
            </div>
          </div>


        </div>
        <div class="row d-flex justify-content-center">
          <a class="btn-berita-lainnya btn btn-primary js-scroll-trigger" href="https://www.detik.com/tag/yamaha-motogp"
            style="" target="_blank">LIHAT SEMUA <img src="assets/img/landingpage/svg/right.svg"></a>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to action-->
  <?php
include "include/footer.php";
?>

</body>

</html>