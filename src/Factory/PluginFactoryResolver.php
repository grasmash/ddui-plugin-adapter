<?php


namespace DDUI\Factory;


use EclipseGc\Plugin\Factory\FactoryInterface;
use EclipseGc\Plugin\Factory\FactoryResolverInterface;

class PluginFactoryResolver implements FactoryResolverInterface {

  public function getFactoryInstance(string $factoryClass): FactoryInterface {
    return new $factoryClass();
  }

}
