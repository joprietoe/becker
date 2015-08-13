<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paciente
 *
 * @ORM\Table(name="paciente", indexes={@ORM\Index(name="IDX_C6CBA95EF8E0D60E", columns={"endereco"}), @ORM\Index(name="IDX_C6CBA95EC9875994", columns={"n_tipo_parto"}), @ORM\Index(name="IDX_C6CBA95E117040A9", columns={"n_tipo_sanguineo"})})
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
     * @ORM\Column(name="factor_rh", type="string", length=255, nullable=true)
     */
    private $factorRh;

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
     * @var \NTipoParto
     *
     * @ORM\ManyToOne(targetEntity="NTipoParto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="n_tipo_parto", referencedColumnName="id_tipo_parto")
     * })
     */
    private $nTipoParto;

    /**
     * @var \NTipoSanguineo
     *
     * @ORM\ManyToOne(targetEntity="NTipoSanguineo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="n_tipo_sanguineo", referencedColumnName="id_tipo_sanguineo")
     * })
     */
    private $nTipoSanguineo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="NCuidados", inversedBy="paciente")
     * @ORM\JoinTable(name="paciente_n_cuidados  ",
     *   joinColumns={
     *     @ORM\JoinColumn(name="paciente", referencedColumnName="id_paciente")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="n_cuidados", referencedColumnName="id_cuidado")
     *   }
     * )
     */
    private $nCuidados;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="NProblemasSaude", inversedBy="pacienteid")
     * @ORM\JoinTable(name="paciente_problemas_saude",
     *   joinColumns={
     *     @ORM\JoinColumn(name="pacienteid", referencedColumnName="id_paciente")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="n_problemas_saude", referencedColumnName="id_problemas_saude")
     *   }
     * )
     */
    private $nProblemasSaude;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Responsavel", mappedBy="paciente")
     */
    private $responsavel;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->nCuidados = new \Doctrine\Common\Collections\ArrayCollection();
        $this->nProblemasSaude = new \Doctrine\Common\Collections\ArrayCollection();
        $this->responsavel = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set factorRh
     *
     * @param string $factorRh
     * @return Paciente
     */
    public function setFactorRh($factorRh)
    {
        $this->factorRh = $factorRh;

        return $this;
    }

    /**
     * Get factorRh
     *
     * @return string 
     */
    public function getFactorRh()
    {
        return $this->factorRh;
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

    /**
     * Set endereco
     *
     * @param \EntityBundle\Entity\Endereco $endereco
     * @return Paciente
     */
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
     * Set nTipoParto
     *
     * @param \EntityBundle\Entity\NTipoParto $nTipoParto
     * @return Paciente
     */
    public function setNTipoParto(\EntityBundle\Entity\NTipoParto $nTipoParto = null)
    {
        $this->nTipoParto = $nTipoParto;

        return $this;
    }

    /**
     * Get nTipoParto
     *
     * @return \EntityBundle\Entity\NTipoParto 
     */
    public function getNTipoParto()
    {
        return $this->nTipoParto;
    }

    /**
     * Set nTipoSanguineo
     *
     * @param \EntityBundle\Entity\NTipoSanguineo $nTipoSanguineo
     * @return Paciente
     */
    public function setNTipoSanguineo(\EntityBundle\Entity\NTipoSanguineo $nTipoSanguineo = null)
    {
        $this->nTipoSanguineo = $nTipoSanguineo;

        return $this;
    }

    /**
     * Get nTipoSanguineo
     *
     * @return \EntityBundle\Entity\NTipoSanguineo 
     */
    public function getNTipoSanguineo()
    {
        return $this->nTipoSanguineo;
    }

    /**
     * Add nCuidados
     *
     * @param \EntityBundle\Entity\NCuidados $nCuidados
     * @return Paciente
     */
    public function addNCuidado(\EntityBundle\Entity\NCuidados $nCuidados)
    {
        $this->nCuidados[] = $nCuidados;

        return $this;
    }

    /**
     * Remove nCuidados
     *
     * @param \EntityBundle\Entity\NCuidados $nCuidados
     */
    public function removeNCuidado(\EntityBundle\Entity\NCuidados $nCuidados)
    {
        $this->nCuidados->removeElement($nCuidados);
    }

    /**
     * Get nCuidados
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNCuidados()
    {
        return $this->nCuidados;
    }

    /**
     * Add nProblemasSaude
     *
     * @param \EntityBundle\Entity\NProblemasSaude $nProblemasSaude
     * @return Paciente
     */
    public function addNProblemasSaude(\EntityBundle\Entity\NProblemasSaude $nProblemasSaude)
    {
        $this->nProblemasSaude[] = $nProblemasSaude;

        return $this;
    }

    /**
     * Remove nProblemasSaude
     *
     * @param \EntityBundle\Entity\NProblemasSaude $nProblemasSaude
     */
    public function removeNProblemasSaude(\EntityBundle\Entity\NProblemasSaude $nProblemasSaude)
    {
        $this->nProblemasSaude->removeElement($nProblemasSaude);
    }

    /**
     * Get nProblemasSaude
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNProblemasSaude()
    {
        return $this->nProblemasSaude;
    }

    /**
     * Add responsavel
     *
     * @param \EntityBundle\Entity\Responsavel $responsavel
     * @return Paciente
     */
    public function addResponsavel(\EntityBundle\Entity\Responsavel $responsavel)
    {
        $this->responsavel[] = $responsavel;

        return $this;
    }

    /**
     * Remove responsavel
     *
     * @param \EntityBundle\Entity\Responsavel $responsavel
     */
    public function removeResponsavel(\EntityBundle\Entity\Responsavel $responsavel)
    {
        $this->responsavel->removeElement($responsavel);
    }

    /**
     * Get responsavel
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getResponsavel()
    {
        return $this->responsavel;
    }
}
