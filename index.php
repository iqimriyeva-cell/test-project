<?php
$number = 57; // nümunə ədəd
$digits = str_split($number);
echo implode(" ", $digits); // 5 7
<?php
$n = 123456;
echo "Rəqəmlərin sayı: " . strlen((string)$n);
<?php
$n = 1234;
echo "Tərsi: " . strrev((string)$n); // 4321
<?php
$n = 1234;
$digits = str_split($n);
echo "Rəqəmlərin cəmi: " . array_sum($digits); // 10
<?php
$n = 1221;
if ($n == strrev((string)$n)) {
    echo "Palindromdur";
} else {
    echo "Palindrom deyil";
}<?php
$n = 49735;
$digits = str_split($n);
echo "Ən böyük rəqəm: " . max($digits); // 9
<?php
$n = 49735;
$digits = str_split($n);
echo "Ən kiçik rəqəm: " . min($digits); // 3
<?php
$n = 49735;
$digits = str_split($n);
sort($digits);
echo "Artan sıra: " . implode("", $digits); // 34579
<?php
$n = 2468;
$digits = str_split($n);
$allEven = true;

foreach ($digits as $d) {
    if ($d % 2 != 0) {
        $allEven = false;
        break;
    }
}

if ($allEven) {
    echo "Bütün rəqəmlər cütdür";
} else {
    echo "Ən azı bir tək rəqəm var";
}<?php
$n = 1234;
$digits = str_split($n);

foreach ($digits as $d) {
    echo "$d^2 = " . ($d * $d) . "\n";
}