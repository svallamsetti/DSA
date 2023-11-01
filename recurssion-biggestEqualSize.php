<?php

// Use the divide-and-conquer approach
function biggestEqualSize($length, $width){
	
	if($length == $width){
		return "$length x $width";
	}
	if($length > $width){
		return biggestEqualSize($length-$width, $width);
	}
	return biggestEqualSize($length, $width-$length);
	
}

echo biggestEqualSize(50, 10);
