<?php

class Kata {

    public function fizzBuzz(int $x): string {
        $output = '';
        $output .= $x % 3 == 0 ? 'Fizz' : '';
        $output .= $x % 5 == 0 ? 'Buzz' : '';
        return $output;
    }
}
