<?php
namespace FastFood\Controller;

use FastFood\Application;

class MenuBurger extends AbstractController{

    public function __invoke(Application $application)
    {
        //$em = $application->getDatabase()->getEntityManager();


        return $this->render('users/menuburger.html.twig', [
            'name' => 'Boris'
        ]);

    }


}