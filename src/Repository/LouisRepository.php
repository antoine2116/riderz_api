<?php

namespace App\Repository;

use App\Entity\Louis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Louis|null find($id, $lockMode = null, $lockVersion = null)
 * @method Louis|null findOneBy(array $criteria, array $orderBy = null)
 * @method Louis[]    findAll()
 * @method Louis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LouisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Louis::class);
    }

    // /**
    //  * @return Louis[] Returns an array of Louis objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Louis
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
