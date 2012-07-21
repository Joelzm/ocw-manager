<?php

namespace OCWm\OCWBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OCWm\OCWBundle\Entity\hilos_discusion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCWm\OCWBundle\Entity\hilos_discusionRepository")
 */
class hilos_discusion
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
     * @ORM\ManyToOne(targetEntity="ocws", inversedBy="hilos_discusion")
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
    
    public function __contruct(){
        $this->posts_hilos_discusion = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * @ORM\OneToMany(targetEntity="posts_hilos_discusion", mappedBy="hilos_discusion")
     */
    private $posts_hilos_discusion;
    
    public function addPostsHilosDiscusion(\OCWm\OCWBundle\Entity\favoritos $post_hilos_discusion){
        $this->posts_hilos_discusion[] = $post_hilos_discusion;
    }
    
    public function getPostsHilosDiscusion(){
        return $this->posts_hilos_discusion;
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