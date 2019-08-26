<?php
  function addTitle($n1,$n2,$n3,$n4){
    echo "Mr. ".$n1.", Mr. ".$n2.", Mr. ".$n3.", Mr. ".$n4."<br>";
}
function  changeSpacesWith($n, $r){
    echo str_replace(" ", $r, $n)."<br>";
}
function  cutString($n){
    $nama = str_split($n);
    echo $nama[0].$nama[1].$nama[2].$nama[3].$nama[4],$nama[5]."<br>";
}
    addTitle('Steve Fox', 'Jin Kazama', 'Eddie Gordo', 'Geese Howard');
    changeSpacesWith('Steve Fox', '-');
    changeSpacesWith('Sergei Dragunov', '+');
    cutString('Kazuya Mishima');
    cutString('Sergei Dragunov');
    cutString('Sasuke Uchiha');
?>