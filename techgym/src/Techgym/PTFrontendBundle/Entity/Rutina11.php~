<?php

namespace Techgym\PTFrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rutina11
 *
 * @ORM\Table(name="rutina11")
 * @ORM\Entity(repositoryClass="Techgym\PTFrontendBundle\Repository\Rutina11Repository")
 */
class Rutina11
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
     * @ORM\Column(name="ejercicio", type="string", length=255)
     */
    private $ejercicio;

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
     * @var int
     *
     * @ORM\Column(name="peso", type="integer")
     */
    private $peso;


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
     * Set ejercicio
     *
     * @param string $ejercicio
     * @return Rutina11
     */
    public function setEjercicio($ejercicio)
    {
        $this->ejercicio = $ejercicio;

        return $this;
    }

    /**
     * Get ejercicio
     *
     * @return string 
     */
    public function getEjercicio()
    {
        return $this->ejercicio;
    }

    /**
     * Set series
     *
     * @param string $series
     * @return Rutina11
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
     * @return Rutina11
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
     * Set peso
     *
     * @param integer $peso
     * @return Rutina11
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get peso
     *
     * @return integer 
     */
    public function getPeso()
    {
        return $this->peso;
    }
}
