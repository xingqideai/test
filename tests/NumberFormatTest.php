<?php
require '../vendor/autoload.php';

use numberFormat\NumberFormat;

$number = '102400010';

echo NumberFormat::byteFormat($number);
