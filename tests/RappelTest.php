<?php

namespace App\Tests\Entity;

use App\Entity\Document;
use App\Entity\Rappel;
use PHPUnit\Framework\TestCase;

class RappelTest extends TestCase
{
    public function testGettersAndSetters()
    {
        $rappel = new Rappel();

        // Test DateExpiration
        $dateExpiration = new \DateTime('2024-12-31');
        $rappel->setDateExpiration($dateExpiration);
        $this->assertEquals($dateExpiration, $rappel->getDateExpiration());

        // Test IdDoc
        $document = new Document(); // Ensure the Document class is properly defined
        $rappel->setIdDoc($document);
        $this->assertSame($document, $rappel->getIdDoc());
    }

    public function testDocumentsAssociation()
    {
        $rappel = new Rappel();
        $document = new Document(); // Ensure the Document class is properly defined

        // Check that the collection is empty initially
        $this->assertCount(0, $rappel->getDocuments());

        // Add a Document
        $rappel->addDocument($document);
        $this->assertCount(1, $rappel->getDocuments());
        $this->assertTrue($rappel->getDocuments()->contains($document));

        // Remove the Document
        $rappel->removeDocument($document);
        $this->assertCount(0, $rappel->getDocuments());
        $this->assertFalse($rappel->getDocuments()->contains($document));
    }
}
