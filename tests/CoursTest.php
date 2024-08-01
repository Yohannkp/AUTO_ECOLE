<?php

namespace App\Tests\Entity;

use App\Entity\Cours;
use App\Entity\Apprenant;
use App\Entity\Question;
use PHPUnit\Framework\TestCase;

class CoursTest extends TestCase
{
    public function testGettersAndSetters()
    {
        $cours = new Cours();

        // Test des setters et getters pour 'titre'
        $titre = 'Titre du Cours';
        $cours->setTitre($titre);
        $this->assertEquals($titre, $cours->getTitre());

        // Test des setters et getters pour 'contenuCours'
        $contenuCours = 'Contenu du cours ici...';
        $cours->setContenuCours($contenuCours);
        $this->assertEquals($contenuCours, $cours->getContenuCours());

        // Test des méthodes pour 'apprenants'
        $apprenant = new Apprenant();
        $cours->addApprenant($apprenant);
        $this->assertTrue($cours->getApprenants()->contains($apprenant));
        
        $cours->removeApprenant($apprenant);
        $this->assertFalse($cours->getApprenants()->contains($apprenant));

        // Test des méthodes pour 'questions'
        $question = new Question();
        $cours->addQuestion($question);
        $this->assertTrue($cours->getQuestions()->contains($question));

        $cours->removeQuestion($question);
        $this->assertFalse($cours->getQuestions()->contains($question));
    }
}
