# NFQ-Testing-HW
NFQ Testing Homework
## Setup
```console
composer install
./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/Services/NumberFormatterTest
./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/Services/MoneyFormatterTest
./vendor/bin/phpunit --bootstrap vendor/autoload.php --testdox tests
php -f index.php
```
