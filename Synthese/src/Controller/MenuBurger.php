<?php
namespace FastFood\Controller;

use FastFood\Application;

class MenuBurger extends AbstractController{

    public function __invoke(Application $application)
    {
        /*$em = $application->getDatabase()->getEntityManager();

        private function getMenu()
        {

                $requete = "SELECT id_menu,nom_menu,prix,imageMenu
                            from menu
                            Order BY id_menu ASC";
                $tous = $this->appli->query($requete);
        }*/



        return $this->render('users/menuburger.html.twig', [
            'name' => 'Boris',
            /*'requete' => $this->getMenu()*/
        ]);

    }


}