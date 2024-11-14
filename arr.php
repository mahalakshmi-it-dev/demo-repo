<?php

// how to declare an array
/*$arr = array();
$arr = [];
$arr = array("red", "yellow");
$arr = array("color" => "red", "model" => "A11");
$arr = ["red", "yellow"];
$arr = ["color" => "red", "model" => "A11"];
$arr = array(array("color" => "red", "model" => "A11"), array("color" => "blue", "model" => "A12"));*/

/*$arr = array("color" => "red", "model" => "A11");
print_r(array_change_key_case($arr, CASE_UPPER));
print_r(array_change_key_case($arr, CASE_LOWER));
$arr = array("color" => "red", "model" => "A11", "type" => "324", "year" => "2024");
print_r(array_chunk($arr,2,true));

$arr = array(array("color" => "red", "model" => "A11"), array("color" => "blue", "model" => "A12"));
print_r(array_column($arr,"color"));

$arr = array("color", "model");
$arr1 = array("red", "A12");
print_r(array_combine($arr, $arr1));

$arr = array("red", "yellow", "red", "blue");
print_r(array_count_values($arr));

$arr = array("color" => "red", "model" => "A11");
$arr1 = array("color" => "red", "model" => "A11", "year" => "2022");
print_r(array_diff($arr,$arr1));

$arr = array("color" => "red", "model" => "A11","year" => "2022");
$arr1 = array("color" => "red", "model1" => "A11");
print_r(array_diff_assoc($arr,$arr1));

$numbers = array("1", "4", "5", "20", "99");
$even = array_filter($numbers, function($num) {
	return $num % 2 != 0;
});
print_r($even);

$arr = array("color" => "red", "model" => "A11","year" => "2022");
if(array_key_exists("color", $arr)) {
	echo "Key Exists";
} else {
	echo "Key Not Exists";
}

$arr = array("color" => "red", "model" => "A11","year" => "2022");
print_r(array_keys($arr));
$arr = array("color" => "red", "model" => "A11","year" => "2022");
$arr1 = array("color" => "red1", "model" => "A111","year" => "2022");
print_r(array_merge($arr, $arr1));

$arr = array("color" => "red", "model" => "A11","year" => "2022");
$arr1 = array("color" => "red1", "model" => "A111","year" => "2022");
print_r(array_merge_recursive($arr, $arr1));

$a1=array("Dog","Cat");
$a2=array("Dog","Missy");
array_multisort($a1,$a2);
print_r($a1);
print_r($a2);
$arr = array("color" => "red", "model" => "A11","year" => "2022");
print_r(array_pad($arr,5,"audi"));

$a1=array("Dog","Cat");
print_r(array_pop($a1));*/

$numbers = [1, 2, 3, 4, 5, 6];

/*array_walk($numbers, function(&$value, $key) {
	$value *= $value;
});

print_r($numbers);*/

$new_array = array_filter($numbers, function($value) {
	return $value % 2 != 0;
});

print_r($new_array);
echo "test";
?>