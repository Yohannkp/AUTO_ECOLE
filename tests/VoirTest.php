<?php

namespace App\Tests\Entity;

use App\Entity\Voir;
use PHPUnit\Framework\TestCase;

class VoirTest extends TestCase
{
    public function testGettersAndSetters()
    {
        $voir = new Voir();

        // Test ID
        $this->assertNull($voir->getId());

        // Test Post ID
        $voir->setPostId(1);
        $this->assertEquals(1, $voir->getPostId());

        // Test Apprenant ID
        $voir->setApprenantId(2);
        $this->assertEquals(2, $voir->getApprenantId());

        // Test DateVisualisation
        $date = new \DateTime('2024-08-01');
        $voir->setDatevisualisation($date);
        $this->assertEquals($date, $voir->getDatevisualisation());
    }
}
