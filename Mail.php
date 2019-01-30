<?php
/**
 * Created by PhpStorm.
 * User: sophc
 * Date: 30/01/2019
 * Time: 11:45
 */

class Mail
{
public $mail;
public $mailTo;
public $sujet;
public $texte;

    public function __construct($mail, $mailTo, $sujet, $texte)
    {

        $this->mail= $mail;
        $this->mailTo= $mailTo;
        $this->sujet= $sujet;
        $this->texte=$texte;

    }


    public function getMail (){
        return $this->mail;
    }
    public function getMailTo (){
        return $this->mailTo;
    }
    public function getSujet (){
        return $this->sujet;
    }
    public function getTexte (){
        return $this->texte;
    }

    public function envoyer(){
        mail($this->mail,$this->mailTo, $this->sujet, $this->texte);
    }

}