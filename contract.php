<?php
    include_once 'connect.php';
    $name = $_POST['name'];
    $Dob =  $_POST['Dob'];
    $phone = $_POST['phone'];
    $feedback = $_POST['feedback'];

    $sql = "INSERT INTO feedback (Name_, DoB, Phone, Feedback) VALUES ('$name','$Dob','$phone','$feedback');";
    mysqli_query($conn,$sql);
    header("Location: contract_main.php?submit=success");