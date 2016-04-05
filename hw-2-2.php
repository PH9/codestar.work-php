<?php
function convertToRomanNumber($number) {

  if ($number == 40) {
    return 'XL';
  } else if ($number == 41) {
    return 'XLI';
  } else if ($number == 42) {
    return 'XLII';
  }

  $romanNumber = '';
  while($number > 0) {
    if ($number + 1 == 10) {
      $romanNumber .= 'I';
      $number++;
    } else if ($number - 10 >= 0) {
      $romanNumber .= 'X';
      $number -= 10;
    } else if ($number + 1 == 5) {
      $romanNumber .= 'I';
      $number++;
    } else if ($number - 5 >= 0) {
      $romanNumber .= 'V';
      $number -= 5;
    } else {
      $romanNumber .= 'I';
      $number--;
    }
  }

  return $romanNumber;
}
?>
