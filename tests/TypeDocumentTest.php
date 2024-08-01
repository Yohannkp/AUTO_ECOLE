<?php

namespace App\Tests\Entity;

use App\Entity\TypeDocument;
use App\Entity\Document;
use PHPUnit\Framework\TestCase;

class TypeDocumentTest extends TestCase
{
    public function testGettersAndSetters()
    {
        $typeDocument = new TypeDocument();

        // Test ID
        $this->assertNull($typeDocument->getId());

        // Test Libelle
        $typeDocument->setLibelle('Document Type');
        $this->assertEquals('Document Type', $typeDocument->getLibelle());

        // Test Duree
        $typeDocument->setDuree(30);
        $this->assertEquals(30, $typeDocument->getDuree());

        // Test Documents Collection
        $document = new Document(); // Assurez-vous que la classe Document est définie correctement
        $typeDocument->addDocument($document);
        $this->assertTrue($typeDocument->getDocuments()->contains($document));

        // Remove Document
        $typeDocument->removeDocument($document);
        $this->assertFalse($typeDocument->getDocuments()->contains($document));
    }

    public function testToString()
    {
        $typeDocument = new TypeDocument();
        $typeDocument->setLibelle('Document Type');

        $this->assertEquals('Document Type', (string) $typeDocument);
    }
}
