<?php
// Below we will define an n-interesting polygon. 
// Your task is to find the area of a polygon for a given n.

// A 1-interesting polygon is just a square with a side of length 1. An n-interesting 
// polygon is obtained by taking the n - 1-interesting polygon and appending 
// 1-interesting polygons to its rim, side by side. You can see the 1-, 2-, 3- and 
// 4-interesting polygons in the picture below.


/*
	I most certainly had to do some research into this one.
	I think the best way to solve this wound up being a simple loop
	to implement a recursive additive function. 

	Assuming the minimum area is always going to be 1, we simply add a "ring"
	to the perimiter of the shape ("number of iterations*4") until the number
	of iterations reaches "n".
*/

/**
 * Returns the area of an n-interesting polygon
 * @param integer n
 * @return integer
 */
function shapeArea($n) {

	//Return zero if argument is zero, null, or not an integer
	if (!$n || !is_int($n)) {
        return 0;
    }

    $area = 1;
    
    for ($i = 1; $i <= $n; $i++) {
        $area += (($i*4) - 4);
    }
    
    return $area;
}