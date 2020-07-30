<?php
function pasangan_terbesar($angka){
  $cek = str_split($angka);
  $terbesar = $cek[0];

  for ( $i = 0 ; $i <= strlen($cek) ; $i++){
    $terbesar = intval($terbesar);
    $cek_besar = intval($cek[$i]);

    if($terbesar <= $cek_besar){
      $terbesar = $cek[$i];
      $pasangan = $cek[$i] . $cek[$i+1];
    }
  }
  echo $pasangan . "</br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>