<?php
function ubah_huruf($string){
  $alfabet = "abcdefghijklmnopqrstuvwxyz";
  for($i=0 ; $i<strlen($string) ; $i++) {
    $index = strpos($alfabet,$string[$i]);
    echo $alfabet[$index+1];
  }
  echo "</br>";

}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>