<?php
    $input = "1,2,4";
    $arr = explode(",", $input);
    $sum = 0;

    foreach( $arr as $value)
    {
    	$sum += $value;
	}
    echo "sum = ".$sum;
?>