<?php

use Gregwar\Captcha\CaptchaBuilder;

require __DIR__.'/../vendor/autoload.php';

$builder = new CaptchaBuilder();
$builder->build();

session_start();
$_SESSION['captcha'] = $builder->getPhrase();

header('Content-type: image/jpeg');
$builder->output();
