<?php

namespace App\Tests\Entity;

use App\Entity\ModeDePaiement;
use App\Entity\Transaction;
use PHPUnit\Framework\TestCase;

class ModeDePaiementTest extends TestCase
{
    public function testGettersAndSetters()
    {
        $modeDePaiement = new ModeDePaiement();

        // Test des setters et getters pour 'nomPaiement'
        $modeDePaiement->setNomPaiement('Carte de Crédit');
        $this->assertSame('Carte de Crédit', $modeDePaiement->getNomPaiement());

        // Test des méthodes pour les transactions
        $transaction = new Transaction();
        $modeDePaiement->addTransaction($transaction);
        $this->assertTrue($modeDePaiement->getTransactions()->contains($transaction));

        $modeDePaiement->removeTransaction($transaction);
        $this->assertFalse($modeDePaiement->getTransactions()->contains($transaction));
    }
}
