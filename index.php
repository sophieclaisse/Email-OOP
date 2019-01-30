<?php
/**
 * Created by PhpStorm.
 * User: sophc
 * Date: 30/01/2019
 * Time: 11:45
 */

require "Mail.php";

$message= new Mail(
    "louloute@hotmail.com",
    "biloute@hotmail.com",
    "Koikonfait?",
    "Pas sure d'etre sure de ce que je fais. testestest"
);


$message->envoyer();