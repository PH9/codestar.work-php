<?php
function convertToThaiNumber($number) {
  $arabicNumber = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
  $thaiNumber   = ['๐', '๑', '๒', '๓', '๔', '๕', '๖', '๗', '๘', '๙'];
  return str_replace($arabicNumber, $thaiNumber, $number);
}
?>
