<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * [nbUser description]
     * @return [type] [description]
     */
    public function nbUser()
    {
      return $this->createQueryBuilder('u')
                  ->select('count(u.id)')
                  ->getQuery()->getSingleScalarResult();
    }

    /**
     * [userIsAdmin description]
     * @param  [type] $user [description]
     * @return [type]       [description]
     */
    public function userIsAdmin($user)
    {
      $check = false;
      if ($user) {
        foreach ($user->getUserRoles() as $role) {
          if ($role->getValue() == 'ROLE_ADMIN') {
            $check = true;
          }
        }
      }
      return $check;
    }

    // /**
    //  * @return User[] Returns an array of User objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
