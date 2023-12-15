<?php

namespace App\Repository;

use App\Entity\Motcle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Motcle>
 *
 * @method Motcle|null find($id, $lockMode = null, $lockVersion = null)
 * @method Motcle|null findOneBy(array $criteria, array $orderBy = null)
 * @method Motcle[]    findAll()
 * @method Motcle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MotcleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Motcle::class);
    }

    public function save(Motcle $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Motcle $entity, bool $flush = false): void
    {
        //dd($this->getEntityManager());
        $this->getEntityManager()->remove($entity);
        
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Motcle[] Returns an array of Motcle objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Motcle
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
