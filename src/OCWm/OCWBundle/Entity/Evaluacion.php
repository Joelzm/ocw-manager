<?php

namespace OCWm\OCWBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OCWm\OCWBundle\Entity\Evaluacion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCWm\OCWBundle\Entity\EvaluacionRepository")
 */
class Evaluacion
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
     * @ORM\ManyToOne(targetEntity="OCW", inversedBy="comentarios")
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
     * @ORM\OneToMany(targetEntity="Pregunta", mappedBy="evaluacion")
     */
    private $preguntas;
    
    public function addPregunta(\OCWm\OCWBundle\Entity\Pregunta $pregunta){
        $this->preguntas[] = $pregunta;
    }
    
    public function getPreguntas(){
        return $this->preguntas;
    }
    
    public function __construct(){
        $this->preguntas = \Doctrine\Common\Collections\ArrayCollection();
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
     * @var integer $ocw_id
     *
     * @ORM\Column(name="ocw_id", type="integer")
     */
    private $ocw_id;

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
     * Set ocw_id
     *
     * @param integer $ocwId
     */
    public function setOcwId($ocwId)
    {
        $this->ocw_id = $ocwId;
    }

    /**
     * Get ocw_id
     *
     * @return integer 
     */
    public function getOcwId()
    {
        return $this->ocw_id;
    }
}