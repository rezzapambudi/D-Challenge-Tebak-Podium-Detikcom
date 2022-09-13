  <div class="container fixed-top">
    <input type="checkbox" id="nav_burger">
    <nav class="nav">
      <label for="nav_burger" class="checkbtn">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
      </label>
      <a class="logo">
        <img src="assets/img/d'challenge-logo-f.png">
      </a>
      <ul class="menu">

        <li><a class="<?php if($page=='home') echo 'active' ?>" href="index-new.php?page=home">Home</a></li>
        <li><a class="<?php if($page=='tebak') echo 'active' ?>" href="index-new.php?page=tebak">TEBAK PODIUM</a></li>
        <li><a class="<?php if($page=='leaderboard') echo 'active' ?>" href="index-new.php?page=leaderboard">LEADERBOARD</a></li>
        <li><a class="<?php if($page=='schedule') echo 'active' ?>" href="index-new.php?page=schedule">SCHEDULE</a></li>
        <li><a class="" href="https://www.detik.com/tag/motogp-2021" target="_blank">HIGHLIGHT</a></li>

        <li class="akun">
          <input type="checkbox" id="profile">
          <label for="profile" class="profile">
            <span>FERRY ALFANSO</span>
            <img src="assets/profile/acha.jpg">
            <i class="fas fa-chevron-up"></i>
            <i class="fas fa-chevron-down"></i>
          </label>
          <ul class="seting">
            <li><a href="index-new.php?page=profile">Lihat Poin</a></li>
            <li><a href="#">Keluar</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>