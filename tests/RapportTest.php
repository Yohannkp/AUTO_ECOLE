<?php

namespace App\Tests\Entity;

use App\Entity\AutoEcole;
use App\Entity\Apprenant;
use App\Entity\Rapport;
use PHPUnit\Framework\TestCase;

class RapportTest extends TestCase
{
    public function testGettersAndSetters()
    {
        $rapport = new Rapport();

        // Test DateCrea
        $dateCrea = new \DateTime('2024-08-01');
        $rapport->setDateCrea($dateCrea);
        $this->assertEquals($dateCrea, $rapport->getDateCrea());

        // Test TimeCrea
        $timeCrea = new \DateTime('12:00:00');
        $rapport->setTimeCrea($timeCrea);
        $this->assertEquals($timeCrea, $rapport->getTimeCrea());

        // Test Contenu
        $contenu = 'This is a report content.';
        $rapport->setContenu($contenu);
        $this->assertEquals($contenu, $rapport->getContenu());

        // Test Createur
        $createur = new AutoEcole(); // Assurez-vous que la classe AutoEcole est définie correctement
        $rapport->setCreateur($createur);
        $this->assertSame($createur, $rapport->getCreateur());

        // Test ApRapport
        $apprenant = new Apprenant(); // Assurez-vous que la classe Apprenant est définie correctement
        $rapport->setApRapport($apprenant);
        $this->assertSame($apprenant, $rapport->getApRapport());
    }
}
