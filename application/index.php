<?php

function autoload($className)
{
	require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
}

spl_autoload_register('autoload');

$app = new \core\Application();