<!doctype html>
<html lang="en">
  <head>
    <title>D'Challenge Tebak Podium</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="https://cdnstatic.detik.com/minisite/dchallenge/dchallenge-577x433.jpg">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="https://cdnstatic.detik.com/live/2021/04/microsite/yamaha/icon.png">
    <!-- Font Awesome icons (free version)-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <!-- <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script> -->
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap"
      rel="stylesheet">
    <!-- BOOTSTRAP -->
    <link href="plugin/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- CUSTOME -->
    <link href="component/general.css" rel="stylesheet">
    <link href="component/navbar.css" rel="stylesheet">

<?php 
  $login = $_REQUEST['login'] ? 1 : 0;
  $tebak = $_REQUEST['tebak'] ? $_REQUEST['tebak'] : 'login';
  $page = $_REQUEST['page'] ? $_REQUEST['page'] : 'home';

  if($page == 'home'){
    echo '<link href="component/headline.css" rel="stylesheet">';
    echo '<link href="component/caraikut.css" rel="stylesheet">';
    echo '<link href="component/hadiahkeren.css" rel="stylesheet">';
    echo '<link href="component/news.css" rel="stylesheet">';
  }
  if($page == 'schedule'){
    echo '<link href="component/schedule.css" rel="stylesheet">';
  }
  if($page == 'tebak'){
    echo '<link href="component/tebak.css" rel="stylesheet">';
  }
  if($page == 'leaderboard'){
    echo '<link href="component/leaderboard.css" rel="stylesheet">';
    // echo '<link href="https://unpkg.com/swiper/swiper-bundle.css" rel="stylesheet">';
    // echo '<link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">';
    // echo file_get_contents('component/swiper-css.html');
  }
  if($page == 'mekanisme'){
    echo '<link href="component/mekanisme.css" rel="stylesheet">';
    
  }
  if($page == 'profile'){
    echo '<link href="component/profile.css" rel="stylesheet">';
  }
?>

    <link href="component/footer.css" rel="stylesheet">

  </head>
  <body>
    <?php 

    // include "component/navbar-logout.php";
    // include "component/navbar-login.php";
    include "component/navbar.php";
    
    // S:COMPONENTS
    if($page == 'home'){
      include "component/headline.php";
      include "component/caraikut.php";
      include "component/hadiahkeren.php";
      include "component/news.html";
    }
    if($page == 'schedule'){
      include "component/schedule.php";
    }
    if($page == 'tebak'){
      include "component/tebak.php";
    }
    if($page == 'leaderboard'){
      include "component/leaderboard.html";
    }
    if($page == 'mekanisme'){
      include "component/mekanisme.html";
    }
    if($page == 'profile'){
      include "component/profile.html";
    }
    // E:COMPONENTS

    include "component/footer.html";
    
    ?>

    
    <!-- BOOTSTRAP -->
    <script src="plugin/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- JS PLUGIN -->
    <?php
    if($page == 'leaderboard'){
      // echo file_get_contents('component/swiper-js.html');
    }
    if($page == 'tebak'){
      if($tebak == 'login') echo "<script src='component/tebak-login.js'></script>";
      if($tebak == 'berakhir') echo "<script src='component/tebak-berakhir.js'></script>";
      if($tebak == 'sukses') echo "<script src='component/tebak-sukses.js'></script>";
      if($tebak == 'yakin') echo "<script src='component/tebak-yakin.js'></script>";
      if($tebak == 'h3') echo "<script src='component/tebak-h3.js'></script>";
      if($tebak == '3prediksi') echo "<script src='component/tebak-3prediksi.js'></script>";
      if($tebak == 'update') echo "<script src='component/tebak-update.js'></script>";
      echo "<script src='https://www.google.com/recaptcha/api.js?hl=id'></script>";
      echo '';
    }
    ?>
  </body>
</html>