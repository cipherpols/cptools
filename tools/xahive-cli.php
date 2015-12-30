#!/usr/bin/env php
<?php
/**
 * File redis-cli.php
 * @package CipherPols Tools
 */
require dirname(__DIR__) . '/vendor/autoload.php';

$application = new \Cli\Application\Xahive();
$application->run();
