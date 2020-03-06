<?php

class Kata {

    public function fizzBuzz(int $x): string {
        if($x % 3 != 0 && $x % 5 != 0) {
            return '';
        }
    }
}
