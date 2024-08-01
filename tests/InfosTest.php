<?php

namespace App\Tests\Entity;

use App\Entity\Infos;
use PHPUnit\Framework\TestCase;

class InfosTest extends TestCase
{
    public function testGettersAndSetters()
    {
        $infos = new Infos();

        // Test des setters et getters pour 'id'
        $this->assertNull($infos->getId(), 'L\'ID devrait être null par défaut');

        // Test des setters et getters pour 'enable'
        $infos->setEnable(true);
        $this->assertTrue($infos->isEnable(), 'La valeur de enable devrait être true après le setter');
        
        $infos->setEnable(false);
        $this->assertFalse($infos->isEnable(), 'La valeur de enable devrait être false après le setter');

        $infos->setEnable(null);
        $this->assertNull($infos->isEnable(), 'La valeur de enable devrait être null après le setter avec null');
    }
}
