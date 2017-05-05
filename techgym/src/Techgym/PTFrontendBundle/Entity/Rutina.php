<?php

namespace Techgym\PTFrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Rutina
 *
 * @ORM\Table(name="rutina")
 * @ORM\Entity(repositoryClass="Techgym\PTFrontendBundle\Repository\RutinaRepository")
 */
class Rutina
{
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
     * @ORM\Column(name="tipo", type="string", length=255)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="dias", type="string", length=255)
     */
    private $dias;

    /**
     * @var string
     *
     * @ORM\Column(name="tiempo", type="string", length=255)
     */
    private $tiempo;

    /**
     * @var string
     *
     * @ORM\Column(name="equipuso", type="string", length=255)
     */
    private $equipuso;


    
  
    
   
    
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
     * @return Rutina
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
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
     * Set tipo
     *
     * @param string $tipo
     * @return Rutina
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set dias
     *
     * @param integer $dias
     * @return Rutina
     */
    public function setDias($dias)
    {
        $this->dias = $dias;

        return $this;
    }

    /**
     * Get dias
     *
     * @return integer 
     */
    public function getDias()
    {
        return $this->dias;
    }

    /**
     * Set string
     *
     * @param string $string
     * @return Rutina
     */
    public function setString($string)
    {
        $this->string = $string;

        return $this;
    }

    /**
     * Get string
     *
     * @return string 
     */
    public function getString()
    {
        return $this->string;
    }

    /**
     * Set equipuso
     *
     * @param string $equipuso
     * @return Rutina
     */
    public function setEquipuso($equipuso)
    {
        $this->equipuso = $equipuso;

        return $this;
    }

    /**
     * Get equipuso
     *
     * @return string 
     */
    public function getEquipuso()
    {
        return $this->equipuso;
    }

    
    /**
     * Set tiempo
     *
     * @param string $tiempo
     * @return Rutina
     */
    public function setTiempo($tiempo)
    {
        $this->tiempo = $tiempo;

        return $this;
    }

    /**
     * Get tiempo
     *
     * @return string 
     */
    public function getTiempo()
    {
        return $this->tiempo;
    }

    
    /**
     * @ORM\ManyToMany(targetEntity="Ejercicio", inversedBy="rutin")
     * @ORM\JoinTable(name="rutina_ejercicio",
     *      joinColumns={@ORM\JoinColumn(name="rutina_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="ejercicio_id", referencedColumnName="id")}
     * )
     */
    private $ejer;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ejer = new \Doctrine\Common\Collections\ArrayCollection();
        $this->rutial = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ejer
     *
     * @param \Techgym\PTFrontendBundle\Entity\Ejercicio $ejer
     * @return Rutina
     */
    public function addEjer(\Techgym\PTFrontendBundle\Entity\Ejercicio $ejer)
    {
        $this->ejer[] = $ejer;

        return $this;
    }

    /**
     * Remove ejer
     *
     * @param \Techgym\PTFrontendBundle\Entity\Ejercicio $ejer
     */
    public function removeEjer(\Techgym\PTFrontendBundle\Entity\Ejercicio $ejer)
    {
        $this->ejer->removeElement($ejer);
    }

    /**
     * Get ejer
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEjer()
    {
        return $this->ejer;
    }
    /**
     * @ORM\ManyToMany(targetEntity="Alumno", mappedBy="alumnruti", cascade={"persist","remove"})
     */
    private $rutial;
    
    
    

    /**
     * Add rutial
     *
     * @param \Techgym\PTFrontendBundle\Entity\Alumno $rutial
     * @return Rutina
     */
    public function addRutial(\Techgym\PTFrontendBundle\Entity\Alumno $rutial)
    {
        $this->rutial[] = $rutial;

        return $this;
    }

    /**
     * Remove rutial
     *
     * @param \Techgym\PTFrontendBundle\Entity\Alumno $rutial
     */
    public function removeRutial(\Techgym\PTFrontendBundle\Entity\Alumno $rutial)
    {
        $this->rutial->removeElement($rutial);
    }

    /**
     * Get rutial
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRutial()
    {
        return $this->rutial;
    }
}
