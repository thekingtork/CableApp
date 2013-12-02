<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdenReconexion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\AdminBundle\Entity\OrdenReconexionRepository")
 */
class OrdenReconexion
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
     *
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\Afiliacion")
     */
    private $afiliacion;

    /**
     *
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\Empleado")
     */
    private $tecnico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="string", length=255)
     */
    private $valor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean")
     */
    private $activo;


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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return OrdenReconexion
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set valor
     *
     * @param string $valor
     * @return OrdenReconexion
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
     * Set activo
     *
     * @param boolean $activo
     * @return OrdenReconexion
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;
    
        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set afiliacion
     *
     * @param \App\AdminBundle\Entity\Afiliacion $afiliacion
     * @return OrdenReconexion
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
     * Set tecnico
     *
     * @param \App\AdminBundle\Entity\Empleado $tecnico
     * @return OrdenReconexion
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
}