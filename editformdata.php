<?php
    require "dbconnect.php";
    $emp_id = $_GET["emp_id"];
    $sql = "SELECT * FROM employee WHERE emp_id=$emp_id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลพนักงาน</title>
</head>
<body>
    <h2>แก้ไขข้อมูลพนักงาน</h2>
    <hr>
    <form action="updatedata.php" method="POST">
        <input type="hidden" value="<?php echo $row["emp_id"]; ?>" name="emp_id" >
        <label>คำนำหน้า : </label> 
            <select name="emp_title">
                <option value="นาย" <?php if($row["emp_title"]=="นาย") {
                    echo "SELECTED";
                } ?>>นาย </option>
                <option value="นาง" <?php if($row["emp_title"]=="นาง") {
                    echo "SELECTED";
                } ?>> นาง </option>
                <option value="นางสาว" <?php if($row["emp_title"]=="นางสาว") {
                    echo "SELECTED";
                } ?>>นางสาว </option>
            </select> 
        <br>
        <label>ชื่อ : </label>
            <input type="text" name="emp_name" value="<?php echo $row["emp_name"]?>">
        <br>
        <label>นามสกุล : </label>
            <input type="text" name="emp_surname"value="<?php echo $row["emp_surname"]?>">
        <br>
        <label>วันเดือนปีเกิด : </label>
            <input type="date" name="emp_birthday" value="<?php echo $row["emp_birthday"]?>">
        <input type="submit" value="บันทึกข้อมูล">
    </form>
</body>
</html>