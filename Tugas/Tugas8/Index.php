<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Praktikum Pemrograman Web</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 40px;
        }

        h1.main-title {
            margin-bottom: 40px;
            color: #333;
        }

        .wrapper {
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
        }

        .container {
            background: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
        }

        .container h2 {
            color: #007BFF;
            margin-bottom: 20px;
        }

        .link {
            display: block;
            margin: 12px 0;
            text-decoration: none;
            font-size: 16px;
            color: #fff;
            background: #007BFF;
            padding: 10px;
            border-radius: 6px;
            transition: background 0.3s ease;
        }

        .link:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

    <h1 class="main-title">Daftar Tugas Praktikum Pemrograman Web</h1>

    <div class="wrapper">
        <div class="container">
            <h2>Tugas 7</h2>
            <a href="Tugas7/soal1.php" class="link">Soal 1</a>
            <a href="Tugas7/soal2.php" class="link">Soal 2</a>
            <a href="Tugas7/soal3.php" class="link">Soal 3</a>
            <a href="Tugas7/soal4.php" class="link">Soal 4</a>
        </div>

        <div class="container">
            <h2>Tugas 8</h2>
            <a href="latihan1.php" class="link">Latihan 1</a>
            <a href="latihan2.php" class="link">Latihan 2</a>
        </div>
    </div>

</body>
</html>
