<?php

$nama = "Nurul jamal"; /* variabel global */

function haloDunia () {
  $nama = "Wawan"; # variabel lokal
  echo $nama . '<br>'; # Wawan
}

haloDunia();

echo $nama; # Nurul jamal