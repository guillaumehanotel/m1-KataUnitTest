<?php

class Kata {

    public function fizzBuzz(int $x): string {
        if($x % 3 == 0) {
            return 'Fizz';
        } else if($x % 5 == 0) {
            return 'Buzz';
        } else {
            return '';
        }
    }
}
