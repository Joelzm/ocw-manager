<?php

namespace OCWm\OCWBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OCWm\OCWBundle\Entity\tipos_recurso
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCWm\OCWBundle\Entity\tipos_recursoRepository")
 */
class tipos_recurso
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


    public function __contruct(){
        $this->recursos = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * @ORM\OneToMany(targetEntity="recursos", mappedBy="tipos_recursos")
     */
    private $recursos;
    
    public function addRecursos(\OCWm\OCWBundle\Entity\recursos $recurso){
        $this->recursos[] = $recurso;
    }
    
    public function getRecursos(){
        return $this->recursos;
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
}