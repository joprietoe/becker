<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NProblemasSaude
 *
 * @ORM\Table(name="n_problemas_saude")
 * @ORM\Entity
 */
class NProblemasSaude
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_problemas_saude", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="n_problemas_saude_id_problemas_saude_seq", allocationSize=1, initialValue=1)
     */
    private $idProblemasSaude;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_psaude", type="string", length=255, nullable=false)
     */
    private $nombrePsaude;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Paciente", mappedBy="nProblemasSaude")
     */
    private $pacienteid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pacienteid = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idProblemasSaude
     *
     * @return integer 
     */
    public function getIdProblemasSaude()
    {
        return $this->idProblemasSaude;
    }

    /**
     * Set nombrePsaude
     *
     * @param string $nombrePsaude
     * @return NProblemasSaude
     */
    public function setNombrePsaude($nombrePsaude)
    {
        $this->nombrePsaude = $nombrePsaude;

        return $this;
    }

    /**
     * Get nombrePsaude
     *
     * @return string 
     */
    public function getNombrePsaude()
    {
        return $this->nombrePsaude;
    }

    /**
     * Add pacienteid
     *
     * @param \EntityBundle\Entity\Paciente $pacienteid
     * @return NProblemasSaude
     */
    public function addPacienteid(\EntityBundle\Entity\Paciente $pacienteid)
    {
        $this->pacienteid[] = $pacienteid;

        return $this;
    }

    /**
     * Remove pacienteid
     *
     * @param \EntityBundle\Entity\Paciente $pacienteid
     */
    public function removePacienteid(\EntityBundle\Entity\Paciente $pacienteid)
    {
        $this->pacienteid->removeElement($pacienteid);
    }

    /**
     * Get pacienteid
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPacienteid()
    {
        return $this->pacienteid;
    }
    
    public function __toString() {
        return $this->getNombrePsaude();
    } 
}
