<?php

namespace App\Entity;

use App\Repository\TaskRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TaskRepository::class)]
class Task{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: 'boolean')]
    private ?bool $isCompleted = false;
    
    #[ORM\Column(type: 'datetime_immutable', options: ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeImmutable $createdAt = null;

    public function getId(): ?int{
        return $this->id;
    }

    public function getTitle(): ?string {
        return $this->title;
    }
    public function setTitle(string $title): static {
        $this->title = $title;
        return $this;
    }


    public function getDescription(): ?string {
        return $this->description;
    }
    public function setDescription(?string $description): static {
        $this->description = $description;
        return $this;
    }

    public function isIsCompleted(): ?bool {
        return $this->isCompleted;
    }
    public function setIsCompleted(bool $isCompleted): static{
        $this->isCompleted = $isCompleted;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable{
        return $this->createdAt;
    }
    public function setCreatedAt(\DateTimeImmutable $createdAt): static{
        $this->createdAt = $createdAt;
        return $this;
    }
}
