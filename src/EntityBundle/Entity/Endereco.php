<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Endereco
 *
 * @ORM\Table(name="endereco", uniqueConstraints={@ORM\UniqueConstraint(name="endereco_cep_key", columns={"cep"})})
 * @ORM\Entity
 */
class Endereco
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_endereco", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="endereco_id_endereco_seq", allocationSize=1, initialValue=1)
     */
    private $idEndereco;

    /**
     * @var integer
     *
     * @ORM\Column(name="cep", type="integer", nullable=false)
     */
    private $cep;



    /**
     * Get idEndereco
     *
     * @return integer 
     */
    public function getIdEndereco()
    {
        return $this->idEndereco;
    }

    /**
     * Set cep
     *
     * @param integer $cep
     * @return Endereco
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get cep
     *
     * @return integer 
     */
    public function getCep()
    {
        return $this->cep;
    }
    
    public function __toString() {
        return strval($this->getCep());
    }
}
