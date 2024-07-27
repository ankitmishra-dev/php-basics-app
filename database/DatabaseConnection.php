<?php

class DatabaseConnection
{
    public $connection;
    public $pdoInstance;

    public function __construct(array $connectionString)
    {   
        $dbCreds = http_build_query($connectionString,  arg_separator:';');
        $dsn = 'mysql:'. $dbCreds;
        $this->connection = new PDO($dsn, options:[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    public function query($query, $bindparam = [])
    {
        $preparedStatement = $this->connection->prepare($query);
        $preparedStatement->execute($bindparam);
        $this->pdoInstance = $preparedStatement;
        return $this;
    }
    
    public function get()
    {
        return $this->pdoInstance->fetchAll();
    }

    public function findOrFail()
    {
        $result = $this->pdoInstance->fetch();
        if (!$result) {
            abort();
        }
        return $result;
    }
}