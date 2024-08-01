<?php

namespace App\Tests\Entity;

use App\Entity\Document;
use App\Entity\Apprenant;
use App\Entity\TypeDocument;
use App\Entity\Rappel;
use PHPUnit\Framework\TestCase;

class DocumentTest extends TestCase
{
    public function testGettersAndSetters()
    {
        $document = new Document();

        // Test des setters et getters pour 'dateEtablissement'
        $date = new \DateTime('2023-08-01');
        $document->setDateEtablissement($date);
        $this->assertEquals($date, $document->getDateEtablissement());

        // Test des setters et getters pour 'compte'
        $apprenant = new Apprenant();
        $document->setCompte($apprenant);
        $this->assertEquals($apprenant, $document->getCompte());

        // Test des setters et getters pour 'typedoc'
        $typeDocument = new TypeDocument();
        $document->setTypedoc($typeDocument);
        $this->assertEquals($typeDocument, $document->getTypedoc());

        // Test des méthodes pour 'rappels'
        $rappel = new Rappel();
        $document->addRappel($rappel);
        $this->assertTrue($document->getRappels()->contains($rappel));
        
        $document->removeRappel($rappel);
        $this->assertFalse($document->getRappels()->contains($rappel));

        // Test des setters et getters pour 'Rappelid'
        $document->setRappelId($rappel);
        $this->assertEquals($rappel, $document->getRappelId());
    }
}
