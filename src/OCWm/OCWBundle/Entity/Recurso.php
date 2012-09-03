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
     * @ORM\ManyToOne(targetEntity="TipoRecurso", inversedBy="recursos")
     * @ORM\JoinColumn(name="tiporecurso_id", referencedColumnName="id")
     * @return integer
     */
    private $tiporecurso;
    
    /**
     * @ORM\ManyToOne(targetEntity="OCW", inversedBy="recursos") 
     * @ORM\JoinColumn(name="ocw_id", referencedColumnName="id")
     * @return integer
     */
    private $ocw;
    
    public function setOcw(\OCWm\OCWBundle\Entity\OCW $ocw){
        $this->ocw = $ocw;
    }
    
    public function getOcw(){
        return $this->ocw;
    }


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

    public function setTiporecurso(\OCWm\OCWBundle\Entity\TipoRecurso $tiporecurso)
    {
        $this->tiporecurso = $tiporecurso;
    }

    public function getTiporecurso()
    {
        return $this->tiporecurso;
    }
}