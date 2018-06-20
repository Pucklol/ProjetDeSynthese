<?php
namespace FastFood\Controller;

use FastFood\Application;
use FastFood\Entity\Menu;

class MenuBurger extends AbstractController{

    public function __invoke(Application $application)
    {
        $em = $application->getDatabase()->getEntityManager();
        $menuRepository = $em->getRepository(Menu::class);
        
        $menus = $menuRepository->findAll();

        return $this->render('users/menuburger.html.twig', [
            'menus' => $menus,
        ]);

    }


}