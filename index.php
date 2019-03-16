<?php

use Carbon\Carbon;

require __DIR__.'/bootstrap/app.php';

$now = Carbon::now();
echo $now->toDateTimeString();
