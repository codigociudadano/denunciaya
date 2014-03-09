<?php

namespace CodigoCiudadano\DenunciaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tag
 */
class Tag
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $tag;

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
     * Set tag
     *
     * @param string $tag
     * @return Tag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string 
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set denuncia
     *
     * @param \CodigoCiudadano\DenunciaBundle\Entity\Denuncia $denuncia
     * @return Tag
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
