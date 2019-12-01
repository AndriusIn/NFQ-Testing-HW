<?php declare(strict_types = 1);

require_once __DIR__ . '/vendor/autoload.php';

use App\Services\NumberFormatter;
use App\Services\MoneyFormatter;

$numberFormatter = new NumberFormatter();

$moneyFormatter = new MoneyFormatter($numberFormatter);

echo '--------------' . PHP_EOL;
echo 'formatNumber()' . PHP_EOL;
echo '--------------' . PHP_EOL;
echo '2835779' . ' => ' . $numberFormatter->formatNumber(2835779) . PHP_EOL;
echo '999500' . ' => ' . $numberFormatter->formatNumber(999500) . PHP_EOL;
echo '535216' . ' => ' . $numberFormatter->formatNumber(535216) . PHP_EOL;
echo '99950' . ' => ' . $numberFormatter->formatNumber(99950) . PHP_EOL;
echo '27533.78' . ' => ' . $numberFormatter->formatNumber(27533.78) . PHP_EOL;
echo '999.99' . ' => ' . $numberFormatter->formatNumber(999.99) . PHP_EOL;
echo '999.9999' . ' => ' . $numberFormatter->formatNumber(999.9999) . PHP_EOL;
echo '533.1' . ' => ' . $numberFormatter->formatNumber(533.1) . PHP_EOL;
echo '66.6666' . ' => ' . $numberFormatter->formatNumber(66.6666) . PHP_EOL;
echo '12.00' . ' => ' . $numberFormatter->formatNumber(12.00) . PHP_EOL;
echo '-123654.89' . ' => ' . $numberFormatter->formatNumber(-123654.89) . PHP_EOL;

echo '-----------' . PHP_EOL;
echo 'formatEur()' . PHP_EOL;
echo '-----------' . PHP_EOL;
echo '2835779' . ' => ' . $moneyFormatter->formatEur(2835779) . PHP_EOL;
echo '999500' . ' => ' . $moneyFormatter->formatEur(999500) . PHP_EOL;
echo '535216' . ' => ' . $moneyFormatter->formatEur(535216) . PHP_EOL;
echo '99950' . ' => ' . $moneyFormatter->formatEur(99950) . PHP_EOL;
echo '27533.78' . ' => ' . $moneyFormatter->formatEur(27533.78) . PHP_EOL;
echo '999.99' . ' => ' . $moneyFormatter->formatEur(999.99) . PHP_EOL;
echo '999.9999' . ' => ' . $moneyFormatter->formatEur(999.9999) . PHP_EOL;
echo '533.1' . ' => ' . $moneyFormatter->formatEur(533.1) . PHP_EOL;
echo '66.6666' . ' => ' . $moneyFormatter->formatEur(66.6666) . PHP_EOL;
echo '12.00' . ' => ' . $moneyFormatter->formatEur(12.00) . PHP_EOL;
echo '-123654.89' . ' => ' . $moneyFormatter->formatEur(-123654.89) . PHP_EOL;

echo '-----------' . PHP_EOL;
echo 'formatUsd()' . PHP_EOL;
echo '-----------' . PHP_EOL;
echo '2835779' . ' => ' . $moneyFormatter->formatUsd(2835779) . PHP_EOL;
echo '999500' . ' => ' . $moneyFormatter->formatUsd(999500) . PHP_EOL;
echo '535216' . ' => ' . $moneyFormatter->formatUsd(535216) . PHP_EOL;
echo '99950' . ' => ' . $moneyFormatter->formatUsd(99950) . PHP_EOL;
echo '27533.78' . ' => ' . $moneyFormatter->formatUsd(27533.78) . PHP_EOL;
echo '999.99' . ' => ' . $moneyFormatter->formatUsd(999.99) . PHP_EOL;
echo '999.9999' . ' => ' . $moneyFormatter->formatUsd(999.9999) . PHP_EOL;
echo '533.1' . ' => ' . $moneyFormatter->formatUsd(533.1) . PHP_EOL;
echo '66.6666' . ' => ' . $moneyFormatter->formatUsd(66.6666) . PHP_EOL;
echo '12.00' . ' => ' . $moneyFormatter->formatUsd(12.00) . PHP_EOL;
echo '-123654.89' . ' => ' . $moneyFormatter->formatUsd(-123654.89) . PHP_EOL;
?>
