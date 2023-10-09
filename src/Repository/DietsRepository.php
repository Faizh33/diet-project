<?php

namespace App\Repository;

use App\Entity\Diets;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Diets>
 *
 * @method Diets|null find($id, $lockMode = null, $lockVersion = null)
 * @method Diets|null findOneBy(array $criteria, array $orderBy = null)
 * @method Diets[]    findAll()
 * @method Diets[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DietsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Diets::class);
    }

//    /**
//     * @return Diets[] Returns an array of Diets objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Diets
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
