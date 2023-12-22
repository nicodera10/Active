<?php

namespace App\DAO;

use App\Core\ConnexionDB;
use PDO;

class DAO extends ConnexionDB
{

    // Table de la base de données
    protected $table;

    // Instance de connexion
    private $db;

    /**
     * Fonction permettant de créer une nouvelle entrée dans une table donnée
     * @param string $table Nom de la table
     * @param array $data Données à insérer sous forme d'un tableau associatif clé => valeur
     * @return int
     */
    public function create(array $data): int
    {

        $this->db = ConnexionDB::getConnexion();

        $keys = implode(', ', array_keys($data));
        $values = implode(', ', array_fill(0, count($data), '?'));
        $stmt = $this->db->prepare("INSERT INTO $this->table ($keys) VALUES ($values)");
        $stmt->execute(array_values($data));
        $lastID = $this->db->lastInsertId();
        return $lastID;
    }

    /**
     * Fonction permettant de récupérer toutes les entrées d'une table donnée
     * @param string $table Nom de la table
     * @return array Tableau des entrées sous forme de tableaux associatifs clé => valeur
     */
    public function readAll(): array
    {

        $this->db = ConnexionDB::getConnexion();

        $stmt = $this->db->prepare("CALL readAll(:table)");;
        $stmt->bindParam(':table', $table, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Fonction permettant de récupérer une entrée d'une table donnée en fonction de son identifiant unique
     * @param string $table Nom de la table
     * @param int $id Identifiant unique de l'entrée
     * @return array|false Tableau associatif clé => valeur représentant l'entrée si elle existe, false sinon
     */
    public function read(int $id)
    {

        $this->db = ConnexionDB::getConnexion();

        $column = "id_" . $this->table;
        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE $column = ?");
        $stmt->bindParam(':id', $id);
        $stmt->execute([$id]);
        $datas = $stmt->fetch(PDO::FETCH_ASSOC) ?: false;
        return $datas;
    }

    /**
     * Fonction permettant de mettre à jour une entrée d'une table donnée en fonction de son identifiant unique
     * @param string $table Nom de la table
     * @param int $id Identifiant unique de l'entrée à mettre à jour
     * @param array $data Données à mettre à jour sous forme d'un tableau associatif clé => valeur
     * @return bool True si la mise à jour a réussi, false sinon
     */
    public function update(int $id, array $data): bool {

        $this->db = ConnexionDB::getConnexion();

        $column = "id_".$this->table;
        $set = implode(', ', array_map(fn($key) => "$key = ?", array_keys($data)));
        $stmt = $this->db->prepare("UPDATE $this->table SET $set WHERE $column = ?");
        return $stmt->execute(array_merge(array_values($data), [$id]));
    }

    /**
     * Fonction permettant de supprimer une entrée d'une table donnée en fonction de son identifiant unique
     * @param string $table Nom de la table
     * @param int $id Identifiant unique de l'entrée à supprimer
     * @return bool True si la suppression a réussi, false sinon
     */
    public function delete(int $id): bool
    {
        $this->db = ConnexionDB::getConnexion();

        $column = "id_".$this->table;
        $stmt = $this->db->prepare("DELETE FROM $this->table WHERE $column = ?");
        return $stmt->execute([$id]);
    }
}
