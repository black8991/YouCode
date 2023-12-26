<?php
/*class Db
{
    private $host ;
    private $dbname;
    private $username ;
    private $password;
    protected $pdo;

    public function __construct($host, $dbname, $username, $password)
    {
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}

?>*/
