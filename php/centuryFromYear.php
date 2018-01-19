<?php
//Return the century for the given year.
function centuryFromYear($year) {
    $century = ceil($year/100);
    return $century;
}
