<?php

$autoloader = require __DIR__ . '/../vendor/autoload.php';

use DDUI\PluginDictionary;
use EclipseGc\Plugin\Namespaces;

$namespaces = Namespaces::extractNamespaces($autoloader);

$dictionary = new PluginDictionary($namespaces);

print_r($dictionary->getDefinitions());