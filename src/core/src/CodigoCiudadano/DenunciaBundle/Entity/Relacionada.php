<?php

namespace CodigoCiudadano\DenunciaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relacionada
 */
class Relacionada
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \CodigoCiudadano\DenunciaBundle\Entity\Denuncia
     */
    private $denuncia;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set denuncia
     *
     * @param \CodigoCiudadano\DenunciaBundle\Entity\Denuncia $denuncia
     * @return Relacionada
     */
    public function setDenuncia(\CodigoCiudadano\DenunciaBundle\Entity\Denuncia $denuncia = null)
    {
        $this->denuncia = $denuncia;

        return $this;
    }

    /**
     * Get denuncia
     *
     * @return \CodigoCiudadano\DenunciaBundle\Entity\Denuncia 
     */
    public function getDenuncia()
    {
        return $this->denuncia;
    }
}
