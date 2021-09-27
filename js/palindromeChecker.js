// Palindrome checker project for freeCodeCamp JavaScript cert
// returns true or false

function palindrome(str) {
  // Lowercase the input to standardize it
  // Match our regex /[a-z0-9]/g so it only checks for the alphanumeric characters
  const temp = str.toLowerCase().match(/[a-z0-9]/g);

  // return if the string === reversedString
  return temp.join('') === temp.reverse().join('');
}


palindrome("eye"); // true
palindrome("_eye"); // true
palindrome("race car"); // true
palindrome("not a palindrome"); // false
palindrome("A man, a plan, a canal. Panama"); // true
palindrome("never odd or even"); // true
palindrome("nope"); // false
palindrome("almostomla"); // false
palindrome("My age is 0, 0 si ega ym."); // true
palindrome("1 eye for of 1 eye"); // false
palindrome("0_0 (: /-\ :) 0-0"); // true
palindrome("five|\_/|four"); // false
