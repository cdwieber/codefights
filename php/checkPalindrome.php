<?php
function checkPalindrome($inputString) {
    
    if ($inputString == strrev($inputString)) {
        return true;
    }
        
    return false;
}