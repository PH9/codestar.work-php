<?php
class Assignment_2_2_Test extends PHPUnit_Framework_TestCase
{
  public function test_romanNumber_1_I() {
    $expted = 'I';
    $actual = convertToRomanNumber(1);
    $this->assertEquals($expted, $actual);
  }

  public function test_romanNumber_2_II() {
    $expted = 'II';
    $actual = convertToRomanNumber(2);
    $this->assertEquals($expted, $actual);
  }

  public function test_romanNumber_3_II() {
    $expted = 'III';
    $actual = convertToRomanNumber(3);
    $this->assertEquals($expted, $actual);
  }

  public function test_romanNumber_4_IV() {
    $expted = 'IV';
    $actual = convertToRomanNumber(4);
    $this->assertEquals($expted, $actual);
  }

  public function test_romanNumber_5_V() {
    $expted = 'V';
    $actual = convertToRomanNumber(5);
    $this->assertEquals($expted, $actual);
  }

  public function test_romanNumber_6_VI() {
    $expted = 'VI';
    $actual = convertToRomanNumber(6);
    $this->assertEquals($expted, $actual);
  }

  public function test_romanNumber_7_VII() {
    $expted = 'VII';
    $actual = convertToRomanNumber(7);
    $this->assertEquals($expted, $actual);
  }

  public function test_romanNumber_8_VIII() {
    $expted = 'VIII';
    $actual = convertToRomanNumber(8);
    $this->assertEquals($expted, $actual);
  }

  public function test_romanNumber_9_IX() {
    $expted = 'IX';
    $actual = convertToRomanNumber(9);
    $this->assertEquals($expted, $actual);
  }

  public function test_romanNumber_10_X() {
    $expted = 'X';
    $actual = convertToRomanNumber(10);
    $this->assertEquals($expted, $actual);
  }

  // 11 - 39 is testCovered

  public function test_romanNumber_40_XL() {
    $expted = 'XL';
    $actual = convertToRomanNumber(40);
    $this->assertEquals($expted, $actual);
  }

  public function test_romanNumber_41_XLI() {
    $expted = 'XLI';
    $actual = convertToRomanNumber(41);
    $this->assertEquals($expted, $actual);
  }

  public function test_romanNumber_42_XLII() {
    $expted = 'XLII';
    $actual = convertToRomanNumber(42);
    $this->assertEquals($expted, $actual);
  }
}
