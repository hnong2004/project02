<?php
    session_start();
    include "dbconnect.php";
    if(isset($_POST["username"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql = "SELECT * FROM employee where emp_user = '$username' and emp_pass = '$password'";
        $result = mysqli_query($con, $sql);
        //print_r($result);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $_SESSION["emp_id"] = $row["emp_id"];
            $_SESSION["emp_user"] = $row["emp_id"] . " " . $row["emp_surname"];
            $_SESSION["emp_level"] = $row["emp_level"];
            if($_SESSION["emp_level"] == "a"){
                header("location:admin_page.php");
            }
            if($_SESSION["emp_level"] == "u"){
                header("location:user_page.php");
            }            
        }else{
            echo "<script>";
            echo "alert(\"ชื่อเข้าระบบหรือรหัสผ่านไม่ถูกต้อง\");";
            echo "window.history.back()";
        }
    }else{
        header("location:login.php");
    }
?>