<?php

namespace DdUi\Command;

use DdUi\PluginDictionary;
use EclipseGc\Plugin\Dictionary\PluginDictionaryInterface;
use EclipseGc\Plugin\Namespaces;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class GetPageCommand
 *
 * @package DdUi\Command
 */
class GetPageCommand extends Command
{
    /**
     * @var \EclipseGc\Plugin\Dictionary\PluginDictionaryInterface
     */
    protected $dictionary;

    /**
     * GetPageCommand constructor.
     *
     * @param null $name
     * @param \EclipseGc\Plugin\Dictionary\PluginDictionaryInterface $dictionary
     */
    public function __construct($name = null, PluginDictionaryInterface $dictionary)
    {
        $this->dictionary = $dictionary;
        parent::__construct($name);

    }

    /**
     * Configures the command.
     */
    protected function configure()
    {
        $this
          ->setName('get-page')
          ->addArgument('plugin', InputArgument::REQUIRED, 'The machine name of the plugin from which to get the page.')
          ->addArgument('page', InputArgument::REQUIRED, 'The ID of the page to get.')
          ->setDescription('Gets a page from a DDUI plugin.')
          ->setHelp('');
    }

    /**
     * Executes the command.
     *
     * @param \Symfony\Component\Console\Input\InputInterface $input
     *   The CLI input.
     *
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *   The CLI output.
     *
     * @return null
     *   This method does not return anything.
     */
    protected function execute(InputInterface $input, OutputInterface $output) {
        $plugin_name = $input->getArgument('plugin');
        $plugin = $this->dictionary->createInstance($plugin_name);
        $markup = $plugin->build();

        return $markup;
    }

}