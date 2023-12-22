<?php

class Collaborateur extends Personne {

    private string $matricule;
    private string $sexe_collaborateur;
    private string $etat_civil_collaborateur;
    private int $id_fonction;

    public function __construct(string $matricule,
                                string $personneNom,
                                string $personnePrenom,
                                string $sexe_collaborateur,
                                string $etat_civil_collaborateur,
                                int $id_fonction)
    {
        parent::__construct($personneNom, $personnePrenom);
        $this->matricule = $matricule;
        $this->sexe_collaborateur = $sexe_collaborateur;
        $this->etat_civil_collaborateur = $etat_civil_collaborateur;
        $this->id_fonction = $id_fonction;
    }

    

    /**
     * Get the value of matricule
     */
    public function getMatricule(): string
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     */
    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get the value of sexe_collaborateur
     */
    public function getSexeCollaborateur(): string
    {
        return $this->sexe_collaborateur;
    }

    /**
     * Set the value of sexe_collaborateur
     */
    public function setSexeCollaborateur(string $sexe_collaborateur): self
    {
        $this->sexe_collaborateur = $sexe_collaborateur;

        return $this;
    }

    /**
     * Get the value of etat_civil_collaborateur
     */
    public function getEtatCivilCollaborateur(): string
    {
        return $this->etat_civil_collaborateur;
    }

    /**
     * Set the value of etat_civil_collaborateur
     */
    public function setEtatCivilCollaborateur(string $etat_civil_collaborateur): self
    {
        $this->etat_civil_collaborateur = $etat_civil_collaborateur;

        return $this;
    }

    /**
     * Get the value of id_fonction
     */
    public function getIdFonction(): int
    {
        return $this->id_fonction;
    }

    /**
     * Set the value of id_fonction
     */
    public function setIdFonction(int $id_fonction): self
    {
        $this->id_fonction = $id_fonction;

        return $this;
    }
}