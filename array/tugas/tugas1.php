<?php 

    // 10 teman fav
    echo " 10 Teman Favorit";
    echo "<br>";
    $teman = ['Mbull','Imam','EKA','Putra','Haikal','Ken','Fayi','Gustiar','Adit','Pratama'];
    print_r($teman);
    echo "<br>";
    echo "======================================================================================================================================================";
    echo "<br>";
    // +4 temen  fav
    echo "+4 Teman Favorit <br>";
    echo "Refalsyah <br> Rangga <br> Asraf <br> Rizki <br>";
    echo "====================================================================================================================================================== <br>";
    // total temen fav
    echo "Total Semua Teman <br>";
    array_push($teman, "Refalsyah", "Rangga", "Asraf", "Rizki");
    print_r($teman);
    

?>