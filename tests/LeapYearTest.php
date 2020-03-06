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


}