<?php

namespace MyApp\Database;

class DBConnection
{
    private $host;
    private $username;
    private $password;
    private $dbname;
    private $connection;

    public function __construct($host, $username, $password, $dbname)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;

        $this->connect();
    }

    private function connect()
    {
        $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->dbname);

        if (mysqli_connect_errno()) {
            die("連接失敗: " . mysqli_connect_error());
        }
    }

    public function query($query)
    {
        return mysqli_query($this->connection, $query);
    }

    public function __destruct()
    {
        mysqli_close($this->connection);
    }
}

?>