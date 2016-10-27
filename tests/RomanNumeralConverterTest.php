<?php

class RomanNumeralConverterTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_calculates_the_roman_numeral_for_1()
    {
        $converter = new RomanNumeralConverter();
        $roman_numeral = $converter->convert(1);

        $this->assertEquals('I', $roman_numeral);
    }
}