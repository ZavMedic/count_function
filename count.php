<?php
function getTotalCount(array $data)
{
    return count($data);
}
/*
print getTotalCount([1, 2, 3, 5, 5, 8]);             // 6
print getTotalCount([]);                            // 0
print getTotalCount(['banan', 'olma', 'shaftoli']); // 3
*/ 

function calc($foo, $bar, $baz)
{
return $foo+$bar+$baz;
}
// print calc(5, 1, 7); //13

function getTextLength(string $text) {
    return strlen($text);
}
/*
print getTextLength('Salom');  // 5
print getTextLength('S alom!');  // 7
*/

function getLargeNumber($a, $b, $c) {
    if ($a > $b && $a > $c) {
        return $a;
    } else if ($b > $a && $b > $c) {
        return $b;
    }
        return $c;
}
/*
print getLargeNumber(5, 10, 12);		// 12
print getLargeNumber(1988, 10, 5);	// 1988
*/
