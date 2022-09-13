
<!-- S: POPUP 3 PREDIKSI -->
<div class="modal" tabindex="-1" id="submit_3prediksi" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <img src="assets/img/danger@2x.png">
        <p>Belum bisa menyimpan jawaban, silakan mengisi 3 (tiga) rider yang diprediksi</p>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">TEBAK LAGI</button>
      </div>
    </div>
  </div>
</div>
<!-- E: POPUP 3 PREDIKSI -->

<!-- S: POPUP BISA DIISI H-3 -->
<div class="modal" tabindex="-1" id="submit_h3" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <img src="assets/img/lock@2x.png">
        <p>Maaf, d’Challenge Tebak Podium akan dibuka 3 (tiga) hari sebelum race dimulai</p>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BACK TO HOME</button>
      </div>
    </div>
  </div>
</div>
<!-- E: POPUP BISA DIISI H-3 -->

<!-- S: POPUP BELUM LOGIN +++ -->
<div class="modal" tabindex="-1" id="submit_detikid" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <img src="assets/img/peringkat-icon.png">
        <p>Untuk memulai d’Challenge Tebak Podium, mohon masuk ke akun detikID Anda</p>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">MASUK</button>
      </div>
    </div>
  </div>
</div>
<!-- E: POPUP BELUM LOGIN -->

<!-- S: POPUP PROGRAM TEBAK SUDAH BERAKHIR +++ -->
<div class="modal" tabindex="-1" id="submit_ended" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <img src="assets/img/peringkat-icon.png">
        <p>Maaf, program Tebak Podium telah berakhir. Sampai jumpa di turnamen berikutnya</p>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BACK TO HOME</button>
      </div>
    </div>
  </div>
</div>
<!-- E: POPUP PROGRAM TEBAK SUDAH BERAKHIR -->

<!-- S: POPUP SUDAH SUBMIT JAWABAN +++ -->
<div class="modal" tabindex="-1" id="submit_sukses" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <img src="assets/img/submit_success.png">
        <p>Jawaban sudah kami terima, Terima kasih sudah mengikuti d’Challenge Tebak Podium</p>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BACK TO HOME</button>
      </div>
    </div>
  </div>
</div>
<!-- E: POPUP SUDAH SUBMIT JAWABAN -->

<!-- S: POPUP SETELAH KLIK SUBMIT +++ -->
<div class="modal" tabindex="-1" id="submit_klik" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <img src="assets/img/submit_ask.png">
        <p>Sudah yakin dengan tebakanmu? Setelah klik konfirmasi, jawaban tidak dapat diubah</p>
        <div class="submit_button">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BELUM YAKIN</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">KONFIRMASI</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- E: POPUP SETELAH KLIK SUBMIT -->

<!-- S: POPUP UPDATE SISTEM MEMBERSHIP +++ -->
<div class="modal" tabindex="-1" id="submit_update" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <img src="assets/img/lock@2x.png">
        <p>Kami sedang melakukan update sistem membership. Selama proses berlangsung, d’Challenge tebak podium tidak dapat dilakukan. Mohon kesediaan untuk menunggu hingga race berikutnya. Terima kasih.</p>
        <div class="submit_button">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BACK TO HOME</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- E: POPUP UPDATE SISTEM MEMBERSHIP -->
  
