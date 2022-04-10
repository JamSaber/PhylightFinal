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

            $storepass = "202cb962ac59075b964b07152d234b70";
            $password = $_POST['password'];
            if (md5($password) == $storepass) {
                echo "login succes";
            } else {
                echo "cannot";
            }
        }
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

            $connection = $this->openConnection();
            $stmt = $connection->prepare("INSERT INTO members(`email`,`password`,`meter_id`,`first_name`,'last_name', `mobile`, `username`, `address`)VALUES(?,?,?,?,?,?,?,?)");
            $stmt->execute([$email, $password, $meter_id, $fname, $lname, $mobile, $username, $address]);
        }
    }
}

$store = new MyStore();
