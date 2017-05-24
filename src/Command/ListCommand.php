<?php

namespace DdUi\Command;

use DdUi\PluginDictionary;
use EclipseGc\Plugin\Dictionary\PluginDictionaryInterface;
use EclipseGc\Plugin\Namespaces;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class ListCommand.
 *
 * @package DdUi\Command
 */
class ListCommand extends Command
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
          ->setName('list')
          ->setDescription('Lists all detected plugins.')
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
        $page_plugins = $this->dictionary->getDefinitions();
        $rows = [];
        foreach ($page_plugins->getKeys() as $name) {
            $rows[] = [$name];
        }

        $table = new Table($output);
        $table
          ->setHeaders(array('Page ID'))
          ->setRows($rows)
        ;
        $table->render();
    }

}