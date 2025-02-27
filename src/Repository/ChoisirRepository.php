<?php

namespace App\Repository;

use App\Entity\Choisir;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Choisir>
 *
 * @method Choisir|null find($id, $lockMode = null, $lockVersion = null)
 * @method Choisir|null findOneBy(array $criteria, array $orderBy = null)
 * @method Choisir[]    findAll()
 * @method Choisir[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChoisirRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Choisir::class);
    }

    public function add(Choisir $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Choisir $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Choisir[] Returns an array of Choisir objects
//     */
    public function findByApprenant($ecole): array
    {
        return $this->createQueryBuilder('c')
            
            ->where('c.satut = 1')
            ->andWhere('c.idEcole = :val')
            ->setParameter('val', $ecole)
            ->getQuery()
            ->getResult()
        ;
    }


    public function findByEcole($apprenant): array
    {
        return $this->createQueryBuilder('c')
            
            ->where('c.satut = 1')
            ->andWhere('c.idApprenant = :val')
            ->setParameter('val', $apprenant)
            ->getQuery()
            ->getResult()
        ;
    }


    public function desinscription($personne)
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'UPDATE App\Entity\choisir p
            SET p.satut = :newstatut
            WHERE p.idApprenant = :apprenant and p.satut = :statut')
        ->setParameter('apprenant',$personne)
        ->setParameter('newstatut',false)
        ->setParameter('statut',true);

        // returns an array of Product objects
        return $query->execute();
    }

    public function findByInscription($apprenant):  ?Choisir
    {
        return $this->createQueryBuilder('c')
            
            ->where('c.satut = 1')
            ->andWhere('c.idApprenant = :val')
            ->setParameter('val', $apprenant)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
//    public function findOneBySomeField($value): ?Choisir
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
