<?php
/**
 * Tìm ước số chung lớn nhất (USCLN)
 *
 * @param a: số nguyên dương
 * @param b: số nguyên dương
 * @return integer USCLN của a và b
 */
function USCLN($a, $b) {
    if ($b == 0) return $a;
    return USCLN($b, $a % $b);
}
 
/**
 * Tìm bội số chung nhỏ nhất (BSCNN)
 *
 * @param a: số nguyên dương
 * @param b: số nguyên dương
 * @return integer BSCNN của a và b
 */
function BSCNN($a, $b) {
    return ($a * $b) / USCLN($a, $b);
}
 
$a = 15;
$b = 40;
// tính USCLN của a và b
echo ("USCLN của $a và $b là: " . USCLN($a, $b)) . "<br>";
// tính BSCNN của a và b
echo ("BSCNN của $a và  $b là: " . BSCNN($a, $b));
