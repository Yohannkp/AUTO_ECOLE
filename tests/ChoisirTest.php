<?php

namespace App\Tests\Entity;

use App\Entity\Choisir;
use App\Entity\AutoEcole;
use App\Entity\Apprenant;
use PHPUnit\Framework\TestCase;

class ChoisirTest extends TestCase
{
    public function testGettersAndSetters()
    {
        $choisir = new Choisir();

        // Test des setters et getters pour 'dateInscription'
        $dateInscription = new \DateTime('2024-08-01');
        $choisir->setDateInscription($dateInscription);
        $this->assertEquals($dateInscription, $choisir->getDateInscription());

        // Test des setters et getters pour 'satut'
        $satut = true;
        $choisir->setSatut($satut);
        $this->assertTrue($choisir->isSatut());

        // Test des setters et getters pour 'idEcole'
        $autoEcole = new AutoEcole();
        $choisir->setIdEcole($autoEcole);
        $this->assertEquals($autoEcole, $choisir->getIdEcole());

        // Test des setters et getters pour 'idApprenant'
        $apprenant = new Apprenant();
        $choisir->setIdApprenant($apprenant);
        $this->assertEquals($apprenant, $choisir->getIdApprenant());
    }
}
