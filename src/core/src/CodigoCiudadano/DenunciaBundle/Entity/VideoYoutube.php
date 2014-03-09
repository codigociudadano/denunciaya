<?php

namespace CodigoCiudadano\DenunciaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VideoYoutube
 */
class VideoYoutube
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $url;

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
     * Set url
     *
     * @param string $url
     * @return VideoYoutube
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set denuncia
     *
     * @param \CodigoCiudadano\DenunciaBundle\Entity\Denuncia $denuncia
     * @return VideoYoutube
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
