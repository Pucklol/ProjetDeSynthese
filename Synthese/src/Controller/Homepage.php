<?php
namespace FastFood\Controller;

use FastFood\Application;

class Homepage extends AbstractController
{
    public function __invoke(Application $app)
    {
       return $this->render('home/index.html.twig');
    }
}
