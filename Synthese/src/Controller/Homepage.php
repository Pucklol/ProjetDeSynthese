<?php
namespace FastFood\Controller;

class Homepage extends AbstractController
{
    public function __invoke()
    {
        $this->render('homepage.twig.html', [
            'name' => 'Boris'
        ]);
        // TODO: Implement __invoke() method.
    }
}
