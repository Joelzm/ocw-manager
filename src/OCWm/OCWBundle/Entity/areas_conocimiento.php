<?php

namespace OCWm\OCWBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OCWm\OCWBundle\Entity\areas_conocimiento
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCWm\OCWBundle\Entity\areas_conocimientoRepository")
 */
class areas_conocimiento
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
     *
     * @ORM\OneToMany(targetEntity="ocws", mappedBy="areas_conocimiento")
     */
    private $ocws;
    
    
    public function __contruct(){
        $this->ocws = new Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function addOcws(\OCWm\OCWBundle\Entity\ocws $ocw){
        $this->ocw[] = $ocw;
    }
    
    public function getOcws(){
        return $this->ocws;
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