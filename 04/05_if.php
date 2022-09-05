<?php

echo '$numの値を入力してください: ';
$num = trim(fgets(STDIN));

// $numが素数であれば 素数です と出力
// $numが素数でない時は 素数ではありません と出力(1も素数ではありません)

$judge = True;

if ($num == 1) {
    $judge = False;
}

for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        $judge = False;
        break;
    }
}

if ($judge) {
    echo $num . 'は素数です。';
} else {
    echo $num . 'は素数ではありません。';
}
