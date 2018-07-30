$(document).ready(function(){
  $("#form-input").css("display","none"); //Menghilangkan form-input ketika pertama kali dijalankan
  $(".detail").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
    if ($("input[name='optradio']:checked").val() != "nonkomersil" ) { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
      $("#form-input").slideUp("fast"); //Efek Slide Up (Menghilangan Form Input)
    } else {
      $("#form-input").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
    }
  });
});

var tmpB = [];
var rowDel = [];
var tmpDel = 0;
function harian(i){
  var hasil = 0;
  harga_harian = document.getElementById("txtJenis"+ i).value;
  jum = document.getElementById("txtHarian" + i).value;
  document.getElementById("txtHarga" + i).value = parseInt(harga_harian) * parseInt(jum);
  
  tmpB[i] = (parseInt(harga_harian) * parseInt(jum));
  // document.getElementById("txtTotal").value = tmp;
  for (var j = 0; j < tmpB.length; j++) {
    hasil = hasil + tmpB[j];
  }
  document.getElementById("txtTotal").value = hasil;
  console.log(hasil)
}

function checkDelete(id){
  console.log(id)
}


function bulanan(i){
  harga_bulanan = document.getElementById("txtJenisBln"+ i).value;
  jum = document.getElementById("txtBulanan" + i).value;
  document.getElementById("hargaBulanan" + i).value = parseInt(harga_bulanan) * parseInt(jum);
}

function tahunan(i){
  harga_tahunan = document.getElementById("txtJenisTh"+ i).value;
  jum = document.getElementById("txtTahunan" + i).value;
  document.getElementById("hargaTahunan" + i).value = parseInt(harga_tahunan) * parseInt(jum);
  tmp
}

function asuransi(i){
  harga_asuransi = document.getElementById("txtJenisAsuransi"+ i).value;
  document.getElementById("txtHargaAsuransi" + i).value = harga_asuransi;
  tmp = tmp + parseInt(harga_asuransi);
  document.getElementById("txtTotalAsuransi").value = tmp;
}
  
