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

            $password = md5($_POST['password']);
            $username = $_POST['username'];
            $meter_id = $_POST['meter_id'];

            $connection = $this->openConnection();
            $stmt = $connection->prepare("SELECT * FROM members WHERE meter_id = ? AND password = ? AND username = ? ");
            $stmt->execute([$meter_id, $password, $username]);
            $total = $stmt->rowCount();

            if ($total > 0) {
                echo "Login Succes!";
            } else {
                echo "Login Failed!";
            }
        }
    }

    public function checkUser($meter_id)
    {

        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM members WHERE meter_id = ?");
        $stmt->execute([$meter_id]);
        $total = $stmt->rowCount();

        return $total;
    }

    public function add_user()
    {
        if (isset($_POST['add'])) {

            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $meter_id = $_POST['meter_id'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $mobile = $_POST['mobile'];
            $username = $_POST['username'];
            $address = $_POST['address'];

            if($this->checkUser($meter_id) == 0){

                $connection = $this->openConnection();
                $stmt = $connection->prepare("INSERT INTO members(`meter_id`,`password`,`email`,`first_name`,`last_name`,`mobile`,`address`, `username`)VALUES(?,?,?,?,?,?,?,?)");
                $stmt->execute([$meter_id, $password, $email, $fname, $lname, $mobile, $address, $username]);
            }
            else{echo "Meter id already exist!";}

        }
    }
}

$store = new MyStore();
