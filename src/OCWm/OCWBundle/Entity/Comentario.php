<?php

namespace OCWm\OCWBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * OCWm\OCWBundle\Entity\Comentario
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCWm\OCWBundle\Entity\ComentarioRepository")
 */
class Comentario
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
     * @ORM\ManyToOne(targetEntity="User", inversedBy="comentarios")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * @return integer
     */
    private $usuario;
    
    public function setUsuario(\OCWm\OCWBundle\Entity\User $usuario){
        $this->usuario = $usuario;
    }
    
    public function getUsuario(){
        return $this->usuario;
    }
    
    /**
     * @var date $creado
     * @ORM\Column(name="creado", type="date") 
     * @Gedmo\Timestampable(on="create")
     */
    private $creado;
    
    public function setCreado($creado){
        $this->creado = $creado;
    }
    
    public function getCreado(){
        return $this->creado;
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