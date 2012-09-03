<?php

namespace OCWm\OCWBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * OCWm\OCWBundle\Entity\Post
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCWm\OCWBundle\Entity\PostRepository")
 */
class Post
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
     * @ORM\ManyToOne(targetEntity="User", inversedBy="posts")
     * @ORM\JoinColumn(name="autor_id", referencedColumnName="id")
     * @return integer
     */
    private $autor;

    /**
     * @ORM\ManyToOne(targetEntity="TemaDiscusion", inversedBy="posts")
     * @ORM\JoinColumn(name="temadiscusion_id", referencedColumnName="id")
     * @return integer
     */
    private $temaDiscusion;
    
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
     * Set temaDiscusion
     *
     * @param \OCWm\OCWBundle\Entity\TemaDiscusion $temaDiscusion
     */
    public function setTemaDiscusion(\OCWm\OCWBundle\Entity\TemaDiscusion $temaDiscusion)
    {
        $this->temaDiscusion = $temaDiscusion;
    }

    /**
     * Get temaDiscusion
     *
     * @return \OCWm\OCWBundle\Entity\TemaDiscusion 
     */
    public function getTemaDiscusion()
    {
        return $this->temaDiscusion;
    }
}