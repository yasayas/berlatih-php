<?php

function papan_catur($angka) {
  $pagar = "#";
  $spasi = " ";
  $row = "";
  for ($i=$angka; $i > 0 ; $i--) {
    for ($ii=$angka; $ii > 0 ; $ii--) {
      if ($i%2 != 0) {
        $row = $pagar . $spasi;
        echo $row;
      } else {
        $row = $spasi . $pagar ;
        echo $row;
      }
    }
    echo $row . "</br>";
  }
}


// TEST CASES
echo papan_catur(4) ;
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/

echo papan_catur(5) ;
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/