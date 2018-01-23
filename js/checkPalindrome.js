function checkPalindrome(inputString) {
    
    //Since there is no built-in reverse method in JS, we have to do it ourselves
    var splitString = inputString.split("");
    var reverseArray = splitString.reverse();
    var reversedString = reverseArray.join("");
    
    if (reversedString != inputString) {
        return false;
    }
    return true;
    
}