<?php

class RomanNumeralConverter
{
    public function convert($number)
    {
        $result = '';

        while ($number >= 50) {
            $result .= 'L';
            $number -= 50;
        }

        while ($number >= 10) {
            $result .= 'X';
            $number -=10;
        }

        while ($number >= 9) {
            $result .= 'IX';
            $number -=9;
        }

        if ($number >= 5) {
            $result .= 'V';
            $number -= 5;
        }

        if ($number >= 4) {
            $result .= 'IV';
            $number -= 4;
        }

        $result .= str_repeat('I', $number);
        return $result;
    }
}
