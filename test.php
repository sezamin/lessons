<?php

require __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;
$d = Carbon::now();

$d->timezone('Asia/Tashkent');

echo $d->format("d.m.Y");

echo "\n";