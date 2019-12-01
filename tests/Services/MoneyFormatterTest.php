<?php declare(strict_types = 1);

namespace App\Services\Tests;

use App\Services\NumberFormatter;
use App\Services\MoneyFormatter;

use PHPUnit\Framework\TestCase;

class MoneyFormatterTest extends TestCase
{
    /** 
     * @var MoneyFormatter 
     */
    private $moneyFormatter = null;

    /** 
     * @var NumberFormatter 
     */
    private $mock = null;

    public function setUp(): void
    {
        $this->mock = $this->getNumberFormatterMock();
        $this->moneyFormatter = new MoneyFormatter($this->mock);
    }

    public function testValidMillionEurFormat()
    {
        $this->mock->method('formatNumber')->with(2835779)->willReturn('2.84M');

        $actual = $this->moneyFormatter->formatEur(2835779);

        $this->assertEquals('2.84M €', $actual);
    }

    public function testValidNegativeMillionEurFormat()
    {
        $this->mock->method('formatNumber')->with(-2835779)->willReturn('-2.84M');

        $actual = $this->moneyFormatter->formatEur(-2835779);

        $this->assertEquals('-2.84M €', $actual);
    }

    public function testValidMillionUsdFormat()
    {
        $this->mock->method('formatNumber')->with(2835779)->willReturn('2.84M');

        $actual = $this->moneyFormatter->formatUsd(2835779);

        $this->assertEquals('$2.84M', $actual);
    }

    public function testValidNegativeMillionUsdFormat()
    {
        $this->mock->method('formatNumber')->with(-2835779)->willReturn('-2.84M');

        $actual = $this->moneyFormatter->formatUsd(-2835779);

        $this->assertEquals('$-2.84M', $actual);
    }

    public function testValidHundredThousandEurFormat()
    {
        $this->mock->method('formatNumber')->with(535216)->willReturn('535K');

        $actual = $this->moneyFormatter->formatEur(535216);

        $this->assertEquals('535K €', $actual);
    }

    public function testValidNegativeHundredThousandEurFormat()
    {
        $this->mock->method('formatNumber')->with(-535216)->willReturn('-535K');

        $actual = $this->moneyFormatter->formatEur(-535216);

        $this->assertEquals('-535K €', $actual);
    }

    public function testValidHundredThousandUsdFormat()
    {
        $this->mock->method('formatNumber')->with(535216)->willReturn('535K');

        $actual = $this->moneyFormatter->formatUsd(535216);

        $this->assertEquals('$535K', $actual);
    }

    public function testValidNegativeHundredThousandUsdFormat()
    {
        $this->mock->method('formatNumber')->with(-535216)->willReturn('-535K');

        $actual = $this->moneyFormatter->formatUsd(-535216);

        $this->assertEquals('$-535K', $actual);
    }

    public function testValidThousandEurFormat()
    {
        $this->mock->method('formatNumber')->with(27533.78)->willReturn('27 534');

        $actual = $this->moneyFormatter->formatEur(27533.78);

        $this->assertEquals('27 534 €', $actual);
    }

    public function testValidNegativeThousandEurFormat()
    {
        $this->mock->method('formatNumber')->with(-27533.78)->willReturn('-27 534');

        $actual = $this->moneyFormatter->formatEur(-27533.78);

        $this->assertEquals('-27 534 €', $actual);
    }

    public function testValidThousandUsdFormat()
    {
        $this->mock->method('formatNumber')->with(27533.78)->willReturn('27 534');

        $actual = $this->moneyFormatter->formatUsd(27533.78);

        $this->assertEquals('$27 534', $actual);
    }

    public function testValidNegativeThousandUsdFormat()
    {
        $this->mock->method('formatNumber')->with(-27533.78)->willReturn('-27 534');

        $actual = $this->moneyFormatter->formatUsd(-27533.78);

        $this->assertEquals('$-27 534', $actual);
    }

    public function testValidLessThanThousandEurFormat()
    {
        $this->mock->method('formatNumber')->with(533.1)->willReturn('533.10');

        $actual = $this->moneyFormatter->formatEur(533.1);

        $this->assertEquals('533.10 €', $actual);
    }

    public function testValidNegativeLessThanThousandEurFormat()
    {
        $this->mock->method('formatNumber')->with(-533.1)->willReturn('-533.10');

        $actual = $this->moneyFormatter->formatEur(-533.1);

        $this->assertEquals('-533.10 €', $actual);
    }

    public function testValidLessThanThousandUsdFormat()
    {
        $this->mock->method('formatNumber')->with(533.1)->willReturn('533.10');

        $actual = $this->moneyFormatter->formatUsd(533.1);

        $this->assertEquals('$533.10', $actual);
    }

    public function testValidNegativeLessThanThousandUsdFormat()
    {
        $this->mock->method('formatNumber')->with(-533.1)->willReturn('-533.10');

        $actual = $this->moneyFormatter->formatUsd(-533.1);

        $this->assertEquals('$-533.10', $actual);
    }

    private function getNumberFormatterMock(): NumberFormatter
    {
        $mock = $this->getMockBuilder(NumberFormatter::class)->setMethods(['formatNumber'])->getMock();
        return $mock;
    }
}
?>
