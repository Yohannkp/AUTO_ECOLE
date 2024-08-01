<?php

namespace App\Tests\Entity;

use App\Entity\Personne;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Validator\Validation;

class PersonneTest extends TestCase
{
    private $validator;

    protected function setUp(): void
    {
        $this->validator = Validation::createValidator();
    }

    public function testGettersAndSetters()
    {
        $personne = new Personne();

        // Test Nom
        $personne->setNom('John Doe');
        $this->assertEquals('John Doe', $personne->getNom());

        // Test Adresse
        $personne->setAddresse('123 Main St');
        $this->assertEquals('123 Main St', $personne->getAddresse());

        // Test Mail
        $personne->setMail('john.doe@example.com');
        $this->assertEquals('john.doe@example.com', $personne->getMail());

        // Test Telephone
        $personne->setTelephone('+330645863533');
        $this->assertEquals('+330645863533', $personne->getTelephone());

        // Test Password
        $personne->setPassword('Password123!');
        $this->assertEquals('Password123!', $personne->getPassword());

        // Test Statut
        $personne->setStatut(true);
        $this->assertTrue($personne->getStatut());
    }

    public function testValidation()
    {
        $personne = new Personne();
        $personne->setNom('John Doe');
        $personne->setAddresse('123 Main St');
        $personne->setMail('john.doe@example.com');
        $personne->setTelephone('+330645863533');
        $personne->setPassword('Password123!');
        $personne->setStatut(true);

        $errors = $this->validator->validate($personne);
        $this->assertCount(0, $errors);
    }

    // public function testInvalidTelephone()
    // {
    //     $personne = new Personne();
    //     $personne->setTelephone('InvalidPhoneNumber');

    //     $errors = $this->validator->validate($personne);
    //     $this->assertGreaterThan(0, $errors);
    // }

    // public function testInvalidMail()
    // {
    //     $personne = new Personne();
    //     $personne->setMail('invalid-email');

    //     $errors = $this->validator->validate($personne);
    //     $this->assertGreaterThan(0, $errors);
    // }
}
