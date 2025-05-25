<?php
// Array kutipan motivasi
$kutipanAcak = [
    "Belajar terus-menerus adalah kunci keberhasilan.",
    "Kesabaran dan kerja keras membuahkan hasil.",
    "Jangan takut mencoba hal baru dalam pemrograman.",
    "Setiap kesalahan adalah pelajaran berharga.",
    "Kreativitas adalah modal utama programmer.",
];

$artikelList = [
    1 => [
        "judul" => "Self Love",
        "tanggal" => "Kamis, 21 Desember 2023",
        "isi" => "Anda tidak bisa benar-benar mencintai orang lain, kecuali Anda benar-benar mencintai diri sendiri terlebih dahulu.",
        "gambar" => "https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/76/2023/10/08/10781893_4521788-1538033237.jpg",
        "sumber" => "https://www.djkn.kemenkeu.go.id/kpknl-bengkulu/baca-artikel/16709/Sudahkah-Kita-Mencintai-Diri-Sendiri.html"
    ],
];

function tampilkanArtikel($id, $data, $kutipanList) {
    if (!isset($data[$id])) {
        echo "<p>Artikel tidak ditemukan.</p>";
        return;
    }

    $artikel = $data[$id];
    $kutipan = $kutipanList[array_rand($kutipanList)];

    echo "<h2>{$artikel['judul']}</h2>";
    // Tanggal ditampilkan apa adanya
    echo "<small><em>Tanggal: {$artikel['tanggal']}</em></small>";
    echo "<p style='margin-top: 16px;'>{$artikel['isi']}</p>";
    echo "<img src='{$artikel['gambar']}' alt='Gambar Artikel' style='width:100%; max-width:500px; border-radius:8px; box-shadow:0 2px 4px rgba(0,0,0,0.2); margin: 16px 0;'>";
    echo "<blockquote style='font-style: italic; color: #4b5563;'>\"$kutipan\"</blockquote>";
    if (!empty($artikel['sumber'])) {
        echo "<p>Sumber: <a href='{$artikel['sumber']}' target='_blank'>{$artikel['sumber']}</a></p>";
    }
    echo "<p><a href='?'>← Kembali ke daftar artikel</a></p>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Blog Reflektif</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 24px;
            background-color: #fef9f9;
            color: #1f2937;
        }
        h1 {
            text-align: center;
            color: #be123c;
        }
        ul {
            list-style-type: none;
            padding-left: 0;
        }
        li {
            margin-bottom: 12px;
        }
        a {
            text-decoration: none;
            color: #2563eb;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h1>Blog Reflektif Mahasiswa</h1>

<div class="container">
    <?php
    if (isset($_GET['id'])) {
        $id = (int)$_GET['id'];
        tampilkanArtikel($id, $artikelList, $kutipanAcak);
    } else {
        echo "<h2>Daftar Artikel</h2><ul>";
        foreach ($artikelList as $id => $artikel) {
            echo "<li><a href='?id=$id'>{$artikel['judul']}</a> <small>({$artikel['tanggal']})</small></li>";
        }
        echo "</ul>";
    }
    ?>
</div>

</body>
</html>
