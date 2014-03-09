<?php

namespace CodigoCiudadano\DenunciaBundle\Repository;

use Doctrine\ORM\EntityRepository;

class DenunciaRepository extends EntityRepository
{
    const STATE_OPEN = 0;
    const STATE_CLOSED = 1;
    const STATE_IN_PROGRESS = 2;
    const STATE_REOPENED = 3;
    const STATE_NOT_VALID = 4;
    const STATE_ARCHIVED = 5;

    const PUBLISHED = true;

    /**
     * Busca todas las denuncias Publicadas en orden descendente.
     *
     * @return Array
     */
    public function findAllPublished()
    {
        $query = $this->getEntityManager()
            ->createQuery('SELECT d FROM CodigoCiudadanoDenunciaBundle:Denuncia d
                WHERE d.publicado = :publicado
                AND d.estado = :estado
              ORDER BY d.id DESC');

        $query->setParameter(':estado', self::STATE_OPEN);
        $query->setParameter(':publicado', self::PUBLISHED);
        $results = $query->getResult();

        return $results;
    }
}