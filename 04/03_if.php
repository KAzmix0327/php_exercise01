<?php

echo '$scoreの値を入力してください: ';
$score = trim(fgets(STDIN));

// $scoreが60以上なら「合格です」と出力
// $scoreが30以上60未満なら「追試です」と出力
// $scoreが30未満なら「不合格です」と出力
if ($score >= 60) {
   echo '合格';
} elseif ($score <60 && $score >= 30){
   echo '追試です';
} else {
   echo '不合格です';
}
