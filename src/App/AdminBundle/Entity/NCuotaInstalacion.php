<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NCuotaInstalacion
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class NCuotaInstalacion
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
     * @ORM\Column(name="ncuotas", type="string", length=100)
     */
    private $ncuotas;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function __toString()
    {
        return $this->getNcuotas();
    }

    /**
     * Set ncuotas
     *
     * @param string $ncuotas
     * @return NCuotaInstalacion
     */
    public function setNcuotas($ncuotas)
    {
        $this->ncuotas = $ncuotas;
    
        return $this;
    }

    /**
     * Get ncuotas
     *
     * @return string 
     */
    public function getNcuotas()
    {
        return $this->ncuotas;
    }
}