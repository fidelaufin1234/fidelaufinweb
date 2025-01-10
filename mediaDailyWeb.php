<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Harian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #007BFF;
            color: white;
            padding: 15px;
            text-align: center;
        }
        nav {
            background-color: #0056b3;
            color: white;
            display: flex;
            justify-content: space-around;
            padding: 10px 0;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 5px 15px;
        }
        nav a:hover {
            background-color: #003d80;
            border-radius: 5px;
        }
        .content {
            padding: 20px;
        }
        .card {
            background-color: white;
            margin: 15px auto;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }
        footer {
            text-align: center;
            background-color: #007BFF;
            color: white;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1>Jambi Mantap Media</h1>
        <p>Tempat untuk mengatur dan menikmati media sehari-hari</p>
    </header>

    <nav>
        <a href="#berita">Berita</a>
        <a href="#hiburan">Hiburan</a>
        <a href="#olahraga">Olahraga</a>
        <a href="#kontak">Kontak</a>
    </nav>

    <div class="content">
        <section id="berita" class="card">
            <h2>Berita Terbaru</h2>
            <p>Dapatkan berita terkini dari berbagai sumber terpercaya.</p>
            <a href="https://news.google.com/" class="button" target="_blank">Lihat Berita</a>
        </section>

        <section id="hiburan" class="card">
            <h2>Hiburan</h2>
            <p>Temukan film, musik, dan acara TV favorit Anda.</p>
            <a href="https://www.netflix.com/" class="button" target="_blank">Lihat Hiburan</a>
        </section>

        <section id="olahraga" class="card">
            <h2>Olahraga</h2>
            <p>Ikuti update terbaru tentang tim dan olahraga favorit Anda.</p>
            <a href="https://www.espn.com/" class="button" target="_blank">Lihat Olahraga</a>
        </section>

        <section id="kontak" class="card">
            <h2>Kontak Kami</h2>
            <p>Jika ada pertanyaan atau saran, hubungi kami di <a href="mailto:email@example.com">email@example.com</a>.</p>
        </section>
    </div>

    <footer>
        &copy; 2025 Media Harian. Semua hak dilindungi.
    </footer>
</body>
</html>
