<?php

namespace App\Tests\Entity;


use App\Entity\Apprenant;
use App\Entity\Post;
use PHPUnit\Framework\TestCase;

class PostTest extends TestCase
{
    public function testGettersAndSetters()
    {
        $post = new Post();

        // Test Titre
        $post->setTitre('Test Title');
        $this->assertEquals('Test Title', $post->getTitre());

        // Test Image
        $post->setImage('image.jpg');
        $this->assertEquals('image.jpg', $post->getImage());

        // Test Contenu
        $post->setContenu('This is the content of the post.');
        $this->assertEquals('This is the content of the post.', $post->getContenu());
    }

    public function testDatevAssociation()
    {
        $post = new Post();
        $apprenant = new Apprenant();

        // Check that the collection is empty initially
        $this->assertCount(0, $post->getDatev());

        // Add an Apprenant
        $post->addDatev($apprenant);
        $this->assertCount(1, $post->getDatev());
        $this->assertTrue($post->getDatev()->contains($apprenant));

        // Remove the Apprenant
        $post->removeDatev($apprenant);
        $this->assertCount(0, $post->getDatev());
        $this->assertFalse($post->getDatev()->contains($apprenant));
    }
}
