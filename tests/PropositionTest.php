<?php

namespace App\Tests\Entity;

use App\Entity\Proposition;
use App\Entity\Question;
use PHPUnit\Framework\TestCase;

class PropositionTest extends TestCase
{
    public function testGettersAndSetters()
    {
        $proposition = new Proposition();

        // Test Suggestion
        $proposition->setSuggestion('This is a suggestion');
        $this->assertEquals('This is a suggestion', $proposition->getSuggestion());
    }

    public function testQuestionsAssociation()
    {
        $proposition = new Proposition();
        $question = new Question(); // Ensure the Question class is properly defined

        // Check that the collection is empty initially
        $this->assertCount(0, $proposition->getQuestions());

        // Add a Question
        $proposition->addQuestion($question);
        $this->assertCount(1, $proposition->getQuestions());
        $this->assertTrue($proposition->getQuestions()->contains($question));

        // Remove the Question
        $proposition->removeQuestion($question);
        $this->assertCount(0, $proposition->getQuestions());
        $this->assertFalse($proposition->getQuestions()->contains($question));
    }
}
