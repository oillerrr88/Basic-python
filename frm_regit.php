<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
    <style>
        body {
            background-color:#cc3300; 
}
</style>
</head>

<body>

<center><h1><font style="color:white">สมัครสมาชิก</h1></font>
   
   <form action="save_regis.php" method="post">
    <font style="color:white">
        <label for="code">รหัสนักศึกษา</label></font>
        <input type="text" name="code" id="code">
        <font style="color:white">
            <label for="name">ชื่อสกุล</label></font>
        <input type="text" name="name" id="name">
        <font style="color:white">
            <label for="password">รหัสผ่าน</label></font>
        <input type="password" name="password" id="password">

        <button type="submit">สมัครสมาชิก</button>
        <button type="reset" class="btn btn-red">ล้างข้อมูล</button> 
    </form>
    
    
    <br><a class="nav-link" href="index.html">
            <button type="take_snapshots" class="btn btn-success btn-sm">หน้าหลัก</button></a></br></center>
</body>
</html>