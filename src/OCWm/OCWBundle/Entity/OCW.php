<?php

namespace OCWm\OCWBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * OCWm\OCWBundle\Entity\OCW
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCWm\OCWBundle\Entity\OCWRepository")
 */
class OCW
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
     * @var text $descripcion
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

    /**
     * @var integer $val_pos
     *
     * @ORM\Column(name="val_pos", type="integer")
     */
    private $val_pos;

    /**
     * @var integer $val_neg
     *
     * @ORM\Column(name="val_neg", type="integer")
     */
    private $val_neg;

    /**
     * @ORM\ManyToOne(targetEntity="AreaConocimiento", inversedBy="ocws")
     * @ORM\JoinColumn(name="areaconocimiento_id", referencedColumnName="id")
     * @return integer
     */
    private $areaconocimiento;

    /**
     * @var string $img_portada
     *
     * @ORM\Column(name="img_portada", type="string", length=1000)
     */
    private $img_portada;

    /**
     * @var string $palabras_claves
     *
     * @ORM\Column(name="palabras_claves", type="string", length=2000)
     */
    private $palabras_claves;

    /**
     * @var text $competencias
     *
     * @ORM\Column(name="competencias", type="text")
     */
    private $competencias;

    /**
     * @var text $calendario
     *
     * @ORM\Column(name="calendario", type="text")
     */
    private $calendario;

    /**
     * @var text $lecturas
     *
     * @ORM\Column(name="lecturas", type="text")
     */
    private $lecturas;

    /**
     * @var text $experimentos
     *
     * @ORM\Column(name="experimentos", type="text")
     */
    private $experimentos;

    /**
     * @var text $tareas
     *
     * @ORM\Column(name="tareas", type="text")
     */
    private $tareas;

    /**
     * @var text $proyectos_clase
     *
     * @ORM\Column(name="proyectos_clase", type="text")
     */
    private $proyectos_clase;

    /**
     * @var date $creado
     *
     * @ORM\Column(name="creado", type="date")
     * @Gedmo\Timestampable(on="create")
     */
    private $creado;

    /**
     * @var date $modificado
     *
     * @ORM\Column(name="modificado", type="date", nullable="true")
     * @Gedmo\Timestampable(on="update")
     */
    private $modificado;
    
    /**
     * @var string $slug 
     * @ORM\Column(name="slug", type="string", length=1000)
     * @Gedmo\Slug(fields={"nombre"})
     */
    private $slug;
    
    public function setSlug($slug){
        $this->slug = $slug;
    }
    
    public function getSlug(){
        return $this->slug;
    }
    
    /**
     * @ORM\OneToMany(targetEntity="TemaDiscusion", mappedBy="ocw")
     */
    private $temasdiscusion;
    
    public function addTemaDiscusion(\OCWm\OCWBundle\Entity\TemaDiscusion $temadiscusion){
        $this->temasdiscusion[] = $temadiscusion;
    }
    
    public function getTemasDiscusion(){
        return $this->temasdiscusion;
    }
    
               
    /**
     * @ORM\OneToMany(targetEntity="Comentario", mappedBy="ocw")
     */
    private $comentarios;
    
    public function addComentario(\OCWm\OCWBundle\Entity\OCW $ocw){
        $this->comentarios[] = $ocw;
    }
    
    public function getComentarios(){
        return $this->comentarios;
    }
    
    /**
     * @ORM\ManyToMany(targetEntity="User")
     * @ORM\JoinTable(name="colaboradores", joinColumns={@ORM\JoinColumn(name="ocw_id", referencedColumnName="id")}, inverseJoinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")})
     */
    private $colaboradores;
    
    /**
     * Set colaborador
     * @param \OCWm\OCWBundle\Entity\User $colaborador 
     */
    public function addColaborador(\OCWm\OCWBundle\Entity\User $colaborador){
        $this->colaboradores[] = $colaborador;
    }
    
    public function setColaboradores($colaboradores){
        $this->colaboradores = $colaboradores;
    }
    
    /**
     * Get colaboradores
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getColaboradores(){
        return $this->colaboradores;
    }
    
    /**
     * get usuariosColaboradores
     * @return \Doctrine\Common\Collections\ArrayCollection 
     */
    public function getUsuariosColaboradores(){
        return $this->colaboradores->toArray();
    }
    
    /**
     * @ORM\OneToMany(targetEntity="Evaluacion", mappedBy="ocw")
     */
    private $evaluaciones;
    
    public function addEvaluacion(\OCWm\OCWBundle\Entity\Evaluacion $evaluacion){
        $this->evaluaciones[] = $evaluacion;
    }
    
    public function getEvaluaciones(){
        return $this->evaluaciones;
    }
    
    /**
     * @ORM\OneToMany(targetEntity="Recurso", mappedBy="ocw")
     */
    private $recursos;
    
    public function addRecurso(\OCWm\OCWBundle\Entity\Recurso $recurso){
        $this->recursos[] = $recurso;
    }
    
    public function getRecursos(){
        return $this->recursos;
    }
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="ocws") 
     * @@RM\JoinColunm(name="autor_id"), referencedColunmName="id")
     * @return integer
     */
    private $autor;
    
    public function setAutor(\OCWm\OCWBundle\Entity\User $autor){
        $this->autor = $autor;
    }
    
    public function getAutor(){
        return $this->autor;
    }
    
    public function __construct(){
        $this->comentarios = \Doctrine\Common\Collections\ArrayCollection();
        $this->evaluaciones = \Doctrine\Common\Collections\ArrayCollection();
        $this->recursos = \Doctrine\Common\Collections\ArrayCollection();
        $this->colaboradores = \Doctrine\Common\Collections\ArrayCollection();
        $this->temasdiscusion = \Doctrine\Common\Collections\ArrayCollection();
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
     * Set descripcion
     *
     * @param text $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * Get descripcion
     *
     * @return text 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set val_pos
     *
     * @param integer $valPos
     */
    public function setValPos($valPos)
    {
        $this->val_pos = $valPos;
    }

    /**
     * Get val_pos
     *
     * @return integer 
     */
    public function getValPos()
    {
        return $this->val_pos;
    }

    /**
     * Set val_neg
     *
     * @param integer $valNeg
     */
    public function setValNeg($valNeg)
    {
        $this->val_neg = $valNeg;
    }

    /**
     * Get val_neg
     *
     * @return integer 
     */
    public function getValNeg()
    {
        return $this->val_neg;
    }

    public function setAreaConocimiento(\OCWm\OCWBundle\Entity\AreaConocimiento $areaconocimiento)
    {
        $this->areaconocimiento = $areaconocimiento;
    }

    public function getAreaConocimiento()
    {
        return $this->areaconocimiento;
    }

    /**
     * Set img_portada
     *
     * @param string $imgPortada
     */
    public function setImgPortada($imgPortada)
    {
        $this->img_portada = $imgPortada;
    }

    /**
     * Get img_portada
     *
     * @return string 
     */
    public function getImgPortada()
    {
        return $this->img_portada;
    }

    /**
     * Set palabras_claves
     *
     * @param string $palabrasClaves
     */
    public function setPalabrasClaves($palabrasClaves)
    {
        $this->palabras_claves = $palabrasClaves;
    }

    /**
     * Get palabras_claves
     *
     * @return string 
     */
    public function getPalabrasClaves()
    {
        return $this->palabras_claves;
    }

    /**
     * Set competencias
     *
     * @param text $competencias
     */
    public function setCompetencias($competencias)
    {
        $this->competencias = $competencias;
    }

    /**
     * Get competencias
     *
     * @return text 
     */
    public function getCompetencias()
    {
        return $this->competencias;
    }

    /**
     * Set calendario
     *
     * @param text $calendario
     */
    public function setCalendario($calendario)
    {
        $this->calendario = $calendario;
    }

    /**
     * Get calendario
     *
     * @return text 
     */
    public function getCalendario()
    {
        return $this->calendario;
    }

    /**
     * Set lecturas
     *
     * @param text $lecturas
     */
    public function setLecturas($lecturas)
    {
        $this->lecturas = $lecturas;
    }

    /**
     * Get lecturas
     *
     * @return text 
     */
    public function getLecturas()
    {
        return $this->lecturas;
    }

    /**
     * Set experimentos
     *
     * @param text $experimentos
     */
    public function setExperimentos($experimentos)
    {
        $this->experimentos = $experimentos;
    }

    /**
     * Get experimentos
     *
     * @return text 
     */
    public function getExperimentos()
    {
        return $this->experimentos;
    }

    /**
     * Set tareas
     *
     * @param text $tareas
     */
    public function setTareas($tareas)
    {
        $this->tareas = $tareas;
    }

    /**
     * Get tareas
     *
     * @return text 
     */
    public function getTareas()
    {
        return $this->tareas;
    }

    /**
     * Set proyectos_clase
     *
     * @param text $proyectosClase
     */
    public function setProyectosClase($proyectosClase)
    {
        $this->proyectos_clase = $proyectosClase;
    }

    /**
     * Get proyectos_clase
     *
     * @return text 
     */
    public function getProyectosClase()
    {
        return $this->proyectos_clase;
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

    /**
     * Set modificado
     *
     * @param date $modificado
     */
    public function setModificado($modificado)
    {
        $this->modificado = $modificado;
    }

    /**
     * Get modificado
     *
     * @return date 
     */
    public function getModificado()
    {
        return $this->modificado;
    }
}