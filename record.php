<?php
include "config/class.php";

$command = new DB_con;
if(isset($_POST['name']))
{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    $result = $command->insert($name, $email, $subject, $message);

    if($result)
    {
    echo "บันทึกข้อมูลเรียบร้อยละครับ";
    }
    else
    {
    echo "ไม่สามารถบันทึกข้อมูล";
    }

}

?>