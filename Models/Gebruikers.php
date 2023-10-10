<?php
// Danilio Veldhoen

namespace Models;

class Gebruikers
{
    public $id;
    public $naam;
    public $email;
    public $wachtwoord;

    /**
     * @param $naam
     * @param $email
     * @param $wachtwoord
     */
    public function __construct($naam = NULL, $email = NULL, $wachtwoord = NULL)
    {
        $this->naam = $naam;
        $this->email = $email;
        $this->wachtwoord = $wachtwoord;
    }
}