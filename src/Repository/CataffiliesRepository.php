<?php

namespace App\Repository;

use App\Entity\Cataffilies;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Cataffilies|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cataffilies|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cataffilies[]    findAll()
 * @method Cataffilies[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CataffiliesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cataffilies::class);
    }

    // /**
    //  * @return Cataffilies[] Returns an array of Cataffilies objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Cataffilies
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
