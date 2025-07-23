<?php

namespace App\Model;

class Produit
{
    public function __construct(private int $id, private string $nom, private float $prix)
    {
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function getNom(): string
    {
        return $this->nom;
    }
    public function getPrix(): float
    {
        return $this->prix;
    }
}