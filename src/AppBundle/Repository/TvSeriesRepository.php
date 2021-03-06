<?php

namespace AppBundle\Repository;
/**
 * TvSeriesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TvSeriesRepository extends \Doctrine\ORM\EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:Tvseies tv ORDER BY tv.name ASC'
            )
            ->getResult();
    }
}
