<?php


namespace DDUI;


use DDUI\Factory\PluginFactoryResolver;
use EclipseGc\Plugin\Dictionary\PluginDictionaryInterface;
use EclipseGc\Plugin\Traits\PluginDictionaryTrait;
use EclipseGc\PluginAnnotation\Discovery\AnnotatedPluginDiscovery;

class PluginDictionary implements PluginDictionaryInterface {
  use PluginDictionaryTrait;

  /**
   * PluginDictionary constructor.
   *
   * @param \Traversable $namespaces
   *   A traversable list of namespaces for this application.
   */
  public function __construct(\Traversable $namespaces) {
    $this->discovery = new AnnotatedPluginDiscovery($namespaces, 'Plugin', 'DDUI\PluginInterface', 'DDUI\Annotation\Plugin');
    $this->factoryResolver = new PluginFactoryResolver();
    $this->factoryClass = 'DDUI\Factory\PluginFactory';
    $this->pluginType = 'ddui_plugin';
  }

}
