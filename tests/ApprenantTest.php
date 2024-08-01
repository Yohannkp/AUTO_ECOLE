<?php
namespace App\Tests\Entity;

use App\Entity\Apprenant;
use App\Entity\Cours;
use App\Entity\Document;
use App\Entity\Post;
use App\Entity\Transaction;
use App\Entity\AutoEcole;
use App\Entity\Rapport;
use PHPUnit\Framework\TestCase;
use Doctrine\Common\Collections\ArrayCollection;

class ApprenantTest extends TestCase
{
    public function testGettersAndSetters()
    {
        $apprenant = new Apprenant();

        // Test du setter et du getter pour 'Prenom'
        $prenom = 'Jean';
        $apprenant->setPrenom($prenom);
        $this->assertEquals($prenom, $apprenant->getPrenom());

        // Test du setter et du getter pour 'Sex'
        $sex = 'M';
        $apprenant->setSex($sex);
        $this->assertEquals($sex, $apprenant->getSex());

        // Test du setter et du getter pour 'coursActive'
        $coursActive = true;
        $apprenant->setCoursActive($coursActive);
        $this->assertTrue($apprenant->isCoursActive());
    }

    public function testCollectionMethods()
    {
        $apprenant = new Apprenant();

        // Test des méthodes de la collection 'coursAppris'
        $cours = new Cours();
        $apprenant->addCoursAppri($cours);
        $this->assertContains($cours, $apprenant->getCoursAppris());
        $apprenant->removeCoursAppri($cours);
        $this->assertNotContains($cours, $apprenant->getCoursAppris());

        // Test des méthodes de la collection 'posts'
        $post = new Post();
        $apprenant->addPost($post);
        $this->assertContains($post, $apprenant->getPosts());
        $apprenant->removePost($post);
        $this->assertNotContains($post, $apprenant->getPosts());

        // Test des méthodes de la collection 'documents'
        $document = new Document();
        $apprenant->addDocument($document);
        $this->assertContains($document, $apprenant->getDocuments());
        $apprenant->removeDocument($document);
        $this->assertNotContains($document, $apprenant->getDocuments());

        // Test des méthodes de la collection 'transactions'
        $transaction = new Transaction();
        $apprenant->addTransaction($transaction);
        $this->assertContains($transaction, $apprenant->getTransactions());
        $apprenant->removeTransaction($transaction);
        $this->assertNotContains($transaction, $apprenant->getTransactions());

        // Test des méthodes de la collection 'idAutoEcolr'
        $autoEcole = new AutoEcole();
        $apprenant->addIdAutoEcolr($autoEcole);
        $this->assertContains($autoEcole, $apprenant->getIdAutoEcolr());
        $apprenant->removeIdAutoEcolr($autoEcole);
        $this->assertNotContains($autoEcole, $apprenant->getIdAutoEcolr());

        // Test des méthodes de la collection 'rapports'
        $rapport = new Rapport();
        $apprenant->addRapport($rapport);
        $this->assertContains($rapport, $apprenant->getRapports());
        $apprenant->removeRapport($rapport);
        $this->assertNotContains($rapport, $apprenant->getRapports());
    }
}
