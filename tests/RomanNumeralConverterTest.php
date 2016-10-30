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

    /** @test */
    public function it_calculates_the_roman_numeral_for_5()
    {
        $converter = new RomanNumeralConverter();
        $roman_numeral = $converter->convert(5);

        $this->assertEquals('V', $roman_numeral);

    }

    /** @test */
    public function it_calculates_the_roman_numeral_for_6()
    {
        $converter = new RomanNumeralConverter();
        $roman_numeral = $converter->convert(6);

        $this->assertEquals('VI', $roman_numeral);
    }

    /** @test */
    public function it_calculates_the_roman_numeral_for_10()
    {
        $converter = new RomanNumeralConverter();
        $roman_numeral = $converter->convert(10);

        $this->assertEquals('X', $roman_numeral);
    }

    /** @test */
    public function it_calculates_the_roman_numeral_for_11()
    {
        $converter = new RomanNumeralConverter();
        $roman_numeral = $converter->convert(11);

        $this->assertEquals('XI', $roman_numeral);
    }

    /** @test */
    public function it_calculates_the_roman_numeral_for_20()
    {
        $converter = new RomanNumeralConverter();
        $roman_numeral = $converter->convert(20);

        $this->assertEquals('XX', $roman_numeral);
    }

    /** @test */
    public function it_calculates_the_roman_numeral_for_50()
    {
        $converter = new RomanNumeralConverter();
        $roman_numeral = $converter->convert(50);

        $this->assertEquals('L', $roman_numeral);
    }

    /** @test */
    public function it_calculates_the_roman_numeral_for_51()
    {
        $converter = new RomanNumeralConverter();
        $roman_numeral = $converter->convert(51);

        $this->assertEquals('LI', $roman_numeral);
    }

    /** @test */
    public function it_calculates_the_roman_numeral_for_55()
    {
        $converter = new RomanNumeralConverter();
        $roman_numeral = $converter->convert(55);

        $this->assertEquals('LV', $roman_numeral);
    }
}
