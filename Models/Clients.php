<?php

namespace App\Model;

use ArrayObject;

class Clients{

    private ?string $code_client;
    private string $type_client;
    private string $domaine_activite;
    private string $nature_activite;
    private string $raison_sociale;
    private int $chiffre_affaires;
    private int $effectifs;
    private string $commentaires_commerciaux_client;
    private static ArrayObject|null $clients;

    public function __construct(
        ?string $code_client,
        string $type_client,
        string $domaine_activite,
        string $nature_activite,
        string $raison_sociale,
        int $chiffre_affaires,
        int $effectifs,
        string $commentaires_commerciaux_client
    ) {
        $this->{CLIENT_CODE_CLIENT_DBFIELD} = $code_client;
        $this->{CLIENT_TYPE_CLIENT_DBFIELD} = $type_client;
        $this->{CLIENT_DOMAINE_ACTIVITE_DBFIELD} = $domaine_activite;
        $this->{CLIENT_NATURE_ACTIVITE_DBFIELD} = $nature_activite;
        $this->{CLIENT_RAISON_SOCIALE_DBFIELD} = $raison_sociale;
        $this->{CLIENT_CHIFFRE_AFFAIRES_DBFIELD} = $chiffre_affaires;
        $this->{CLIENT_EFFECTIFS_DBFIELD} = $effectifs;
        $this->{CLIENT_COMMENTAIRES_COMMERCIAUX_CLIENT_DBFIELD} = $commentaires_commerciaux_client;
    }

    


    /**
     * Get the value of code_client
     */
    public function getCodeClient(): ?string
    {
        return $this->code_client;
    }

    /**
     * Set the value of code_client
     */
    public function setCodeClient(?string $code_client): self
    {
        $this->code_client = $code_client;

        return $this;
    }

    /**
     * Get the value of type_client
     */
    public function getTypeClient(): string
    {
        return $this->type_client;
    }

    /**
     * Set the value of type_client
     */
    public function setTypeClient(string $type_client): self
    {
        $this->type_client = $type_client;

        return $this;
    }

    /**
     * Get the value of domaine_activite
     */
    public function getDomaineActivite(): string
    {
        return $this->domaine_activite;
    }

    /**
     * Set the value of domaine_activite
     */
    public function setDomaineActivite(string $domaine_activite): self
    {
        $this->domaine_activite = $domaine_activite;

        return $this;
    }

    /**
     * Get the value of nature_activite
     */
    public function getNatureActivite(): string
    {
        return $this->nature_activite;
    }

    /**
     * Set the value of nature_activite
     */
    public function setNatureActivite(string $nature_activite): self
    {
        $this->nature_activite = $nature_activite;

        return $this;
    }

    /**
     * Get the value of raison_sociale
     */
    public function getRaisonSociale(): string
    {
        return $this->raison_sociale;
    }

    /**
     * Set the value of raison_sociale
     */
    public function setRaisonSociale(string $raison_sociale): self
    {
        $this->raison_sociale = $raison_sociale;

        return $this;
    }

    /**
     * Get the value of chiffre_affaires
     */
    public function getChiffreAffaires(): int
    {
        return $this->chiffre_affaires;
    }

    /**
     * Set the value of chiffre_affaires
     */
    public function setChiffreAffaires(int $chiffre_affaires): self
    {
        $this->chiffre_affaires = $chiffre_affaires;

        return $this;
    }

    /**
     * Get the value of effectifs
     */
    public function getEffectifs(): int
    {
        return $this->effectifs;
    }

    /**
     * Set the value of effectifs
     */
    public function setEffectifs(int $effectifs): self
    {
        $this->effectifs = $effectifs;

        return $this;
    }

    /**
     * Get the value of commentaires_commerciaux_client
     */
    public function getCommentairesCommerciauxClient(): string
    {
        return $this->commentaires_commerciaux_client;
    }

    /**
     * Set the value of commentaires_commerciaux_client
     */
    public function setCommentairesCommerciauxClient(string $commentaires_commerciaux_client): self
    {
        $this->commentaires_commerciaux_client = $commentaires_commerciaux_client;

        return $this;
    }

    public static function setClients (?ArrayObject $clients): void
    {
        self::$clients = $clients;
    }

    public static function getClients(): ?ArrayObject
    {
        if (!isset(self::$clients)){
            self::setclients(new ArrayObject());
        }
        return self::$clients;
    }
}