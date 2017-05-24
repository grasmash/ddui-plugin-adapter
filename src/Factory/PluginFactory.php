<?php


namespace DdUi\Factory;


use EclipseGc\Plugin\Factory\FactoryInterface;
use EclipseGc\Plugin\PluginDefinitionInterface;

class PluginFactory implements FactoryInterface {

  public function createInstance(PluginDefinitionInterface $definition, ...$constructors) {
    $class = $definition->getClass();
    return new $class($definition->getPluginId(), ...$constructors);
  }

}
