<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NCuidados
 *
 * @ORM\Table(name="n_cuidados  ")
 * @ORM\Entity
 */
class NCuidados
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_cuidado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="n_cuidados_id_cuidado_seq", allocationSize=1, initialValue=1)
     */
    private $idCuidado;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_cuidado", type="string", length=255, nullable=false)
     */
    private $nomeCuidado;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Paciente", mappedBy="nCuidados")
     */
    private $paciente;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->paciente = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idCuidado
     *
     * @return integer 
     */
    public function getIdCuidado()
    {
        return $this->idCuidado;
    }

    /**
     * Set nomeCuidado
     *
     * @param string $nomeCuidado
     * @return NCuidados
     */
    public function setNomeCuidado($nomeCuidado)
    {
        $this->nomeCuidado = $nomeCuidado;

        return $this;
    }

    /**
     * Get nomeCuidado
     *
     * @return string 
     */
    public function getNomeCuidado()
    {
        return $this->nomeCuidado;
    }

    /**
     * Add paciente
     *
     * @param \EntityBundle\Entity\Paciente $paciente
     * @return NCuidados
     */
    public function addPaciente(\EntityBundle\Entity\Paciente $paciente)
    {
        $this->paciente[] = $paciente;

        return $this;
    }

    /**
     * Remove paciente
     *
     * @param \EntityBundle\Entity\Paciente $paciente
     */
    public function removePaciente(\EntityBundle\Entity\Paciente $paciente)
    {
        $this->paciente->removeElement($paciente);
    }

    /**
     * Get paciente
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPaciente()
    {
        return $this->paciente;
    }
    
    public function __toString() {
        return $this->getNomeCuidado();
    } 
}
