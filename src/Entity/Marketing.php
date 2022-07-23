<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marketing
 *
 * @ORM\Table(name="marketing")
 * @ORM\Entity(repositoryClass="App\Repository\MarketingRepository")
 */
class Marketing
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
     * @ORM\Column(name="messageFacultatif", type="text", length=65535, nullable=false)
     */
    private $messagefacultatif;

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

    public function getMessagefacultatif(): ?string
    {
        return $this->messagefacultatif;
    }

    public function setMessagefacultatif(string $messagefacultatif): self
    {
        $this->messagefacultatif = $messagefacultatif;

        return $this;
    }


}
