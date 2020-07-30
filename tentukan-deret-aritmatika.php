<?php
function tentukan_deret_aritmatika($arr) {
  $aritmatika = true;
  $beda_awal = $arr[1] - $arr[0];
  $ii = count($arr) - 1;

      for($i = 1 ; $i < $ii ; $i++) {

        $beda = $arr[$i+1]-$arr[$i];

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

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>