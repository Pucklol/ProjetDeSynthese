<?php
namespace FastFood\Controller;

use FastFood\Entity\User;

require_once dirname(__DIR__) . '/vendor/autoload.php';

/** @var \Doctrine\ORM\EntityManager $em */
$em = require_once dirname(__DIR__) . '/bootstrap.php';

//Indique le bon format des entêtes (par défaut apache risque de les envoyer au standard ISO-8859-1)
header('Content-type: text/html; charset=UTF-8');



// Initialisation du message de réponse
$message = null;


$userRepository = $em->getRepository(User::class);
/** @var User $user */
$user = $userRepository->findOneById(1);
$user->setUserName('Boris');
$em->flush();
die;
// Si le formulaire est envoyé
if (isset($_POST['userName']))
{

    /* Cas de la creation

    $user = new \FastFood\Entity\User($_POST);
    $em->persist($user);
    $em->flush();
    */

    echo '<pre>';print_r($user);die;

    $pseudo = (isset($_POST['pseudo']) && trim($_POST['pseudo']) != '') ? : null;
    $pass = (isset($_POST['pass']) && trim($_POST['pass']) != '') ? : null;
    $name = (isset($_POST['nom']) && trim($_POST['nom']) !='') ? : null;
    $phone_number = (isset($_POST['phone']) && trim($_POST['phone']) !='') ? : null ;


    // Si $pseudo pass name et phone_number différents de null
    if(!empty($pseudo))
    {
        // todo ajouter doctrine mapping
        $message='Compte créé avec succès';

    }

    else
    {    //Au moins un n'a pas été rempli
        $message = 'Les champs doivent être remplis.';
    }
}

?>