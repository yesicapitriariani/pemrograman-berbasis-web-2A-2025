<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Timeline Pengalaman Kuliah</title>
    <style>
        body {
            background-color: #fff1f2;
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 768px;
            margin: 0 auto;
            padding: 24px;
        }
        h1 {
            font-size: 1.875rem;
            font-weight: bold;
            text-align: center;
            color: #1f2937;
            margin-bottom: 8px;
        }
        nav {
            display: flex;
            justify-content: center;
            gap: 24px;
            margin-bottom: 24px;
        }
        nav a {
            color: #1d4ed8;
            font-weight: 600;
            text-decoration: none;
        }
        nav a:hover {
            text-decoration: underline;
        }
        h2 {
            font-size: 1.5rem;
            font-weight: 600;
            text-align: center;
            color: #374151;
            margin-bottom: 16px;
        }
        .timeline {
            background-color: #dbeafe;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            padding: 24px;
            margin: 0 auto;
            max-width: 600px;
        }
        .timeline-item {
            margin-bottom: 30px;
        }
        .timeline-item h3 {
            margin: 0 0 4px;
            font-size: 1.125rem;
            font-weight: bold;
            color: #2c3e50;
        }
        .timeline-item p {
            margin: 0;
            color: #555;
        }
        .btn-next {
            display: inline-block;
            background-color: #2563eb;
            color: white;
            padding: 8px 24px;
            border-radius: 0.375rem;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .btn-next:hover {
            background-color: #1e40af;
        }
        .text-center {
            text-align: center;
            margin-top: 24px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Profil Interaktif Mahasiswa</h1>
    <nav>
        <a href="profil.php">Profil</a>
        <a href="timeline.php">Timeline</a>
        <a href="blog.php">Blog</a>
    </nav>

    <h2>Timeline Pengalaman Kuliah</h2>

    <div class="timeline">
        <?php
        $pengalaman = [
            [
                "tahun" => "2024",
                "judul" => "Masuk Kuliah",
                "deskripsi" => "Awal masuk dan pengenalan lingkungan kampus dan prodi Sistem Informasi."
            ],
            [
                "tahun" => "2025",
                "judul" => "Perkuliahan dan Magang",
                "deskripsi" => "Mengerjakan tugas, mata kuliah semakin spesifik menjurus pada bidang minat dan magang distartup tertentu sebagai pengalaman praktek."
            ],
            [
                "tahun" => "2026",
                "judul" => "Skripsi dan Tugas Akhir",
                "deskripsi" => "Penelitian dan pengembangan karya ilmiah."
            ],
            [
                "tahun" => "2027",
                "judul" => "Yudisium dan Wisuda",
                "deskripsi" => "Proses pelepasan dan wisuda."
            ]
        ];

        foreach ($pengalaman as $item) {
            echo '<div class="timeline-item">';
            echo "<h3>{$item['tahun']} - {$item['judul']}</h3>";
            echo "<p>{$item['deskripsi']}</p>";
            echo '</div>';
        }
        ?>
    </div>

</body>
</html>
