<?php

namespace OCWm\OCWBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OCWm\OCWBundle\Entity\roles_usuario
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCWm\OCWBundle\Entity\roles_usuarioRepository")
 */
class roles_usuario
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
    
    public function __construct (){
        $this->usuarios = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /*
     * @ORM\OneToMay(targetEntity="usuarios", mappedBy="roles_usuario")
     */
    private $usuarios;
    
    public function setUsuarios(\OCWm\OCWBundle\Entity\usuarios $usuario){
        $this->usuarios[] = $usuario;
    }
    
    public function getUsuarios(){
        return $this->usuarios;
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