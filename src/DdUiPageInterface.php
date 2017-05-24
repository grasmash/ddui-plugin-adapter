<?php


namespace DdUi;

/**
 * Interface PluginInterface
 * @package DdUi
 */
interface DdUiPageInterface {

    /**
     * This method returns the markup for a given DDUI page.
     *
     * @return string
     *   The HTML markup for a page.
     */
    public function build();
}
