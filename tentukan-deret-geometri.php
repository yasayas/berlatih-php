<?php
function tentukan_deret_geometri($arr) {
  $aritmatika = true;
  $beda_awal = $arr[1]/$arr[0];
  $ii = count($arr) - 1;

  for($i = 1 ; $i < $ii ; $i++) {
    $beda = $arr[$i+1]/$arr[$i];
    if ($beda_awal != $beda) {
      $aritmatika = false;
    }
    $beda_awal = $beda_awal;

  }

  if($aritmatika){
    echo "true </br>";
  } else {
    echo "false </br>";
  }


}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>