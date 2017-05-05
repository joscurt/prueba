<?php

namespace Techgym\PTFrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluacion
 *
 * @ORM\Table(name="evaluacion")
 * @ORM\Entity(repositoryClass="Techgym\PTFrontendBundle\Repository\EvaluacionRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Evaluacion {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="edad", type="float")
     */
    private $edad;

    /**
     * @var float
     *
     * @ORM\Column(name="estatura", type="float")
     */
    private $estatura;

    /**
     * @var float
     *
     * @ORM\Column(name="peso", type="float")
     */
    private $peso;

    /**
     * @var float
     *
     * @ORM\Column(name="p_grasa", type="float", nullable=true)
     */
    private $pGrasa;

    /**
     * @var float
     *
     * @ORM\Column(name="pliegue_triceps", type="float")
     */
    private $pliegueTriceps;

    /**
     * @var float
     *
     * @ORM\Column(name="pliegue_subescapular", type="float")
     */
    private $pliegueSubescapular;

    /**
     * @var float
     *
     * @ORM\Column(name="pliegue_suprailiaco", type="float")
     */
    private $pliegueSuprailiaco;

    /**
     * @var float
     *
     * @ORM\Column(name="pliegue_biceps", type="float")
     */
    private $pliegueBiceps;

    /**
     * @var float
     *
     * @ORM\Column(name="peso_grasa", type="float", nullable=true)
     */
    private $pesoGrasa;

    /**
     * @var float
     *
     * @ORM\Column(name="peso_magro", type="float", nullable=true)
     */
    private $pesoMagro;

    /**
     * @var string
     *
     * @ORM\Column(name="imc", type="string", length=255, nullable=true)
     */
    private $imc;
/**
     * @var float
     *
     * @ORM\Column(name="densidad_corporal", type="float")
     */
    private $densidadCorporal;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion", type="datetime")
     */
    private $creacioneva;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion", type="datetime")
     */
    private $modificaeva;

    /**
     * @ORM\ManyToOne(targetEntity="PtUsuario", inversedBy="alumno")
     */

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set edad
     *
     * @param float $edad
     * @return Evaluacion
     */
    public function setEdad($edad) {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return float 
     */
    public function getEdad() {
        return $this->edad;
    }

    /**
     * Set estatura
     *
     * @param float $estatura
     * @return Evaluacion
     */
    public function setEstatura($estatura) {
        $this->estatura = $estatura;

        return $this;
    }

    /**
     * Get estatura
     *
     * @return float 
     */
    public function getEstatura() {
        return $this->estatura;
    }

    /**
     * Set peso
     *
     * @param float $peso
     * @return Evaluacion
     */
    public function setPeso($peso) {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get peso
     *
     * @return float 
     */
    public function getPeso() {
        return $this->peso;
    }

    

    /**
     * Get pGrasa
     *
     * @return float 
     */
    public function getPGrasa() {
        return $this->pGrasa;
    }

    /**
     * Set pliegueTriceps
     *
     * @param float $pliegueTriceps
     * @return Evaluacion
     */
    public function setPliegueTriceps($pliegueTriceps) {
        $this->pliegueTriceps = $pliegueTriceps;

        return $this;
    }

    /**
     * Get pliegueTriceps
     *
     * @return float 
     */
    public function getPliegueTriceps() {
        return $this->pliegueTriceps;
    }

    /**
     * Set pliegueSubescapular
     *
     * @param float $pliegueSubescapular
     * @return Evaluacion
     */
    public function setPliegueSubescapular($pliegueSubescapular) {
        $this->pliegueSubescapular = $pliegueSubescapular;

        return $this;
    }

    /**
     * Get pliegueSubescapular
     *
     * @return float 
     */
    public function getPliegueSubescapular() {
        return $this->pliegueSubescapular;
    }

    /**
     * Set pliegueSuprailiaco
     *
     * @param float $pliegueSuprailiaco
     * @return Evaluacion
     */
    public function setPliegueSuprailiaco($pliegueSuprailiaco) {
        $this->pliegueSuprailiaco = $pliegueSuprailiaco;

        return $this;
    }

    /**
     * Get pliegueSuprailiaco
     *
     * @return float 
     */
    public function getPliegueSuprailiaco() {
        return $this->pliegueSuprailiaco;
    }

    /**
     * Set pliegueBicep
     *
     * @param string $pliegueBicep
     * @return Evaluacion
     */
    public function setPliegueBicep($pliegueBicep) {
        $this->pliegueBicep = $pliegueBicep;

        return $this;
    }

    /**
     * Get pliegueBicep
     *
     * @return string 
     */
    public function getPliegueBicep() {
        return $this->pliegueBicep;
    }

    /**
     * Set pliegueBiceps
     *
     * @param float $pliegueBiceps
     * @return Evaluacion
     */
    public function setPliegueBiceps($pliegueBiceps) {
        $this->pliegueBiceps = $pliegueBiceps;

        return $this;
    }

    /**
     * Get pliegueBiceps
     *
     * @return float 
     */
    public function getPliegueBiceps() {
        return $this->pliegueBiceps;
    }



    /**
     * Get pesoGrasa
     *
     * @return float 
     */
    public function getPesoGrasa() {
        return $this->pesoGrasa;
    }



    /**
     * Get pesoMagro
     *
     * @return float 
     */
    public function getPesoMagro() {
        return $this->pesoMagro;
    }

    /**
     * Set imc
     * @ORM\PrePersist
     * @param string $imc
     * @return Evaluacion
     */
    public function setImc() {
        $altura = $this->estatura;
        $peso = $this->peso;
        $this->imc = ($peso/($altura*$altura))*10000; 
       

    }

    /**
     * Get imc
     * @return string 
     */
    public function getImc() {
        return $this->imc;
    }

    /**
     * @ORM\ManyToOne(targetEntity="Alumno", inversedBy="evaluacion")
     * @ORM\JoinColumn(name="alumno_id" , referencedColumnName="id" , onDelete="CASCADE")
     */
    private $alumno;
    
     /**
     * @ORM\ManyToOne(targetEntity="PtUsuario", inversedBy="evaluacion")
     * @ORM\JoinColumn(name="ptusuario_id" , referencedColumnName="id" , onDelete="CASCADE")
     */
    private $ptusuario;
    

    /**
     * Set alumno
     *
     * @param \Techgym\PTFrontendBundle\Entity\Alumno $alumno
     * @return Evaluacion
     */
    public function setAlumno(\Techgym\PTFrontendBundle\Entity\Alumno $alumno = null) {
        $this->alumno = $alumno;

        return $this;
    }

    /**
     * Get alumno
     *
     * @return \Techgym\PTFrontendBundle\Entity\Alumno 
     */
    public function getAlumno() {
        return $this->alumno;
    }


    /**
     * Set creacioneva
     *
     * @param \DateTime $creacioneva
     * @ORM\PrePersist
     * @return Evaluacion
     */
    public function setCreacioneva()
    {
        $this->creacioneva = new \DateTime();

    }

    /**
     * Get creacioneva
     *
     * @return \DateTime 
     */
    public function getCreacioneva()
    {
        return $this->creacioneva;
    }

    /**
     * Set modificaeva
     *
     * @param \DateTime $modificaeva
     * @ORM\PrePersist
     * @ORM\PreUpdate
     * 
     * @return Evaluacion
     */
    public function setModificaeva()
    {
        $this->modificaeva = new \DateTime();


    }

    /**
     * Get modificaeva
     *
     * @return \DateTime 
     */
    public function getModificaeva()
    {
        return $this->modificaeva;
    }

    /**
     * Set densidadCorporal
     * @ORM\prePersist()
     * @param float $densidadCorporal
     * @return Evaluacion
     */
    public function setDensidadCorporal()
    {
       $s1 = $this->pliegueSuprailiaco;
       $s2 = $this->pliegueTriceps;
       
              
        $this->densidadCorporal = 1.0764-(0.00081*$s1)-(0.00088*$s2);


    }

    /**
     * Get densidadCorporal
     *
     * @return float 
     */
    public function getDensidadCorporal()
    {
        return $this->densidadCorporal;
    }
    /**
     * Set pGrasa
     * @ORM\prePersist
     * @param float $pGrasa
     * @return Evaluacion
     */
    public function setPGrasa() {
        
       $dc = $this->densidadCorporal ;
        
        $this->pGrasa = ((4.57/$dc)-4.142)*100;

    }
        /**
     * Set pesoGrasa
     * @ORM\prePersist
     * @param float $pesoGrasa
     * @return Evaluacion
     */
    public function setPesoGrasa() {
        $peso = $this->peso;
        $pegrasa = $this->pGrasa;
        
        $this->pesoGrasa = ($pegrasa*$peso)/100;

    }
        /**
     * Set pesoMagro
     * @ORM\prePersist
     * @param float $pesoMagro
     * @return Evaluacion
     */
    public function setPesoMagro($pesoMagro) {
        $peso = $this->peso;
        $pesograsa = $this->pesoGrasa;
        
        $this->pesoMagro = $peso-$pesograsa;

    }

    /**
     * Set ptusuario
     *
     * @param \Techgym\PTFrontendBundle\Entity\PtUsuario $ptusuario
     * @return Evaluacion
     */
    public function setPtusuario(\Techgym\PTFrontendBundle\Entity\PtUsuario $ptusuario = null)
    {
        $this->ptusuario = $ptusuario;

        return $this;
    }

    /**
     * Get ptusuario
     *
     * @return \Techgym\PTFrontendBundle\Entity\PtUsuario 
     */
    public function getPtusuario()
    {
        return $this->ptusuario;
    }
       /**
     * @var string
     *@ORM\Column(name="imageneva", type="string", length=255, nullable=true)
     * 
     * 
     */
    private $imageneva;

    /**
     * Set imageneva
     *
     * @param string $imageneva
     * @return Evaluacion
     */
    public function setImageneva($imageneva)
    {
        $this->imageneva = $imageneva;

        return $this;
    }

    /**
     * Get imageneva
     *
     * @return string 
     */
    public function getImageneva()
    {
        return $this->imageneva;
    }
}
