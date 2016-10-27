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

    /** @test */
    public function it_calculates_the_roman_numeral_for_2()
    {
        $converter = new RomanNumeralConverter();
        $roman_numeral = $converter->convert(2);

        $this->assertEquals('II', $roman_numeral);
    }
}