<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สถานที่ท่องเที่ยวนครศรีธรรมราช</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #333;
            line-height: 1.6;
        }
        
        header {
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 30px 0;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }
        
        header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        
        header p {
            font-size: 1.1em;
            color: #ddd;
        }
        
        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 20px;
        }
        
        .intro-section {
            background: white;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        .intro-section h2 {
            color: #667eea;
            margin-bottom: 15px;
            font-size: 1.8em;
        }
        
        .intro-section p {
            font-size: 1.05em;
            color: #555;
        }
        
        .attractions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
        }
        
        .attraction-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .attraction-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.25);
        }
        
        .card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            text-align: center;
        }
        
        .card-header h3 {
            font-size: 1.4em;
            margin-bottom: 5px;
        }
        
        .card-header p {
            font-size: 0.9em;
            opacity: 0.9;
        }
        
        .card-content {
            padding: 20px;
        }
        
        .card-content p {
            color: #666;
            margin-bottom: 10px;
            text-align: justify;
        }
        
        .card-content strong {
            color: #667eea;
        }
        
        .attractions-table {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        thead {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        
        th {
            padding: 15px;
            text-align: left;
            font-weight: 600;
        }
        
        td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
        }
        
        tbody tr:hover {
            background-color: #f5f5f5;
        }
        
        footer {
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 30px;
        }
        
        footer p {
            margin-bottom: 5px;
        }
        
        .icon {
            font-size: 2em;
            margin-bottom: 10px;
        }
        
        @media (max-width: 768px) {
            header h1 {
                font-size: 1.8em;
            }
            
            .attractions-grid {
                grid-template-columns: 1fr;
            }
            
            .intro-section {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>🏛️ สถานที่ท่องเที่ยวนครศรีธรรมราช</h1>
        <p>เสาห์จังหวัรน์แดนทรัพย์ที่อุดมสมบูรณ์ สถานที่ท่องเที่ยวที่น่าสนใจ</p>
    </header>
    
    <div class="container">
        <div class="intro-section">
            <h2>ยินดีต้อนรับสู่นครศรีธรรมราช</h2>
            <p>
                นครศรีธรรมราช เป็นจังหวัดที่มีความสำคัญทางด้านศาสนา วัฒนธรรม และธรรมชาติ 
                ตั้งอยู่ในภาคใต้ของประเทศไทย เป็นแหล่งท่องเที่ยวที่มีความหลากหลาย 
                ตั้งแต่สถานที่ศักดิ์สิทธิ์ ชายหาดสวยงาม ไปจนถึงธรรมชาติอันงดงาม
            </p>
        </div>
        
        <h2 style="color: white; margin-bottom: 20px; text-align: center; font-size: 2em;">
            🎯 สถานที่ท่องเที่ยวยอดนิยม
        </h2>
        
        <div class="attractions-grid">
            <?php
            // กำหนดข้อมูลสถานที่ท่องเที่ยว
            $attractions = array(
                array(
                    "name" => "วัดมหาธาตุ",
                    "thai_name" => "Wat Mahathat",
                    "icon" => "🏯",
                    "description" => "เป็นวัดที่สำคัญที่สุดของนครศรีธรรมราช เอกลักษณ์คือพระชেดีทองชั้น 5 ที่มีความสูงกว่า 50 เมตร ออกแบบด้วยศิลปะไทยแบบเดิม เป็นสถานที่ศักดิ์สิทธิ์ของคนไทยและที่ท่องเที่ยวที่ขึ้นชื่อ",
                    "location" => "อยู่ในใจกลางเมือง",
                    "time" => "สามารถเยี่ยมชมได้ตลอดปี"
                ),
                array(
                    "name" => "ถ้ำข้าวหลวง",
                    "thai_name" => "Khao Luang Cave",
                    "icon" => "🕳️",
                    "description" => "เป็นถ้ำที่มีขนาดใหญ่โตและสวยงาม ตั้งอยู่บนเขาสูงราว 200 เมตร ภายในถ้ำมีลำเลียงจำนวนมากสวยงามโดยธรรมชาติ และมีรูปปั้นพระพุทธเจ้าหลายองค์",
                    "location" => "ตำบลอ่างศรี อำเภอเมืองนครศรีธรรมราช",
                    "time" => "เปิดทุกวัน 08:00 - 16:00"
                ),
                array(
                    "name" => "ทะเลน้อย",
                    "thai_name" => "Thale Noi Lake",
                    "icon" => "🦆",
                    "description" => "เป็นบริเวณทะเบียนน้ำปร่างค้างหลวายชนิดต่างๆมากมาย เหมาะสำหรับการเรียนรู้ธรรมชาติและการถ่ายรูป ถูกขึ้นทะเบียนเป็นพื้นที่ชุ่มน้ำระดับนานาชาติ",
                    "location" => "ตำบลลาวชาลา อำเภอเกาะสมุย",
                    "time" => "สามารถเยี่ยมชมได้ตลอดปี"
                ),
                array(
                    "name" => "หาดโฮสามิลา",
                    "thai_name" => "Hin Khao (Three Rocks Beach)",
                    "icon" => "🏖️",
                    "description" => "หาดสวยงามที่มีลักษณะเด่นคือหินสามก้อนสีดำนั่งอยู่ในท้องทะเล ซึ่งเป็นสัญลักษณ์ของจังหวัด เหมาะสำหรับการว่ายน้ำและพักผ่อน",
                    "location" => "อำเภอควายปะการ",
                    "time" => "เปิดตลอดวัน"
                ),
                array(
                    "name" => "สวนนกคนรี",
                    "thai_name" => "Khanom Beach",
                    "icon" => "🌊",
                    "description" => "เป็นชายหาดที่สวยงามและเงียบสงบ ตั้งอยู่ห่างจากเมืองประมาณ 40 กิโลเมตร เหมาะสำหรับการพักผ่อนในธรรมชาติ",
                    "location" => "อำเภอขนอม",
                    "time" => "เปิดตลอดวัน"
                ),
                array(
                    "name" => "ศิลปะหุ่นนาฏศิลป์",
                    "thai_name" => "Shadow Puppet Art",
                    "icon" => "🎭",
                    "description" => "นครศรีธรรมราชมีชื่อเสียงในการผลิตหุ่นนาฏศิลป์ (นังสือไทย) แบบดั้งเดิม นักท่องเที่ยวสามารถเรียนรู้และชมการแสดง",
                    "location" => "ห้องแสดงศิลปะและพิพิธภัณฑ์",
                    "time" => "เปิดตามวัน ตรวจสอบเฉพาะที่ก่อนเยี่ยม"
                )
            );
            
            // แสดงข้อมูลสถานที่ท่องเที่ยว
            foreach ($attractions as $place) {
                echo '<div class="attraction-card">';
                echo '  <div class="card-header">';
                echo '    <div class="icon">' . $place['icon'] . '</div>';
                echo '    <h3>' . $place['name'] . '</h3>';
                echo '    <p>(' . $place['thai_name'] . ')</p>';
                echo '  </div>';
                echo '  <div class="card-content">';
                echo '    <p>' . $place['description'] . '</p>';
                echo '    <p><strong>📍 ที่ตั้ง:</strong> ' . $place['location'] . '</p>';
                echo '    <p><strong>⏰ เวลาเปิด:</strong> ' . $place['time'] . '</p>';
                echo '  </div>';
                echo '</div>';
            }
            ?>
        </div>
        
        <h2 style="color: white; margin-bottom: 20px; text-align: center; font-size: 2em;">
            📊 ข้อมูลสรุปสถานที่ท่องเที่ยว
        </h2>
        
        <div class="attractions-table">
            <table>
                <thead>
                    <tr>
                        <th>สถานที่ท่องเที่ยว</th>
                        <th>ประเภท</th>
                        <th>ประเมาณระยะทาง</th>
                        <th>สิ่งอำนวยความสะดวก</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>วัดมหาธาตุ</td>
                        <td>วัด/ศาสนา</td>
                        <td>ใจกลางเมือง</td>
                        <td>ร้านขายสินค้า, ห้องน้ำ, ที่จอดรถ</td>
                    </tr>
                    <tr>
                        <td>ถ้ำข้าวหลวง</td>
                        <td>ท่องเที่ยวธรรมชาติ</td>
                        <td>12 กม.</td>
                        <td>ร้านอาหาร, ที่จอดรถ, ห้องน้ำ</td>
                    </tr>
                    <tr>
                        <td>ทะเลน้อย</td>
                        <td>สัตว์ป่า/ธรรมชาติ</td>
                        <td>20 กม.</td>
                        <td>ศูนย์นักท่องเที่ยว, ร้านอาหาร</td>
                    </tr>
                    <tr>
                        <td>หาดโฮสามิลา</td>
                        <td>ชายหาด</td>
                        <td>25 กม.</td>
                        <td>ร้านอาหาร, ห้องน้ำ, ที่จอดรถ</td>
                    </tr>
                    <tr>
                        <td>หาดขนอม</td>
                        <td>ชายหาด</td>
                        <td>40 กม.</td>
                        <td>ร้านอาหาร, บ้านพัก, ที่จอดรถ</td>
                    </tr>
                    <tr>
                        <td>ศิลปะหุ่นนาฏศิลป์</td>
                        <td>ศิลปะ/วัฒนธรรม</td>
                        <td>5-10 กม.</td>
                        <td>ร้านอาหาร, ห้องน้ำ</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="intro-section">
            <h2>✨ ข้อมูลสำคัญสำหรับนักท่องเที่ยว</h2>
            <p>
                <strong>อากาศและสภาพป้า:</strong> นครศรีธรรมราชมีอากาศอบอวล ควรเยี่ยมชมในช่วงเดือน พฤศจิกายน - มีนาคม<br>
                <strong>การเดินทาง:</strong> สามารถไปได้โดยรถบัส รถไฟ หรือรถยนต์ส่วนตัว<br>
                <strong>ที่พัก:</strong> มีโรงแรมและรีสอร์ตหลากหลายให้เลือก ตั้งแต่ระดับน้อยถึงสูง<br>
                <strong>ภาษา:</strong> ควรเรียนรู้คำศัพท์ไทยบ้างเพื่อการสื่อสาร<br>
                <strong>สกุลเงิน:</strong> สัตหญ่านใช้บาทไทย (THB)
            </p>
        </div>
    </div>
    
    <footer>
        <p>&copy; 2026 สถานที่ท่องเที่ยวนครศรีธรรมราช</p>
        <p>สร้างโดย วีรภัทร ทองน้ำแก้ว | แผนกวิชา เทคโนโลยีสารสนเทศ</p>
        <p>เรียนรู้เพิ่มเติมเกี่ยวกับสถานที่ท่องเที่ยวในภาคใต้ของประเทศไทย</p>
    </footer>
</body>
</html>