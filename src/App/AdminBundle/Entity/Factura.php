<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Factura
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\AdminBundle\Entity\FacturaRepository")
 */
class Factura
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
     * @ORM\Column(name="nroFactura", type="bigint")
     */
    private $nroFactura;

    /**
     * @var integer
     *
     * @ORM\Column(name="diasfacturados", type="integer")
     */
    private $diasfacturados;

    /**
     *
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\Afiliacion")
     */
    private $afiliacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaExp", type="date")
     */
    private $fechaExp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaCorte", type="date")
     */
    private $fechaCorte;

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
     * Set nroFactura
     *
     * @param integer $nroFactura
     * @return Factura
     */
    public function setNroFactura($nroFactura)
    {
        $this->nroFactura = $nroFactura;
    
        return $this;
    }

    /**
     * Get nroFactura
     *
     * @return integer 
     */
    public function getNroFactura()
    {
        return $this->nroFactura;
    }

    /**
     * Set diasfacturados
     *
     * @param integer $diasfacturados
     * @return Factura
     */
    public function setDiasfacturados($diasfacturados)
    {
        $this->diasfacturados = $diasfacturados;
    
        return $this;
    }

    /**
     * Get diasfacturados
     *
     * @return integer 
     */
    public function getDiasfacturados()
    {
        return $this->diasfacturados;
    }

    /**
     * Set fechaExp
     *
     * @param \DateTime $fechaExp
     * @return Factura
     */
    public function setFechaExp($fechaExp)
    {
        $this->fechaExp = $fechaExp;
    
        return $this;
    }

    /**
     * Get fechaExp
     *
     * @return \DateTime 
     */
    public function getFechaExp()
    {
        return $this->fechaExp;
    }

    /**
     * Set fechaCorte
     *
     * @param \DateTime $fechaCorte
     * @return Factura
     */
    public function setFechaCorte($fechaCorte)
    {
        $this->fechaCorte = $fechaCorte;
    
        return $this;
    }

    /**
     * Get fechaCorte
     *
     * @return \DateTime 
     */
    public function getFechaCorte()
    {
        return $this->fechaCorte;
    }

    /**
     * Set pago
     *
     * @param boolean $pago
     * @return Factura
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

    /**
     * Set afiliacion
     *
     * @param \App\AdminBundle\Entity\Afiliacion $afiliacion
     * @return Factura
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
}