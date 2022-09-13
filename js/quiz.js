$(document).ready(function () {

    $('#loginModal').show().css('opacity', '1');
    //$('#disableModal').show().css('opacity', '1');

    $('.quiz #loginModal button').click(function () {
        $('#loginModal').hide();
        $('.loginModalBg').hide();
        $('.container').removeClass('mybgblur');
    });
    $('.quiz #submitDoneModal button').click(function () {
        $('#submitDoneModal').hide();
    });

    $('.submitBtn').click(function () {
        //window.open('quiz.php?page=profile&status=thanks', '_self')
        /* hapus popup & bg bg nya */
        $('#submitModal').hide();
        $('#submitDoneModal').hide();
        $('.modal-backdrop').hide();
        /* end of hapus popup */
        $('#submitDoneModal').show().css('opacity', '1');
    });

    var maxPrediksi = 3
    var saveIndex = [];
    var juara = -1;
    var myreset = 1;

    $('.quiz .kiri button').on('click', function () {
        //alert('saveIndexxxx='+saveIndex.length);
        var i = $('.quiz .kiri button').index(this);
        var inArray = saveIndex.find(function (e) {
            return e == i
        })
        if (inArray != i) {
            if (saveIndex.length < maxPrediksi) {
                /* ganti class button reset & submit */
                if (saveIndex.length == 2) {
                    $('.myreset').addClass('myselected');
                    $('.submitJuara').addClass('myselected');
                }
                /* end of ganti class button reset & submit */
                $('.quiz .kiri button:eq(' + i + ')').addClass('selected');
                saveIndex.push(i);
                juara++;
                $('.quiz .prediksi > button:eq(' + juara + ')').html('');
                $('.quiz .prediksi > button:eq(' + juara + ')').addClass('selected');
                $('.quiz .kiri button:eq(' + i + ')').children().clone().appendTo('.quiz .prediksi > button:eq(' + juara + ')');
                if ($(window).outerWidth() <= 0) {
                    $('.podium .kiri').hide();
                    enable_scroll();
                }
                //alert('saveIndex='+saveIndex.length+'maxPrediksi'+maxPrediksi);
                console.log('saveIndex.length......' + saveIndex.length + ', maxPrediksi......' + maxPrediksi);
                if (saveIndex.length === maxPrediksi) {
                    $('.submitJuara').attr('data-target', '#submitModal');
                    console.log('saveIndex.length == maxPrediksi');
                } else {
                    $('.submitJuara').attr('data-target', '#juaraModal');
                    console.log('saveIndex.length != maxPrediksi');
                }
            }
        }
    });
    $('.quiz .kontrol button:eq(0)').on('click', function () {
        saveIndex = [];
        console.log('saveIndex.length......' + saveIndex.length + ', maxPrediksi......' + maxPrediksi);
        juara = -1;
        $('.myreset').removeClass('myselected');
        $('.submitJuara').removeClass('myselected');
        $('.quiz .kiri button').removeClass('selected');
        $('.quiz .prediksi > button').removeClass('selected');
        $('.quiz .prediksi > button:eq(0)').html('<b>1.</b> PILIH RIDER');
        $('.quiz .prediksi > button:eq(1)').html('<b>2.</b> PILIH RIDER');
        $('.quiz .prediksi > button:eq(2)').html('<b>3.</b> PILIH RIDER');
    });
    $('.quiz .kontrol button:eq(1)').on('click', function () {
        if (saveIndex.length === maxPrediksi) {
            $('.submitJuara').attr('data-target', '#submitModal');
            console.log('saveIndex.length == maxPrediksi');
        } else {
            $('.submitJuara').attr('data-target', '#juaraModal');
            console.log('saveIndex.length != maxPrediksi');
        }
    });

    $('.quiz .prediksi > button').on('click', function () {
        if ($(window).outerWidth() <= 768) {
            $('.podium .kiri').show();
            disable_scroll();
        }
    });


    window.addEventListener('resize', function () {
        if ($(window).outerWidth() > 0) {
            $('.podium .kiri').show();
            enable_scroll();
        } else {
            $('.podium .kiri').hide();
        }
    });
    // DESKTOP
    // spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
    // left: 37, up: 38, right: 39, down: 40,
    // (Source: http://stackoverflow.com/a/4770179)
    var keys = [32, 33, 34, 35, 36, 37, 38, 39, 40];

    function preventDefault(e) {
        e = e || window.event;
        if (e.preventDefault) e.preventDefault();
        e.returnValue = false;
    }

    function keydown(e) {
        for (var i = keys.length; i--;) {
            if (e.keyCode === keys[i]) {
                preventDefault(e);
                return;
            }
        }
    }

    function wheel(e) {
        preventDefault(e);
    }

    function disable_scroll() {
        if (window.addEventListener) {
            window.addEventListener('DOMMouseScroll', wheel, false);
        }
        window.onmousewheel = document.onmousewheel = wheel;
        document.onkeydown = keydown;
        disable_scroll_mobile();
    }

    function enable_scroll() {
        if (window.removeEventListener) window.removeEventListener('DOMMouseScroll', wheel, false);
        window.onmousewheel = document.onmousewheel = document.onkeydown = null;
        enable_scroll_mobile();
    }

    // MOBILE
    function disable_scroll_mobile() {
        document.addEventListener('touchmove', preventDefault, false);
    }

    function enable_scroll_mobile() {
        document.removeEventListener('touchmove', preventDefault, false);
    }
});