<?php

namespace BloodBowl\Game\Console\Command;

use \Doctrine\ORM\Tools\Export\ClassMetadataExporter;
use \Symfony\Component\Console\Command\Command;
use \Symfony\Component\Console\Input\InputInterface;
use \Symfony\Component\Console\Input\InputArgument;
use \Symfony\Component\Console\Input\InputOption;
use \Symfony\Component\Console\Output\OutputInterface;

class MappingCommand extends Command
{
    public function __construct($name)
    {
        parent::__construct($name);

        $this->setDefinition(array(
            new InputArgument('db', InputOption::VALUE_REQUIRED, 'Where the SQL DB is'),
        ));

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $container = $this->getApplication()->getContainer();
        $con = $this->getApplication()->getContainer();

        $con['mapping.config'] = $con->protect(function($paths) {
            return \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration($paths);
        });

        $con['mapping.em'] = $con->protect(function($db) use ($con) {
            // the connection configuration
            $dbParams = array(
                'driver'   => 'pdo_sqlite',
                'user'     => 'root',
                'password' => '',
                'path'   => $db,
            );
            $config = $con['mapping.config'](array('/Users/shrikeh/Projects/bloodbowl/game-tools/maps'));
            return \Doctrine\ORM\EntityManager::create($dbParams, $config);
        });

        $con['mapping.metadata'] = $con->protect(function($em) {
            $em->getConfiguration()->setMetadataDriverImpl(
                new \Doctrine\ORM\Mapping\Driver\DatabaseDriver(
                $em->getConnection()->getSchemaManager()
            ));
            $cmf = new \Doctrine\ORM\Tools\DisconnectedClassMetadataFactory();
            
            $cmf->setEntityManager($em);
            return $cmf->getAllMetadata();
        });

        $con['mapping.exporter'] = $con->protect(function($metadata, $format, $path) use ($con) {
            $cme = new \Doctrine\ORM\Tools\Export\ClassMetadataExporter();
            $exporter = $cme->getExporter($format, $path);
            $exporter->setMetadata($metadata);
            return $exporter;
        });
        $path = '/Users/shrikeh/Projects/bloodbowl/game-tools/fixtures/World_Cup.db';
        $em = $con['mapping.em']($path);
        $metadata = $con['mapping.metadata']($em);
        $exporter = $con['mapping.exporter']($metadata, 'yml', '/Users/shrikeh/Projects/bloodbowl/game-tools/maps');
        var_dump($exporter->export());
    }
}