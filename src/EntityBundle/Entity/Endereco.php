<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Endereco
 *
 * @ORM\Table(name="endereco")
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
     * Bidirectional INVERSED SIDE
     * @var \Paciente
     *
     * @ORM\OneToMany(targetEntity="Paciente", mappedBy="endereco", cascade={"persist", "remove"})
     * 
     */
    private $pacientes;
        

    public function __construct() {
        $this->pacientes = new ArrayCollection();;
    }
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
    
    public function setPaciente(ArrayCollection $pacientes){
         
        $this->pacientes = $pacientes;
        foreach ($pacientes as $paciente) {
            $paciente->setEndereco($this); 
        }
    }
    
    public function getPaciente(){
        return $this->pacientes;
    }


    public function __toString() {
        return strval($this->getCep());
    }
}
