<?php
// variabel lokal hanya bisa diakses dari scope dimana dia di definisikan
$nama = " Engga Punya Uang ";

function haloDunia(){
    $nama = "Pak Jamal"; //variabel lokal
    echo $nama;
}

haloDunia(); //objek

echo $nama;
?>