<?php

namespace OCWm\OCWBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="admin_user") 
 */
class User implements UserInterface {
    /**
     * @ORM\Column(name="id", type="integer") 
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(name="username", type="string", length="255")
     */
    protected $username;
    
    /**
     * @ORM\Column(name="password", type="string", length="255") 
     */
    protected $password;
    
    /**
     * @ORM\Column(name="salt", type="string", length="255") 
     */
    protected $salt;
    
    /**
     * @ORM\ManyToMany(targetEntity="Role")
     * @ORM\JoinTable(name="user_role", joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")}, inverseJoinColumns={@ORM\JoinColumn(name="role_id", referencedColumnName="id")})
     */
    protected $user_roles;
    
    /**
     * @ORM\Column(name="pnombre", type="string", length="255")
     */
    private $pNombre;
    
    /**
     * @ORM\Column(name="snombre", type="string", length="255")
     */
    private $sNombre;
    
    /**
     * @ORM\Column(name="papellido", type="string", length="255")
     */
    private $pApellido;
    
    /**
     * @ORM\Column(name="sapellido", type="string", length="255")
     */
    private $sApellido;
    
    /**
     * @ORM\ManyToOne(targetEntity="Sexo", inversedBy="usuarios")
     * @ORM\JoinColumn(name="sexo_id", referencedColumnName="id")
     * @return integer
     */
    private $sexo;
    
    public function setSexo(\OCWm\OCWBundle\Entity\Sexo $sexo){
        $this->sexo = $sexo;
    }
    
    public function getSexo(){
        return $this->sexo;
    }
    
    /**
     * @ORM\Column(name="foto", type="string", length="1000")
     */
    private $foto;
    
    public function __construct(){
        $this->user_roles = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id 
     * @return integer
     */
    public function getId(){
        return $this->id;
    }
    
    /**
     * Set username
     * @param string $username 
     */
    public function setUsername($username){
        $this->username = $username;
    }
    
    /**
     * Get username
     * @return string 
     */
    public function getUsername(){
        return $this->username;
    }
    
    /**
     * Set password
     * @param string $password 
     */
    public function setPassword($password){
        $this->password = $password;
    }
    
    /**
     * Get password
     * @return string 
     */
    public function getPassword(){
        return $this->password;
    }
    
    /**
     * Set salt
     * @param string $salt
     */
    public function setSalt($salt){
        $this->salt = $salt;
    }
    
    /**
     * Get salt
     * @return string 
     */
    public function getSalt(){
        return $this->salt;
    }
    
    /**
     * Set pNombre
     * @param string $pNombre
     */
    public function setPNombre($pNombre){
        $this->pNombre = $pNombre;
    }
    
    /**
     * Get pNombre
     * @return string 
     */
    public function getPNombre(){
        return $this->pNombre;
    }
    
    /**
     * Set sNombre
     * @param string $pNombre
     */
    public function setSNombre($sNombre){
        $this->sNombre = $sNombre;
    }
    
    /**
     * Get sNombre
     * @return string 
     */
    public function getSNombre(){
        return $this->sNombre;
    }
    
    /**
     * Set pApellido
     * @param string $pApellido
     */
    public function setPApellido($pApellido){
        $this->pApellido = $pApellido;
    }
    
    /**
     * Get pApellido
     * @return string 
     */
    public function getPApellido(){
        return $this->pApellido;
    }
    
    /**
     * Set sApellido
     * @param string $sApellido
     */
    public function setSApellido($sApellido){
        $this->sApellido = $sApellido;
    }
    
    /**
     * Get sApellido
     * @return string 
     */
    public function getSApellido(){
        return $this->sApellido;
    }
    
    /**
     * Add user_roles
     * @param OCWm\OCWBundle\Entity\Role $userRoles 
     */
    public function addRole(OCWm\OCWBundle\Entity\Role $userRoles){
        $this->user_roles[] = $userRoles;
    }
    
    public function setUserRoles($roles){
        $this->user_roles = $roles;
    }
    
    /**
     * Get user_roles
     * @return Doctrine\Common\Collections\ArrayCollection  
     */
    public function getUserRoles(){
        return $this->user_roles;
    }
    
    /**
     * Get roles
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getRoles(){
        return $this->user_roles->toArray();
    }
    
    /**
     * Compares this user to another to determinate if they are the same
     * @param UserInterface $user The user
     * @return boolean True if equal, false otherwise 
     */
    public function equals( UserInterface $user){
        return md5($this->getUsername()) == md5($user->getUsername());
    }
    
    /**
     * Erases the user credentials 
     */
    public function eraseCredentials(){
        
    }
}
?>
