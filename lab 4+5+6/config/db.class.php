<?php

class Db
{
    // Database connection variable
    protected static $connection;

    // Connection initialization function
    public function connect()
    {
        self::$connection = mysqli_connect("localhost", "root", "", "demo_lap3");

        // Check connection
        if (mysqli_connect_errno()) {
            echo "Database connection failed: " . mysqli_connect_error();
            return null;
        }

        mysqli_set_charset(self::$connection, 'utf8');
        return self::$connection;
    }

    // The function executes the query statement
    public function query_execute($queryString)
    {
        // Initiate connection
        $connection = $this->connect();

        // Execute query execution, query is a method of mysqli library
        $result = $connection->query($queryString);
        $connection->close();
        return $result;
    }

    // The implementation function returns an array of result lists
    public function select_to_array($queryString)
    {
        $rows = array();
        $result = $this->query_execute($queryString);
        if ($result == false) return false;

        // Use a while loop to fetch data array into each element
        while ($item = $result->fetch_assoc()) {
            $rows[] = $item;
        }

        return $rows;
    }
}

?>
