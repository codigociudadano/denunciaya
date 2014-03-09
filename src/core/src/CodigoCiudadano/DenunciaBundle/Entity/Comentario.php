<?php

namespace CodigoCiudadano\DenunciaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comentario
 */
class Comentario
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $fechaCreacion;

    /**
     * @var integer
     */
    private $ipComentario;

    /**
     * @var string
     */
    private $comentario;

    /**
     * @var integer
     */
    private $referenceId;

    /**
     * @var string
     */
    private $referenceEntity;

    /**
     * @var boolean
     */
    private $publicado;


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
     * Set userId
     *
     * @param integer $userId
     * @return Comentario
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set fechaCreacion
     *
     * @param integer $fechaCreacion
     * @return Comentario
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
     * Set ipComentario
     *
     * @param integer $ipComentario
     * @return Comentario
     */
    public function setIpComentario($ipComentario)
    {
        $this->ipComentario = $ipComentario;

        return $this;
    }

    /**
     * Get ipComentario
     *
     * @return integer 
     */
    public function getIpComentario()
    {
        return $this->ipComentario;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     * @return Comentario
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string 
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set referenceId
     *
     * @param integer $referenceId
     * @return Comentario
     */
    public function setReferenceId($referenceId)
    {
        $this->referenceId = $referenceId;

        return $this;
    }

    /**
     * Get referenceId
     *
     * @return integer 
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }

    /**
     * Set referenceEntity
     *
     * @param string $referenceEntity
     * @return Comentario
     */
    public function setReferenceEntity($referenceEntity)
    {
        $this->referenceEntity = $referenceEntity;

        return $this;
    }

    /**
     * Get referenceEntity
     *
     * @return string 
     */
    public function getReferenceEntity()
    {
        return $this->referenceEntity;
    }

    /**
     * Set publicado
     *
     * @param boolean $publicado
     * @return Comentario
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
}
