<?php

namespace App\Repository;

use App\Entity\Effectuer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Effectuer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Effectuer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Effectuer[]    findAll()
 * @method Effectuer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EffectuerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Effectuer::class);
    }

    // /**
    //  * @return Effectuer[] Returns an array of Effectuer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Effectuer
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
