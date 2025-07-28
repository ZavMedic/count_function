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

/* TOPSHIRIQ
    isThereValue nomli funksiya yarating.

Bu funksiya massiv kalitiga qiymat kiritilgan yoki yo'qligini tekshirsin.

Qiymat bor bo'lsa true, yo'q bo'lsa false qaytarsin.
    foo(['name' => 'John', 'fam' => ''], 'name');		// true
foo(['name' => 'John', 'fam' => ''], 'fam');		// false
foo(['name' => 'John', 'fam' => ''], 'bar');		// false
*/
// nimalar qilganimni tushunmadim, tasodifan to'g'ri yozilgan kod. php.net isset, empty
function isThereValue(array $name, $a) {
if (empty($name[$a])) {
return false;
}
if (isset($name[$a])) {
return true;
}
}
