<?php

namespace OCWm\OCWBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * OCWm\OCWBundle\Entity\posts_hilo_discusion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCWm\OCWBundle\Entity\posts_hilo_discusionRepository")
 */
class posts_hilo_discusion
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
     * @var date $creado 
     * @ORM\Column(name="creado", type="date")
     * @Gedmo\Timestampable(on="create")
     */
    private $creado;
    
    /**
     *
     * @var date $actualizado
     * @ORM\Column(name="actualizado", type="date")
     * @Gedmo\Timestampable(on="update")
     */
    
    public function setCreado($creado){
        $this->creado = $creado;
    }
    
    /**
     * Get creado
     * @return date 
     */
    public function getCreado(){
        return $this->creado;
    }
    
    private $actualizado;
    
    /**
     * Set actualizado
     * @param date $creado 
     */
    
    public function setActualizado($actualizado){
        $this->actualizado = $actualizado;
    }
    
    /**
     * Get actualizado
     * @return date 
     */
    public function getActualizado(){
        return $this->actualizado;
    }
    
    /**
     * @ORM\ManyToOne(targetEntity="hilos_discusion", inversedBy="posts_hilo_discusion")
     * @ORM\JoinColumn(name="hilo_discusion_id", referencedColunmName="id")
     * @return integer
     */
    private $hilo_discusion;
    
    public function setHiloDiscusion(\OCWm\OCWBundle\Entity\ocws $hilo_discusion){
        $this->hilo_discusion = $hilo_discusion;
    }
    
    public function getHiloDiscusion(){
        return $this->hilo_discusion;
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