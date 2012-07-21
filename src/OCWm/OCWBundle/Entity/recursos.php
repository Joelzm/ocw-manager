<?php

namespace OCWm\OCWBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OCWm\OCWBundle\Entity\recursos
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCWm\OCWBundle\Entity\recursosRepository")
 */
class recursos
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
     * @var text $ruta
     *
     * @ORM\Column(name="ruta", type="text")
     */
    private $ruta;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;
    
    /**
     * @ORM\ManyToOne(targetEntity="ocws", inversedBy="recursos")
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
     * @ORM\ManyToOne(targetEntity="tipos_recurso", inversedBy="recursos")
     * @ORM\JoinColumn(name="tipo_recurso_id", referencedColumnName="id")
     * @return integer
     */
    private $tipo_recurso;
    
    public function setTipoRecurso(\OCWm\OCWBundle\Entity\tipos_recurso $tipo_recurso){
        $this->tipo_recurso = $tipo_recurso;
    }
    
    public function getTipoRecurso(){
        return $this->tipo_recurso;
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
     * Set ruta
     *
     * @param text $ruta
     */
    public function setRuta($ruta)
    {
        $this->ruta = $ruta;
    }

    /**
     * Get ruta
     *
     * @return text 
     */
    public function getRuta()
    {
        return $this->ruta;
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