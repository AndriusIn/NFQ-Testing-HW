<?php declare(strict_types = 1);

namespace App\Services;

class NumberFormatter
{
    public function formatNumber(float $number): string
    {
        if (999500 <= abs($number))
        {
            return number_format($number / 1000000, 2, '.', '') . 'M';
        }
        if (99950 <= abs($number) && abs($number) < 999500)
        {
            return number_format($number / 1000, 0, '', '') . 'K';
        }
        if (1000 <= abs($number) && abs($number) < 99950)
        {
            return number_format($number, 0, '', ' ');
        }
        return preg_replace('/.00$/', '', number_format($number, 2, '.', ''));
    }
}
?>
