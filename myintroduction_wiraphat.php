<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>นำเสนอตัวเอง</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            padding: 40px;
            max-width: 500px;
            width: 100%;
            text-align: center;
        }
        
        .container h1 {
            color: #333;
            margin-bottom: 30px;
            font-size: 28px;
        }
        
        .info-group {
            margin-bottom: 25px;
            text-align: left;
            padding: 15px;
            background: #f5f5f5;
            border-left: 4px solid #667eea;
            border-radius: 5px;
        }
        
        .info-group label {
            display: block;
            color: #667eea;
            font-weight: bold;
            margin-bottom: 8px;
            font-size: 14px;
        }
        
        .info-group .value {
            color: #333;
            font-size: 16px;
            word-break: break-word;
        }
        
        .footer {
            margin-top: 30px;
            color: #999;
            font-size: 12px;
            border-top: 1px solid #eee;
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>นำเสนอตัวเอง</h1>
        
        <?php
            // ข้อมูลส่วนบุคคล
            $name = "วีรภัทร ทองน้ำแก้ว";
            $studentId = "69319010030";
            $department = "เทคโนโลยีสารสนเทศ";
        ?>
        
        <div class="info-group">
            <label>ชื่อ-นามสกุล:</label>
            <div class="value"><?php echo $name; ?></div>
        </div>
        
        <div class="info-group">
            <label>รหัสนักศึกษา:</label>
            <div class="value"><?php echo $studentId; ?></div>
        </div>
        
        <div class="info-group">
            <label>แผนกวิชา:</label>
            <div class="value"><?php echo $department; ?></div>
        </div>
        
        <div class="footer">
            <p>สร้างด้วย PHP</p>
        </div>
    </div>
</body>
</html>
