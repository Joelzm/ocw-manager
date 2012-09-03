<?php

namespace OCWm\OCWBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * OCWm\OCWBundle\Entity\TemaDiscusion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCWm\OCWBundle\Entity\TemaDiscusionRepository")
 */
class TemaDiscusion
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
     * @var text $contenido
     *
     * @ORM\Column(name="contenido", type="text")
     */
    private $contenido;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="temasdiscusion")
     * @ORM\JoinColumn(name="autor_id", referencedColumnName="id")
     * @return integer
     */
    private $autor;
    

    /**
     * @ORM\ManyToOne(targetEntity="OCW", inversedBy="temasdiscusion")
     * @ORM\JoinColumn(name="ocw_id", referencedColumnName="id")
     * @return integer
     */
    private $ocw;

    /**
     * @ORM\OneToMany(targetEntity="Post", mappedBy="temaDiscusion")
     */
    private $posts;
    
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
    
    public function __construct(){
        $this->posts = \Doctrine\Common\Collections\ArrayCollection();
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
     * Set autor
     *
     * @param \OCWm\OCWBundle\Entity\User $autor
     */
    public function setAutor(\OCWm\OCWBundle\Entity\User $autor)
    {
        $this->autor = $autor;
    }

    /**
     * Get autor
     *
     * @return \OCWm\OCWBundle\Entity\User 
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set ocw
     *
     * @param \OCWm\OCWBundle\Entity\OCW $ocw
     */
    public function setOcw(\OCWm\OCWBundle\Entity\OCW $ocw)
    {
        $this->ocw = $ocw;
    }

    /**
     * Get ocw
     *
     * @return \OCWm\OCWBundle\Entity\OCW 
     */
    public function getOcw()
    {
        return $this->ocw;
    }

    /**
     * Set posts
     *
     * @param \OCWm\OCWBundle\Entity\Post $post
     */
    public function addPost(\OCWm\OCWBundle\Entity\Post $post)
    {
        $this->posts = $post;
    }

    /**
     * Get posts
     *
     * @return \Doctrine\Common\Collections\ArrayCollection 
     */
    public function getPosts()
    {
        return $this->posts;
    }
}