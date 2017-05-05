<?php

namespace Jazzyweb\AulasMentor\NotasFrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Etiqueta
 *
 * @ORM\Table(name="etiqueta")
 * @ORM\Entity(repositoryClass="Jazzyweb\AulasMentor\NotasFrontendBundle\Repository\EtiquetaRepository")
 */
class Etiqueta
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
     * @ORM\Column(name="texto", type="string", length=255)
     */
    private $texto;


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
     * Set texto
     *
     * @param string $texto
     * @return Etiqueta
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get texto
     *
     * @return string 
     */
    public function getTexto()
    {
        return $this->texto;
    }
    ////ASOCIACIONES////

 /**
  * @ORM\ManyToMany(targetEntity="Nota", mappedBy="etiquetas")
  */
 private $notas;

 /**
  * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="etiquetas")
  */
 private $usuario;

 ////FIN ASOCIACIONES////

 public function __construct()
 {
     $this->notas = new ArrayCollection();
 }

    /**
     * Add notas
     *
     * @param \Jazzyweb\AulasMentor\NotasFrontendBundle\Entity\Nota $notas
     * @return Etiqueta
     */
    public function addNota(\Jazzyweb\AulasMentor\NotasFrontendBundle\Entity\Nota $notas)
    {
        $this->notas[] = $notas;

        return $this;
    }

    /**
     * Remove notas
     *
     * @param \Jazzyweb\AulasMentor\NotasFrontendBundle\Entity\Nota $notas
     */
    public function removeNota(\Jazzyweb\AulasMentor\NotasFrontendBundle\Entity\Nota $notas)
    {
        $this->notas->removeElement($notas);
    }

    /**
     * Get notas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNotas()
    {
        return $this->notas;
    }

    /**
     * Set usuario
     *
     * @param \Jazzyweb\AulasMentor\NotasFrontendBundle\Entity\Usuario $usuario
     * @return Etiqueta
     */
    public function setUsuario(\Jazzyweb\AulasMentor\NotasFrontendBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Jazzyweb\AulasMentor\NotasFrontendBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
