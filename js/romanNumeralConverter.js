// Roman numeral converter project for freeCodeCamp JavaScript cert
// Coverts a given number into a roman numeral, provided in uppercase

function convertToRoman(num) {
  // Separate the different parts of the number
  let numArray = String(+num).split('');

  // Tell JS what the possible roman numerals are
  let romans = ['','I','II','III','IV','V','VI','VII','VIII','IX','','X','XX','XXX','XL','L','LX','LXX','LXXX','XC','','C','CC','CCC','CD','D','DC','DCC','DCCC','CM'];

  let finalRoman = '';

  // determine how many times to run through the conversion
  let condition = numArray.length >= 3 ? 3 : numArray.length;

  // iterate through the number, find the corresponding roman numeral in 'romans' array, and add it to the final number
  for (let i = 0; i < condition; i++) {
    let popped = +numArray.pop() + (i * 10);
    let str = (romans[popped] || '');
    finalRoman = str + finalRoman;
  }

  // return the roman numeral, and check if any 'M's have to be added for thousands
  return Array(+numArray.join('') + 1).join('M') + finalRoman;

}

convertToRoman(36); // XXXVI

convertToRoman(2); // II
convertToRoman(3); // III
convertToRoman(4); // IV
convertToRoman(5); // V
convertToRoman(9); // IX
convertToRoman(12); // XII
convertToRoman(16); // XVI
convertToRoman(29); // XXIX
convertToRoman(44); // XLIV
convertToRoman(45); // XLV
convertToRoman(68); // LXVIII
convertToRoman(83); // LXXXIII
convertToRoman(97); // XCVII
convertToRoman(99); // XCIX
convertToRoman(400); // CD
convertToRoman(500); // D
convertToRoman(501); // DI
convertToRoman(649); // DCXLIX
convertToRoman(798); // DCCXCVIII
convertToRoman(891); // DCCCXCI
convertToRoman(1000); // M
convertToRoman(1004); // MIV
convertToRoman(1006); // MVI
convertToRoman(1023); // MXXIII
convertToRoman(2014); // MMXIV
convertToRoman(3999); // MMMCMXCIX
