<?php

namespace App\Repository;

use App\Entity\Generer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Generer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Generer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Generer[]    findAll()
 * @method Generer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GenererRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Generer::class);
    }

    // /**
    //  * @return Generer[] Returns an array of Generer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Generer
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
