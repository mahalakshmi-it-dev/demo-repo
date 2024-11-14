<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
 </head>
 <body>
  <?php
  $arr = array("1", "testst");
  var_dump($arr);
  /*try {
	$num = 0;
	if ($num == 0) {
		throw new Exception("Cannot divide by zero");
	}
  } catch (Exception $e) {
	  //echo "Error: ".$e->getTrace();
	  //print_r($e->getTraceAsString());
	  echo $e;
  }*/
  /*function stringreverse($str)
  {
	  $strlen = strlen($str);
	  $explode_str = explode(" ", $str);
	  //print_r($explode_str);
	  
	  foreach ($explode_str as $key => $val) {
		  $strreverse=NULL;
		  $strlen_word = strlen($val);
		  for ($i=$strlen_word-1;$i>=0 ;$i-- ) {
			  $strreverse .= $val[$i];
		  }
		  echo $strreverse." ";
	  }
  }*/
  
  //stringreverse("My World! Appu");
  
  /*function array_median($array) {
	$iCount = count($array);
	echo floor($iCount / 2);
	$middle_index = floor($iCount / 2);
	sort($array, SORT_NUMERIC);
	$median = $array[$middle_index];
		if ($iCount % 2 == 0) {
			$median = ($median + $array[$middle_index - 1]) / 2;
		}
	return $median;
	}

$arr= $arr = array('5','2','4');
echo array_median($arr);



function array_median($array) {
	$count = count($array);
	$median_index = floor ($count/2);
	sort($array);
	$median = $array[$median_index];
	if ($count % 2 == 0) {
		$median = $median + ($array[$median_index - 1]) / 2;
	}
	return $median;
}
$arr= $arr = array('5','2','4');
echo array_median($arr);*/
  ?>
 </body>
</html>
