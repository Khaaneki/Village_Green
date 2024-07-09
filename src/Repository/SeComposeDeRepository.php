<?php

namespace App\Repository;

use App\Entity\SeComposeDe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SeComposeDe>
 *
 * @method SeComposeDe|null find($id, $lockMode = null, $lockVersion = null)
 * @method SeComposeDe|null findOneBy(array $criteria, array $orderBy = null)
 * @method SeComposeDe[]    findAll()
 * @method SeComposeDe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SeComposeDeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SeComposeDe::class);
    }

//    /**
//     * @return SeComposeDe[] Returns an array of SeComposeDe objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SeComposeDe
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
