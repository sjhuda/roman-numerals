<?php

class RomanNumeralConverter
{
    public function convert($number)
    {
        $result = '';

        if ($number >= 5) {
            $result .= 'V';
            $number -= 5;
        }
        $result .= str_repeat('I', $number);
        return $result;
    }
}
