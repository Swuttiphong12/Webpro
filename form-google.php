<html>

<head>
    <title> การสร้างฟอร์ม </title>
</head>
<style>
.bg {
    background-color: #E1D4FD;
}
</style>

<body class="bg">
    <h2>แบบฟอร์มบันทึกข้อมูลนักศึกษา</h2>
    <form action="lap2-27cal.php" method="post" name="form1" id="form1">

        รหัสนักศึกษา :
        <!-- input รหัสนักศึกษา -->
        <input type="text" maxlength="10" name="student-ID" /><br />

        ชื่อนามสกุล นักศึกษา :
        <!-- input ชื่อนามสกุล  -->
        <input type="text" size="40" name="student-Name" /><br />

        รหัสผ่าน :
        <!-- input หรัสผ่าน -->
        <input type="password" maxlength="6" size="6" name="student-Password" /><br />

        เพศ :
        <!-- input เพศ -->
        <input type="radio" name="sex" value="1" /> ชาย
        <input type="radio" name="sex" value="2" /> หญิง <br />

        งานอดิเรก :
        <!-- input hobby  -->
        <input type="checkbox" value="readbook" name="hobby[]" /> อ่านหนังสือ
        <input type="checkbox" value="watching-tv" name="hobby[]" /> ดูโทรทัศน์
        <input type="checkbox" value="sport" name="hobby[]" /> เล่นกีฬา <br />

        Please enter your color : <br />
        <!-- -- input color --   -->
        <input type="checkbox" value="Red" name="color[]" /> Red <br />
        <input type="checkbox" value="Blue" name="color[]" /> Blue <br />
        <input type="checkbox" value="Green" name="color[]" /> Green <br />
        <input type="checkbox" value="Orange" name="color[]" /> Orange <br />
        <input type="checkbox" value="Black" name="color[]" /> Black <br />

        อัพโหลด : <input type="file" /><br /><br>
        <!-- upload-data -->
        <!-- submit data  and  reset all data-->
        <input type="submit" value="SUBMIT" />
        <input type="reset" value="RESET" />
    </form>
</body>

</html>