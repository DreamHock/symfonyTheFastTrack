<?php

namespace App\Repository;

use App\Entity\Conference;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Conference>
 */
class ConferenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Conference::class);
    }

    public function findAll(): array
    {
        return $this->findBy([], ['year' => 'DESC', 'city' => 'ASC']);
    }

    public function add(Conference $conference, bool $flush = false)
    {
        $this->getEntityManager()->persist($conference);

        if ($flush === true) {
            $this->getEntityManager()->flush();
        }
    }
}
