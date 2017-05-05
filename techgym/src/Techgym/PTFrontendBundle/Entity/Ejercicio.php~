<?php

namespace Techgym\PTFrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Ejercicio
 *
 * @ORM\Table(name="ejercicio")
 * @ORM\Entity(repositoryClass="Techgym\PTFrontendBundle\Repository\EjercicioRepository")
 */
class Ejercicio
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
     * @ORM\Column(name="series", type="string", length=255)
     */
    private $series;

    /**
     * @var string
     *
     * @ORM\Column(name="repeticiones", type="string", length=255)
     */
    private $repeticiones;

    /**
     * @var string
     *
     * @ORM\Column(name="instructivos", type="string", length=255)
     */
    private $instructivos;

    
    
    
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
     * @return Ejercicio
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
     * Set series
     *
     * @param string $series
     * @return Ejercicio
     */
    public function setSeries($series)
    {
        $this->series = $series;

        return $this;
    }

    /**
     * Get series
     *
     * @return string 
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * Set repeticiones
     *
     * @param string $repeticiones
     * @return Ejercicio
     */
    public function setRepeticiones($repeticiones)
    {
        $this->repeticiones = $repeticiones;

        return $this;
    }

    /**
     * Get repeticiones
     *
     * @return string 
     */
    public function getRepeticiones()
    {
        return $this->repeticiones;
    }

    /**
     * Set instructivos
     *
     * @param string $instructivos
     * @return Ejercicio
     */
    public function setInstructivos($instructivos)
    {
        $this->instructivos = $instructivos;

        return $this;
    }

    /**
     * Get instructivos
     *
     * @return string 
     */
    public function getInstructivos()
    {
        return $this->instructivos;
    }
    
    /**
     * @ORM\ManyToMany(targetEntity="Rutina", mappedBy="ejer")
     */
    private $rutin;
    
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rutin = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add rutin
     *
     * @param \Techgym\PTFrontendBundle\Entity\Rutina $rutin
     * @return Ejercicio
     */
    public function addRutin(\Techgym\PTFrontendBundle\Entity\Rutina $rutin)
    {
        $this->rutin[] = $rutin;

        return $this;
    }

    /**
     * Remove rutin
     *
     * @param \Techgym\PTFrontendBundle\Entity\Rutina $rutin
     */
    public function removeRutin(\Techgym\PTFrontendBundle\Entity\Rutina $rutin)
    {
        $this->rutin->removeElement($rutin);
    }

    /**
     * Get rutin
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRutin()
    {
        return $this->rutin;
    }
}
