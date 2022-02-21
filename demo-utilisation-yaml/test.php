<?php

require_once __DIR__ . '/vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;

$value = Yaml::parse("hello world");

echo 'test';
echo $value;