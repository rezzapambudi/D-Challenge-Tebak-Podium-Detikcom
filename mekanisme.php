<?php
include "include/head.php";
?>

<body class="mekanisme">

  <?php
  include "include/navbar-unboard.php";
  ?>


  <!-- TICKER LIVE-->
  <section class="ticker-live" id="ticker-live">
    <div class="container mycontainer">
      <div class="row">
        <div class="col-12">

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
  </section>
  <!-- END OF TICKER LIVE-->

  <!-- KLASEMEN-->
  <section class="klasemen mb-5" id="mekanisme">
    <div class="container mycontainer">
      <div class="row">
        <div class="col-12 text-left">
          <div class="box-btn-back">
            <a href="index.php"><button type="button" class="btn btn-back-home"><i class="fas fa-arrow-left"></i>BACK TO
                HOME</button></a>
          </div>
          <div class="header-box">
            <h3>YAMAHA GP CHALLENGE 2021</h3>
            <h1>MEKANISME</h1>
          </div>
        </div>
      </div>

      <div id="accordion">
        <div class="card">
          <a class="card-link" data-toggle="collapse" href="#collapseOne">
            <div class="card-header">
              KRITERIA PESERTA
            </div>
          </a>
          <div id="collapseOne" class="collapse show" data-parent="#accordion">
            <div class="card-body">
              <p>1. Wanita dan pria berusia minimal 17 tahun pada saat kompetisi berlangsung.<br />2. Warga negara
                Indonesia dan berdomisili di Indonesia.<br />3. Memiliki akun DetikID, apabila belum silahkan membuat
                terlebih dahulu di <a href="https://connect.detik.com/" target="_blank">https://connect.detik.com/</p>
            </div>
          </div>
        </div>
        <div class="card">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
            <div class="card-header">
              PERIODE KOMPETISI
            </div>
          </a>
          <div id="collapseTwo" class="collapse" data-parent="#accordion">
            <div class="card-body">
              <p>Tebak Podium Yamaha GP Challenge dilaksanakan pada bulan Maret – November 2022</p>
            </div>
          </div>
        </div>
        <div class="card">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
            <div class="card-header">
              MEKANISME KOMPETISI
            </div>
          </a>
          <div id="collapseThree" class="collapse" data-parent="#accordion">
            <div class="card-body">
              <p>Ikuti langkah-langkah berikut untuk berpartisipasi dalam Tebak Podium Yamaha GP Challenge:<br />1.
                Login menggunakan akun detik ID dan isi profile dengan data lengkap yang sebenarnya di <a
                  href="https://bit.ly/yamahamotogpchallenge" target="_blank">bit.ly/yamahamotogpchallenge</a><br />2.
                Tebak Podium akan diadakan setiap seri sampai dengan musim MotoGP 2022 berakhir <br />3. Memilih rider
                untuk podium 1, 2 dan 3 sebelum race dimulai setiap seri Moto GP 2022 untuk mendapatkan poin bila
                tebakannya benar.<br />4. Kumpulkan poin dari setiap seri untuk mendapatkan kesempatan memenangkan
                hadiah utama.<br />5. Pihak penyelenggara akan mengumumkan pemenang setiap akhir seri race kompetisi
                melalui <a href="https://bit.ly/yamahamotogpchallenge" target="_blank">bit.ly/yamahamotogpchallenge</a>
              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
            <div class="card-header">
              KETENTUAN KOMPETISI
            </div>
          </a>
          <div id="collapseFour" class="collapse" data-parent="#accordion">
            <div class="card-body">
              <p>1. Setiap seri memiliki poin partisipasi tertentu dan poin pemenang tebak podium yang dapat
                dikumpulkan.<br />2. Pada setiap seri memiliki proporsi poin partisipasi yang berbeda, sedangkan untuk
                yang benar menebak podium ridernya akan mendapatkan poin yang nilainya sama setiap seri berlangsungnya
                MotoGP 2022. <br />3. Apabila rider yang dipilih tidak sesuai podium 1,2 dan 3 maka peserta tidak
                mendapatkan poin.<br />4. Bila peserta tidak memilih rider untuk Tebak Podium pada setiap seri maka
                peserta tidak mendapatkan poin partisipasi. <br />5. Tebak Podium dapat dilakukan mulai 3 hari dan
                ditutup 1 jam sebelum race, semakin jauh hari peserta memilih rider untuk tebak podium maka semakin
                besar kesempatan untuk memenangkan hadiah untuk seri tersebut.<br />6. Apabila terjadi penundaan race
                yang berpindah hari dan peserta sudah memilih riders maka pilihan tersebut sudah disimpan otomatis
                menjadi pilihannya ketika seri yang tertunda tersebut dilaksanakan kemudian hari.<br />7. Apabila di
                tengah musim pihak penyelenggara MotoGP 2022 menghentikan kelanjutan musim dengan alasan pandemi atau
                lainnya, maka tidak akan dipilih pemenang utama <br />8. Pihak penyelenggara berhak mendiskualifikasi
                peserta yang melanggar syarat dan ketentuan lainnya.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
            <div class="card-header">
              SISTEM POIN
            </div>
          </a>
          <div id="collapseFive" class="collapse" data-parent="#accordion">
            <div class="card-body">
              <p>1. Lengkapi data profile dengan data yang sebenarnya untuk mendapatkan poin senilai 30 poin.<br />2.
                Apabila peserta mengupload "ss aplikasi yamaha" pada page login maka akan mendapatkan poin tambahan
                senilai 50 poin setelah moderasi"<br />3. Poin partisipasi diberikan setiap mengikuti seri MotoGP 2022:
              </p>
              <table style="width: 100%; border-collapse: collapse;" border="0">
                <tbody>
                  <tr>
                    <td style="width: 50%;">1. Losail, Qatar = +10 poin<br />2. Mandalika, Indonesia = +50 poin<br />3.
                      Rio Hondo, Argentina = +10 poin<br />4. Circuit of the Americas, Amerika = +10 poin<br />5.
                      Algarve, Portugal = +10 poin<br />6. Jerez, Spanyol = +10 poin<br />7. Le Mans, Prancis = +20
                      poin<br />8. Mugello, Italy = +20 poin<br />9.
                      Cataluya, Barcelona-Catalunya = +20 poin<br />10. Sachsenring, Jerman = +20 poin<br />11. Assen,
                      Belanda = +20 poin<br /></td>
                    <td style="width: 50%;">12. Kymi Ring, Finlandia = +30 poin<br />13. Silverstone, Inggris = +30
                      poin<br />14.
                      Red Bull Ring, Austria = +30 poin<br />15. Misano, San Marino = +30 poin<br />16. MotorLand
                      Aragon, Aragon = +30 poin<br />17.
                      Motegi, Jepang = +40 poin<br />18. Chang, Thailand = +40 poin <br />19. Phillip Island, Australia
                      = +40 poin<br />20. Sepang, Malaysia = +50 poin<br />21. Ricardo Tormo, Valencia = +50 poin
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="card">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapseSix">
            <div class="card-header">
              KETENTUAN PEMENANG TEBAK PODIUM YAMAHA GP CHALLENGE
            </div>
          </a>
          <div id="collapseSix" class="collapse" data-parent="#accordion">
            <div class="card-body">
              <p>Akan ada dua periode pemilihan pemenang: pemenang seri dan pemenang utama Ketentuan untuk pemenang di
                semua periode: <br />1. Pengumuman pemenang akan dilakukan melalui <a
                  href="https://bit.ly/yamahamotogpchallenge." target="_blank">bit.ly/yamahamotogpchallenge.</a><br />2.
                Pihak Penyelenggara berhak untuk mendiskualifikasi peserta dan pemenang yang tidak memenuhi ketentuan
                yang telah ditentukan dalam ketentuan dan persyaratan kegiatan serta membatalkan atau mengambil/menarik
                kembali hadiah yang telah diterima oleh pemenang.<br />3. Pemenang akan diverifikasi lewat email,
                apabila pemenang tidak dapat dihubungi dalam 3x24 jam maka dianggap gugur.<br />4. Penentuan pemenang
                bersifat mutlak dan tidak dapat diganggu gugat. Kompetisi ini tidak dipungut biaya, hati-hati penipuan
                yang mengatasnamakan Pihak Penyelenggara dan/atau PT. Yamaha Indonesia Motor Manufacturing.<br /></p>

              <p><strong>Alternatif 1</strong>
                <br />Ketentuan untuk pemenang seri:<br />
                1. Dipilih 3 pemenang setiap seri: <br />
                a. Satu Pemenang Pertama mendapatkan Huawei Matepad T10<br />
                b. Satu Pemenang Kedua mendapatkan Amazfit Smartwatch<br />
                c. Satu Pemenang Ketiga mendapatkan Saldo e-Wallet senilai 1 Juta Rupiah<br />
                2. Pemenang dipilih berdasarkan poin tertinggi dan waktu tercepat pemilihan rider Tebak Podium MotoGP
                2022.
              </p>
              <p><strong>Ketentuan untuk pemenang utama:</strong>
                <br />1. Dipilih 1 pemenang hadiah utama mendapatkan Motor Yamaha.
                <br />2. Pemenang dipilih berdasarkan poin tertinggi pada berakhirnya musim MotoGP 2022.
                <br />3.Bila ada peserta dengan jumlah poin yang sama, pemenang akan ditentukan dengan kemenangan poin
                tiap seri (head-to-head) serta kecepatan waktu pemilihan rider di tiap seri.
                <br />4. Apabila di tengah musim pihak penyelenggara MotoGP 2022 menghentikan kelanjutan musim dengan
                alasan apapun, maka tidak akan dipilih pemenang utama.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapseSeven">
            <div class="card-header">
              KETENTUAN HADIAH
            </div>
          </a>
          <div id="collapseSeven" class="collapse" data-parent="#accordion">
            <div class="card-body">
              <p>1. Peserta tidak diperbolehkan untuk melakukan pemilihan hadiah dari segi bentuk, tipe, atau warna
                apapun.
                <br />2. Hadiah tidak dapat diuangkan atau dipindahtangankan.
                <br />3. Pajak hadiah ditanggung pemenang.
                <br />4. Konfirmasi alamat lengkap akan dilakukan lewat email untuk keperluan pengiriman hadiah.
                <br />5. Hadiah akan dikirimkan ke alamat bersangkutan sesuai dengan alamat yang telah diberikan saat
                konfirmasi pemenang oleh panitia penyelenggara.
                <br />6. Penyelenggara tidak bertanggung jawab apabila hadiah yang telah berhasil dikirimkan tidak
                berhasil mencapai alamat peserta. Dalam hal ini, Pihak Penyelenggara atau PT. Yamaha Indonesia Motor
                Manufacturing akan dibebaskan dari tuntutan apapun sehubungan dengan hal hal di atas.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapseEight">
            <div class="card-header">
              SYARAT & KETENTUAN UMUM
            </div>
          </a>
          <div id="collapseEight" class="collapse" data-parent="#accordion">
            <div class="card-body">
              <div>
                <div>1. Pihak Penyelenggara berhak mendiskualifikasi peserta yang melanggar syarat dan ketentuan dalam
                  kompetisi Yamaha GP Challenge.</div>
                <div>2. Pihak Penyelenggara berhak untuk memperbaharui hadiah dari kompetisi ini sewaktu-waktu.</div>
                <div>3. Pihak Penyelenggara berhak untuk melakukan penambahan atau pengurangan syarat dan ketentuan yang
                  berlaku tanpa melakukan pemberitahuan terlebih dahulu.</div>
                <div>4. Keikutsertaan dalam program promosi ini tidak dipungut biaya. Hati-hati penipuan yang
                  mengatasnamakan Pihak Penyelenggara atau PT Yamaha Indonesia Motor Manufacturing.</div>
                <div>5. Informasi atau pertanyaan lebih lanjut mengenai syarat dan ketentuan ini dapat diajukan melalui
                  email ke info@detik.com</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END OF KLASEMEN-->



  <?php
include "include/footer.php";
?>
</body>

</html>