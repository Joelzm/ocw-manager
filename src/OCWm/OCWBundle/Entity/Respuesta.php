<?php

namespace OCWm\OCWBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OCWm\OCWBundle\Entity\Respuesta
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCWm\OCWBundle\Entity\RespuestaRepository")
 */
class Respuesta
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
     * @var text $respuesta
     *
     * @ORM\Column(name="respuesta", type="text")
     */
    private $respuesta;

    /**
     * @var boolean $correcto
     *
     * @ORM\Column(name="correcto", type="boolean")
     */
    private $correcto;
    
    /**
     * @ORM\ManyToOne(targetEntity="Pregunta", inversedBy="respuestas")
     * @ORM\JoinColumn(name="pregunta_id", referencedColumnName="id")
     * @return integer
     */
    private $pregunta;
    
    public function setPregunta(\OCWm\OCWBundle\Entity\Pregunta $pregunta){
        $this->pregunta = $pregunta;
    }
    
    public function getPregunta(){
        return $this->pregunta;
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
     * Set respuesta
     *
     * @param text $respuesta
     */
    public function setRespuesta($respuesta)
    {
        $this->respuesta = $respuesta;
    }

    /**
     * Get respuesta
     *
     * @return text 
     */
    public function getRespuesta()
    {
        return $this->respuesta;
    }

    /**
     * Set correcto
     *
     * @param boolean $correcto
     */
    public function setCorrecto($correcto)
    {
        $this->correcto = $correcto;
    }

    /**
     * Get correcto
     *
     * @return boolean 
     */
    public function getCorrecto()
    {
        return $this->correcto;
    }
}