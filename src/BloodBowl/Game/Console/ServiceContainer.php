<?php

namespace BloodBowl\Game\Console;

use \Pimple;

class ServiceContainer extends Pimple
{
    public function getByPrefix($prefix)
    {
        $keys = array_keys($this->values);
        $services = array();
        foreach ($keys as $key) {
            if (preg_match("/^$prefix/", $key)) {
                $services[] = $this[$key];
            }
        }
        return $services;
    }
}