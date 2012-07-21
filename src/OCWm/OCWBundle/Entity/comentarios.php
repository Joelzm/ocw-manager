<?php

namespace OCWm\OCWBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OCWm\OCWBundle\Entity\comentarios
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCWm\OCWBundle\Entity\comentariosRepository")
 */
class comentarios
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
     * @var integer $usuario_id
     *
     * @ORM\Column(name="usuario_id", type="integer")
     */
    private $usuario_id;

    /**
     * @var integer $ocw_id
     *
     * @ORM\Column(name="ocw_id", type="integer")
     */
    private $ocw_id;

    /**
     * @var text $contenido
     *
     * @ORM\Column(name="contenido", type="text")
     */
    private $contenido;
    
    /**
     * @ORM\ManyToOne(targetEntity="ocws", inversedBy="comentarios")
     * @ORM\JoinColumn(name="ocw_id", referencedColunmName="id")
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
     * Set usuario_id
     *
     * @param integer $usuarioId
     */
    public function setUsuarioId($usuarioId)
    {
        $this->usuario_id = $usuarioId;
    }

    /**
     * Get usuario_id
     *
     * @return integer 
     */
    public function getUsuarioId()
    {
        return $this->usuario_id;
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