<div class="container quiz">
  <h1>TEBAK PODIUM</h1>
  <div class="row">
    <div class="col-lg-8 col-sm-12">
      <p>
        Musim ini, MotoGP akan mempertemukan 24 pembalap terbaik dari 12 tim. Siapakah pembalap yang akan menempati posisi podium di seri kali ini? Berikan prediksimu sekarang!
      </p>
      <a href="index-new.php?page=mekanisme&login=<?= $login ?>" class="mekanisme">
        MEKANISME
        <i class="fas fa-long-arrow-right"></i>
      </a>
    </div>
    <div class="col-lg-4 col-sm-12">
      <div class="schedule">
        <ul>
          <li class="left">
            <ul>
              <li>03</li>
              <li>APR</li>
            </ul>
          </li>
          <li class="right">
            <ul>
              <li>3 - Gran Premio Michelin® de la República Argentina</li>
              <li>Termas de Río Hondo</li>
              <li>
                <img src="assets/flag/argentina.svg">
                <span>ARGENTINA</span>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="container prediksi">
  <div class="row">
    <div class="col-lg-8 col-sm-12">
      <div class="driver_list">
        <ul>
          <li class="active">
            <img src="assets/flag/france.svg">
            <span>Fabio Quartararo</span>
          </li>
          <li>
            <img src="assets/flag/italy.svg">
            <span>Franco Morbidelli</span>
          </li>
          <li>
            <img src="assets/flag/italy.svg">
            <span>Andrea Dovizioso</span>
          </li>
          <li>
            <img src="assets/flag/france.svg">
            <span>Johan Zarco</span>
          </li>
          <li>
            <img src="assets/flag/italy.svg">
            <span>Luca Marini</span>
          </li>
          <li>
            <img src="assets/flag/spain.svg">
            <span>Maverick Viñales</span>
          </li>
          <li>
            <img src="assets/flag/italy.svg">
            <span>Enea Bastianini</span>
          </li>
          <li>
            <img src="assets/flag/spain.svg">
            <span>Raul Fernandez</span>
          </li>
          <li>
            <img src="assets/flag/japan.svg">
            <span>Takaaki Nakagami</span>
          </li>
          <li>
            <img src="assets/flag/south_africa.svg">
            <span>Brad Binder</span>
          </li>
          <li>
            <img src="assets/flag/spain.svg">
            <span>Joan Mir</span>
          </li>
          <li>
            <img src="assets/flag/south_africa.svg">
            <span>Darryn Binder</span>
          </li>
          <li>
            <img src="assets/flag/spain.svg">
            <span>Aleix Espargaro</span>
          </li>
          <li>
            <img src="assets/flag/spain.svg">
            <span>Alex Rinss</span>
          </li>
          <li>
            <img src="assets/flag/australia.svg">
            <span>Jack Miller</span>
          </li>
          <li>
            <img src="assets/flag/spain.svg">
            <span>Pol Espargaro</span>
          </li>
          <li>
            <img src="assets/flag/italy.svg">
            <span>Fabio Di Giannantonio</span>
          </li>
          <li>
            <img src="assets/flag/italy.svg">
            <span>Francesco Bagnaia</span>
          </li>
          <li>
            <img src="assets/flag/italy.svg">
            <span>Marco Bezzecchi</span>
          </li>
          <li>
            <img src="assets/flag/spain.svg">
            <span>Alex Marquez</span>
          </li>
          <li>
            <img src="assets/flag/australia.svg">
            <span>Remy Gardner</span>
          </li>
          <li>
            <img src="assets/flag/portugal.svg">
            <span>Miguel Oliveira</span>
          </li>
          <li>
            <img src="assets/flag/spain.svg">
            <span>Jorge Martin</span>
          </li>
          <li>
            <img src="assets/flag/spain.svg">
            <span>Marc Marquez</span>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-lg-4 col-sm-12">
      <div class="pilihan">
        <h1>PREDIKSI PODIUM</h1>
        <ul>
          <li class="active">
            <img src="assets/flag/italy.svg">
            <span>Fabio Di Giannantonio</span>
          </li>
          <li class="belum_pilih">
            <span>PILIH RIDER 2</span>
          </li>
          <li class="belum_pilih">
            <span>PILIH RIDER 3</span>
          </li>
        </ul>
        <div class="captcha">
          <div class="g-recaptcha" data-sitekey="6LejBrQZAAAAAHM2BGFlgSaACFJ_DF6wYAoxumB1"></div>
        </div>
        <div class="kontrol">
          <a href="#" class="reset">
            <i class="fas fa-repeat-alt"></i>
          </a>
          <a href="#" class="mekanisme">
            SUBMIT
            <i class="fas fa-long-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>