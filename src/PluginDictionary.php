<?php

namespace DdUi;

use DdUi\Factory\PluginFactoryResolver;
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
    $this->discovery = new AnnotatedPluginDiscovery($namespaces, 'Plugin', 'DdUi\DdUiPageInterface',
      'DdUi\Annotation\DdUiPage');
    $this->factoryResolver = new PluginFactoryResolver();
    $this->factoryClass = 'DdUi\Factory\PluginFactory';
    $this->pluginType = 'ddUi_page';
  }

}
