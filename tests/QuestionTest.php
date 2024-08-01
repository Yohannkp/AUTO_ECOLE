<?php

namespace App\Tests\Entity;

use App\Entity\Cours;
use App\Entity\Proposition;
use App\Entity\Question;
use PHPUnit\Framework\TestCase;

class QuestionTest extends TestCase
{
    public function testGettersAndSetters()
    {
        $question = new Question();

        // Test Intitule
        $question->setIntitule('What is your name?');
        $this->assertEquals('What is your name?', $question->getIntitule());

        // Test Cours Dedie
        $cours = new Cours(); // Ensure the Cours class is properly defined
        $question->setCoursDedie($cours);
        $this->assertSame($cours, $question->getCoursDedie());
    }

    public function testPropositionsAssociation()
    {
        $question = new Question();
        $proposition = new Proposition(); // Ensure the Proposition class is properly defined

        // Check that the collection is empty initially
        $this->assertCount(0, $question->getReponse());

        // Add a Proposition
        $question->addReponse($proposition);
        $this->assertCount(1, $question->getReponse());
        $this->assertTrue($question->getReponse()->contains($proposition));

        // Remove the Proposition
        $question->removeReponse($proposition);
        $this->assertCount(0, $question->getReponse());
        $this->assertFalse($question->getReponse()->contains($proposition));
    }
}
