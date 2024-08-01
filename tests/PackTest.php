<?php

namespace App\Tests\Entity;

use App\Entity\Pack;
use App\Entity\Transaction;
use PHPUnit\Framework\TestCase;

class PackTest extends TestCase
{
    public function testGettersAndSetters()
    {
        $pack = new Pack();

        // Test des setters et getters pour 'nom'
        $pack->setNom('Pack A');
        $this->assertSame('Pack A', $pack->getNom());

        // Test des méthodes pour les transactions
        $transaction = new Transaction();
        $pack->addTransaction($transaction);
        $this->assertTrue($pack->getTransactions()->contains($transaction));

        $pack->removeTransaction($transaction);
        $this->assertFalse($pack->getTransactions()->contains($transaction));
    }
}
