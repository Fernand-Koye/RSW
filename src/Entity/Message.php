<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message", indexes={@ORM\Index(name="idClient", columns={"idClient"}), @ORM\Index(name="idSiteWeb", columns={"idSiteWeb"}), @ORM\Index(name="idAdministrateur", columns={"idAdministrateur"})})
 * @ORM\Entity(repositoryClass="App\Repository\MessageRepository")
 */
class Message
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
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", length=65535, nullable=false)
     */
    private $contenu;

    /**
     * @var \Siteweb
     *
     * @ORM\ManyToOne(targetEntity="Siteweb")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSiteWeb", referencedColumnName="id")
     * })
     */
    private $idsiteweb;

    /**
     * @var \Administrateur
     *
     * @ORM\ManyToOne(targetEntity="Administrateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAdministrateur", referencedColumnName="id")
     * })
     */
    private $idadministrateur;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClient", referencedColumnName="id")
     * })
     */
    private $idclient;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getIdsiteweb(): ?Siteweb
    {
        return $this->idsiteweb;
    }

    public function setIdsiteweb(?Siteweb $idsiteweb): self
    {
        $this->idsiteweb = $idsiteweb;

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

    public function getIdclient(): ?Client
    {
        return $this->idclient;
    }

    public function setIdclient(?Client $idclient): self
    {
        $this->idclient = $idclient;

        return $this;
    }


}
