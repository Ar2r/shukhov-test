<?php

namespace App\Repository;

use App\Entity\FullRoute;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FullRoute|null find($id, $lockMode = null, $lockVersion = null)
 * @method FullRoute|null findOneBy(array $criteria, array $orderBy = null)
 * @method FullRoute[]    findAll()
 * @method FullRoute[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FullRouteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FullRoute::class);
    }

    // /**
    //  * @return FullRoute[] Returns an array of FullRoute objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FullRoute
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
