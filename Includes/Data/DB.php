<?php

namespace Includes\Data;

use PDO;
use PDOException;

class DB
{
    protected $host     = '127.0.0.1';
    protected $db       = 'motorbike_php_db';
    protected $username = 'root';
    protected $password = '';
    protected $charset  = 'UTF8';

    protected $connection = null;

    protected $table = '';

    protected function getConnection()
    {
        if (is_null($this->connection)) {
            try {
                $this->connection = new PDO(
                    "mysql:host=$this->host;dbname=$this->db;charset=$this->charset",
                    $this->username,
                    $this->password
                );
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }

        return $this->connection;
    }

    public function setTable($table)
    {
        $this->table = $table;
        return $this;
    }

    public function insert($data)
    {
        $params = [];
        $params2 = [];
        foreach ($data as $key => $value) {
            $params[] = $key;
            $params2[] = ':' . $key;
        }
        $params = implode(', ', $params);
        $params2 = implode(', ', $params2);
        $query = "INSERT INTO $this->table ($params) VALUES ($params2)";
        return $this->getConnection()->prepare($query)->execute($data);
    }

    public function getAll($page = 1, $limit = 2)
    {
        $total = $this->getConnection()->query("SELECT COUNT(*) AS count FROM $this->table")->fetch()['count'];
        $offset = ($page-1) * $limit;

        return [
            'total'        => $total,
            'current_page' => $page,
            'limit'        => $limit,
            'rows'         => $this->getConnection()->query("SELECT * FROM $this->table LIMIT $offset,$limit")->fetchAll(PDO::FETCH_ASSOC)
        ];
    }

    public function getById($id)
    {
        return $this->getConnection()->query("SELECT * FROM $this->table WHERE id = $id")->fetch(PDO::FETCH_ASSOC);
    }
}