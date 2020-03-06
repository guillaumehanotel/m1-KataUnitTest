<?php

class Kata {

    public function fizzBuzz(int $x): string {
        $output = '';
        if($x % 3 == 0) {
            $output .= 'Fizz';
        }
        return $output;
    }
}
