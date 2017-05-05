<?php

namespace Techgym\PTFrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Security\Core\Role\RoleInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
//use Symfony\Component\HttpFoundation\File\UploadedFile;
//use Symfony\Component\HttpFoundation\File\File;

/**
 * Alumno
 *
 * @ORM\Table(name="alumno")
 * @ORM\Entity(repositoryClass="Techgym\PTFrontendBundle\Repository\AlumnoRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Alumno {
    /**
     * @ORM\OneToMany(targetEntity="Agenda", mappedBy="alumno")
     * 
     */
    protected $agenda;
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     * @Assert\NotBlank(message="Este campo es obligatorio.")
     */
    private $nombre;
    
    /**
     * @var string
     *
     * @ORM\Column(name="gimnasio", type="string", length=255, nullable=true)
     * 
     */
    private $gimnasio;
    
    /**
     * @var string
     *
     * @ORM\Column(name="celular", type="string", length=255, nullable=true)
     * 
     */
    private $celular;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=255)
     * @Assert\NotBlank(message="Este campo es obligatorio.")
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255)
     * @Assert\NotBlank(message="Este campo es obligatorio.")
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;
  /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=255)
     * @Assert\NotBlank(message="Este campo es obligatorio.")
     */
    private $sexo;
    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var bool
     *
     * @ORM\Column(name="isActive", type="boolean")
     * @Assert\NotBlank(message="Este campo es obligatorio.")
     */
    private $isActive;

    /**
     * @var string
     *
     * @ORM\Column(name="tokenRegistro", type="string", length=255)
     */
    private $tokenRegistro;

   /**
     * @var string
     *@ORM\Column(name="imagenalumno", type="string", length=255, nullable=true)
     * 
     * 
     */
    private $imagenalumno;
