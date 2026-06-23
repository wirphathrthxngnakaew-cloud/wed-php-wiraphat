<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>wiraphat</title>
</head>
<body>
    <form action="week5-receive.php" method="get">
       <label>username</label>
       <input type="text" name="username" required>
       
       <label>password</label>
       <input type="password" name="password" required>

         <label>userEmail</label>
       <input type="email" name="userEmail">
         <br>

        <label>อายุ</label>
        <input type="number" name="userAge">

        <label>วันเกิด</label>
        <input type="date" name="userBirth">

        <label>เพศ</label>
        <input type="radio" name="userGender" value="ชาย"> ชาย
        <input type="radio" name="userGender" value="หญิง"> หญิง
        <br>

        <label>จังหวัด</label>
        <srelect name="usercity">
             <option value="ไม่ระบุ">-</option>
             <option value="กรุงเทพ">กรุงเทพ</option>
        </select>
        <br>

        <label>งานอดิเรก</label>
        <input type="checkbox" name="userHobby[]" value="อ่านหนังสือ"> อ่านหนังสือ
        <input type="checkbox" name="userHobby[]" value="เล่นกีฬา"> เล่นกีฬา
        <br>
        
        <label>ความคิดเห็น</label>
        <textarea name="userMsg"></textarea>
        <input type="submit" value="ส่งข้อมูล">
        <input type="reset" value="ล้างข้อมูล"
    </form>
</body>
</html>