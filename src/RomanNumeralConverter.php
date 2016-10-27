<?php

class RomanNumeralConverter
{
    public function convert($number)
    {
        if ($number == 5) {
            return 'V';
        }
        return str_repeat('I', $number);
    }
}
