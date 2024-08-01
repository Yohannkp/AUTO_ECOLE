<?php

namespace App\Tests\Entity;

use App\Entity\Transaction;
use App\Entity\Pack;
use App\Entity\ModeDePaiement;
use App\Entity\Apprenant;
use App\Entity\Session;
use PHPUnit\Framework\TestCase;

class TransactionTest extends TestCase
{
    public function testGettersAndSetters()
    {
        $transaction = new Transaction();

        // Test ID
        $this->assertNull($transaction->getId());

        // Test TypeDePayement
        $transaction->setTypeDePayement('Carte Bancaire');
        $this->assertEquals('Carte Bancaire', $transaction->getTypeDePayement());

        // Test IdPack
        $pack = new Pack(); // Assurez-vous que la classe Pack est définie correctement
        $transaction->setIdPack($pack);
        $this->assertSame($pack, $transaction->getIdPack());

        // Test IdModePayement
        $modeDePaiement = new ModeDePaiement(); // Assurez-vous que la classe ModeDePaiement est définie correctement
        $transaction->setIdModePayement($modeDePaiement);
        $this->assertSame($modeDePaiement, $transaction->getIdModePayement());

        // Test IdApprenant
        $apprenant = new Apprenant(); // Assurez-vous que la classe Apprenant est définie correctement
        $transaction->setIdApprenant($apprenant);
        $this->assertSame($apprenant, $transaction->getIdApprenant());

        // Test Cours
        $transaction->setCours(true);
        $this->assertTrue($transaction->isCours());

        // Test IdSession
        $session = new Session(); // Assurez-vous que la classe Session est définie correctement
        $transaction->setIdSession($session);
        $this->assertSame($session, $transaction->getIdSession());
    }
}
