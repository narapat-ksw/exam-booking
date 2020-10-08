<?php
// print_r($_POST);
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$course_id = $_POST["course_id"];
$std_count = $_POST["std_count"];
$exam_date = $_POST["exam_date"];
$exam_time = $_POST["exam_time"];
$booking_date = date("Y-m-d H:i:sa");

if($std_count > 200){
    echo "กรอกจำนวนนักศึกษาได้ไม่เกิน 200 คน <br>";
    echo "<a href = '/exam_booking/index.php'> ย้อนกลับ </a>";
}else{
    $conn = new mysqli("localhost","root","","exam_booking");
    $query = "INSERT INTO booking (id, fname, lname, email, tel, course_id, std_count, exam_date, exam_time, booking_date) VALUES ('', '{$fname}', '{$lname}', '{$email}', '{$tel}', '{$course_id}', {$std_count}, '{$exam_date}', '{$exam_time}', '{$booking_date}')";
    mysqli_query($conn, $query);
    echo "การจองเรียบร้อยแล้ว <br>";
    echo "<a href = '/exam_booking/booking_list.php'> ไปยังรายการ </a>";
}