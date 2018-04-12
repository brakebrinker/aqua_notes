<?php
/**
 * Created by PhpStorm.
 * User: m.pevnev
 * Date: 10.4.18
 * Time: 10.23
 */

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;

class SubFamilyRepository extends EntityRepository
{
    public function createAlphabeticalQueryBuilder()
    {
        return $this->createQueryBuilder('sub_family')
            ->orderBy('sub_family.name', 'ASC');
    }
}