/**
     * 
     *
     * 
     */
    public function getImagenAlumno() {
        return $this->imagenalumno;
    }
    
 
    public function setImagenAlumno($imagenalumno) {
       $this->imagenalumno = $imagenalumno;

        return $this;
    }
    
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Alumno
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return Alumno
     */
    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos() {
        return $this->apellidos;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Alumno
     */
    public function setSalt($salt) {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt() {
        return $this->salt;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Alumno
     */
    public function setUsername($username) {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Alumno
     */
    public function setPassword($password) {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Alumno
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return Alumno
     */
    public function setIsActive($isActive) {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive() {
        return $this->isActive;
    }

    /**
     * Set tokenRegistro
     *
     * @param string $tokenRegistro
     * @return Alumno
     */
    public function setTokenRegistro($tokenRegistro) {
        $this->tokenRegistro = $tokenRegistro;

        return $this;
    }

    /**
     * Get tokenRegistro
     *
     * @return string 
     */
    public function getTokenRegistro() {
        return $this->tokenRegistro;
    }

    /**
     * Set lunes
     *
     * @param \DateTime $lunes
     * @return Alumno
     */
    public function setLunes($lunes) {
        $this->lunes = $lunes;

        return $this;
    }

    /**
     * Get lunes
     *
     * @return \DateTime 
     */
    public function getLunes() {
        return $this->lunes;
    }

/**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion", type="datetime")
     */
    private $creacionalum;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion", type="datetime")
     */
    private $modificaalum;
   /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nacimiento", type="datetime")
     * @Assert\NotBlank(message="Este campo es obligatorio.")
     */
    private $fechanac;
    /**
     * @ORM\ManyToOne(targetEntity="PtUsuario", inversedBy="alumno")
     * @ORM\JoinColumn(name="usuario_id" , referencedColumnName="id" , onDelete="CASCADE")
     */
    private $usuario;

    /**
     * Set usuario
     *
     * @param \Techgym\PTFrontendBundle\Entity\PtUsuario $usuario
     * @return Alumno
     */
    public function setUsuario(\Techgym\PTFrontendBundle\Entity\PtUsuario $usuario = null) {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Techgym\PTFrontendBundle\Entity\PtUsuario 
     */
    public function getUsuario() {
        return $this->usuario;
    }

    /**
     * @var string $password_again
     *
     * @Assert\Length(max = "150")
     * @Assert\Regex(
     *     pattern="/^[\w-]+$/",
     *     message="El password no puede contener más que caracteres alfanuméricos y guiones")
     */
    private $password_again;

    /**
     * Set password_again
     *
     * @param string $password_again
     */
    public function setPasswordAgain($password) {
        $this->password_again = $password;
    }

    /**
     * Get password_again
     *
     * @return string
     */
    public function getPasswordAgain() {
        return $this->password_again;
    }

    /**
     * @Assert\True(message = "Has escrito dos password distintos")
     */
    public function isPasswordOK() {
        return ($this->password === $this->password_again);
    }

    public function __construct() {
        $this->isActive = true;
        $this->salt = md5(uniqid(null, true));
        /*  $this->martes(new \DateTime());
          $this->miercoles(new \DateTime());
          $this->jueves(new \DateTime());
          $this->viernes(new \DateTime());
          $this->sabado(new \DateTime());
          $this->domingo(new \DateTime()); */
        $this->grupos = new ArrayCollection();
        $this->evaluacion = new ArrayCollection();
        $this->rutinas = new ArrayCollection();
        $this->alumnruti = new ArrayCollection();
        $this->agenda = new ArrayCollection();
        
    }

    public function getRoles() {
        $roles = array();
        foreach ($this->grupos as $g) {
            $roles[] = $g->getRol();
        }

        return $roles;
    }

    /**
     * @ORM\ManyToMany(targetEntity="Grupo", inversedBy="usuariosalum")
     *  
     */
    private $grupos;

    /**
     * Add grupos
     *
     * @param \Techgym\PTFrontendBundle\Entity\Grupo $grupos
     * @return Alumno
     */
    public function addGrupo(\Techgym\PTFrontendBundle\Entity\Grupo $grupos) {
        $this->grupos[] = $grupos;

        return $this;
    }

    /**
     * Remove grupos
     *
     * @param \Techgym\PTFrontendBundle\Entity\Grupo $grupos
     */
    public function removeGrupo(\Techgym\PTFrontendBundle\Entity\Grupo $grupos) {
        $this->grupos->removeElement($grupos);
    }

    /**
     * Get grupos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGrupos() {
        return $this->grupos;
    }

    /**
     * Add grupos2
     *
     * @param \Techgym\PTFrontendBundle\Entity\Grupo $grupos2
     * @return Alumno
     */
    public function addGrupos2(\Techgym\PTFrontendBundle\Entity\Grupo $grupos2) {
        $this->grupos2[] = $grupos2;

        return $this;
    }

    /**
     * Remove grupos2
     *
     * @param \Techgym\PTFrontendBundle\Entity\Grupo $grupos2
     */
    public function removeGrupos2(\Techgym\PTFrontendBundle\Entity\Grupo $grupos2) {
        $this->grupos2->removeElement($grupos2);
    }

    /**
     * Get grupos2
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGrupos2() {
        return $this->grupos2;
    }



    /**
     * Set creacionalum
     *
     * @param \DateTime $creacionalum
     * @ORM\PrePersist
     * @return Alumno
     */
    public function setCreacionalum()
    {
        $this->creacionalum = new \DateTime();

    }

    /**
     * Get creacionalum
     *
     * @return \DateTime 
     */
    public function getCreacionalum()
    {
        return $this->creacionalum;
    }

    /**
     * Set modificaalum
     *
     * @param \DateTime $modificaalum
     * @ORM\PrePersist
     * @ORM\PreUpdate
     * @return Alumno
     */
    public function setModificaalum()
    {
        $this->modificaalum = new \DateTime();

    }

    /**
     * Get modificaalum
     *
     * @return \DateTime 
     */
    public function getModificaalum()
    {
        return $this->modificaalum;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Alumno
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }
    
    /**
  * @ORM\OneToMany(targetEntity="Evaluacion", mappedBy="alumno")
  */
 private $evaluacion;
    

 
 
    

    /**
     * Add evaluacion
     *
     * @param \Techgym\PTFrontendBundle\Entity\Evaluacion $evaluacion
     * @return Alumno
     */
    public function addEvaluacion(\Techgym\PTFrontendBundle\Entity\Evaluacion $evaluacion)
    {
        $this->evaluacion[] = $evaluacion;

        return $this;
    }

    /**
     * Remove evaluacion
     *
     * @param \Techgym\PTFrontendBundle\Entity\Evaluacion $evaluacion
     */
    public function removeEvaluacion(\Techgym\PTFrontendBundle\Entity\Evaluacion $evaluacion)
    {
        $this->evaluacion->removeElement($evaluacion);
    }

    /**
     * Get evaluacion
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvaluacion()
    {
        return $this->evaluacion;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     * @return Alumno
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

   /**
     * @ORM\ManyToMany(targetEntity="Rutina", inversedBy="rutial", cascade={"persist","remove"})
     * @ORM\JoinTable(name="alumno_rutina",
     *      joinColumns={@ORM\JoinColumn(name="alumno_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="rutina_id", referencedColumnName="id")}
     * )
     */
    private $alumnruti;
    

    /**
     * Add alumnruti
     *
     * @param \Techgym\PTFrontendBundle\Entity\Rutina $alumnruti
     * @return Alumno
     */
    public function addAlumnruti(\Techgym\PTFrontendBundle\Entity\Rutina $alumnruti)
    {
        $this->alumnruti[] = $alumnruti;

        return $this;
    }

    /**
     * Remove alumnruti
     *
     * @param \Techgym\PTFrontendBundle\Entity\Rutina $alumnruti
     */
    public function removeAlumnruti(\Techgym\PTFrontendBundle\Entity\Rutina $alumnruti)
    {
        $this->alumnruti->removeElement($alumnruti);
    }

    /**
     * Get alumnruti
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAlumnruti()
    {
        return $this->alumnruti;
    }

    /**
     * Set fechanac
     *
     * @param \DateTime $fechanac
     * @return Alumno
     */
    public function setFechanac($fechanac)
    {
        $this->fechanac = $fechanac;

        return $this;
    }

    /**
     * Get fechanac
     *
     * @return \DateTime 
     */
    public function getFechanac()
    {
        return $this->fechanac;
    }

    /**
     * Add agenda
     *
     * @param \Techgym\PTFrontendBundle\Entity\Agenda $agenda
     * @return Alumno
     */
    public function addAgenda(\Techgym\PTFrontendBundle\Entity\Agenda $agenda)
    {
        $this->agenda[] = $agenda;

        return $this;
    }

    /**
     * Remove agenda
     *
     * @param \Techgym\PTFrontendBundle\Entity\Agenda $agenda
     */
    public function removeAgenda(\Techgym\PTFrontendBundle\Entity\Agenda $agenda)
    {
        $this->agenda->removeElement($agenda);
    }

    /**
     * Get agenda
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * Set gimnasio
     *
     * @param string $gimnasio
     * @return Alumno
     */
    public function setGimnasio($gimnasio)
    {
        $this->gimnasio = $gimnasio;

        return $this;
    }

    /**
     * Get gimnasio
     *
     * @return string 
     */
    public function getGimnasio()
    {
        return $this->gimnasio;
    }

    /**
     * Set celular
     *
     * @param integer $celular
     * @return Alumno
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get celular
     *
     * @return integer 
     */
    public function getCelular()
    {
        return $this->celular;
    }
}
