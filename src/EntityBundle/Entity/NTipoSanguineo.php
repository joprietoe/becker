<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NTipoSanguineo
 *
 * @ORM\Table(name="n_tipo_sanguineo")
 * @ORM\Entity
 */
class NTipoSanguineo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo_sanguineo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="n_tipo_sanguineo_id_tipo_sanguineo_seq", allocationSize=1, initialValue=1)
     */
    private $idTipoSanguineo;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=100, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="factorrh", type="string", length=5, nullable=false)
     */
    private $factorrh;



    /**
     * Get idTipoSanguineo
     *
     * @return integer 
     */
    public function getIdTipoSanguineo()
    {
        return $this->idTipoSanguineo;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return NTipoSanguineo
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
     * Set factorrh
     *
     * @param string $factorrh
     * @return NTipoSanguineo
     */
    public function setFactorrh($factorrh)
    {
        $this->factorrh = $factorrh;

        return $this;
    }

    /**
     * Get factorrh
     *
     * @return string 
     */
    public function getFactorrh()
    {
        return $this->factorrh;
    }
}
