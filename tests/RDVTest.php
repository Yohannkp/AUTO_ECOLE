<?php

namespace App\Tests\Entity;

use App\Entity\RDV;
use App\Entity\Horaire;
use App\Entity\Choisir;
use PHPUnit\Framework\TestCase;

class RDVTest extends TestCase
{
    public function testGettersAndSetters()
    {
        $rdv = new RDV();

        // Test ID
        $this->assertNull($rdv->getId());

        // Test Planing
        $planing = new Horaire(); // Assurez-vous que la classe Horaire est définie correctement
        $rdv->setPlaning($planing);
        $this->assertSame($planing, $rdv->getPlaning());

        // Test Choix
        $choix = new Choisir(); // Assurez-vous que la classe Choisir est définie correctement
        $rdv->setChoix($choix);
        $this->assertSame($choix, $rdv->getChoix());

        // Test DateJour
        $dateJour = new \DateTime('2024-08-01');
        $rdv->setDateJour($dateJour);
        $this->assertEquals($dateJour, $rdv->getDateJour());
    }
}
