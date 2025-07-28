<?php
// array massivimiz qiymat => kalitlarini qabul qilmoqda
function isThereKey(array $name, $a) {

// isset orqali qiymatning kaliti mavjudligini tekshiramiz
return isset($name[$a]);
}

$zb = isThereKey(['name' => 'John', 'fam' => 'Doe'], 'name');

// haqiqatda true ekanligini tekshirdim
if ($zb == true) {
    echo "Rostku";
} 

echo "<br />";

$uff = isThereKey(['name' => 'John', 'fam' => 'Doe'], 'bar');

// haqiqatda false ekanligini tekshirdim
if ($uff == false) {
    echo "Yolg'on";
}
