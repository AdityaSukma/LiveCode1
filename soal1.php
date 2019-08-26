<?php
    $nama = "Aditya Ridwan"; //Disesuaikan dengan kebutuhan
    $nilai = 30; //Disesuaikan dengan kebutuhan

    if ($nilai <= 100 && $nilai >= 0) {
        if($nilai <= 100 && $nilai >= 80){
            echo $nama." "."Mendapatkan nilai A";
        }elseif($nilai < 80 && $nilai >= 65){
          echo $nama." "."Mendapatkan nilai B";
        }elseif($nilai < 65 && $nilai >= 50){
          echo $nama." "."Mendapatkan nilai C";
        }elseif($nilai < 50 && $nilai >= 35){
          echo $nama." "."Mendapatkan nilai D";
        }else{
          echo $nama." "."Mendapatkan nilai E";
        }
    }else{
        echo "Nilai yang anda input invalid";
    }
?>