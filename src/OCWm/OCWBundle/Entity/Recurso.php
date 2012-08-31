<?php

namespace OCWm\OCWBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OCWm\OCWBundle\Entity\Recurso
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCWm\OCWBundle\Entity\RecursoRepository")
 */
class Recurso
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string $path
     *
     * @ORM\Column(name="path", type="string", length=1000)
     */
    private $path;

    /**
     * @var integer $tiporecurso_id
     *
     * @ORM\Column(name="tiporecurso_id", type="integer")
     */
    private $tiporecurso_id;


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
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set path
     *
     * @param string $path
     */
    public function setPath($path)
    {
        $this->path = $path;
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

    /**
     * Set tiporecurso_id
     *
     * @param integer $tiporecursoId
     */
    public function setTiporecursoId($tiporecursoId)
    {
        $this->tiporecurso_id = $tiporecursoId;
    }

    /**
     * Get tiporecurso_id
     *
     * @return integer 
     */
    public function getTiporecursoId()
    {
        return $this->tiporecurso_id;
    }
}