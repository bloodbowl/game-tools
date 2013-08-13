<?php

namespace BloodBowl\Game\Console;

use \BloodBowl\Game\Console\ServiceContainer;
use \Symfony\Component\Console\Application as BaseApplication;
use \Symfony\Component\Console\Input\InputInterface;
use \Symfony\Component\Console\Input\ArgvInput;
use \Symfony\Component\Console\Output\OutputInterface;

class Application extends BaseApplication
{

    protected $container;

    public function __construct($name, $version = null)
    {
        $con = $this->getContainer();

        $con['command.name'] = $con->protect(function ($nm) use ($name) {
            return $name . ':' . $nm;
        });
        $con['console.commands.export.mappings'] = function($c) {
            return new \BloodBowl\Game\Console\Command\MappingCommand(
                'export'
            );
        };

        parent::__construct($name, $version);
    }



    public function getContainer()
    {
        if (!$this->container) {
            $this->container = new ServiceContainer();
        }
        return $this->container;
    }

    public function doRun(InputInterface $input, OutputInterface $output)
    {
        
        array_map(
            array($this, 'add'),
            $this->container->getByPrefix('console.commands')
        );

        parent::doRun($input, $output);
    }
}