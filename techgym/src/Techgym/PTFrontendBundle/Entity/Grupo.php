<?php

namespace Techgym\PTFrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grupo
 *
 * @ORM\Table(name="grupo")
 * @ORM\Entity(repositoryClass="Techgym\PTFrontendBundle\Repository\GrupoRepository")
 */
class Grupo {

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
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="rol", type="string", length=255)
     */
    private $rol;

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
     * @return Grupo
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
     * Set rol
     *
     * @param string $rol
     * @return Grupo
     */
    public function setRol($rol) {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return string 
     */
    public function getRol() {
        return $this->rol;
    }

    ////ASOCIACIONES////

    /**
     * @ORM\ManyToMany(targetEntity="PtUsuario", mappedBy="grupos")
     */
    private $usuarios;

    public function __construct() {
        $this->usuarios = new ArrayCollection();
        $this->usuariosalum = new ArrayCollection();
    }

    ////FIN ASOCIACIONES////

    /**
     * @ORM\ManyToMany(targetEntity="Alumno", mappedBy="grupos")
     */
    private $usuariosalum;

    /**
     * Add usuarios
     *
     * @param \Techgym\PTFrontendBundle\Entity\PtUsuario $usuarios
     * @return Grupo
     */
    public function addUsuario(\Techgym\PTFrontendBundle\Entity\PtUsuario $usuarios) {
        $this->usuarios[] = $usuarios;

        return $this;
    }

    /**
     * Remove usuarios
     *
     * @param \Techgym\PTFrontendBundle\Entity\PtUsuario $usuarios
     */
    public function removeUsuario(\Techgym\PTFrontendBundle\Entity\PtUsuario $usuarios) {
        $this->usuarios->removeElement($usuarios);
    }

    /**
     * Get usuarios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsuarios() {
        return $this->usuarios;
    }

    /**
     * Add usuariosalum
     *
     * @param \Techgym\PTFrontendBundle\Entity\Alumno $usuariosalum
     * @return Grupo
     */
    public function addUsuariosalum(\Techgym\PTFrontendBundle\Entity\Alumno $usuariosalum) {
        $this->usuariosalum[] = $usuariosalum;

        return $this;
    }

    /**
     * Remove usuariosalum
     *
     * @param \Techgym\PTFrontendBundle\Entity\Alumno $usuariosalum
     */
    public function removeUsuariosalum(\Techgym\PTFrontendBundle\Entity\Alumno $usuariosalum) {
        $this->usuariosalum->removeElement($usuariosalum);
    }

    /**
     * Get usuariosalum
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsuariosalum() {
        return $this->usuariosalum;
    }

}
