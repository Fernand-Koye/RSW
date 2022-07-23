<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Siteweb
 *
 * @ORM\Table(name="siteweb", indexes={@ORM\Index(name="idAdministrateur", columns={"idAdministrateur"}), @ORM\Index(name="idClient", columns={"idClient"})})
 * @ORM\Entity(repositoryClass="App\Repository\SiteWebRepository")
 */
class Siteweb
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDisponibilite", type="date", nullable=false)
     */
    private $datedisponibilite;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255, nullable=false)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="avancement", type="string", length=255, nullable=false)
     */
    private $avancement;

    /**
     * @var string
     *
     * @ORM\Column(name="messageFacultatif", type="text", length=65535, nullable=false)
     */
    private $messagefacultatif;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClient", referencedColumnName="id")
     * })
     */
    private $idclient;

    /**
     * @var \Administrateur
     *
     * @ORM\ManyToOne(targetEntity="Administrateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAdministrateur", referencedColumnName="id")
     * })
     */
    private $idadministrateur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatedisponibilite(): ?\DateTimeInterface
    {
        return $this->datedisponibilite;
    }

    public function setDatedisponibilite(\DateTimeInterface $datedisponibilite): self
    {
        $this->datedisponibilite = $datedisponibilite;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getAvancement(): ?string
    {
        return $this->avancement;
    }

    public function setAvancement(string $avancement): self
    {
        $this->avancement = $avancement;

        return $this;
    }

    public function getMessagefacultatif(): ?string
    {
        return $this->messagefacultatif;
    }

    public function setMessagefacultatif(string $messagefacultatif): self
    {
        $this->messagefacultatif = $messagefacultatif;

        return $this;
    }

    public function getIdclient(): ?Client
    {
        return $this->idclient;
    }

    public function setIdclient(?Client $idclient): self
    {
        $this->idclient = $idclient;

        return $this;
    }

    public function getIdadministrateur(): ?Administrateur
    {
        return $this->idadministrateur;
    }

    public function setIdadministrateur(?Administrateur $idadministrateur): self
    {
        $this->idadministrateur = $idadministrateur;

        return $this;
    }


}
