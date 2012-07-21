<?php

namespace OCWm\OCWBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OCWm\OCWBundle\Entity\rel_ocws_usuarios
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCWm\OCWBundle\Entity\rel_ocws_usuariosRepository")
 */
class rel_ocws_usuarios
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
     * @ORM\ManyToOne(targetEntity="usuarios", inversedBy="rel_ocws_usuarios")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * @return integer
     */
    private $usuario;
    
    public function setUsuario(\OCWm\OCWBundle\Entity\usuarios $usuario){
        $this->usuario = $usuario;
    }
    
    public function getUsuario(){
        return $this->usuario;
    }
    
    /**
     * @ORM\ManyToOne(targetEntity="ocws", inversedBy="rel_ocws_usuarios")
     * @ORM\JoinColumn(name="ocw_id", referencedColumnName="id")
     * @return integer
     */
    private $ocw;
    
    public function setOcw(\OCWm\OCWBundle\Entity\ocws $ocw){
        $this->ocw = $ocw;
    }
    
    public function getOcw(){
        return $this->ocw;
    }
    
    /**
     * @ORM\ManyToOne(targetEntity="roles_ocw", inversedBy="rel_ocws_usuarios")
     * @ORM\JoinColumn(name="rol_ocw_id", referencedColumnName="id")
     * @return integer
     */
    private $rol_ocw;
    
    public function setRolOcw(\OCWm\OCWBundle\Entity\roles_ocw $rol_ocw){
        $this->rol_ocw = $rol_ocw;
    }
    
    public function getRolOcw(){
        return $this->rol_ocw;
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
}