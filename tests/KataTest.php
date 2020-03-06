<?php

use PHPUnit\Framework\TestCase;

require './vendor/autoload.php';
require './src/Kata.php';

class KataTest extends TestCase {

    private static $kata;

    public function __construct() {
        self::$kata = new Kata();
    }

    public function testShouldReturnEmpty() {
        $input = 1;
        $expectedResult = '';
        $this->assertSame($expectedResult, self::$kata->fizzBuzz($input));
    }

}
