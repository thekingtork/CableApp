<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdenCorte
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\AdminBundle\Entity\OrdenCorteRepository")
 */
class OrdenCorte
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
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\Afiliacion")
     */
    private $afiliacion;
    

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activa", type="boolean")
     */
    private $activa;


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
     * @return OrdenCorte
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
     * Set activa
     *
     * @param boolean $activa
     * @return OrdenCorte
     */
    public function setActiva($activa)
    {
        $this->activa = $activa;
    
        return $this;
    }

    /**
     * Get activa
     *
     * @return boolean 
     */
    public function getActiva()
    {
        return $this->activa;
    }
    

    /**
     * Set afiliacion
     *
     * @param \App\AdminBundle\Entity\Afiliacion $afiliacion
     * @return OrdenCorte
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