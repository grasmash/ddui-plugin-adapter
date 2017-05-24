<?php

namespace Grasmash\DdUi\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class GetPageCommand
 *
 * @package Grasmash\DdUi\Command
 */
class GetPageCommand extends Command
{
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
        // plugin name
        // page name
        // get page from plugin
    }

}