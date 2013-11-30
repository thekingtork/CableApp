<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoDocumento
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TipoDocumento
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
     * @ORM\Column(name="tipodocumento", type="string", length=20)
     */
    private $tipodocumento;


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
     * Set tipodocumento
     *
     * @param string $tipodocumento
     * @return TipoDocumento
     */
    public function setTipodocumento($tipodocumento)
    {
        $this->tipodocumento = $tipodocumento;
    
        return $this;
    }

    /**
     * Get tipodocumento
     *
     * @return string 
     */
    public function getTipodocumento()
    {
        return $this->tipodocumento;
    }
    
    public function __toString()
    {
        return $this->getTipodocumento();    
    }
}
