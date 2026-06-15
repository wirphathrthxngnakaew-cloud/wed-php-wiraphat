<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 4 PHP</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 760px; margin: 2rem auto; padding: 1rem; background: #f7f7f7; color: #333; }
        h1, h2 { color: #2c3e50; }
        form { background: #fff; padding: 1rem 1.2rem; margin-bottom: 1.5rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,.08); }
        label { display: block; margin-top: 0.8rem; }
        input[type="number"] { width: 100%; padding: 0.6rem; margin-top: 0.3rem; border: 1px solid #ccc; border-radius: 4px; }
        button { margin-top: 1rem; padding: 0.7rem 1.2rem; border: none; border-radius: 4px; background: #2980b9; color: #fff; cursor: pointer; }
        button:hover { background: #1f618d; }
        .result { background: #eef6fb; border-left: 4px solid #2980b9; padding: 1rem; margin-top: 1rem; border-radius: 6px; }
    </style>
</head>
<body>
    <h1>PHP ฟังก์ชันตัวอย่าง</h1>
    <?php
    $loopResult = '';
    $sumResult = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['action']) && $_POST['action'] === 'loop') {
            $number = filter_input(INPUT_POST, 'number', FILTER_VALIDATE_INT);
            if ($number === false || $number === null) {
                $loopResult = 'กรุณาป้อนตัวเลขจำนวนเต็มที่ถูกต้อง';
            } else {
                $output = [];
                for ($i = 1; $i <= $number; $i++) {
                    $output[] = "รอบที่ $i";
                }
                $loopResult = 'ผลลัพธ์การวนลูป: ' . implode(' , ', $output);
            }
        }

        if (isset($_POST['action']) && $_POST['action'] === 'add') {
            $a = filter_input(INPUT_POST, 'number1', FILTER_VALIDATE_INT);
            $b = filter_input(INPUT_POST, 'number2', FILTER_VALIDATE_INT);
            if ($a === false || $a === null || $b === false || $b === null) {
                $sumResult = 'กรุณาป้อนตัวเลขจำนวนเต็มสองจำนวนที่ถูกต้อง';
            } else {
                $sum = $a + $b;
                $sumResult = "ผลลัพธ์การบวก: $a + $b = $sum";
            }
        }
    }
    ?>

    <section>
        <h2>1) ป้อนตัวเลขแล้วแสดง loop</h2>
        <form method="post" action="">
            <input type="hidden" name="action" value="loop">
            <label for="number">ป้อนตัวเลข</label>
            <input type="number" name="number" id="number" required>
            <button type="submit">แสดงลูป</button>
        </form>
        <?php if ($loopResult !== ''): ?>
            <div class="result"><?php echo htmlspecialchars($loopResult, ENT_QUOTES, 'UTF-8'); ?></div>
        <?php endif; ?>
    </section>

    <section>
        <h2>2) ป้อนตัวเลข 2 ตัวเพื่อนำไปบวกกัน</h2>
        <form method="post" action="">
            <input type="hidden" name="action" value="add">
            <label for="number1">ตัวเลขที่ 1</label>
            <input type="number" name="number1" id="number1" required>

            <label for="number2">ตัวเลขที่ 2</label>
            <input type="number" name="number2" id="number2" required>

            <button type="submit">คำนวณผลรวม</button>
        </form>
        <?php if ($sumResult !== ''): ?>
            <div class="result"><?php echo htmlspecialchars($sumResult, ENT_QUOTES, 'UTF-8'); ?></div>
        <?php endif; ?>
    </section>
</body>
</html>
