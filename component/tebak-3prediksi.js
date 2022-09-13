var submit_detikid = new bootstrap.Modal(document.getElementById('submit_detikid'));
var submit_ended = new bootstrap.Modal(document.getElementById('submit_ended'));
var submit_sukses = new bootstrap.Modal(document.getElementById('submit_sukses'));
var submit_klik = new bootstrap.Modal(document.getElementById('submit_klik'));
var submit_h3 = new bootstrap.Modal(document.getElementById('submit_h3'));
var submit_3prediksi = new bootstrap.Modal(document.getElementById('submit_3prediksi'));
var submit_update = new bootstrap.Modal(document.getElementById('submit_update'));

var kontrol_submit = document.querySelector("div.kontrol a.mekanisme");
kontrol_submit.addEventListener("click", function(){
  submit_detikid.toggle();
});

submit_3prediksi.toggle(); // QUIZ DIBUKA H-3