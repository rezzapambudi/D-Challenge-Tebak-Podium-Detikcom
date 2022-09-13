  <div class="container fixed-top">
    <input type="checkbox" id="nav_burger">
    <nav class="nav">
      <label for="nav_burger" class="checkbtn">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
      </label>
      <a class="logo">
        <img src="assets/img/d'challenge-logo-v2.png">
      </a>
      <ul class="menu">

        <li><a class="<?php if($page=='home') echo 'active' ?>" href="index-new.php?page=home&login=<?= $login ?>">Home</a></li>
        <li><a class="<?php if($page=='tebak') echo 'active' ?>" href="index-new.php?page=tebak&login=<?= $login ?>">TEBAK PODIUM</a></li>
        <li><a class="<?php if($page=='leaderboard') echo 'active' ?>" href="index-new.php?page=leaderboard&login=<?= $login ?>">KLASEMEN QUIZ</a></li>
        <li><a class="<?php if($page=='schedule') echo 'active' ?>" href="index-new.php?page=schedule&login=<?= $login ?>">SCHEDULE</a></li>
        <li><a class="" href="https://www.detik.com/tag/motogp-2021" target="_blank">HIGHLIGHT</a></li>
        
        <?php if($login){ ?>

          <li class="akun">
            <input type="checkbox" id="profile">
            <label for="profile" class="profile">
              <span>FERRY ALFANSO</span>
              <div class="foto" style="background-image: url(assets/profile/acha2.jpg);"></div>
              <i class="fas fa-chevron-up"></i>
              <i class="fas fa-chevron-down"></i>
            </label>
            <ul class="seting">
              <li><a href="index-new.php?page=profile&login=<?= $login ?>">Lihat Poin</a></li>
              <li><a href="index-new.php?page=home&login=0">Keluar</a></li>
            </ul>
          </li>

        <?php }else{ ?>

          <li class="daftar">
            <ul>
              <li><a href="#">DAFTAR</a></li>
              <li><a href="index-new.php?page=<?= $page ?>&login=1">MASUK</a></li>
            </ul>
          </li>

        <?php } ?>

      </ul>
    </nav>
  </div>