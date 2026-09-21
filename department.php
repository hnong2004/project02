<?php
    require "dbconnect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>รายชื่อพนักงานและแผนกทั้งหมด</title>
</head>
<body>
  <div><h2>รายชื่อพนักงานและแผนกทั้งหมด</h2></div>
<form action="searchdata.php" method="post">
    <div>  
        <input type="text" name="namesearch" placeholder="ค้นหาชื่อพนักงาน">  <input type="submit" value="ค้นหาข้อมูล">
    </div>
</form>
<br>

<?php
   // $sql = "Select * From employee";
    $sql = "SELECT department.d_name, employee.emp_title, employee.emp_name, employee.emp_surname FROM department INNER JOIN employee ON department.d_id = employee.d_id";
    $result = mysqli_query($con, $sql);
    $order = 1;
?>
<table border="1">
    <thead>
        <tr>
                <th>ลำดับที่</th>
                <th>คำนำหน้า</th>
                <th>ชื่อ</th>
                <th>สกุล</th>
                <th>แผนก</th>
             
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
   
    <tbody>
           <tr>
                <td> <?php echo  $order++;  ?> </td>
                <td> <?php echo $row["emp_title"] ?> </td>
                <td> <?php echo $row["emp_name"] ?> </td>
                <td> <?php echo $row["emp_surname"] ?> </td>
                <td> <?php echo $row["d_name"] ?> </td>
               
        </tr>
    </tbody>
    <?php }  ?>
</table>
<div> <a href="insertform.php">กรอกข้อมูลพนักงาน</a> </div>
</body>
</html>