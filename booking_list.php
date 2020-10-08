<?php
$conn = new mysqli("localhost", "root", "", "exam_booking");
$query = "SELECT * FROM booking";
$table = mysqli_query($conn, $query);
echo "    
    <table border='1'> 
       <thead> 
        <tr>
            <td>id</td>
            <td>ชื่อ - สกุล</td>
            <td>E-mail</td>
            <td>เบอร์โทร</td>
            <td>รหัสวิชา</td>
            <td>วันที่สอบ</td>
            <td>เวลาสอบ</td>
            <td>จัดการ</td>
        </tr>
       </thead>
       ";
while ($row = mysqli_fetch_object($table)) {
    echo "
        <tr>
            <td> {$row->id}</td>
            <td> {$row->fname} {$row->lname}</td>
            <td> {$row->email}</td>
            <td> {$row->tel}</td>
            <td> {$row->course_id}</td>
            <td> {$row->exam_date}</td>
            <td> {$row->exam_time}</td>
            <td><a href='booking_delete.php?id={$row->id}'> ลบ </a></td>
        </tr>
        ";
}
echo "</table>";