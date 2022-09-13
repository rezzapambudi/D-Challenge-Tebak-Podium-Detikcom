<?php include "include/head.php"; ?>

<body id="page-top">
  <?php include "include/navbar-onboard.php"; ?>

  <style>
    #nav-quiz a {
      color: #000000 !important;
      font-weight: bold !important;
    }
  </style>

  <?php include "include/ticker-live.html"; ?>

  <section id="myquiz">
    <div class="fxd-bg"></div>
    <div id="quiz"></div>
    <div class="quiz container-fluid mobile-nopadding">

      <!-- MODAL SAAT EVENT BELUM LOGIN -->
      <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content text-center" style="background:#ffffff;background-size:cover;height:170px;">
            <div class="modal-body" style="margin-top:10px;">
              <span class="info-icon"><i class="fas fa-info-circle"></span></i><br>
              Silahkan LOGIN terlebih dahulu untuk mengikuti quiz
            </div>
            <div class="modal-footer justify-content-center">
              <button type="button" style="display:block;margin-left:auto;margin-right:auto;">LOG-IN</button>
            </div>
          </div>
        </div>
      </div>

      <!-- MODAL INFO SEBELUM EVENT DIMULAI, BUTUH TINGGAL DIAKTIFKAN SAJA -->
      <!-- <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content text-center" style="background:#ffffff;background-size:cover;height:260px;">
            <div class="modal-body" style="margin-top:10px;">
              <span class="info-icon"><i class="fas fa-info-circle"></span></i><br>
              Yamaha GP Challenge 2021 “Quiz Tebak Podium” akan dibuka 3 Hari Sebelum Race Dimulai
            </div>
            <div class="modal-footer justify-content-center">
              <div class="box-sponsor">
                <div class="row d-flex justify-content-center">
                  <div class="col-4">
                    <img src="assets/img/logo-yamahamotogp-nav.png" class="img-fluid">
                  </div>
                  <div class="col-4">
                    <img src="assets/img/logo-yamaha.png" class="img-fluid">
                  </div>
                </div>
              </div>
              <a href="index.php">
                <button type="button"
                  style="display:block;margin-left:auto;margin-right:auto;margin-top: 10px;text-decoration: none;">BACK
                  TO
                  HOME</button>
              </a>
            </div>
          </div>
        </div>
      </div> -->

      <!-- MODAL SUDAH LOGIN DAN SUDAH SUBMIT QUIZ -->
      <div class="modal fade" id="submitDoneModal" tabindex="-1" role="dialog" aria-labelledby="submitDoneModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content text-center" style="background:#ffffff;background-size:cover;height:130px;">
            <div class="modal-body">
              <i class="fas fa-check-circle"></i>
              <br>Jawaban Anda Sudah Diterima
            </div>
            <div class="modal-footer justify-content-center" style="padding:0px;">
              <button type="button"
                style="display:block;margin-left:auto;margin-right:auto;margin-bottom: 20px;">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!--              <div class="loginModalBg modal-backdrop"></div>-->

      <div class="box-container-quiz container mobile-nopadding">
        <div class="row">
          <div class="col-md-8 col-12 text-left">
            <div class="header-box">
              <h3>YAMAHA GP CHALLENGE 2022</h3>
              <h1>QUIZ TEBAK PODIUM</h1>
              <h6>Pilih 3 rider yang kamu prediksi akan menempati posisi podium<br>1, 2, dan 3 pada seri GP yang
                akan segera berlangsung!</h6>
              <a href="mekanisme.php"><button type="button" class="btn btn-ikuti-quiz">MEKANISME</button></a>
            </div>
          </div>
          <div class="col-md-4 col-12 text-left">
            <div class="row mt-4 container-jadwal">

              <div class="box-jadwal box-jadwal-active">
                <div class="row mb-2">
                  <div class="container-jadwal-tanggal col-4">
                    <div class="jadwal-tanggal mb-1">20</div>
                    <div class="jadwal-bulan">MAR</div>
                  </div>
                  <div class="container-jadwal-circuit col-8">
                    <div class="circuit-name">2 - Pertamina Grand Prix of Indonesia</div>
                    <div class="circuit-desc">Pertamina Mandalika Circuit</div>
                    <div class="row container-circuit-country">
                      <div class="col-2 circuit-flag pr-0"><img src="assets/img/flag/indonesia.svg">
                      </div>
                      <div class="col-10 circuit-country pl-2">INDONESIA</div>
                    </div>
                  </div>
                </div>

              </div>

            </div>



            <div class="jadwal_notify">

            </div>




          </div>
        </div>
        <div class="podium d-flex justify-content-between align-items-start">
          <div class="row">
            <div class="kiri col-md-8 col-12 mobile-nopadding">
              <button><span class="flag-q"><img src="assets/img/flag/france.svg"></span><span>Fabio
                  Quartararo</span></button>
              <button><span class="flag-q"><img src="assets/img/flag/italy.svg"></span><span>Franco
                  Morbidelli</span></button>
              <button><span class="flag-q"><img src="assets/img/flag/italy.svg"></span><span>Andrea
                  Dovizioso</span></button>
              <button><span class="flag-q"><img src="assets/img/flag/france.svg"></span><span>Johann
                  Zarco</span></button>
              <button><span class="flag-q"><img src="assets/img/flag/italy.svg"></span><span>Luca Marini</span></button>
              <button><span class="flag-q"><img src="assets/img/flag/spain.svg"></span><span>Maverick
                  Viñales</span></button>
              <button><span class="flag-q"><img src="assets/img/flag/italy.svg"></span><span>Enea
                  Bastianini</span></button>
              <button><span class="flag-q"><img src="assets/img/flag/spain.svg"></span><span>Raul
                  Fernandez</span></button>
              <button><span class="flag-q"><img src="assets/img/flag/japan.svg"></span><span>Takaaki
                  Nakagami</span></button>
              <button><span class="flag-q"><img src="assets/img/flag/south_africa.svg"></span><span>Brad
                  Binder</span></button>
              <button><span class="flag-q"><img src="assets/img/flag/spain.svg"></span><span>Joan Mir</span></button>
              <button><span class="flag-q"><img src="assets/img/flag/south_africa.svg"></span><span>Darryn
                  Binder</span></button>
              <button><span class="flag-q"><img src="assets/img/flag/spain.svg"></span><span>Aleix
                  Espargaro</span></button>
              <button><span class="flag-q"><img src="assets/img/flag/spain.svg"></span><span>Alex Rins</span></button>
              <button><span class="flag-q"><img src="assets/img/flag/australia.svg"></span><span>Jack
                  Miller</span></button>
              <button><span class="flag-q"><img src="assets/img/flag/spain.svg"></span><span>Pol
                  Espargaro</span></button>
              <button><span class="flag-q"><img src="assets/img/flag/italy.svg"></span><span>Fabio Di
                  Giannantonio</span></button>
              <button><span class="flag-q"><img src="assets/img/flag/italy.svg"></span><span>Francesco
                  Bagnaia</span></button>
              <button><span class="flag-q"><img src="assets/img/flag/italy.svg"></span><span>Marco
                  Bezzecchi</span></button>
              <button><span class="flag-q"><img src="assets/img/flag/spain.svg"></span><span>Alex
                  Marquez</span></button>
              <button><span class="flag-q"><img src="assets/img/flag/australia.svg"></span><span>Remy
                  Gardner</span></button>
              <button><span class="flag-q"><img src="assets/img/flag/portugal.svg"></span><span>Miguel
                  Oliveira</span></button>
              <button><span class="flag-q"><img src="assets/img/flag/spain.svg"></span><span>Jorge
                  Martin</span></button>
              <button><span class="flag-q"><img src="assets/img/flag/spain.svg"></span><span>Marc
                  Marquez</span></button>
            </div>
            <div class="kanan col-md-4 col-12 mobile-nopadding">
              <div class="prediksi d-flex flex-column justify-content-center align-items-center">
                <h3 class="text-center">PREDIKSI PODIUM</h3>
                <button><b>1.</b> PILIH RIDER</button>
                <button><b>2.</b> PILIH RIDER</button>
                <button><b>3.</b> PILIH RIDER</button>
                <div class="kontrol">
                  <button class="myreset"><i class="fas fa-undo-alt"></i></button>
                  <button class="submitJuara" data-toggle="modal" data-target="#juaraModal">SUBMIT</button>
                  <!-- <button data-toggle="modal" data-target="#disableModal">SUBMIT</button> -->
                </div>
                <!-- <div class="link-mekanisme text-center">
                  <a href="snk.php"
                    style="background:#0869EA;color:#ffffff;padding:5px 10px;border-radius:13px;font-size:11px;">MEKANISME
                    SELENGKAPNYA</a>
                </div> -->
              </div>

            </div>
          </div>
        </div>

        <!-- MODAL BILA PILIHAN KURANG DARI TIGA -->
        <div class="modal fade" id="juaraModal" tabindex="-1" role="dialog" aria-labelledby="juaraModalTitle"
          aria-hidden="true" style="padding-right:0px !important;">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content text-center" style="background:#ffffff;background-size:cover;height:170px;">
              <div class="modal-body" style="top:33px;">
                Anda wajib memilih tiga juara!
              </div>
              <div class="modal-footer justify-content-center" style="display:flex;margin-top:11px;">
                <button type="button" data-dismiss="modal" style="margin-left:auto;margin-right:auto;">CANCEL</button>
              </div>
            </div>
          </div>
        </div>

        <!-- MODAL SAAT EVENT BERLANGSUNG -->
        <div class="modal fade" id="submitModal" tabindex="-1" role="dialog" aria-labelledby="submitModalTitle"
          aria-hidden="true" style="padding-right:0px !important;">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content text-center" style="background:#ffffff;background-size:cover;">
              <div class="modal-body">
                Sudah yakin dengan pilihanmu?<br>
                Pilihan yang sudah di-submit,<br>
                tidak dapat diubah kembali.
              </div>
              <div class="modal-footer justify-content-center" style="display:flex;align-item:baseline">
                <button type="button" data-dismiss="modal" style="margin-left:auto;margin-right:5px;">BELUM</button>
                <button class="submitBtn" type="button" style="margin-right:auto;margin-left:5px;">SUBMIT</button>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- MODAL SAAT EVENT BELUM BERLANGSUNG -->
      <!--                <div class="mybgblur"><h1 class="colorwhite">Welcome</h1></div>-->
      <div class="modal fade" id="disableModal" tabindex="-1" role="dialog" aria-labelledby="disableModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content text-center">
            <div class="modal-body">
              Yamaha GP Challenge 2019<br>
              “Quiz Tebak Podium”<br>
              akan dimulai 3 hari sebelum race.
            </div>
            <div class="modal-footer justify-content-center">
              <button type="button"><a href="jadwal.php">Cek Jadwal Moto GP</a></button>
            </div>
            <div class="link-mekanisme text-center">
              <a href="snk.php">MEKANISME SELENGKAPNYA</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>












  <?php
include "include/footer.php";
?>

  <?php
    $mydisable = $_GET['mydisable'];
    if ($mydisable) {
?>
  <script>
    $(document).ready(function () {
      $('#loginModal').hide();
      $('.loginModalBg').hide();
      $('#disableModal').show().css('opacity', '1');
      $('#loginModal').addClass('mybg');
    });
  </script>
  <?php } ?>

  <script>
    $(document).ready(function () {
      $('#loginModal').addClass('mybg');
    });
  </script>




</body>

</html>