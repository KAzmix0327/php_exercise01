<?php

function calc_cal($total_meals) 
{
    // コードを追記
    // 標準関数を使用して、配列の値を合算
// 標準関数を使用して、配列を結合($yesterday_mealと$today_meal)して$total_mealsを算出
// calc_cal関数の中で、$total_mealsの値を合算し、関数の戻り値として設定

$total_cal = array_sum($total_meals);
return "摂取カロリー合計は{$total_cal}Kcalです";
}
