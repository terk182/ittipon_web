<?php
session_start();
//Create Constants to Store Non Repeating Value
define('LOCALHOST', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'may_magin');

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_connect_error());;
$db_select = mysqli_select_db($conn, DB_NAME);
//$res = mysqli_query($conn,$sql) or die(mysqli_error()); 


class DB_con
{
    function __construct()
    {
        $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
        $this->dbcon = $conn;
        $db_select = mysqli_select_db($conn, DB_NAME);
        if (mysqli_connect_errno()) {
            echo "Faild to connect to mySQL :" . mysqli_connect_error();
        }
    }

    public function insert($name, $email, $subject, $message)
    {

        $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
        $this->dbcon = $conn;
        date_default_timezone_set('asia/bangkok');
        $date_now = date("Y-m-d");
        $time_now = date("H:i:s");
        $result = mysqli_query($this->dbcon, "INSERT INTO `may_magin`.`message` (`create_date`, `create_time`, `name`, `email`, `subject`, `message`) VALUES ('$date_now', '$time_now', '$name', '$email', '$subject', '$message')");
        return $result;
    }

    

   
}
