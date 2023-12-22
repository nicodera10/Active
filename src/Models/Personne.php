<?php

abstract class Personne {

    private string $personneNom;
    private string $personnePrenom;

    public function __construct(string $personneNom,
                                string $personnePrenom)
    {
        $this->personneNom = $personneNom;
        $this->personnePrenom = $personnePrenom;
    }

    

    /**
     * Get the value of personneNom
     */
    public function getPersonneNom(): string
    {
        return $this->personneNom;
    }

    /**
     * Set the value of personneNom
     */
    public function setPersonneNom(string $personneNom): self
    {
        $this->personneNom = $personneNom;

        return $this;
    }

    /**
     * Get the value of personnePrenom
     */
    public function getPersonnePrenom(): string
    {
        return $this->personnePrenom;
    }

    /**
     * Set the value of personnePrenom
     */
    public function setPersonnePrenom(string $personnePrenom): self
    {
        $this->personnePrenom = $personnePrenom;

        return $this;
    }
}