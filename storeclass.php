<?php

class MyStore
{
    mysql = require('mysql');
    private $host = "us-cdbr-east-05.cleardb.net";
    private $user = "b975aafafa0878";
    private $password = "495cd372";
    private $db = "heroku_89e6acdcdc5eb8f";
    private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    protected $con;

    public function openConnection()
    {
        try {
 
            $this->con = new PDO($this->host, $this->user, $this->password, $this->db, $this->options);
            return $this->con;
        } catch (PDOException $e) {
            echo "Have Problem in Connection :" . $e->getMessage();
        }
    }


    //Get Heroku ClearDB connection information

// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);






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
            $user = $stmt->fetch();

            $total = $stmt->rowCount();

            if ($total > 0) {
                echo "Login Success! ".$user['first_name']." ".$user['last_name'];
                $this->set_userdata($user);
            } 
            else {
                echo "Login Failed! Please Check your Login Details";
            }
        }
    }

    public function set_userdata($array){
        if(!isset($_SESSION)){
            session_start();
        }

        $_SESSION['userdata'] = array(

                "fullname" => $array['first_name']." ".$array['last_name'],
                "access" => $array['access']
        );

        return $_SESSION['userdata'];
    }

    public function get_userdata(){
        if(!isset($_SESSION)){
            session_start();
        }
    
        if(isset($_SESSION['userdata'])){
        return $_SESSION['userdata'];
        }
        
        else{
            return null;
        }
    }
    

    public function logout(){

        if(!isset($_SESSION)){
            session_start();
        }
       
        $_SESSION['userdata'] = null;
        unset($_SESSION['userdata']);
    

    }


    public function checkUser($meter_id,$username)
    {

        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM members WHERE meter_id = ? and username = ?");
        $stmt->execute([$meter_id, $username]);
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
            $access = $_POST['access'];

            if($this->checkUser($meter_id,$username) == 0){

                $connection = $this->openConnection();
                $stmt = $connection->prepare("INSERT INTO members(`meter_id`,`password`,`email`,`first_name`,`last_name`,`mobile`,`address`, `username`, `access`)VALUES(?,?,?,?,?,?,?,?,?)");
                $stmt->execute([$meter_id, $password, $email, $fname, $lname, $mobile, $address, $username, $access]);
            }
            else{echo "Meter id already exist!";}

        }
    }
}

$store = new MyStore();
