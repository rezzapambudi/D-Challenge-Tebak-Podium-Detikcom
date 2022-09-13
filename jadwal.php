<?php
include "include/head.php";
?>

<body id="page-top">
    <?php
include "include/navbar-unboard.php";
?>

<style>
        #nav-jadwal a {
            color: #000000 !important;
            font-weight: bold !important;
        }
    </style>
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
    <section class="jadwal" id="jadwal">
        <div class="container mycontainer">
            <div class="row">
                <div class="col-12 text-left">
                    <div class="header-box">
                        <h3>YAMAHA GP CHALLENGE 2022</h3>
                        <h1>JADWAL MOTOGP 2022</h1>
                    </div>
                </div>
            </div>
            <div class="row mt-4 container-jadwal">
                <?php
                    $myarr = array(
                        array("jadwal-tanggal"=>"06","jadwal-bulan"=>"MAR","circuit-name"=>"Grand Prix of Qatar","circuit-desc"=>"Losail International Circuit","circuit-flag"=>"qatar.svg","circuit-country"=>"QATAR","circuit-pic"=>"qatar.png","button-caption"=>"IKUTI QUIZ"),
                        array("jadwal-tanggal"=>"20","jadwal-bulan"=>"MAR","circuit-name"=>"Grand Prix of Indonesia","circuit-desc"=>"Pertamina Mandalika Circuit","circuit-flag"=>"indonesia.svg","circuit-country"=>"INDONESIA","circuit-pic"=>"indonesia.png","button-caption"=>"IKUTI QUIZ"),
                        array("jadwal-tanggal"=>"03","jadwal-bulan"=>"APR","circuit-name"=>"Gran Premio Michelin® de la República Argentina","circuit-desc"=>"Termas de Río Hondo","circuit-flag"=>"argentina.svg","circuit-country"=>"ARGENTINA","circuit-pic"=>"argentina.png","button-caption"=>"LIHAT PEMENANG"),
                        array("jadwal-tanggal"=>"10","jadwal-bulan"=>"APR","circuit-name"=>"Red Bull Grand Prix of the Americas","circuit-desc"=>"Circuit Of The Americas","circuit-flag"=>"usa.svg","circuit-country"=>"UNITED STATES","circuit-pic"=>"usa.png","button-caption"=>"IKUTI QUIZ"),
                        array("jadwal-tanggal"=>"24","jadwal-bulan"=>"APR","circuit-name"=>"Grande Prémio de Portugal","circuit-desc"=>"Autódromo Internacional do Algarve","circuit-flag"=>"portugal.svg","circuit-country"=>"PORTUGAL","circuit-pic"=>"portugal.png","button-caption"=>"IKUTI QUIZ"),
                        array("jadwal-tanggal"=>"01","jadwal-bulan"=>"MAY","circuit-name"=>"Gran Premio Red Bull de España","circuit-desc"=>"Circuito de Jerez - Angel Nieto","circuit-flag"=>"spain.svg","circuit-country"=>"SPAIN","circuit-pic"=>"spain.png","button-caption"=>"IKUTI QUIZ"),
                        array("jadwal-tanggal"=>"15","jadwal-bulan"=>"MAY","circuit-name"=>"SHARK HELMETS Grand Prix de France","circuit-desc"=>"Le Mans","circuit-flag"=>"france.svg","circuit-country"=>"FRANCE","circuit-pic"=>"france.png","button-caption"=>"IKUTI QUIZ"),
                        array("jadwal-tanggal"=>"29","jadwal-bulan"=>"MAY","circuit-name"=>"Gran Premio d’Italia Oakley","circuit-desc"=>"Autodromo Internazionale del Mugello","circuit-flag"=>"italy.svg","circuit-country"=>"ITALY","circuit-pic"=>"italy.png","button-caption"=>"IKUTI QUIZ"),
                        array("jadwal-tanggal"=>"05","jadwal-bulan"=>"JUN","circuit-name"=>"Gran Premi Monster Energy de Catalunya","circuit-desc"=>"Circuit de Barcelona-Catalunya","circuit-flag"=>"catalunya.svg","circuit-country"=>"SPAIN","circuit-pic"=>"catalunya.png","button-caption"=>"IKUTI QUIZ"),
                        array("jadwal-tanggal"=>"19","jadwal-bulan"=>"JUN","circuit-name"=>"Liqui Moly Motorrad Grand Prix Deutschland","circuit-desc"=>"Sachsenring","circuit-flag"=>"germany.svg","circuit-country"=>"GERMANY","circuit-pic"=>"germany.png","button-caption"=>"IKUTI QUIZ"),
                        array("jadwal-tanggal"=>"26","jadwal-bulan"=>"JUN","circuit-name"=>"Motul TT Assen","circuit-desc"=>"TT Circuit Assen","circuit-flag"=>"netherlands.svg","circuit-country"=>"NETHERLANDS","circuit-pic"=>"netherlands.png","button-caption"=>"IKUTI QUIZ"),
                        array("jadwal-tanggal"=>"10","jadwal-bulan"=>"JUL","circuit-name"=>"Grand Prix of Finland","circuit-desc"=>"KymiRing","circuit-flag"=>"finland.svg","circuit-country"=>"FINLAND","circuit-pic"=>"finland.png","button-caption"=>"IKUTI QUIZ"),
                        array("jadwal-tanggal"=>"07","jadwal-bulan"=>"AUG","circuit-name"=>"Monster Energy British Grand Prix","circuit-desc"=>"Silverstone Circuit","circuit-flag"=>"britain.svg","circuit-country"=>"GREAT BRITAIN","circuit-pic"=>"britain.png","button-caption"=>"IKUTI QUIZ"),
                        array("jadwal-tanggal"=>"21","jadwal-bulan"=>"AUG","circuit-name"=>"Motorrad Grand Prix von Österreich","circuit-desc"=>"Red Bull Ring - Spielberg","circuit-flag"=>"austria.svg","circuit-country"=>"AUSTRIA","circuit-pic"=>"japan.png","button-caption"=>"IKUTI QUIZ"),
                        array("jadwal-tanggal"=>"04","jadwal-bulan"=>"SEP","circuit-name"=>"Gran Premio di San Marino e della Riviera di Rimini","circuit-desc"=>"Misano World Circuit Marco Simoncelli","circuit-flag"=>"sanmarino.svg","circuit-country"=>"ITALY","circuit-pic"=>"italy.png","button-caption"=>"IKUTI QUIZ"),
                        array("jadwal-tanggal"=>"18","jadwal-bulan"=>"SEP","circuit-name"=>"Gran Premio de Aragón","circuit-desc"=>"MotorLand Aragón","circuit-flag"=>"spain.svg","circuit-country"=>"SPAIN","circuit-pic"=>"aragon.png","button-caption"=>"IKUTI QUIZ"),
                        array("jadwal-tanggal"=>"25","jadwal-bulan"=>"SEP","circuit-name"=>"Motul Grand Prix of Japan","circuit-desc"=>"Twin Ring Motegi","circuit-flag"=>"japan.svg","circuit-country"=>"JAPAN","circuit-pic"=>"japan.png","button-caption"=>"IKUTI QUIZ"),
                        array("jadwal-tanggal"=>"02","jadwal-bulan"=>"OCT","circuit-name"=>"Thailand Grand Prix","circuit-desc"=>"Chang International Circuit","circuit-flag"=>"thailand.svg","circuit-country"=>"THAILAND","circuit-pic"=>"thailand.png","button-caption"=>"IKUTI QUIZ"),
                        array("jadwal-tanggal"=>"16","jadwal-bulan"=>"OCT","circuit-name"=>"Australian Motorcycle Grand Prix","circuit-desc"=>"Phillip Island","circuit-flag"=>"australia.svg","circuit-country"=>"AUSTRALIA","circuit-pic"=>"australia.png","button-caption"=>"IKUTI QUIZ"),
                        array("jadwal-tanggal"=>"23","jadwal-bulan"=>"OCT","circuit-name"=>" Malaysia Motorcycle Grand Prix","circuit-desc"=>"Sepang International Circuit","circuit-flag"=>"malaysia.svg","circuit-country"=>"MALAYSIA","circuit-pic"=>"malaysia.png","button-caption"=>"IKUTI QUIZ"),
                        array("jadwal-tanggal"=>"06","jadwal-bulan"=>"NOV","circuit-name"=>" Gran Premio Motul de la Comunitat Valenciana","circuit-desc"=>"Circuit Ricardo Tormo","circuit-flag"=>"valencia.svg","circuit-country"=>"SPAIN","circuit-pic"=>"spain-2.png","button-caption"=>"IKUTI QUIZ"),
                    );
                    for($i=0;$i<21;$i++)
                    {
                        $myhref = "quiz-alt.php";
                        $no=$i+1;
                        $active = "";
                        $mydisabled = "disabled";
                        if ($i==1)
                        {
                            $active = "box-jadwal-active";
                            $mydisabled = "";
                        }
                        if ($i==2)
                        {
                            $active = "box-jadwal-active-color";
                            $myhref = "klasemen-pemenangquiz.php";
                            $mydisabled = "";
                        }
                        
                ?>
                <div class="box-jadwal <?php echo $active; ?>">
                    <div class="row mb-2">
                        <div class="container-jadwal-tanggal col-4 pr-0">
                            <div class="jadwal-tanggal <?php echo $ppd;?> text-center mb-1"><?php echo $myarr[$i]['jadwal-tanggal']; ?>
                            </div>
                            <div class="jadwal-bulan text-center"><?php echo $myarr[$i]['jadwal-bulan']; ?></div>
                        </div>
                        <div class="container-jadwal-circuit col-8 pl-2 pr-2">
                            <div class="circuit-name"><?php echo $no." - ".$myarr[$i]['circuit-name']; ?></div>
                            <div class="circuit-desc"><?php echo $myarr[$i]['circuit-desc']; ?></div>
                            <div class="row container-circuit-country">
                                <div class="col-2 circuit-flag pr-0"><img
                                        src="assets/img/flag/<?php echo $myarr[$i]['circuit-flag']; ?>">
                                </div>
                                <div class="col-10 circuit-country pl-2"><?php echo $myarr[$i]['circuit-country']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div><img src="assets/img/jadwal/cirquit/<?php echo $myarr[$i]['circuit-pic']; ?>" class="img-fluid"
                            width="100%"></div>
                    <div class="text-center jadwal-container-button">
                        <a class="btn btn-ikuti-quiz <?php echo $mydisabled;?>" href="<?php echo $myhref; ?>" role="button"><?php echo $myarr[$i]['button-caption']; ?></a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- END OF KLASEMEN-->



    <?php
include "include/footer.php";
?>
</body>

</html>