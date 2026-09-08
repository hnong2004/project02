<?php
    require "dbconnect.php";

    $emp_title = $_POST["emp_title"];
    $emp_name = $_POST["emp_name"];
    $emp_surname = $_POST["emp_surname"];
    $emp_birthday = $_POST["emp_birthday"];
    $emp_user = $_POST["emp_user"];
    $emp_pass = $_POST["emp_pass"];
    //$emp_pass = md5($_POST["emp_pass"]);
    $emp_level = $_POST["emp_level"];
   
$sql = "INSERT INTO  employee(emp_title, emp_name, emp_surname, emp_birthday, emp_user, emp_pass, emp_level)
                VALUE('$emp_title', '$emp_name', '$emp_surname', '$emp_birthday', '$emp_user', '$emp_pass', '$emp_level')";
    $result = mysqli_query($con, $sql);
    if($result){
        header("location:index.php");
        exit(0);
    }else{
        echo mysqli_error($con);
    }
?>