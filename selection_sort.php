<?php
// Enter your code here, enjoy!
$array = array(0,114, 5, 28, 5, 9, 10, 111, 12, 14);

function findSmallest($arrayValues){
	$smallestIndex = 0;
	$smallest = $arrayValues[0];
	$lengthOfArray = count($arrayValues);
	
	for($i=1; $i< $lengthOfArray; $i++){
		if($arrayValues[$i] < $smallest){
			$smallest = $arrayValues[$i];
			$smallestIndex = $i;
		}
	}
	return $smallestIndex;
}
function selection_sort($list){
	$sortedList = [];
	while(count($list) > 0){
		$smallestIndex = findSmallest($list);
		$sortedList[] = $list[$smallestIndex];
		array_splice($list, $smallestIndex, 1);
	}
	return $sortedList;
}

print_r(selection_sort($array));
