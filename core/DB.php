<?php

class DB
{
    private $db;

    public function __construct(array $config)
    {
        $this->db = new mysqli(
            $config['host'],
            $config['user'],
            $config['password'],
            $config['dbname']
        );
    }
    
    public function insert($table, array $data)
    {
        $fields = implode(', ', array_keys($data));
        $values = '\'' . implode('\', \'', array_values($data)) . '\'';

        $sql = sprintf(
            "INSERT INTO %s (%s) VALUE (%s)",
            $table,
            $fields,
            $values
        );
        
        return $this->db->query($sql);
    }

    public function select($table)
    {
        $sql = "SELECT * FROM $table";
        
        $result = $this->db->query($sql);
        
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}