<?php


namespace DdUi\Plugin;

use DdUi\Annotation\DdUiPage;
use DdUi\DdUiPageInterface;

/**
 * Example DD UI Page plugin.
 *
 * @DdUiPage(
 *   pluginId = "example_page"
 * )
 */
class ExampleDdUiPage implements DdUiPageInterface {

    public function build() {
        return "Hello world!";
    }

}
