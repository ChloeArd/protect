<?php

class Controller {

    /**
     * @param string $view
     */
    public function render(string $view) {
        require dirname(__FILE__) . "/../../View/$view";
    }
}