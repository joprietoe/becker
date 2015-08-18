<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paciente
 *
 * @ORM\Table(name="paciente")
 * @ORM\Entity
 */
class Paciente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_paciente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="paciente_id_paciente_seq", allocationSize=1, initialValue=1)
     */
    private $idPaciente;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=100, nullable=false)
     */
    private $nome;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_nascimento", type="date", nullable=true)
     */
    private $dataNascimento;

    /**
     * @var string
     *
     * @ORM\Column(name="problemas_gravidez", type="string", length=500, nullable=true)
     */
    private $problemasGravidez;

    /**
     * @var boolean
     *
     * @ORM\Column(name="leite_artificial", type="boolean", nullable=false)
     */
    private $leiteArtificial;

    /**
     * @var string
     *
     * @ORM\Column(name="depressao_puerperal", type="string", length=500, nullable=true)
     */
    private $depressaoPuerperal;

    /**
     * @var string
     *
     * @ORM\Column(name="problemas_posparto", type="string", length=500, nullable=true)
     */
    private $problemasPosparto;

    /**
     * @var integer
     *
     * @ORM\Column(name="leite_materno_exclusivo", type="integer", nullable=true)
     */
    private $leiteMaternoExclusivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="leite_materno_idade", type="integer", nullable=true)
     */
    private $leiteMaternoIdade;

    /**
     * @var \Endereco
     *
     * @ORM\ManyToOne(targetEntity="Endereco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="endereco", referencedColumnName="id_endereco")
     * })
     */
    private $endereco;

    /**
     * @var \TipoParto
     *
     * @ORM\OneToOne(targetEntity="TipoParto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipoParto", referencedColumnName="idtipoparto")
     * })
     */
    private $tipoParto;

    /**
     * @var \TipoSanguineo
     *
     * @ORM\OneToOne(targetEntity="TipoSanguineo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipoSanguineo", referencedColumnName="idtiposanguineo")
     * })
     */
    private $tipoSanguineo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Paciente_Cuidado", mappedBy="paciente", cascade={"persist", "remove"}, orphanRemoval=TRUE)
     */
    private $nCuidados;

   /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Paciente_ProblemasSaude", mappedBy="paciente", cascade={"persist", "remove"}, orphanRemoval=TRUE)
     */
    private $problemasSaudes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Orden_Responsavel", mappedBy="paciente", cascade={"persist", "remove"}, orphanRemoval=TRUE)
     */
    private $ordenResponsavels;
    
        
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->nCuidados = new \Doctrine\Common\Collections\ArrayCollection();
        $this->problemasSaudes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ordenResponsavels = new \Doctrine\Common\Collections\ArrayCollection();
       // $this->consultas = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idPaciente
     *
     * @return integer 
     */
    public function getIdPaciente()
    {
        return $this->idPaciente;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Paciente
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set dataNascimento
     *
     * @param \DateTime $dataNascimento
     * @return Paciente
     */
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;

        return $this;
    }

    /**
     * Get dataNascimento
     *
     * @return \DateTime 
     */
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

   
    /**
     * Set problemasGravidez
     *
     * @param string $problemasGravidez
     * @return Paciente
     */
    public function setProblemasGravidez($problemasGravidez)
    {
        $this->problemasGravidez = $problemasGravidez;

        return $this;
    }

    /**
     * Get problemasGravidez
     *
     * @return string 
     */
    public function getProblemasGravidez()
    {
        return $this->problemasGravidez;
    }

    /**
     * Set leiteArtificial
     *
     * @param boolean $leiteArtificial
     * @return Paciente
     */
    public function setLeiteArtificial($leiteArtificial)
    {
        $this->leiteArtificial = $leiteArtificial;

        return $this;
    }

    /**
     * Get leiteArtificial
     *
     * @return boolean 
     */
    public function getLeiteArtificial()
    {
        return $this->leiteArtificial;
    }

    /**
     * Set depressaoPuerperal
     *
     * @param string $depressaoPuerperal
     * @return Paciente
     */
    public function setDepressaoPuerperal($depressaoPuerperal)
    {
        $this->depressaoPuerperal = $depressaoPuerperal;

        return $this;
    }

    /**
     * Get depressaoPuerperal
     *
     * @return string 
     */
    public function getDepressaoPuerperal()
    {
        return $this->depressaoPuerperal;
    }

    /**
     * Set problemasPosparto
     *
     * @param string $problemasPosparto
     * @return Paciente
     */
    public function setProblemasPosparto($problemasPosparto)
    {
        $this->problemasPosparto = $problemasPosparto;

        return $this;
    }

    /**
     * Get problemasPosparto
     *
     * @return string 
     */
    public function getProblemasPosparto()
    {
        return $this->problemasPosparto;
    }

    /**
     * Set leiteMaternoExclusivo
     *
     * @param integer $leiteMaternoExclusivo
     * @return Paciente
     */
    public function setLeiteMaternoExclusivo($leiteMaternoExclusivo)
    {
        $this->leiteMaternoExclusivo = $leiteMaternoExclusivo;

        return $this;
    }

    /**
     * Get leiteMaternoExclusivo
     *
     * @return integer 
     */
    public function getLeiteMaternoExclusivo()
    {
        return $this->leiteMaternoExclusivo;
    }

    /**
     * Set leiteMaternoIdade
     *
     * @param integer $leiteMaternoIdade
     * @return Paciente
     */
    public function setLeiteMaternoIdade($leiteMaternoIdade)
    {
        $this->leiteMaternoIdade = $leiteMaternoIdade;

        return $this;
    }

    /**
     * Get leiteMaternoIdade
     *
     * @return integer 
     */
    public function getLeiteMaternoIdade()
    {
        return $this->leiteMaternoIdade;
    }


    public function setEndereco(\EntityBundle\Entity\Endereco $endereco = null)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get endereco
     *
     * @return \EntityBundle\Entity\Endereco 
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set TipoParto
     *
     * @param \EntityBundle\Entity\TipoParto $tipoParto
     * @return Paciente
     */
    public function setTipoParto(\EntityBundle\Entity\TipoParto $tipoParto = null)
    {
        $this->tipoParto = $tipoParto;

        return $this;
    }

    /**
     * Get TipoParto
     *
     * @return \EntityBundle\Entity\TipoParto 
     */
    public function getTipoParto()
    {
        return $this->tipoParto;
    }

    /**
     * Set nTipoSanguineo
     *
     * @param \EntityBundle\Entity\TipoSanguineo $tipoSanguineo
     * @return Paciente
     */
    public function setTipoSanguineo(\EntityBundle\Entity\TipoSanguineo $nTipoSanguineo)
    {
        $this->tipoSanguineo = $nTipoSanguineo;

        return $this;
    }

    /**
     * Get TipoSanguineo
     *
     * @return \EntityBundle\Entity\TipoSanguineo 
     */
    public function getTipoSanguineo()
    {
        return $this->tipoSanguineo;
    }

    /**
     * Add nCuidados
     *
     * @param \EntityBundle\Entity\Cuidados $nCuidados
     * @return Paciente
     */
    public function addNCuidado(\EntityBundle\Entity\Paciente_Cuidado $nCuidados)
    {
        if (!$this->nCuidados->contains($nCuidados)) {
            $this->nCuidados->add($nCuidados);
            $nCuidados->setPaciente($this);
        }

        return $this;
    }

    /**
     * Remove nCuidados
     *
     * @param \EntityBundle\Entity\Paciente_Cuidado $nCuidados
     */
    public function removeNCuidado(\EntityBundle\Entity\Paciente_Cuidado $nCuidados)
    {
         $this->nCuidados->removeElement($nCuidados);
        if ($this->nCuidados->contains($nCuidados)) {
            $this->nCuidados->removeElement($nCuidados);
            $nCuidados->setPaciente(null);
        }
        
        return $this;
    }

    /**
     * Get nCuidados
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNCuidados()
    {
        return array_map(
            function ($nCuidados) {
                return $nCuidados->getCuidado();
            },
            $this->nCuidados->toArray()
        );
    }

    /**
     * Add nProblemasSaude
     *
     * @param \EntityBundle\Entity\ProblemasSaude $nProblemasSaude
     * @return Paciente
     */
    public function addProblemasSaude(\EntityBundle\Entity\Orden_Responsavel $p_problemassaude)
    {
         if (!$this->problemasSaudes->contains($p_problemassaude)) {
            $this->problemasSaudes->add($p_problemassaude);
            $p_problemassaude->setPaciente($this);
        }

        return $this;
    }

    
    
    public function removePacienteProblemasSaude(\EntityBundle\Entity\Paciente_ProblemasSaude $p_problemassaude)
    {
        $this->problemasSaudes->removeElement($o_responsavel);
        if ($this->problemasSaudes->contains($o_responsavel)) {
            $this->problemasSaudes->removeElement($o_responsavel);
            $p_problemassaude->setPaciente(null);
        }
        
        return $this;
    }

    /**
     * Get nProblemasSaude
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProblemasSaude()
    {
        return array_map(
            function ($problemasSaudes) {
                return $problemasSaudes->getProblemaSaude();
            },
            $this->problemasSaudes->toArray()
        );
    }



    /**
     * Add responsavel
     *
     * @param \EntityBundle\Entity\Responsavel $responsavel
     * @return Paciente
     */
    public function addOrdenResponsavel(\EntityBundle\Entity\Orden_Responsavel $o_responsavel)
    {
        //$this->responsavel[] = $responsavel;
        if (!$this->ordenResponsavels->contains($o_responsavel)) {
            $this->ordenResponsavels->add($o_responsavel);
            $o_responsavel->setPaciente($this);
        }

        return $this;
    }

    
    /**
     * Remove responsavel
     *
     * @param \EntityBundle\Entity\Responsavel $responsavel
     */
    public function removeOrdenResponsavel(\EntityBundle\Entity\Orden_Responsavel $o_responsavel)
    {
        $this->ordenResponsavels->removeElement($o_responsavel);
        if ($this->ordenResponsavels->contains($o_responsavel)) {
            $this->ordenResponsavels->removeElement($o_responsavel);
            $o_responsavel->setPaciente(null);
        }
        
        return $this;
    }
    
   
    /**
     * Get responsavel
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getResponsavel()
    {
        return array_map(
            function ($ordenResponsavels) {
                return $ordenResponsavels->getResponsavel();
            },
            $this->ordenResponsavels->toArray()
        );
        
    }

    public function getOresponsavel()
    {
        return $this->ordenResponsavels;
    }
}
