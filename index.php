<html>
<head>
    <title>Exam Booking</title>
</head>
<body>
<form action="booking.php" method="post">
    <div>
        <label for="fname">ชื่อ</label><br/>
        <input type="text" name="fname" id="fname" required/>
    </div>
    <div>
        <label for="lname">นามสกุล</label><br/>
        <input type="text" name="lname" id="lname" required/>
    </div>
    <div>
        <label for="email">E-mail</label><br/>
        <input type="email" name="email" id="email" required/>
    </div>
    <div>
        <label for="tel">เบอร์โทร</label><br/>
        <input type="text" name="tel" id="tel" required/>
    </div>
    <div>
        <label for="course_id">รหัสวิชา</label><br/>
        <input type="text" name="course_id" id="course_id" required/>
    </div>
    <div>
        <label for="exam_date">วันที่สอบ</label><br/>
        <input type="date" name="exam_date" id="exam_date" required/>
    </div>
    <div>
        <label for="exam_time">เวลาที่สอบ</label><br/>
        <select name="exam_time" id="exam_time">
            <option value="morning">ช่วงเช้า</option>
            <option value="afternoon">ช่วงบ่าย</option>
        </select>
    </div>
    <div>
        <label for="std_count">จำนวนนักศึกษา</label><br/>
        <input type="number" name="std_count" id="std_count" required/>
    </div>
    <br/>
    <div>
        <button type="submit">ยืนยัน</button>
    </div>
</form>
</body>
</html>