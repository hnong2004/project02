<?php
    require "dbconnect.php";
    $emp_id = $_POST["emp_id"];
    $emp_title = $_POST["emp_title"];
    $emp_name = $_POST["emp_name"];
    $emp_surname = $_POST["emp_surname"];
    $emp_birthday = $_POST["emp_birthday"];
   
    $sql = "UPDATE  employee  SET  emp_title='$emp_title',emp_name='$emp_name', emp_surname='$emp_surname',  
                emp_birthday='$emp_birthday' WHERE emp_id=$emp_id " ;

    $result = mysqli_query($con, $sql);
    if($result){
        header("location:index.php");
        exit(0);
    }else{
        echo "ไม่สามารถแก้ไขข้อมูลได้". mysqli_error($con);
    }
?>