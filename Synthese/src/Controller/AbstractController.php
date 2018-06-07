<?php
namespace FastFood\Controller;

abstract class AbstractController
{
    abstract public function __invoke();

    public function render(string $templateName, array $vars = [])
    {
        // todo use twig
    }
}
