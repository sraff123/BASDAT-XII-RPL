<?php

// Cara untuk mengakses class dan object
class mobil{
    //property
    var $merk;
    var $roda;
    var $kecepatan;

    // membuat fungsi / operasi berjalan (maju dan mundur)
    function jalan_maju(){
        return "Vrooommm maju dia telah memilih mu";
    }
    function jalan_mundur(){
        return "Vroooomm ciiittt mundur kamu cuma dibuat persinggahan dia";
    }
}

// instansiasi (menginstankan variabel yang menghubungkan dari class keluar class)
$mobil_keren = new mobil();

// set propery (mengisi property dengan mengakses diluar class)
$mobil_keren->merk="Ferrari";
$mobil_keren->roda="Hitam";
$mobil_keren->kecepatan="300KmH";

//tampilkan propertinya
echo $mobil_keren->merk;
echo "<br/>";
echo $mobil_keren->roda;
echo "<br/>";
echo $mobil_keren->kecepatan;
echo "<br/>";

//tampilkan function
echo $mobil_keren->jalan_maju();
echo "<br/>";
echo $mobil_keren->jalan_mundur();
?>