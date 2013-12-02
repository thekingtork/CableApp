<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mantenimiento
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\AdminBundle\Entity\MantenimientoRepository")
 */
class Mantenimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="nroMantenimiento", type="bigint")
     */
    private $nroMantenimiento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaReg", type="date")
     */
    private $fechaReg;

    /**
     *
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\TipoProblema")
     */
    private $problema;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaSolucion", type="date")
     */
    private $fechaSolucion;

    /**
     *
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\Empleado")
     */
    private $tecnico;

    /**
     *
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\Afiliacion")
     */
    private $afiliacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="solucion", type="boolean")
     */
    private $solucion;
    
    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="string", length=255)
     */
    private $valor;
    
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="pago", type="boolean")
     */
    private $pago;


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
     * Set nroMantenimiento
     *
     * @param integer $nroMantenimiento
     * @return Mantenimiento
     */
    public function setNroMantenimiento($nroMantenimiento)
    {
        $this->nroMantenimiento = $nroMantenimiento;
    
        return $this;
    }

    /**
     * Get nroMantenimiento
     *
     * @return integer 
     */
    public function getNroMantenimiento()
    {
        return $this->nroMantenimiento;
    }

    /**
     * Set fechaReg
     *
     * @param \DateTime $fechaReg
     * @return Mantenimiento
     */
    public function setFechaReg($fechaReg)
    {
        $this->fechaReg = $fechaReg;
    
        return $this;
    }

    /**
     * Get fechaReg
     *
     * @return \DateTime 
     */
    public function getFechaReg()
    {
        return $this->fechaReg;
    }

    /**
     * Set fechaSolucion
     *
     * @param \DateTime $fechaSolucion
     * @return Mantenimiento
     */
    public function setFechaSolucion($fechaSolucion)
    {
        $this->fechaSolucion = $fechaSolucion;
    
        return $this;
    }

    /**
     * Get fechaSolucion
     *
     * @return \DateTime 
     */
    public function getFechaSolucion()
    {
        return $this->fechaSolucion;
    }

    /**
     * Set solucion
     *
     * @param boolean $solucion
     * @return Mantenimiento
     */
    public function setSolucion($solucion)
    {
        $this->solucion = $solucion;
    
        return $this;
    }

    /**
     * Get solucion
     *
     * @return boolean 
     */
    public function getSolucion()
    {
        return $this->solucion;
    }

    /**
     * Set problema
     *
     * @param \App\AdminBundle\Entity\TipoProblema $problema
     * @return Mantenimiento
     */
    public function setProblema(\App\AdminBundle\Entity\TipoProblema $problema = null)
    {
        $this->problema = $problema;
    
        return $this;
    }

    /**
     * Get problema
     *
     * @return \App\AdminBundle\Entity\TipoProblema 
     */
    public function getProblema()
    {
        return $this->problema;
    }

    /**
     * Set tecnico
     *
     * @param \App\AdminBundle\Entity\Empleado $tecnico
     * @return Mantenimiento
     */
    public function setTecnico(\App\AdminBundle\Entity\Empleado $tecnico = null)
    {
        $this->tecnico = $tecnico;
    
        return $this;
    }

    /**
     * Get tecnico
     *
     * @return \App\AdminBundle\Entity\Empleado 
     */
    public function getTecnico()
    {
        return $this->tecnico;
    }

    /**
     * Set afiliacion
     *
     * @param \App\AdminBundle\Entity\Afiliacion $afiliacion
     * @return Mantenimiento
     */
    public function setAfiliacion(\App\AdminBundle\Entity\Afiliacion $afiliacion = null)
    {
        $this->afiliacion = $afiliacion;
    
        return $this;
    }

    /**
     * Get afiliacion
     *
     * @return \App\AdminBundle\Entity\Afiliacion 
     */
    public function getAfiliacion()
    {
        return $this->afiliacion;
    }

    /**
     * Set valor
     *
     * @param string $valor
     * @return Mantenimiento
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    
        return $this;
    }

    /**
     * Get valor
     *
     * @return string 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set pago
     *
     * @param boolean $pago
     * @return Mantenimiento
     */
    public function setPago($pago)
    {
        $this->pago = $pago;
    
        return $this;
    }

    /**
     * Get pago
     *
     * @return boolean 
     */
    public function getPago()
    {
        return $this->pago;
    }
}