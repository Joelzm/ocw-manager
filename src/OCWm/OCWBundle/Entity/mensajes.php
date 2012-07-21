<?php

namespace OCWm\OCWBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * OCWm\OCWBundle\Entity\mensajes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCWm\OCWBundle\Entity\mensajesRepository")
 */
class mensajes
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
     * @var string $asunto
     *
     * @ORM\Column(name="asunto", type="string", length=255)
     */
    private $asunto;

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
    
    /**
     * @ORM\ManyToOne(targetEntity="usuarios", inversedBy="mensajes")
     * @ORM\JoinColumn(name="remitente_id", referencedColumnName="id")
     * @return integer
     */
    private $remitente;
    
    public function setRemitente(\OCWm\OCWBundle\Entity\usuarios $remitente){
        $this->remitente = $remitente;
    }
    
    public function getRemitente(){
        return $this->remitente;
    }
    
    /**
     * @ORM\ManyToOne(targetEntity="usuarios", inversedBy="mensajes")
     * @ORM\JoinColumn(name="destinatario_id", referencedColumnName="id")
     * @return integer
     */
    private $destinatario;
    
    public function setDestinatario(\OCWm\OCWBundle\Entity\usuarios $destinatario){
        $this->destinatario = $destinatario;
    }
    
    public function getDestinatario(){
        return $this->destinatario;
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
     * Set asunto
     *
     * @param string $asunto
     */
    public function setAsunto($asunto)
    {
        $this->asunto = $asunto;
    }

    /**
     * Get asunto
     *
     * @return string 
     */
    public function getAsunto()
    {
        return $this->asunto;
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