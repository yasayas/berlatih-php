<?php

function palindrome_angka($angka) {
  // tulis kode di sini
    if ($angka < 9) {
        return $angka+1;
    } else {
        $i = $angka + 1;
        while (!cek_palindrome($i)){
            $i++;
            $temp = (string)$i;
        }
        return $i;
    }
}

function cek_palindrome($angka_cek) {
    $cek_temp = strrev($angka_cek);
    if ($cek_temp == $angka_cek) {
        return true;
    } else {
        return false;
    }
}

// TEST CASES
echo palindrome_angka(8) . "</br>";//9
echo palindrome_angka(10). "</br>";; // 11
echo palindrome_angka(117). "</br>";; // 121
echo palindrome_angka(175). "</br>";; // 181
echo palindrome_angka(1000). "</br>";; // 1001

?>