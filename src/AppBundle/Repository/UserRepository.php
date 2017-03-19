<?php
namespace AppBundle\Repository;

use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Created by PhpStorm.
 * User: fan
 * Date: 17/2/28
 * Time: ÉÏÎç12:16
 */
class UserRepository extends EntityRepository implements UserLoaderInterface
{

    /**
     * Loads the user for the given username.
     *
     * This method must return null if the user is not found.
     *
     * @param string $username The username
     *
     * @return UserInterface|null
     */
    public function loadUserByUsername($username)
    {
        return $this->createQueryBuilder('u')
            ->where('u.username = :username')
            ->setParameter('username', $username)
            ->getQuery()
            ->getOneOrNullResult();
    }
}