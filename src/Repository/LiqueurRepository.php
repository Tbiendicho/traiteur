<?php

namespace App\Repository;

use App\Entity\Liqueur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Liqueur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Liqueur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Liqueur[]    findAll()
 * @method Liqueur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LiqueurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Liqueur::class);
    }

    // /**
    //  * @return Liqueur[] Returns an array of Liqueur objects
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
    public function findOneBySomeField($value): ?Liqueur
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
