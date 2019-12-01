<?php declare(strict_types = 1);

namespace App\Services;

class MoneyFormatter
{
    /** 
     * @var NumberFormatter 
     */
    private $numberFormatter = null;

    public function __construct(NumberFormatter $numberFormatter)
    {
        $this->numberFormatter = $numberFormatter;
    }

    public function formatEur(float $number): string
    {
        return $this->numberFormatter->formatNumber($number) . ' €';
    }

    public function formatUsd(float $number): string
    {
        return '$' . $this->numberFormatter->formatNumber($number);
    }
}
?>
