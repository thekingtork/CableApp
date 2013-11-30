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
     * @var integer
     *
     * @ORM\Column(name="ncuotas", type="integer")
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

    /**
     * Set ncuotas
     *
     * @param integer $ncuotas
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
     * @return integer 
     */
    public function getNcuotas()
    {
        return $this->ncuotas;
    }
    
    public function __toString()
    {
        return $this->getNcuotas();
    }
}
