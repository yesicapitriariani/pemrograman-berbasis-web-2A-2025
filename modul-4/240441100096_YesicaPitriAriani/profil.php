<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Interaktif Mahasiswa</title>
    <style>
        body {
            background-color: #fdf2f8;
            font-family: sans-serif;
        }

        h1 {
            text-align: center;
            color: #1f2937;
            font-size: 1.875rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        nav {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        nav a {
            color: #1d4ed8;
            font-weight: 600;
            text-decoration: none;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 768px;
            margin: 0 auto;
            padding: 1.5rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 2rem;
        }

        td {
            border: 1px solid #9ca3af;
            padding: 0.5rem 1rem;
        }

        tr:nth-child(even) {
            background-color: #dbeafe;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }

        form > div {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        textarea, select, input[type="text"], input[type="email"] {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #60a5fa;
            border-radius: 0.375rem;
        }

        .checkbox-group label,
        .radio-group label {
            margin-right: 1rem;
        }

        button {
            background-color: #bfdbfe;
            color: black;
            padding: 0.5rem 1.5rem;
            border: none;
            border-radius: 0.375rem;
            cursor: pointer;
        }

        button:hover {
            background-color: #1d4ed8;
            color: white;
        }

        .text-center {
            text-align: center;
        }

        .font-bold {
            font-weight: bold;
        }

        .italic {
            font-style: italic;
        }
    </style>
</head>
<body>
<h1>Profil Interaktif Mahasiswa</h1>
<nav>
    <a href="profil.php">Profil</a>
    <a href="timeline.php">Timeline</a>
    <a href="blog.php">Blog</a>
</nav>

<?php
$nama = "Yesica Pitri Ariani";
$nim = "2304411000";
$ttl = "Bojonegoro, 02 November";
$email = "yesicapitriqariani5@gmail.com";
$hp = "082398769090";
?>

<div class="container">
    <table>
        <tr>
            <td><strong>Nama</strong></td>
            <td><?= $nama ?></td>
        </tr>
        <tr>
            <td><strong>NIM</strong></td>
            <td><?= $nim ?></td>
        </tr>
        <tr>
            <td><strong>Tempat, Tanggal Lahir</strong></td>
            <td><?= $ttl ?></td>
        </tr>
        <tr>
            <td><strong>Email</strong></td>
            <td><?= $email ?></td>
        </tr>
        <tr>
            <td><strong>Nomor HP</strong></td>
            <td><?= $hp ?></td>
        </tr>
    </table>

    <form method="POST">
        <div>
            <label>Bahasa Pemrograman yang Dikuasai:</label>
            <div class="checkbox-group">
                <label><input type="checkbox" name="bahasa[]" value="PHP"> PHP</label>
                <label><input type="checkbox" name="bahasa[]" value="Python"> Python</label>
                <label><input type="checkbox" name="bahasa[]" value="JavaScript"> JavaScript</label>
                <label><input type="checkbox" name="bahasa[]" value="C++"> C++</label>
            </div>
        </div>

        <div>
            <label>Pengalaman Membuat Proyek Pribadi:</label>
            <textarea name="pengalaman" rows="4"></textarea>
        </div>

        <div>
            <label>Software yang Sering Digunakan:</label>
            <div class="checkbox-group">
                <label><input type="checkbox" name="software[]" value="VS Code"> VS Code</label>
                <label><input type="checkbox" name="software[]" value="XAMPP"> XAMPP</label>
                <label><input type="checkbox" name="software[]" value="Git"> Git</label>
            </div>
        </div>

        <div>
            <label>Sistem Operasi yang Digunakan:</label>
            <div class="radio-group">
                <label><input type="radio" name="os" value="Windows"> Windows</label>
                <label><input type="radio" name="os" value="Linux"> Linux</label>
                <label><input type="radio" name="os" value="Mac"> Mac</label>
            </div>
        </div>

        <div>
            <label>Tingkat Penguasaan PHP:</label>
            <select name="tingkat_php">
                <option value="">-- Pilih --</option>
                <option value="Pemula">Pemula</option>
                <option value="Menengah">Menengah</option>
                <option value="Mahir">Mahir</option>
            </select>
        </div>

        <div class="text-center">
            <button type="submit" name="submit">Kirim</button>
        </div>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $bahasa = $_POST['bahasa'] ?? [];
        $pengalaman = trim($_POST['pengalaman'] ?? '');
        $software = $_POST['software'] ?? [];
        $os = $_POST['os'] ?? '';
        $tingkat_php = $_POST['tingkat_php'] ?? '';

        if (empty($bahasa) || empty($pengalaman) || empty($software) || empty($os) || empty($tingkat_php)) {
            echo "<p class='text-red text-center font-bold'>Semua input wajib diisi!</p>";
        } else {
            echo "<h2 class='text-center font-bold'>Hasil Input Anda</h2>";
            echo "<table>";
            echo "<tr><td><strong>Bahasa Pemrograman</strong></td><td>" . implode(', ', $bahasa) . "</td></tr>";
            echo "<tr><td><strong>Pengalaman</strong></td><td>$pengalaman</td></tr>";
            echo "<tr><td><strong>Software</strong></td><td>" . implode(', ', $software) . "</td></tr>";
            echo "<tr><td><strong>Sistem Operasi</strong></td><td>$os</td></tr>";
            echo "<tr><td><strong>Tingkat PHP</strong></td><td>$tingkat_php</td></tr>";
            echo "</table>";

            echo "<p class='text-center italic'>Deskripsi: $pengalaman</p>";

            if (count($bahasa) > 2) {
                echo "<p class='text-green text-center font-bold'>Anda cukup berpengalaman dalam pemrograman!</p>";
            }
        }
    }
    ?>
</div>
</body>
</html>
