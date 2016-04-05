<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Day 0</title>
</head>
<body>
<h3>Assignment #1.</h3>
<?php
function getAreaFromRadius($radius) {
  return pi() * $radius * $radius;
}

if (isset($_GET['radius']) && $_GET['radius'] != '') {
  $radius = $_GET['radius'];
  if (is_numeric($radius)) {
    echo 'Area of radius ' . $radius . ' is equals to ' . getAreaFromRadius($radius);
  } else {
    echo $radius . ' is not a numeric.';
  }
} else {
  echo 'There is no radius enter.<br/>
  Please use ?radius=x. While x is numeric.';
}

?>
<br/><br/>

<h3>Assignment #2</h3>
<?php
$cities = [
  'เมืองนนทบุรี' => 11000,
  'บางบัวทอง'  => 11110,
  'ปากเกร็ด'   => 11120,
  'บางกรวย'   => 11130,
  'บางใหญ่'    => 11140,
  'ไทรน้อย'    => 11150
];

if (isset($_GET['city']) && $_GET['city'] != '') {
  $city = $_GET['city'];
  if (isset($cities[$city])) {
    echo "$city city postcode is $cities[$city].";
  } else {
    echo 'Not found you entered city postcode.';
  }
} else {
  echo 'There is no city enter.<br/>
  Please use ?city=x. While x is a city name.';
}

?>
<br/><br/>

<h3>Assignment #3</h3>
<?php

$monthNames = [
  1 => 'January',
  'February',
  'March',
  'April',
  'May',
  'June',
  'July',
  'August',
  'September',
  'October',
  'November',
  'December'
];

if (isset($_GET['month']) && $_GET['month'] != '' && is_numeric($_GET['month'])) {
  $monthNumber = $_GET['month'];
  if ($monthNumber > 0 && $monthNumber < 13) {
    echo $monthNames[$monthNumber];
  } else {
    echo $monthNumber . ' is out of range. The value must be between 1 - 12.';
  }
} else {
  echo 'There is no month enter.<br/>
  Please use ?month=x. While x is a number of month.';
}
?>
<br/><br/>

<h3>Assignment #4</h3>
<select>
  <option value="">Please Select</option>
<?php for ($number = 1; $number <= 12; ++$number) : ?>
  <option><?= $number ?></option>
<?php endfor; ?>
</select>
<br/><br/>

<h3>Assignment #5</h3>
<?php
$number = 1;
if (isset($_GET['number'])
  && $_GET['number'] != ''
  && is_numeric($_GET['number'])
  && $_GET['number'] > 1) {
  $number = $_GET['number'];
}
?>
<form>
  <input type="number" name="number" min="1" value="<?= $number ?>">
  <button type="submit">กดฉันสิ</button>
</form>
<span>
List of divisible of <?= $number ?> are: itself and
<?php
for ($i = floor($number / 2); $i > 0; $i--) {
  if ($number % $i == 0) {
    echo $i;
    if ($i != 1) {
      echo ', ';
    }
  }
}
?>
</span>
<br/><br/>

<h3>Assignment #6</h3>
<?php
$word = '';
if (isset($_GET['word']) && $_GET['word'] != '') {
  $word = $_GET['word'];
}

function getReversedWord($word) {
  $reversedWord = '';
  for ($index = strlen($word) - 1; $index >= 0; --$index) {
    $reversedWord .= $word[$index];
  }
  return $reversedWord;
}

$reversedWord = getReversedWord($word);

?>
<form>
  <input type="text" name="word" value="<?= $word ?>">
  <button type="submit">จิ้ม สิ จิ้ม!</button>
</form>
<p><?= $reversedWord ?></p>
<br/><br/>

<h3>Assignment #7</h3>
<?php
$palindrome = '';
if (isset($_GET['palindrome']) && $_GET['palindrome'] != '') {
  $palindrome = $_GET['palindrome'];
}
?>
<form>
  <input type="text" name="palindrome" value="<?= $palindrome ?>">
  <button type="submit">จิ้ม สิ จิ้ม!</button>
</form>
<?php
if ($palindrome == getReversedWord($palindrome)) {
  echo 'There are the same word (palindrome).';
} else {
  echo 'No, There not the same word (palindrome).';
}
?>
<br/><br/>

<h3>Assignment #8</h3>
<p>Please look inside code.</p>
<?php
function getMinimumBankNote($moneyValue) {
  $moneyValue = [
    '1000' => 0,
    '500'  => 0,
    '100'  => 0
  ];

  $temp = floor($moneyValue / 1000);
  $moneyValue['1000'] = $temp;
  $moneyValue -= $temp * 1000;

  $temp = floor($moneyValue / 500);
  $moneyValue['500'] = $temp;
  $moneyValue -= $temp * 500;

  $temp = floor($moneyValue / 100);
  $moneyValue['100'] = $temp;

  return $moneyValue;
}
?>
<br/><br/>

<h3>Assignment #9</h3>
<p>Please look inside code.</p>
<?php
function allIntegerThatDivisleBothValue($firstNumber, $secondNumber) {
  $allIntegerNumbers = [];
  $minimum = 0;
  if ($firstNumber < $secondNumber) {
    $minimum = $firstNumber;
  } else if ($secondNumber < $firstNumber) {
    $minimum = $secondNumber;
  } else if ($firstNumber == $secondNumber) {
    $minimum = $firstNumber;
    $allIntegerNumbers[] = $firstNumber;
  }

  for ($i = floor($minimum / 2); $i > 0; --$i) {
    if ($firstNumber % $i == 0 && $secondNumber %i == 0) {
      $allIntegerNumbers[] = $i;
    }
  }

  return $allIntegerNumbers;
}
?>
<br/><br/>

<h3>Assignment #10</h3>
<p>Please look inside code.</p>
<?php
function getGreatestCommonFactor($firstNumber, $secondNumber) {
  return allIntegerThatDivisleBothValue[0];
}
?>
</body>
</html>
