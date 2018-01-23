<?php
/* 
For any input array of integers, multiply each adjacent pair and return the highest
product of any two adjacent pairs.
*/

function adjacentElementsProduct($inputArray) {
    //initiate output array
    $outputArray = [];
    
    //Loop through input array (except last element)
    for($i = 0; $i < (count($inputArray)-1); $i++) {
        $outputArray[$i] = $inputArray[$i] * $inputArray[($i+1)];
    }

    //Sort the resulting products from highest to lowest
    rsort($outputArray);
    
    //Grab top product for result 
    return $outputArray[0];
}