<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>กรอกข้อมูลพนักงาน</title>
</head>
<body>
    <h2>ฟอร์มกรอกข้อมูลพนักงาน</h2>
    <hr>
    <form action="insertdata.php" method="POST">
        <label>คำนำหน้า : </label> 
            <select name="emp_title">
                <option value="นาย">นาย </option>
                <option value="นาง">นาง </option>
                <option value="นางสาว">นางสาว </option>
            </select> 
        <br>
        <label>ชื่อ : </label>
            <input type="text" name="emp_name">
        <br>
        <label>นามสกุล : </label>
            <input type="text" name="emp_surname">
        <br>
        <label>วันเดือนปีเกิด : </label>
            <input type="date" name="emp_birthday">   <br>    
        <label>ชื่อเข้าระบบ : </label>
            <input type="text" name="emp_user">
        <br>
        <label>รหัสผ่าน : </label>
            <input type="text" name="emp_pass"> <br> 
        <select name="emp_level">
            <option value="">--เลือกระดับผู้ใช้งาน--</option>
            <option value="a">ผู้ดูแลระบบ </option>
            <option value="u">ผู้ใช้งาน </option>
            </select> 
        <input type="submit" value="บันทึกข้อมูล">  <input type="reset" value="ล้างข้อมูล">
        
    </form>
</body>
</html>