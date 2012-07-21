<?php

namespace OCWm\OCWBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OCWm\OCWBundle\Entity\preguntas
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCWm\OCWBundle\Entity\preguntasRepository")
 */
class preguntas
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
     * @var text $contenido
     *
     * @ORM\Column(name="contenido", type="text")
     */
    private $contenido;

    /*
     * @ORM\ManyToOne(targetEntity="evaluaciones", inversedBy="preguntas")
     * @ORM\JoinColumn(name="evaluacion_id" referencedColumnName="id")
     * @return integer;
     */
    private $evaluacion;
    
    public function setEvaluacion (\OCWm\OCWBundle\Entity\evaluaciones $evaluacion){
        $this->evaluacion = $evaluacion;
    }
    
    public function getEvaluacion(){
        return $this->evaluacion;
    }
    
    /*
     * @RM\ManyToOne(targetEntity="tipos_pregunta", inversedBy="preguntas")
     * @ORM\JoinColumn(name="tipo_pregunta_id", referencedColumnName="id")
     * @return integer
     */
    private $tipo_pregunta;
    
    public function setTiposPregunta(\OCWm\OCWBundle\Entity\tipos_pregunta $tipo_pregunta){
        $this->tipo_pregunta = $tipo_pregunta;
    }
    
    public function getTiposPregunta(){
        return $this->tipo_pregunta;
    }
    
    /*
     * @ORM\OneToMany(targetEntity="respuestas", mappedBy="preguntas")
     */
    private $repuestas;

    public function __contruct(){
        $this->respuestas = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function addRespuestas(\OCWm\OCWBundle\Entity\respuestas $respuesta){
        $this->repuestas[] = $respuesta;
    }
    
    public function getRespuestas(){
        return $this->respuestas;
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
     * Set contenido
     *
     * @param text $contenido
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
    }

    /**
     * Get contenido
     *
     * @return text 
     */
    public function getContenido()
    {
        return $this->contenido;
    }
}