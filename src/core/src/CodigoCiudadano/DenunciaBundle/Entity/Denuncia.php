<?php

namespace CodigoCiudadano\DenunciaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Denuncia
 */
class Denuncia
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $ipUsuario;

    /**
     * @var integer
     */
    private $fechaCreacion;

    /**
     * @var string
     */
    private $titulo;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $coordenadasDenuncia;

    /**
     * @var boolean
     */
    private $publicado;

    /**
     * @var integer
     */
    private $estado;

    /**
     * @var \CodigoCiudadano\DenunciaBundle\Entity\TipoDenuncia
     */
    private $tipoDenuncia;

    /**
     * @var \CodigoCiudadano\DenunciaBundle\Entity\Provincia
     */
    private $provincia;

    /**
     * @var \CodigoCiudadano\DenunciaBundle\Entity\Localidad
     */
    private $localidad;

    /**
     * @var \CodigoCiudadano\DenunciaBundle\Entity\User
     */
    private $user;


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
     * Set ipUsuario
     *
     * @param string $ipUsuario
     * @return Denuncia
     */
    public function setIpUsuario($ipUsuario)
    {
        $this->ipUsuario = $ipUsuario;

        return $this;
    }

    /**
     * Get ipUsuario
     *
     * @return string 
     */
    public function getIpUsuario()
    {
        return $this->ipUsuario;
    }

    /**
     * Set fechaCreacion
     *
     * @param integer $fechaCreacion
     * @return Denuncia
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return integer 
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Denuncia
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Denuncia
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set coordenadasDenuncia
     *
     * @param string $coordenadasDenuncia
     * @return Denuncia
     */
    public function setCoordenadasDenuncia($coordenadasDenuncia)
    {
        $this->coordenadasDenuncia = $coordenadasDenuncia;

        return $this;
    }

    /**
     * Get coordenadasDenuncia
     *
     * @return string 
     */
    public function getCoordenadasDenuncia()
    {
        return $this->coordenadasDenuncia;
    }

    /**
     * Set publicado
     *
     * @param boolean $publicado
     * @return Denuncia
     */
    public function setPublicado($publicado)
    {
        $this->publicado = $publicado;

        return $this;
    }

    /**
     * Get publicado
     *
     * @return boolean 
     */
    public function getPublicado()
    {
        return $this->publicado;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Denuncia
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set tipoDenuncia
     *
     * @param \CodigoCiudadano\DenunciaBundle\Entity\TipoDenuncia $tipoDenuncia
     * @return Denuncia
     */
    public function setTipoDenuncia(\CodigoCiudadano\DenunciaBundle\Entity\TipoDenuncia $tipoDenuncia = null)
    {
        $this->tipoDenuncia = $tipoDenuncia;

        return $this;
    }

    /**
     * Get tipoDenuncia
     *
     * @return \CodigoCiudadano\DenunciaBundle\Entity\TipoDenuncia 
     */
    public function getTipoDenuncia()
    {
        return $this->tipoDenuncia;
    }

    /**
     * Set provincia
     *
     * @param \CodigoCiudadano\DenunciaBundle\Entity\Provincia $provincia
     * @return Denuncia
     */
    public function setProvincia(\CodigoCiudadano\DenunciaBundle\Entity\Provincia $provincia = null)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return \CodigoCiudadano\DenunciaBundle\Entity\Provincia 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set localidad
     *
     * @param \CodigoCiudadano\DenunciaBundle\Entity\Localidad $localidad
     * @return Denuncia
     */
    public function setLocalidad(\CodigoCiudadano\DenunciaBundle\Entity\Localidad $localidad = null)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return \CodigoCiudadano\DenunciaBundle\Entity\Localidad 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set user
     *
     * @param \CodigoCiudadano\DenunciaBundle\Entity\User $user
     * @return Denuncia
     */
    public function setUser(\CodigoCiudadano\DenunciaBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \CodigoCiudadano\DenunciaBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
