<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โรงเรียนอนุบาลกุลจินต์</title>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f9fc;
            color: #333;
        }

        .header {
            background-color: rgba(0, 140, 186, 0.9);
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 32px;
            font-weight: 600;
            box-shadow: 0 4px 19px rgba(0, 0, 0, 0.1);
        }

        .nav {
            display: flex;
            justify-content: flex-end; /* จัดให้อยู่ขวามือ */
            background-color: rgba(0, 140, 186, 0.9);
        }

        .nav a {
            color: white;
            padding: 10px 20px;
            margin-left: 10px;
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .nav a:hover {
            background-color: rgba(0, 80, 117, 0.8);
        }

        .content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            max-width: 1400px;
            margin: 40px auto;
            padding: 100px;
            text-align: center;
        }

        .category {
            position: relative;
            color: white;
            font-size: 24px;
            font-weight: 600;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-decoration: none;
            display: block;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .category img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            filter: brightness(70%);
            transition: filter 0.3s ease;
        }

        .category:hover img {
            filter: brightness(50%);
        }

        .category div {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 24px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        @media (max-width: 768px) {
            .header {
                font-size: 28px;
            }

            .nav a {
                font-size: 16px;
                padding: 8px 15px;
            }

            .category div {
                font-size: 20px;
            }
        }

        .footer {
            background-color: rgba(0, 96, 128, 0.9);
            color: white;
            text-align: center;
            padding: 15px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        โรงเรียนอนุบาลกุลจินต์
    </div>

    <!-- Navigation Bar -->
    <div class="nav">
        <a href="/P2/HOME/home.php">เพิ่มข่าวสารใหม่</a>
        <a href="/P2/CRUD/home.php">จัดการผู้ใช้</a>
        <a href="/P2/logout.php">ออกจากระบบ</a>
    </div>
    
    <!-- Main Content -->
    <div class="content">
        <a href="/P2/HOME/manage/academic.php" class="category">
            <img src="https://www.kunlajin-hy.com/V3/event_pic/56-09-19/064.jpg" alt="งานวิชาการ">
            <div>งานวิชาการ</div>
        </a>

        <a href="/P2/HOME/manage/train.php" class="category">
            <img src="https://www.kunlajin-hy.com/V3/event_pic/61_09_13-15/022.jpg" alt="อบรม/สัมมนา">
            <div>อบรม/สัมมนา</div>
        </a>

        <a href="/P2/HOME/manage/activity.php" class="category">
            <img src="https://www.kunlajin-hy.com/V3/event_pic/58-01-29/049.jpg" alt="กิจกรรม">
            <div>กิจกรรม</div>
        </a>
    </div>

    <div class="footer">
        &copy; 1 ถนนรณภูมิ ตำบลหาดใหญ่ อำเภอหาดใหญ่ จังหวัดสงขลา 90110. Tel. : 074-257884, Fax. : 074-258107, E-mail : kunlajin@gmail.com.
    </div>

</body>
</html>
