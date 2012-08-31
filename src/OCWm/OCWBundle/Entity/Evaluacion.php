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