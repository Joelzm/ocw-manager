<?php

namespace OCWm\OCWBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OCWm\OCWBundle\Entity\evaluaciones
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCWm\OCWBundle\Entity\evaluacionesRepository")
 */
class evaluaciones
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
     * @ORM\OneToMany(targetEntity="preguntas", mappedBy="evaluaciones")
     */
    private $preguntas;
    
    public function __contruct (){
        $this->preguntas = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function addPreguntas(\OCWm\OCWBundle\Entity\preguntas $pregunta){
        $this->preguntas[] = $pregunta;
    }
    
    public function getPreguntas(){
        return $this->preguntas;
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