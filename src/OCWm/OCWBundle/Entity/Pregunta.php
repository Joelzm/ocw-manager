<?php

namespace OCWm\OCWBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OCWm\OCWBundle\Entity\Pregunta
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCWm\OCWBundle\Entity\PreguntaRepository")
 */
class Pregunta
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
     * @var text $enunciado
     *
     * @ORM\Column(name="enunciado", type="text")
     */
    private $enunciado;


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
     * @ORM\ManyToOne(targetEntity="Evaluacion", inversedBy="preguntas")
     * @ORM\JoinColumn(name="evaluacion_id", referencedColumnName="id")
     * @return integer
     */
    private $evaluacion;
    
    public function setEvaluacion(\OCWm\OCWBundle\Entity\Evaluacion $evaluacion){
        $this->evaluacion = $evaluacion;
    }
    
    public function getEvaluacion(){
        return $this->evaluacion;
    }
    
    /**
     *@ORM\OneToMany(targetEntity="Respuesta", mappedBy="pregunta")
     */
    private $respuestas;
    
    public function addRespuesta(\OCWm\OCWBundle\Entity\Respuesta $respuesta){
        $this->respuestas[] = $respuesta;
    }
    
    public function getRespuestas(){
        return $this->respuestas;
    }
    
    public function __construct(){
        $this->respuestas = \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set enunciado
     *
     * @param text $enunciado
     */
    public function setEnunciado($enunciado)
    {
        $this->enunciado = $enunciado;
    }

    /**
     * Get enunciado
     *
     * @return text 
     */
    public function getEnunciado()
    {
        return $this->enunciado;
    }
}