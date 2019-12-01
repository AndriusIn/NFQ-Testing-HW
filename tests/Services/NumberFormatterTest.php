<?php declare(strict_types = 1);

namespace App\Services\Tests;

use App\Services\NumberFormatter;

use PHPUnit\Framework\TestCase;

class NumberFormatterTest extends TestCase
{
    /** 
     * @var NumberFormatter 
     */
    private $numberFormatter = null;

    public function setUp(): void
    {
        $this->numberFormatter = new NumberFormatter();
    }

    public function providerValidMillionFormat(): array
    {
        return [
            'min value' => ['1.00M', 999500],
            'negative min value' => ['-1.00M', -999500],
            '7 digit value' => ['2.84M', 2835779],
            'negative 7 digit value' => ['-2.84M', -2835779],
            '10 digit value' => ['5157.40M', 5157395076],
            'negative 10 digit value' => ['-5157.40M', -5157395076],
        ];
    }

    /**
     * @dataProvider providerValidMillionFormat
     * @param string $expectedFormat
     * @param string $actualNumber
     */
    public function testValidMillionFormat($expectedFormat, $actualNumber)
    {
        $numberFormatter = $this->numberFormatter;
        $this->assertEquals($expectedFormat, $numberFormatter->formatNumber($actualNumber));
    }

    public function providerValidHundredThousandFormat(): array
    {
        return [
            'min value' => ['100K', 99950],
            'negative min value' => ['-100K', -99950],
            '6 digit value between min and max' => ['535K', 535216],
            'negative 6 digit value between min and max' => ['-535K', -535216],
            'almost max value' => ['999K', 999499.99],
            'negative almost max value' => ['-999K', -999499.99],
            'max value' => ['1.00M', 999500],
            'negative max value' => ['-1.00M', -999500],
        ];
    }

    /**
     * @dataProvider providerValidHundredThousandFormat
     * @param string $expectedFormat
     * @param string $actualNumber
     */
    public function testValidHundredThousandFormat($expectedFormat, $actualNumber)
    {
        $numberFormatter = $this->numberFormatter;
        $this->assertEquals($expectedFormat, $numberFormatter->formatNumber($actualNumber));
    }

    public function providerValidThousandFormat(): array
    {
        return [
            'min value' => ['1 000', 1000],
            'negative min value' => ['-1 000', -1000],
            '5 digit value between min and max' => ['27 534', 27533.78],
            'negative 5 digit value between min and max' => ['-27 534', -27533.78],
            'almost max value' => ['99 950', 99949.99],
            'negative almost max value' => ['-99 950', -99949.99],
            'max value' => ['100K', 99950],
            'negative max value' => ['-100K', -99950],
        ];
    }

    /**
     * @dataProvider providerValidThousandFormat
     * @param string $expectedFormat
     * @param string $actualNumber
     */
    public function testValidThousandFormat($expectedFormat, $actualNumber)
    {
        $numberFormatter = $this->numberFormatter;
        $this->assertEquals($expectedFormat, $numberFormatter->formatNumber($actualNumber));
    }

    public function providerValidLessThanThousandFormat(): array
    {
        return [
            'min value' => ['0', 0],
            '1 digit value with 2 zeros between min and max' => ['5', 5.00482],
            'negative 1 digit value with 2 zeros between min and max' => ['-5', -5.00482],
            '2 digit value between min and max' => ['66.67', 66.6666],
            'negative 2 digit value between min and max' => ['-66.67', -66.6666],
            '2 digit value with 2 zeros between min and max' => ['12', 12.00],
            'negative 2 digit value with 2 zeros between min and max' => ['-12', -12.00],
            '3 digit value between min and max' => ['533.10', 533.1],
            'negative 3 digit value between min and max' => ['-533.10', -533.1],
            'almost max value 1' => ['999.99', 999.99],
            'negative almost max value 1' => ['-999.99', -999.99],
            'almost max value 2' => ['1000', 999.9999],
            'negative almost max value 2' => ['-1000', -999.9999],
            'max value' => ['1 000', 1000],
            'negative max value' => ['-1 000', -1000],
        ];
    }

    /**
     * @dataProvider providerValidLessThanThousandFormat
     * @param string $expectedFormat
     * @param string $actualNumber
     */
    public function testValidLessThanThousandFormat($expectedFormat, $actualNumber)
    {
        $numberFormatter = $this->numberFormatter;
        $this->assertEquals($expectedFormat, $numberFormatter->formatNumber($actualNumber));
    }
}
?>
