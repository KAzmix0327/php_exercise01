<?php

echo '$score_mathの値を入力してください: ';
$score_math = trim(fgets(STDIN));

echo '$score_englishの値を入力してください: ';
$score_english = trim(fgets(STDIN));

// $score_math と $scrore_englishの両方の値が60以上の時に 合格 と出力
// $score_math と $scrore_englishのどちらか一方の値が60未満の時に 再試験 と出力
// $score_math と $scrore_englishのどちらの値も60未満の時には 不合格 と出力

if ($score_math >=60 && $score_english >=60) {
   echo '合格';
} elseif ($score_math >60 || $score_english >60) {
   echo '再追試';
} else {
   echo '不合格';
}
