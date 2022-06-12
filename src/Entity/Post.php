<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PostRepository::class)]
class Post
{
	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column(type: 'integer')]
	private $id;

	#[ORM\Column(type: 'string', length: 255, nullable: false), Assert\NotBlank]
	private $title;

	#[ORM\Column(type: 'string', length: 255)]
	private $author;

	#[ORM\Column(type: 'datetime')]
	private $created;

	#[ORM\Column(type: 'string', length: 125), Assert\Unique]
	private $slug;

	public function getId(): ?int
	{
		return $this->id;
	}

	public function getTitle(): ?string
	{
		return $this->title;
	}

	public function setTitle(?string $title): self
	{
		$this->title = $title;

		return $this;
	}

	public function getAuthor(): ?string
	{
		return $this->author;
	}

	public function setAuthor(string $author): self
	{
		$this->author = $author;

		return $this;
	}

	public function getCreated(): ?\DateTimeInterface
	{
		return $this->created;
	}

	public function setCreated(\DateTimeInterface $created): self
	{
		$this->created = $created;

		return $this;
	}

	public function getSlug(): ?string
	{
		return $this->slug;
	}

	public function setSlug(string $slug): self
	{
		$this->slug = $slug;

		return $this;
	}
}
