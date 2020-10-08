<?php
$conn = new mysqli("localhost", "root", "", "exam_booking");
$id = $_GET["id"];
$query = "DELETE FROM booking WHERE id={$id}";
mysqli_query($conn, $query);
echo "ลบข้อมูลสำเร็จแล้ว";
//header("location:/exam_booking/booking_list.php");
header("refresh:1; url=/exam_booking/booking_list.php");