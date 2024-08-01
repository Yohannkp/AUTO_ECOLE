<?php

namespace App\Tests\Entity;

use App\Entity\Admin;
use PHPUnit\Framework\TestCase;

class AdminTest extends TestCase
{
    public function testGettersAndSetters()
    {
        $admin = new Admin();

        // Test du setter et du getter pour 'Prenom'
        $prenom = 'Jean';
        $admin->setPrenom($prenom);
        $this->assertEquals($prenom, $admin->getPrenom());

        // Test du setter et du getter pour 'Sex'
        $sex = 'M';
        $admin->setSex($sex);
        $this->assertEquals($sex, $admin->getSex());
    }

    public function testId()
    {
        $admin = new Admin();

        // Test du getter pour 'id'
        $this->assertNull($admin->getId());

        // Note: Le setter 'id' n'existe pas, donc il est implicitement géré par Doctrine
    }
}
