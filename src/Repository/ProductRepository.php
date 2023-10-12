<?php

namespace App\Repository;

use App\Entity\ÃProduct;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ÃProduct>
 *
 * @method ÃProduct|null find($id, $lockMode = null, $lockVersion = null)
 * @method ÃProduct|null findOneBy(array $criteria, array $orderBy = null)
 * @method ÃProduct[]    findAll()
 * @method ÃProduct[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ÃProduct::class);
    }

//    /**
//     * @return ÃProduct[] Returns an array of ÃProduct objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('�')
//            ->andWhere('�.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('�.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ÃProduct
//    {
//        return $this->createQueryBuilder('�')
//            ->andWhere('�.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
