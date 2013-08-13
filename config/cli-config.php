<?php
use \Doctrine\ORM\Tools\Console\ConsoleRunner;
use \Doctrine\ORM\Tools\Setup;

$baseDir = __DIR__ . '/..';

require_once $baseDir . '/vendor/autoload.php';

// replace with mechanism to retrieve EntityManager in your app
$dbParams = array(
    'driver'    => 'pdo_sqlite',
    'user'      => 'root',
    'password'  => '',
    'path'      => '/Users/shrikeh/Projects/bloodbowl/game-tools/fixtures/World_Cup.db',
);

$paths = array('maps' => $baseDir . '/maps');
$config = Setup::createAnnotationMetadataConfiguration($paths);

$entityManager =  \Doctrine\ORM\EntityManager::create($dbParams, $config);

return ConsoleRunner::createHelperSet($entityManager);