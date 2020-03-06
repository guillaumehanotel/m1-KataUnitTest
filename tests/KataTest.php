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

}
