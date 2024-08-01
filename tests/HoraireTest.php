<?php

namespace App\Tests\Entity;

use App\Entity\Horaire;
use App\Entity\Session;
use App\Entity\RDV;
use PHPUnit\Framework\TestCase;

class HoraireTest extends TestCase
{
    public function testGettersAndSetters()
    {
        $horaire = new Horaire();

        // Test des setters et getters pour 'heure'
        $heure = new \DateTime('08:00:00');
        $horaire->setHeure($heure);
        $this->assertEquals($heure, $horaire->getHeure());

        // Test des setters et getters pour 'heureFin'
        $heureFin = new \DateTime('09:00:00');
        $horaire->setHeureFin($heureFin);
        $this->assertEquals($heureFin, $horaire->getHeureFin());

        // Test des setters et getters pour 'description'
        $description = 'Matinée de cours';
        $horaire->setDescription($description);
        $this->assertEquals($description, $horaire->getDescription());

        // Test des setters et getters pour 'type'
        $type = 'Formation';
        $horaire->setType($type);
        $this->assertEquals($type, $horaire->getType());

        // Test des setters et getters pour 'couleurBordure'
        $couleurBordure = '#FF0000';
        $horaire->setCouleurBordure($couleurBordure);
        $this->assertEquals($couleurBordure, $horaire->getCouleurBordure());

        // Test des setters et getters pour 'couleurTexte'
        $couleurTexte = '#000000';
        $horaire->setCouleurTexte($couleurTexte);
        $this->assertEquals($couleurTexte, $horaire->getCouleurTexte());

        // Test des setters et getters pour 'dateDebut'
        $dateDebut = new \DateTime('2024-01-01');
        $horaire->setDateDebut($dateDebut);
        $this->assertEquals($dateDebut, $horaire->getDateDebut());

        // Test des setters et getters pour 'dateFin'
        $dateFin = new \DateTime('2024-01-31');
        $horaire->setDateFin($dateFin);
        $this->assertEquals($dateFin, $horaire->getDateFin());

        // Test des relations avec Session
        $session = new Session();
        $horaire->setSession($session);
        $this->assertEquals($session, $horaire->getSession());

        // Test des méthodes pour 'rDVs'
        $rdv = new RDV();
        $horaire->addRDV($rdv);
        $this->assertTrue($horaire->getRDVs()->contains($rdv));

        $horaire->removeRDV($rdv);
        $this->assertFalse($horaire->getRDVs()->contains($rdv));
    }
}
