<?php

namespace App\Repository;

use App\Entity\Encadre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Encadre>
 *
 * @method Encadre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Encadre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Encadre[]    findAll()
 * @method Encadre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EncadreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Encadre::class);
    }

//    /**
//     * @return Encadre[] Returns an array of Encadre objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Encadre
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
