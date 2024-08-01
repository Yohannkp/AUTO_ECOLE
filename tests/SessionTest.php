<?php

namespace App\Tests\Entity;

use App\Entity\Session;
use App\Entity\Horaire;
use App\Entity\Transaction;
use App\Entity\AutoEcole;
use PHPUnit\Framework\TestCase;

class SessionTest extends TestCase
{
    public function testGettersAndSetters()
    {
        $session = new Session();

        // Test ID
        $this->assertNull($session->getId());

        // Test Nom
        $session->setNom('Session 1');
        $this->assertEquals('Session 1', $session->getNom());

        // Test DateDebut
        $dateDebut = new \DateTime('2024-08-01');
        $session->setDateDebut($dateDebut);
        $this->assertEquals($dateDebut, $session->getDateDebut());

        // Test DateFin
        $dateFin = new \DateTime('2024-08-31');
        $session->setDateFin($dateFin);
        $this->assertEquals($dateFin, $session->getDateFin());

        // Test AutoEcole
        $autoEcole = new AutoEcole(); // Assurez-vous que la classe AutoEcole est définie correctement
        $session->setAutoEcole($autoEcole);
        $this->assertSame($autoEcole, $session->getAutoEcole());

        // Test Horaires
        $horaire = new Horaire(); // Assurez-vous que la classe Horaire est définie correctement
        $session->addHoraire($horaire);
        $this->assertTrue($session->getHoraires()->contains($horaire));

        $session->removeHoraire($horaire);
        $this->assertFalse($session->getHoraires()->contains($horaire));

        // Test Transactions
        $transaction = new Transaction(); // Assurez-vous que la classe Transaction est définie correctement
        $session->addTransaction($transaction);
        $this->assertTrue($session->getTransactions()->contains($transaction));

        $session->removeTransaction($transaction);
        $this->assertFalse($session->getTransactions()->contains($transaction));
    }
}
