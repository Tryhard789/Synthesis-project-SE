<?php
    include_once 'connect.php';
    $name = $_POST['name'];
    $email =  $_POST['email'];
    $phone = $_POST['phone'];
    $bank = $_POST['bank'];
    $expired = $_POST['expired'];
    $bill= $_COOKIE['cname'];
    $sql = "INSERT INTO infors (Name_, Email, Phone, Bank_AccountNumber,Expired,Bill) VALUES ('$name','$email','$phone','$bank',' $expired','$bill');";
    mysqli_query($conn,$sql);
    $sql2 = "DELETE from infors WHERE Bank_AccountNumber='0';";
    mysqli_query($conn,$sql2);
    header("Location: infor.php?submit=success");
?>