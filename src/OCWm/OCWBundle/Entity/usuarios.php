<?php

namespace OCWm\OCWBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OCWm\OCWBundle\Entity\usuarios
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCWm\OCWBundle\Entity\usuariosRepository")
 */
class usuarios
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
     * @var string $user
     *
     * @ORM\Column(name="user", type="string", length=255)
     */
    private $user;

    /**
     * @var string $pass
     *
     * @ORM\Column(name="pass", type="string", length=255)
     */
    private $pass;

    /**
     * @var string $nombres
     *
     * @ORM\Column(name="nombres", type="string", length=255)
     */
    private $nombres;

    /**
     * @var string $apellidos
     *
     * @ORM\Column(name="apellidos", type="string", length=255)
     */
    private $apellidos;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @ORM\ManyToOne(targetEntity="roles_usuario", inversedBy="usuarios")
     * @ORM\JoinColumn(name="rol_usuario_id", referencedColumnName="id")
     * @return integer
     */
    private $rol;
    
    public function setRol(\OCWm\OCWBundle\Entity\roles_usuario $rol){
        $this->rol = $rol;
    }
    
    public function getRol(){
        return $this->rol;
    }
    
    
    public function __contruct(){
        $this->favoritos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->sugerencias = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * @ORM\OneToMany(targetEntity="sugerencias", mappedBy="usuarios")
     */
    private $sugerencias;
    
    public function addSugerencias(\OCWm\OCWBundle\Entity\favoritos $sugerencia){
        $this->sugerencias[] = $sugerencia;
    }
    
    public function getSugerencias(){
        return $this->sugerencias;
    }
    
    /**
     * @ORM\OneToMany(targetEntity="favoritos", mappedBy="usuarios")
     */
    private $favoritos;
    
    public function addFavoritos(\OCWm\OCWBundle\Entity\favoritos $favorito){
        $this->favoritos[] = $favorito;
    }
    
    public function getFavoritos(){
        return $this->favoritos;
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
     * Set user
     *
     * @param string $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set pass
     *
     * @param string $pass
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    /**
     * Get pass
     *
     * @return string 
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    }

    /**
     * Get nombres
     *
     * @return string 
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set rol_id
     *
     * @param integer $rolId
     */
    public function setRolId($rolId)
    {
        $this->rol_id = $rolId;
    }

    /**
     * Get rol_id
     *
     * @return integer 
     */
    public function getRolId()
    {
        return $this->rol_id;
    }
}