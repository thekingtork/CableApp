<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empleado
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\AdminBundle\Entity\EmpleadoRepository")
 */
class Empleado
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
     * @ORM\Column(name="identificacion", type="integer")
     */
    private $identificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=100)
     */
    private $telefono;

    /**
     *
     * @ORM\ManyToOne(targetEntity="App\AdminBundle\Entity\Perfil")
     */
    private $perfil;

    /**
     * @var integer
     *
     * @ORM\Column(name="salario", type="integer")
     */
    private $salario;

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
     * Set nombres
     *
     * @param string $nombres
     * @return Empleado
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
     * @return Empleado
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
     * Set identificacion
     *
     * @param integer $identificacion
     * @return Empleado
     */
    public function setIdentificacion($identificacion)
    {
        $this->identificacion = $identificacion;
    
        return $this;
    }

    /**
     * Get identificacion
     *
     * @return integer 
     */
    public function getIdentificacion()
    {
        return $this->identificacion;
    }


    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Empleado
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
    
    public function __toString()
    {
        $nombre = $this->getNombres().' - '.$this->getPerfil();
        return $nombre;
    }

    /**
     * Set perfil
     *
     * @param \App\AdminBundle\Entity\Perfil $perfil
     * @return Empleado
     */
    public function setPerfil(\App\AdminBundle\Entity\Perfil $perfil = null)
    {
        $this->perfil = $perfil;
    
        return $this;
    }

    /**
     * Get perfil
     *
     * @return \App\AdminBundle\Entity\Perfil 
     */
    public function getPerfil()
    {
        return $this->perfil;
    }

    /**
     * Set salario
     *
     * @param integer $salario
     * @return Empleado
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;
    
        return $this;
    }

    /**
     * Get salario
     *
     * @return integer 
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Empleado
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
}