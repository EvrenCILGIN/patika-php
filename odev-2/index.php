<?php
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];
var_dump($planets);
echo "<hr>";
function randomFunc($arr, $val){
    $arrFilter = array_filter($arr);
    $random = array_rand($arrFilter, $val);
    $result = array_map(function ($i) use ($arrFilter) {
        return $arrFilter[$i];
    }, $random);
    return $result;
}
echo "<pre>";
	print_r(randomFunc($planets, 2));
	print_r(randomFunc($planets, 3));
	print_r(randomFunc($planets, 2));
	print_r(randomFunc($planets, 4));
	print_r(randomFunc($planets, 5));
echo "</pre>";
?>

