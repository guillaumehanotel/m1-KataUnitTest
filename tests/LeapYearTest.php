<?php

use PHPUnit\Framework\TestCase;
require_once './vendor/autoload.php';
require_once './src/Kata.php';

class LeapYearTest extends TestCase {

    private static $kata;

    public function __construct($name = null, array $data = [], $dataName = '') {
        parent::__construct($name, $data, $dataName);
        self::$kata = new Kata();
    }

    public function testIsDivisibleBy400() {
        $input = 2000;
        $expectOutput = true;
        $this->assertEquals($expectOutput, self::$kata->isLeapYear($input));
    }

    public function testIsDivisibleBy100AndNotBy400() {
        $input = 1800;
        $expectedOutput = false;
        $this->assertEquals($expectedOutput, self::$kata->isLeapYear($input));
    }

    public function testIsDivisibleBy4AndNotBy100() {
        $input = 2008;
        $expectedOutput = true;
        $this->assertEquals($expectedOutput, self::$kata->isLeapYear($input));
    }

    public function testIsNotDivisibleBy4() {
        $input = 2017;
        $expectedOutput = false;
        $this->assertEquals($expectedOutput, self::$kata->isLeapYear($input));
    }


}