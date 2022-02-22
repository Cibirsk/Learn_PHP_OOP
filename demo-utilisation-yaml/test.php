<?php

require  'vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;

$value = Yaml::parse("hello world");

echo $value;