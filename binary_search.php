<?php
// Enter your code here, enjoy!
$array = array(4, 5, 8, 9, 10, 11, 12, 14);

function binary_search($array){
	$search = 14;
	$low = 0;
	$high = count($array)-1;
	while($low <= $high){
		$mid = (int) (($low + $high)/2);
		echo $mid . "\n";
		$guess = $array[$mid];
		if($guess==$search){
			return "true";
		}if($guess < $search){
			$low = $mid+1;
		}if($guess > $search){
			$high = $mid-1;
		}
	}
	return "false";
}

echo binary_search($array);
