<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Afiliacion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\AdminBundle\Entity\AfiliacionRepository")
 */
class Afiliacion
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
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\TipoDocumento")
     */
    private $tipoDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="documento", type="string", length=100)
     */
    private $documento;

    /**
     * @var string
     *
     * @ORM\Column(name="rsocial", type="string", length=255)
     */
    private $rsocial;

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=100)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=100)
     */
    private $apellidos;

    /**
     * @var integer
     *
     * @ORM\Column(name="ncontrato", type="bigint")
     */
    private $ncontrato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInstalacion", type="date")
     */
    private $fechaInstalacion;

    /**
     *
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\TipoTelefono")
     */
    private $tipoTelefono;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=255)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="correo", type="string", length=100)
     */
    private $correo;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="valorInscripcion", type="bigint")
     */
    private $valorInscripcion;

    /**
     *
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\NCuotaInstalacion")
     */
    private $ncuotas;

    /**
     * @var integer
     *
     * @ORM\Column(name="cuota1", type="integer")
     */
    private $cuota1;

    /**
     * @var integer
     *
     * @ORM\Column(name="cuota2", type="integer")
     */
    private $cuota2;

    /**
     * @var integer
     *
     * @ORM\Column(name="cuota3", type="integer")
     */
    private $cuota3;

    /**
     * @var integer
     *
     * @ORM\Column(name="cuotaMes", type="integer")
     */
    private $cuotaMes;

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
     * Set documento
     *
     * @param string $documento
     * @return Afiliacion
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;
    
        return $this;
    }

    /**
     * Get documento
     *
     * @return string 
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set rsocial
     *
     * @param string $rsocial
     * @return Afiliacion
     */
    public function setRsocial($rsocial)
    {
        $this->rsocial = $rsocial;
    
        return $this;
    }

    /**
     * Get rsocial
     *
     * @return string 
     */
    public function getRsocial()
    {
        return $this->rsocial;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     * @return Afiliacion
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    
        return $this;
    }

    /**
     * Get nombres
     *
     * @return string 
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return Afiliacion
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    
        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set ncontrato
     *
     * @param integer $ncontrato
     * @return Afiliacion
     */
    public function setNcontrato($ncontrato)
    {
        $this->ncontrato = $ncontrato;
    
        return $this;
    }

    /**
     * Get ncontrato
     *
     * @return integer 
     */
    public function getNcontrato()
    {
        return $this->ncontrato;
    }

    /**
     * Set fechaInstalacion
     *
     * @param \DateTime $fechaInstalacion
     * @return Afiliacion
     */
    public function setFechaInstalacion($fechaInstalacion)
    {
        $this->fechaInstalacion = $fechaInstalacion;
    
        return $this;
    }

    /**
     * Get fechaInstalacion
     *
     * @return \DateTime 
     */
    public function getFechaInstalacion()
    {
        return $this->fechaInstalacion;
    }


    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Afiliacion
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set correo
     *
     * @param string $correo
     * @return Afiliacion
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;
    
        return $this;
    }

    /**
     * Get correo
     *
     * @return string 
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Afiliacion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set valorInscripcion
     *
     * @param integer $valorInscripcion
     * @return Afiliacion
     */
    public function setValorInscripcion($valorInscripcion)
    {
        $this->valorInscripcion = $valorInscripcion;
    
        return $this;
    }

    /**
     * Get valorInscripcion
     *
     * @return integer 
     */
    public function getValorInscripcion()
    {
        return $this->valorInscripcion;
    }

    /**
     * Set cuota1
     *
     * @param integer $cuota1
     * @return Afiliacion
     */
    public function setCuota1($cuota1)
    {
        $this->cuota1 = $cuota1;
    
        return $this;
    }

    /**
     * Get cuota1
     *
     * @return integer 
     */
    public function getCuota1()
    {
        return $this->cuota1;
    }

    /**
     * Set cuota2
     *
     * @param integer $cuota2
     * @return Afiliacion
     */
    public function setCuota2($cuota2)
    {
        $this->cuota2 = $cuota2;
    
        return $this;
    }

    /**
     * Get cuota2
     *
     * @return integer 
     */
    public function getCuota2()
    {
        return $this->cuota2;
    }

    /**
     * Set cuota3
     *
     * @param integer $cuota3
     * @return Afiliacion
     */
    public function setCuota3($cuota3)
    {
        $this->cuota3 = $cuota3;
    
        return $this;
    }

    /**
     * Get cuota3
     *
     * @return integer 
     */
    public function getCuota3()
    {
        return $this->cuota3;
    }

    /**
     * Set cuotaMes
     *
     * @param integer $cuotaMes
     * @return Afiliacion
     */
    public function setCuotaMes($cuotaMes)
    {
        $this->cuotaMes = $cuotaMes;
    
        return $this;
    }

    /**
     * Get cuotaMes
     *
     * @return integer 
     */
    public function getCuotaMes()
    {
        return $this->cuotaMes;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Afiliacion
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
     * Set tipoDocumento
     *
     * @param \App\AdminBundle\Entity\TipoDocumento $tipoDocumento
     * @return Afiliacion
     */
    public function setTipoDocumento(\App\AdminBundle\Entity\TipoDocumento $tipoDocumento = null)
    {
        $this->tipoDocumento = $tipoDocumento;
    
        return $this;
    }

    /**
     * Get tipoDocumento
     *
     * @return \App\AdminBundle\Entity\TipoDocumento 
     */
    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }

    /**
     * Set tipoTelefono
     *
     * @param \App\AdminBundle\Entity\TipoTelefono $tipoTelefono
     * @return Afiliacion
     */
    public function setTipoTelefono(\App\AdminBundle\Entity\TipoTelefono $tipoTelefono = null)
    {
        $this->tipoTelefono = $tipoTelefono;
    
        return $this;
    }

    /**
     * Get tipoTelefono
     *
     * @return \App\AdminBundle\Entity\TipoTelefono 
     */
    public function getTipoTelefono()
    {
        return $this->tipoTelefono;
    }

    /**
     * Set ncuotas
     *
     * @param \App\AdminBundle\Entity\NCuotaInstalacion $ncuotas
     * @return Afiliacion
     */
    public function setNcuotas(\App\AdminBundle\Entity\NCuotaInstalacion $ncuotas = null)
    {
        $this->ncuotas = $ncuotas;
    
        return $this;
    }

    /**
     * Get ncuotas
     *
     * @return \App\AdminBundle\Entity\NCuotaInstalacion 
     */
    public function getNcuotas()
    {
        return $this->ncuotas;
    }
    
    public function __toString()
    {
        return $this->getNcontrato();
    }
}