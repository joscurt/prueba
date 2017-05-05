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

/**
 * PtUsuario
 *
 * @ORM\Table(name="pt_usuario")
 * @ORM\Entity(repositoryClass="Techgym\PTFrontendBundle\Repository\PtUsuarioRepository")
 * @ORM\HasLifecycleCallbacks()
 * @UniqueEntity(fields={"email","username"},message="Este dato ya está utilizado.")
 * @UniqueEntity(fields={"username"},message="Este dato ya está utilizado.")
 */
class PtUsuario implements AdvancedUserInterface, \Serializable {

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
     * @Assert\NotBlank(message="Este campo es obligatorio.")
     * @ORM\Column(name="apellidos", type="string", length=255)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;

    /**
     * @var string
     * @Assert\NotBlank(message="Este campo es obligatorio.")
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var string
     * @Assert\NotBlank(message="Este campo es obligatorio.")
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     * @Assert\NotBlank(message="Este campo es obligatorio.")
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var bool
     * @Assert\NotBlank(message="Este campo es obligatorio.")
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive;

    /**
     * @var string
     *
     * @ORM\Column(name="tokenRegistro", type="string", length=255)
     */
    private $tokenRegistro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion", type="datetime")
     */
    private $creacionpt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion", type="datetime")
     */
    private $modificapt;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * 
     * 
     */
    private $imagenpt;

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
     * @return PtUsuario
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
     * @return PtUsuario
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
     * @return PtUsuario
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
     * @return PtUsuario
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
     * @return PtUsuario
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
     * @return PtUsuario
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
     * @return PtUsuario
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
     * @return PtUsuario
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
     * @var string $password_again
     *
     * @Assert\NotBlank(message="Este campo es obligatorio.")
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
        $this->grupos = new ArrayCollection();
        $this->alumno = new ArrayCollection();
        $this->evaluacion = new ArrayCollection();
    }

    public function isAccountNonExpired() {
        return true;
    }

    public function isAccountNonLocked() {
        return true;
    }

    public function isCredentialsNonExpired() {
        return true;
    }

    public function isEnabled() {
        return $this->isActive;
    }

    public function eraseCredentials() {
        
    }

    function equals(UserInterface $user) {
        return $user->getUsername() === $this->username;
    }

    public function getRoles() {
        $roles = array();
        foreach ($this->grupos as $g) {
            $roles[] = $g->getRol();
        }

        return $roles;
    }

    /**
     * @ORM\ManyToMany(targetEntity="Grupo", inversedBy="usuarios")
     */
    private $grupos;

    /**
     * @ORM\OneToMany(targetEntity="Alumno", mappedBy="usuario")
     */
    private $alumno;

    ////FIN ASOCIACIONES////

    /**
     * Add grupos
     *
     * @param \Techgym\PTFrontendBundle\Entity\Grupo $grupos
     * @return PtUsuario
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
     * Add alumno
     *
     * @param \Techgym\PTFrontendBundle\Entity\Alumno $alumno
     * @return PtUsuario
     */
    public function addAlumno(\Techgym\PTFrontendBundle\Entity\Alumno $alumno) {
        $this->alumno[] = $alumno;

        return $this;
    }

    /**
     * Remove alumno
     *
     * @param \Techgym\PTFrontendBundle\Entity\Alumno $alumno
     */
    public function removeAlumno(\Techgym\PTFrontendBundle\Entity\Alumno $alumno) {
        $this->alumno->removeElement($alumno);
    }

    /**
     * Get alumno
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAlumno() {
        return $this->alumno;
    }

    /** @see \Serializable::serialize() */
    public function serialize() {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            $this->isActive
        ));
    }

    /** @see \Serializable::serialize() */
    public function unserialize($serialized) {
        list (
                $this->id,
                $this->username,
                $this->password,
                $this->isActive
                ) = unserialize($serialized);
    }

    /**
     * Set creacionpt
     *
     * @param \DateTime $creacionpt
     * @ORM\prePersist
     * @return PtUsuario
     */
    public function setCreacionpt() {
        $this->creacionpt = new \DateTime();
    }

    /**
     * Get creacionpt
     *
     * @return \DateTime 
     */
    public function getCreacionpt() {
        return $this->creacionpt;
    }

    /**
     * Set modificapt
     *
     * @param \DateTime $modificapt
     * @ORM\prePersist
     * @ORM\preUpdate
     * @return PtUsuario
     */
    public function setModificapt() {
        $this->modificapt = new \DateTime();
    }

    /**
     * Get modificapt
     *
     * @return \DateTime 
     */
    public function getModificapt() {
        return $this->modificapt;
    }


    /**
     * Set imagenpt
     *
     * @param string $imagenpt
     * @return PtUsuario
     */
    public function setImagenpt($imagenpt)
    {
        $this->imagenpt = $imagenpt;

        return $this;
    }

    /**
     * Get imagenpt
     *
     * @return string 
     */
    public function getImagenpt()
    {
        return $this->imagenpt;
    }
      /**
  * @ORM\OneToMany(targetEntity="Evaluacion", mappedBy="ptusuario")
  */
 private $evaluacion;

    /**
     * Add evaluacion
     *
     * @param \Techgym\PTFrontendBundle\Entity\Evaluacion $evaluacion
     * @return PtUsuario
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
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=255)
     */
    private $sexo;

    /**
     * Set sexo
     *
     * @param string $sexo
     * @return PtUsuario
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
}
