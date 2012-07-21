<?php

namespace OCWm\OCWBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * OCWm\OCWBundle\Entity\ocws
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCWm\OCWBundle\Entity\ocwsRepository")
 */
class ocws
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
     *
     */
    private $nombre;

    /**
     * @var text $descripcion
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;
    
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
    
    private $actualizado;
    
    /**
     * Set actualizado
     * @param date $creado 
     */
    
    public function setActualizado($actualizado){
        $this->actualizado = $actualizado;
    }
    
    /**
     * Get actualizado
     * @return date 
     */
    public function getActualizado(){
        return $this->actualizado;
    }
    
    /**
     *
     * @var srting $slug
     * @ORM\Column(name="slug", type="string", length=500) 
     * @Gedmo\Slug(fields={"nombre"}, style="camel", separator="_", updatable=false, unique=true)
     */
    private $slug;

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
     * @var integer $n_comentarios
     *
     * @ORM\Column(name="n_comentarios", type="integer")
     */
    private $n_comentarios;

    /**
     * @var string $img_present
     *
     * @ORM\Column(name="img_present", type="text")
     */
    private $img_present;

    /**
     * @var integer $n_descargas
     *
     * @ORM\Column(name="n_descargas", type="integer")
     */
    private $n_descargas;

    /**
     * @var text $palabras_clave
     *
     * @ORM\Column(name="palabras_clave", type="text")
     */
    private $palabras_clave;

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
     * @ORM\ManyToOne(targetEntity="areas_conocimiento", inversedBy="ocws")
     * @ORM\JoinColumn(name="area_conocimiento_id", referencedColumnName="id")
     * @return integer
     */
    private $area_conocimiento;
    
    public function setAreaConocimiento(\OCWm\OCWBundle\Entity\areas_conocimiento $area_conocimiento){
        $this->area_conocimiento = $area_conocimiento;
    }
    
    public function getAreaConocimieto(){
        return $this->area_conocimiento;
    }
    
    public function __contruct(){
        $this->comentarios = new \Doctrine\Common\Collections\ArrayCollection();
        $this->favoritos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->sugerencias = new \Doctrine\Common\Collections\ArrayCollection();
        $this->hilos_discusion = new \Doctrine\Common\Collections\ArrayCollection();
        $this->recursos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->rel_ocws_usuarios = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /*
     * @ORM\OneToMany(targetEntity="rel_ocws_usuarios", mappedBy="ocws")
     */
    private $rel_ocws_usuarios;
    
    public function addRelOcwsUsuarios(\OCWm\OCWBundle\Entity\rel_ocws_usuarios $rel_ocw_usuario){
        $this->rel_ocws_usuarios[] = $rel_ocw_usuario;
    }
    
    public function getRelOcwsUsuarios(){
        return $this->rel_ocws_usuarios;
    }
    
    /**
     * @ORM\OneToMany(targetEntity="recursos", mappedBy="ocws")
     */
    private $recursos;
    
    public function addRecursos(\OCWm\OCWBundle\Entity\recursos $recurso){
        $this->recursos[] = $recurso;
    }
    
    public function getRecursos(){
        return $this->recursos;
    }
    
    /**
     * @ORM\OneToMany(targetEntity="sugerencias", mappedBy="ocws")
     */
    private $sugerencias;
    
    public function addSugerencias(\OCWm\OCWBundle\Entity\favoritos $sugerencia){
        $this->sugerencias[] = $sugerencia;
    }
    
    public function getSugerencias(){
        return $this->sugerencias;
    }
    
    /**
     * @ORM\OneToMany(targetEntity="posts_hilo_discusion", mappedBy="hilos_discusion")
     */
    private $hilos_discusion;
    
    public function addHilosDiscusion(\OCWm\OCWBundle\Entity\favoritos $hilo_discusion){
        $this->hilos_discusion[] = $hilo_discusion;
    }
    
    public function getHilosDiscusion(){
        return $this->hilos_discusion;
    }
    
    /**
     * @ORM\OneToMany(targetEntity="favoritos", mappedBy="ocws")
     */
    private $favoritos;
    
    public function addFavoritos(\OCWm\OCWBundle\Entity\favoritos $favorito){
        $this->favoritos[] = $favorito;
    }
    
    public function getFavoritos(){
        return $this->favoritos;
    }
    
    /**
     * @ORM\OneToMany(targetEntity="comentarios", mappedBy="ocws")
     */
    private $comentarios;
    
    public function addComentarios(\OCWm\OCWBundle\Entity\comentarios $comentario){
        $this->comentarios[] = $comentario;
    }
    
    public function getComentarios(){
        return $this->comentarios;
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
     * Set slug
     * @param string $slug
     */
    public function setSlug($slug){
        $this->slug = $slug;
    }
    
    /**
     * Get slug
     * @return string 
     */
    public function getSlug(){
        return $this->slug;
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

    /**
     * Set n_comentarios
     *
     * @param integer $nComentarios
     */
    public function setNComentarios($nComentarios)
    {
        $this->n_comentarios = $nComentarios;
    }

    /**
     * Get n_comentarios
     *
     * @return integer 
     */
    public function getNComentarios()
    {
        return $this->n_comentarios;
    }

    /**
     * Set img_present
     *
     * @param text $imgPresent
     */
    public function setImgPresent($imgPresent)
    {
        $this->img_present = $imgPresent;
    }

    /**
     * Get img_present
     *
     * @return text 
     */
    public function getImgPresent()
    {
        return $this->img_present;
    }

    /**
     * Set n_descargas
     *
     * @param integer $nDescargas
     */
    public function setNDescargas($nDescargas)
    {
        $this->n_descargas = $nDescargas;
    }

    /**
     * Get n_descargas
     *
     * @return integer 
     */
    public function getNDescargas()
    {
        return $this->n_descargas;
    }

    /**
     * Set palabras_clave
     *
     * @param text $palabrasClave
     */
    public function setPalabrasClave($palabrasClave)
    {
        $this->palabras_clave = $palabrasClave;
    }

    /**
     * Get palabras_clave
     *
     * @return text 
     */
    public function getPalabrasClave()
    {
        return $this->palabras_clave;
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
}