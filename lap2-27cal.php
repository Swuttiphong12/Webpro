<html>

<head>
    <title> Program _Post form student-form </title>
    <link rel="stylesheet" href="bg.css">
</head>

<body>
    <div class="bg">
        <?php
    // get value
    $student_id = $_POST['student-ID'];
    $student_name = $_POST['student-Name'];
    $student_Password = $_POST['student-Password'];
    $student_Sex = $_POST['sex'];

    

    // output value
    echo "<p>";
    echo "<b>ข้อมูลที่ผู้ใช้ใส่มา </b><br /> <br/>";
    echo "รหัสนักศึกษา : $student_id <br/>";
    echo "ชื่อ : $student_name <br/>";
    echo "รหัสผ่าน :  $student_Password <br/>";

    // Sex output
    if ($student_Sex == 1) {
        echo "เพศ : male <br/>";
    } else  echo "เพศ : female <br/>";

    // hobby output
    for ($i = 0; $i < count($_POST["hobby"]); $i++) {
        if (trim($_POST["hobby"][$i]) != "") {
            echo "My hobby is : " . $_POST["hobby"][$i] . "<br>";
        }
    }
    // fav color output
    for ($i = 0; $i < count($_POST["color"]); $i++) {
        if (trim($_POST["color"][$i]) != "") {
            echo "My fav color is : " . $_POST["color"][$i] . "<br>";
        }
    }
    ?>
        <br><br>
        <!-- back to form  -->
        <a href="form-google.php"> Back to first page </a>

</body>

</html>