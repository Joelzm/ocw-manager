<?php

namespace OCWm\OCWBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OCWm\OCWBundle\Entity\respuestas
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCWm\OCWBundle\Entity\respuestasRepository")
 */
class respuestas
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

    /**
     * @var boolean $correcta
     *
     * @ORM\Column(name="correcta", type="boolean")
     */
    private $correcta;

    /*
     * @ORM\ManyToOne(targetEntity="preguntas", inversedBy="respuestas")
     * @ORM\JoinColumn(name="pregunta_id", referencedColumnName="id")
     * @return integer
     */
    private $pregunta;
    
    public function setPregunta(\OCWm\OCWBundle\Entity\preguntas $pregunta){
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

    /**
     * Set correcta
     *
     * @param boolean $correcta
     */
    public function setCorrecta($correcta)
    {
        $this->correcta = $correcta;
    }

    /**
     * Get correcta
     *
     * @return boolean 
     */
    public function getCorrecta()
    {
        return $this->correcta;
    }
}