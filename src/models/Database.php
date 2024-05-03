<?php

namespace App\models;

use PDO;


class Database
{
    private $pdo;
    private $host = 'localhost';
    private $db = 'ct';
    private $user = 'root';
    private $pass = 'theoricherol';
    private $charset = 'utf8mb4';

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        $dsn = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $this->pdo = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (\PDOException $e) {
            error_log('Connection error: ' . $e->getMessage());
            throw new \PDOException("Cannot connect to the database.", (int)$e->getCode());
        }
    }

    protected function create($table, $data)
    {
        $keys = array_keys($data);
        $fields = implode(', ', $keys);
        $placeholders = ':' . implode(', :', $keys);

        $query = "INSERT INTO $table ($fields) VALUES ($placeholders)";
        $buildQuery = $this->pdo->prepare($query);
        $buildQuery->execute($data);
        return $this->pdo->lastInsertId();
    }

    protected function read($table, $conditions, $fields = '*')
    {
        $query = "SELECT $fields FROM $table";
        if (!empty($conditions)) {
            $query .= " WHERE " . implode(" AND ", array_map(function ($key) {
                    return "$key = :$key";
                }, array_keys($conditions)));
        }

        $buildQuery = $this->pdo->prepare($query);
        $buildQuery->execute($conditions);
        return $buildQuery->fetchAll();
    }

    protected function update($table, $data, $conditions): void
    {
        // Préparation de la partie SET
        $setParts = implode(', ', array_map(function ($key) {
            return "$key = :set_$key";  // Utilisez un préfixe pour éviter les conflits de noms de paramètres
        }, array_keys($data)));

        // Début de la construction de la requête
        $query = "UPDATE $table SET $setParts WHERE ";

        // Préparation de la partie WHERE
        $whereParts = [];
        foreach ($conditions as $key => $value) {
            if (is_array($value)) {
                // Gérer les conditions avec plusieurs valeurs (comme IN)
                $placeholders = array_map(function ($i) use ($key) {
                    return ":{$key}_$i";
                }, array_keys($value));
                $whereParts[] = "$key IN (" . implode(', ', $placeholders) . ")";
            } else {
                $whereParts[] = "$key = :where_$key";  // Utilisez un préfixe pour éviter les conflits
            }
        }

        $query .= implode(" AND ", $whereParts);
        $buildQuery = $this->pdo->prepare($query);

        // Préparer le tableau de données pour l'exécution
        $executeArray = [];
        foreach ($data as $key => $val) {
            $executeArray["set_$key"] = $val;  // Utilisez les préfixes définis
        }
        foreach ($conditions as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $i => $v) {
                    $executeArray["{$key}_$i"] = $v;
                }
            } else {
                $executeArray["where_$key"] = $value;
            }
        }

        $buildQuery->execute($executeArray);
    }


    protected function delete($table, $conditions): void
    {
        $query = "DELETE FROM $table WHERE ";
        $clauses = [];

        foreach ($conditions as $key => $value) {
            if (is_array($value)) {
                $placeholders = array_map(function($val) use ($key) { return ":{$key}_{$val}"; }, array_keys($value));
                $clause = "$key IN (" . implode(", ", $placeholders) . ")";
                $clauses[] = $clause;
            } else {
                $clauses[] = "$key = :$key";
            }
        }

        $query .= implode(" AND ", $clauses);
        $buildQuery = $this->pdo->prepare($query);

        $executeArray = [];
        foreach ($conditions as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $idx => $val) {
                    $executeArray["{$key}_{$idx}"] = $val;
                }
            } else {
                $executeArray[$key] = $value;
            }
        }

        $buildQuery->execute($executeArray);
    }

    protected function recordExists($table, $conditions): bool
    {
        $query = "SELECT EXISTS(SELECT 1 FROM $table WHERE " . implode(' AND ', array_map(function ($key) {
                return "$key = :$key";
            }, array_keys($conditions))) . ") AS `exists`";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($conditions);
        return (bool)$stmt->fetchColumn();
    }
    public function addRecord($table, $data)
    {
        return $this->create($table, $data);
    }

    public function readRecord($table, $conditions, $fields = "*")
    {
        return $this->read($table, $conditions, $fields);
    }

    public function updateRecord($table, $conditions, $fields = "*")
    {
        $this->update($table, $conditions, $fields);
    }

    public function deleteRecord($table, $conditions)
    {
        return $this->delete($table, $conditions);
    }

    public function exists($table, $conditions) {
        return $this->recordExists($table, $conditions);
    }

}
