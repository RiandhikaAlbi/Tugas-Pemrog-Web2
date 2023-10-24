<?php

function factorial($n) {
	if ($n <= 1) {
		return 1;
	} else {
		return $n * factorial($n - 1);
	}
}

$number = 5; // ganti dengan bilangan yang ingin anda hitung faktorialnya
$result = factorial($number);
echo "factorial dari $number = $result";


?>