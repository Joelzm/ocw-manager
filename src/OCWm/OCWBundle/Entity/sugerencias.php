<?php

namespace OCWm\OCWBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OCWm\OCWBundle\Entity\sugerencias
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCWm\OCWBundle\Entity\sugerenciasRepository")
 */
class sugerencias
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
     *
     * @ORM\Column(name="creado", type="date")
     */
    private $creado;


    /**
     * @ORM\ManyToOne(targetEntity="usuarios", inversedBy="sugerencias")
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
     * @ORM\ManyToOne(targetEntity="ocws", inversedBy="sugerencias")
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
     * Set creado
     *
     * @param date $creado
     */
    public function setCreado($creado)
    {
        $this->creado = $creado;
    }

    /**
     * Get creado
     *
     * @return date 
     */
    public function getCreado()
    {
        return $this->creado;
    }
}