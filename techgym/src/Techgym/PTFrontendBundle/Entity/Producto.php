<?php

namespace Techgym\PTFrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 *
 * @ORM\Table(name="producto")
 * @ORM\Entity(repositoryClass="Techgym\PTFrontendBundle\Repository\ProductoRepository")
 */
class Producto
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
     * @ORM\Column(name="nombre", type="string", length=255, unique=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=255, unique=true)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="string", length=255)
     */
    private $imagen;

    /**
     * @var string
     *
     * @ORM\Column(name="categoria", type="string", length=255)
     */
    private $categoria;

    /**
     * @var string
     *
     * @ORM\Column(name="subcategoria", type="string", length=255)
     */
    private $subcategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="Colores", type="string", length=255)
     */
    private $colores;

    /**
     * @var string
     *
     * @ORM\Column(name="modelos", type="string", length=255)
     */
    private $modelos;


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
     * @return Producto
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
     * Set codigo
     *
     * @param string $codigo
     * @return Producto
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Producto
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Producto
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set categoria
     *
     * @param string $categoria
     * @return Producto
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set subcategoria
     *
     * @param string $subcategoria
     * @return Producto
     */
    public function setSubcategoria($subcategoria)
    {
        $this->subcategoria = $subcategoria;

        return $this;
    }

    /**
     * Get subcategoria
     *
     * @return string 
     */
    public function getSubcategoria()
    {
        return $this->subcategoria;
    }

    /**
     * Set colores
     *
     * @param string $colores
     * @return Producto
     */
    public function setColores($colores)
    {
        $this->colores = $colores;

        return $this;
    }

    /**
     * Get colores
     *
     * @return string 
     */
    public function getColores()
    {
        return $this->colores;
    }

    /**
     * Set modelos
     *
     * @param string $modelos
     * @return Producto
     */
    public function setModelos($modelos)
    {
        $this->modelos = $modelos;

        return $this;
    }

    /**
     * Get modelos
     *
     * @return string 
     */
    public function getModelos()
    {
        return $this->modelos;
    }
}
