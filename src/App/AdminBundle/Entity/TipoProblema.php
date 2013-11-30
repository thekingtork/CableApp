<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoProblema
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TipoProblema
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
     * @ORM\Column(name="problema", type="string", length=255)
     */
    private $problema;


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
     * Set problema
     *
     * @param string $problema
     * @return TipoProblema
     */
    public function setProblema($problema)
    {
        $this->problema = $problema;
    
        return $this;
    }

    /**
     * Get problema
     *
     * @return string 
     */
    public function getProblema()
    {
        return $this->problema;
    }
    
    public function __toString()
    {
        return $this->getProblema();    
    }
}
