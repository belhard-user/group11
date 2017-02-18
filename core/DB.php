<?php

namespace Core;

class DB
{
    private $db;

    public function __construct(array $config)
    {
        $this->db = new \PDO(
            $config['dns'],
            $config['user'],
            $config['password'],
            $config['options']
        );
    }
    
    public function insert($table, array $data)
    {
        $fields = implode(', ', array_keys($data));
        $values = ':' . implode(', :', array_keys($data));

        $sql = sprintf(
            "INSERT INTO %s (%s) VALUE (%s)",
            $table,
            $fields,
            $values
        );

        return $this->db->prepare($sql)->execute($data);
    }

    public function select($table)
    {
        $sql = "SELECT * FROM $table";
        
        $result = $this->db->query($sql);
        
        return $result->fetchAll();
    }
}