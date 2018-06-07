<?php
/**
 * Created by PhpStorm.
 * User: Schar

 */

require_once "../src/Controller/InscriptionController.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Formulaire d'inscription</title>

    <style type="text/css">

        body, p, h1,form, input {
            margin:0;
            padding:0;
        }
        body {
            background-color:#FFFFFF
        }
        #inscription {
            width:380px;
            background:#FFFFFF;
            margin:20px auto;
            font-family: Arial, Helvetica, sans-serif;
            font-size:1em;
            border:2px solid #333333;
        }
        #inscription h1 {
            text-align:center;
            font-size:1.2em;
            background:#333333;
            padding-bottom:5px;
            margin-bottom:15px;
            color:#FFFFFF;
            letter-spacing:0.05em;
        }
        #inscription p {
            padding-top:15px;
            padding-right:50px;
            text-align:right;
        }
        #inscription input {
            margin-left:30px;
            width:150px;
        }
        #inscription #valider {
            width:155px;
            font-size:0.8em;
        }
        #inscription #message {
            height:27px;
            font-size:0.7em;
            font-weight:bold;
            text-align:center;
            padding:10px 0 0 0;
        }
        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        /* Chrome */
        input::-webkit-inner-spin-button,
        input::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin:0;
        }

        /* Opéra*/
        input::-o-inner-spin-button,
        input::-o-outer-spin-button {
            -o-appearance: none;
            margin:0
        }

    </style>
</head>
<body>
<div id = "inscription">
    <form action = "#" method = "post">
        <h1>Inscription</h1>
        <p><label for = "userName">Pseudo : </label><input type = "text" name = "userName" id = "pseudo" /></p>
        <p><label for = "pass">Mot de passe : </label><input type = "password" name = "pass" id = "pass" /></p>
        <p><label for = "name">Nom : </label><input type = "text" name = "name" id = "nom" /></p>
        <p><label for = "phone_number">N° Téléphone : </label><input type = "number" name = "phone_number" id = "phone" /></p>


        <p><input type = "submit" value = "Envoyer" id = "valider" /></p>
    </form>
    <p id = "message"><?php if(isset($message)) echo $message ?></p>
</div>
</body>
</html>