<?php

class Contact extends Personne {

    private int $id_contact;
    private string $email_contact;
    private string $tel_contact;
    private string $code_projet;
    private string $code_client;

    public function __construct(int $id_contact,
                                string $personneNom,
                                string $personnePrenom,
                                string $email_contact,
                                string $tel_contact,
                                string $code_projet,
                                string $code_client)
    {
        parent::__construct($personneNom, $personnePrenom);
        $this->id_contact = $id_contact;
        $this->email_contact = $email_contact;
        $this->tel_contact = $tel_contact;
        $this->code_projet = $code_projet;
        $this->code_client = $code_client;
    }



    /**
     * Get the value of id_contact
     */
    public function getIdContact(): int
    {
        return $this->id_contact;
    }

    /**
     * Set the value of id_contact
     */
    public function setIdContact(int $id_contact): self
    {
        $this->id_contact = $id_contact;

        return $this;
    }

    /**
     * Get the value of email_contact
     */
    public function getEmailContact(): string
    {
        return $this->email_contact;
    }

    /**
     * Set the value of email_contact
     */
    public function setEmailContact(string $email_contact): self
    {
        $this->email_contact = $email_contact;

        return $this;
    }

    /**
     * Get the value of tel_contact
     */
    public function getTelContact(): string
    {
        return $this->tel_contact;
    }

    /**
     * Set the value of tel_contact
     */
    public function setTelContact(string $tel_contact): self
    {
        $this->tel_contact = $tel_contact;

        return $this;
    }

    /**
     * Get the value of code_projet
     */
    public function getCodeProjet(): string
    {
        return $this->code_projet;
    }

    /**
     * Set the value of code_projet
     */
    public function setCodeProjet(string $code_projet): self
    {
        $this->code_projet = $code_projet;

        return $this;
    }

    /**
     * Get the value of code_client
     */
    public function getCodeClient(): string
    {
        return $this->code_client;
    }

    /**
     * Set the value of code_client
     */
    public function setCodeClient(string $code_client): self
    {
        $this->code_client = $code_client;

        return $this;
    }
}