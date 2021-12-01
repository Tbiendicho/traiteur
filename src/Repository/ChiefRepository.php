<?php

namespace App\Repository;

use App\Entity\Chief;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Chief|null find($id, $lockMode = null, $lockVersion = null)
 * @method Chief|null findOneBy(array $criteria, array $orderBy = null)
 * @method Chief[]    findAll()
 * @method Chief[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChiefRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Chief::class);
    }

    // /**
    //  * @return Chief[] Returns an array of Chief objects
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
    public function findOneBySomeField($value): ?Chief
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
