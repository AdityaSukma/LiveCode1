<?php
  $nama = "Zoe"; //Isi nama disini
  $first = substr(strtolower($nama),0,1);

  if($first == "a" || $first == "b" || $first == "c" || $first == "d"){
    echo "Masuk Grup Pertama";
  }elseif($first == "e" || $first == "f" || $first == "g" || $first == "h"){
    echo "Masuk Grup Kedua";
  }else{
    echo "Masuk Grup Terakhir";
  }
?>