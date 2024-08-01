<?php
namespace App\Tests\Entity;

use App\Entity\AutoEcole;
use App\Entity\Rapport;
use App\Entity\Apprenant;
use App\Entity\Session;
use PHPUnit\Framework\TestCase;
use Doctrine\Common\Collections\ArrayCollection;

class AutoEcoleTest extends TestCase
{
    public function testGettersAndSetters()
    {
        $autoEcole = new AutoEcole();

        // Test des setters et getters pour 'image'
        $image = 'image.jpg';
        $autoEcole->setImage($image);
        $this->assertEquals($image, $autoEcole->getImage());

        // Test des setters et getters pour 'Description'
        $description = 'Description de l\'auto-école';
        $autoEcole->setDescription($description);
        $this->assertEquals($description, $autoEcole->getDescription());

        // Test des setters et getters pour 'Note'
        $note = 4.5;
        $autoEcole->setNote($note);
        $this->assertEquals($note, $autoEcole->getNote());

        // Test des setters et getters pour 'Horairedebut'
        $horaireDebut = '08:00';
        $autoEcole->setHoraireDebut($horaireDebut);
        $this->assertEquals($horaireDebut, $autoEcole->getHoraireDebut());

        // Test des setters et getters pour 'Horairefin'
        $horaireFin = '18:00';
        $autoEcole->setHoraireFin($horaireFin);
        $this->assertEquals($horaireFin, $autoEcole->getHoraireFin());
    }

    public function testCollectionMethods()
    {
        $autoEcole = new AutoEcole();

        // Test des méthodes de la collection 'rapports'
        $rapport = new Rapport();
        $autoEcole->addRapport($rapport);
        $this->assertContains($rapport, $autoEcole->getRapports());
        $autoEcole->removeRapport($rapport);
        $this->assertNotContains($rapport, $autoEcole->getRapports());

        // Test des méthodes de la collection 'apprenants'
        $apprenant = new Apprenant();
        $autoEcole->addApprenant($apprenant);
        $this->assertContains($apprenant, $autoEcole->getApprenants());
        $autoEcole->removeApprenant($apprenant);
        $this->assertNotContains($apprenant, $autoEcole->getApprenants());

        // Test des méthodes de la collection 'session'
        $session = new Session();
        $autoEcole->addSession($session);
        $this->assertContains($session, $autoEcole->getSession());
        $autoEcole->removeSession($session);
        $this->assertNotContains($session, $autoEcole->getSession());
    }

    public function testConstructor()
    {
        $autoEcole = new AutoEcole();
        $this->assertInstanceOf(ArrayCollection::class, $autoEcole->getRapports());
        $this->assertInstanceOf(ArrayCollection::class, $autoEcole->getApprenants());
        $this->assertInstanceOf(ArrayCollection::class, $autoEcole->getSession());
    }
}
