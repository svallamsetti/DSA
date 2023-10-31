<?php
// Enter your code here, enjoy!
$array = array(14, 5, 28, 5, 9, 10, 111, 12, 14);

function findSmallest($arrayValues){
	$smallest = $arrayValues[0];
	$lengthOfArray = count($arrayValues);
	
	for($i=1; $i< $lengthOfArray; $i++){
    //flip comparison operator to > to sort descending
		if($arrayValues[$i] < $smallest){
			$smallest = $arrayValues[$i];
		}
	}
	return $smallest;
}
function selection_sort($list){
	$sortedList = [];
	while(count($list) > 0){
		$smallestValue = findSmallest($list);
		$sortedList[] = $smallestValue;
		$smallestIndex = array_search($smallestValue, $list);
		array_splice($list, $smallestIndex, 1);
	}
	return $sortedList;
}

print_r(selection_sort($array));
