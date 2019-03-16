<?php

use Carbon\Carbon;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

require __DIR__.'/bootstrap/app.php';

$now = Carbon::now();
echo $now->toDateTimeString();

// create a log channel
$log = new Logger('App');
$log->pushHandler(new StreamHandler(__DIR__.'/logs/app.log', Logger::DEBUG));

// add records to the log
$log->info('首页日志');
$log->warning('警告日志');
$log->error('错误日志');
