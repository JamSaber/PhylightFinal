<?php

class MyStore
{
    private $server = "mysql:host=localhost;dbname=store";
    private $user = "root";
    private $pass = "";
    private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    protected $con;

    public function openConnection()
    {
        try {

            $this->con = new PDO($this->server, $this->user, $this->pass, $this->options);
            return $this->con;
        } catch (PDOException $e) {
            echo "Have Problem in Connection :" . $e->getMessage();
        }
    }

    public function closeConnection()
    {
        $this->con = null;
    }

    public function getUsers()
    {
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM members");
        $stmt->execute();
        $users = $stmt->fetchAll();
        $userCount = $stmt->rowCount();

        if ($userCount > 0) {
            return $users;
        } else {
            return 0;
        }
    }

    public function login()
    {
        if (isset($_POST['submit'])) {
            print_r($_POST);
        }
    }
}

$store = new MyStore();
