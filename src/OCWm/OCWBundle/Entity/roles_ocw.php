<?php

namespace OCWm\OCWBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OCWm\OCWBundle\Entity\roles_ocw
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCWm\OCWBundle\Entity\roles_ocwRepository")
 */
class roles_ocw
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

    
    public function __construct(){
        $this->rel_ocws_usuarios = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /*
     * @ORM\OneToMany(targetEntity="rel_ocws_usuarios", mappedBy="roles_ocws")
     */
    private $rel_ocws_usuarios;
    
    public function addRelOcwsUsuarios(\OCWm\OCWBundle\Entity\rel_ocws_usuarios $rel_ocw_usuario){
        $this->rel_ocws_usuarios[] = $rel_ocw_usuario;
    }
    
    public function getRelOcwsUsuarios(){
        return $this->rel_ocws_usuarios;
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