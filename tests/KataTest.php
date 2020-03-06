<?php

use PHPUnit\Framework\TestCase;

require './vendor/autoload.php';
require './src/Kata.php';

class KataTest extends TestCase {

    private static $kata;

    public function __construct($name = null, array $data = [], $dataName = '') {
        parent::__construct($name, $data, $dataName);
        self::$kata = new Kata();
    }

    public function testShouldReturnEmpty() {
        $input = 1;
        $expectedResult = '';
        $this->assertEquals($expectedResult, self::$kata->fizzBuzz($input));
    }

    public function testShouldReturnFizz() {
        $input = 3;
        $expectedResult = 'Fizz';
        $this->assertEquals($expectedResult, self::$kata->fizzBuzz($input));
    }

    public function testShouldReturnBuzz() {
        $input = 5;
        $expectedResult = 'Buzz';
        $this->assertEquals($expectedResult, self::$kata->fizzBuzz($input));
    }

}
