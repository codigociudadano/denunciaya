<?php

namespace CodigoCiudadano\DenunciaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Foto
 */
class Foto
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $denunciaId;

    /**
     * @var string
     */
    private $path;


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
     * Set denunciaId
     *
     * @param integer $denunciaId
     * @return Foto
     */
    public function setDenunciaId($denunciaId)
    {
        $this->denunciaId = $denunciaId;

        return $this;
    }

    /**
     * Get denunciaId
     *
     * @return integer 
     */
    public function getDenunciaId()
    {
        return $this->denunciaId;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Foto
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }
}
