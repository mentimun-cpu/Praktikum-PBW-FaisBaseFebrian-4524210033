<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - LaraPress</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: #fff;
            max-width: 800px;
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            overflow: hidden;
            animation: fadeIn 0.6s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .header {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
            padding: 40px;
            text-align: center;
        }

        .header h1 {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .header p {
            font-size: 0.95rem;
            opacity: 0.9;
        }

        .content { padding: 40px; }

        .content p {
            color: #555;
            font-size: 1.05rem;
            line-height: 1.7;
            margin-bottom: 24px;
            text-align: center;
        }

        .nav {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .nav a {
            text-decoration: none;
            padding: 12px 26px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(245, 87, 108, 0.4);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(245, 87, 108, 0.6);
        }

        .btn-secondary {
            background: #f0f0f5;
            color: #f5576c;
        }

        .btn-secondary:hover {
            background: #f5576c;
            color: white;
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📖 Tentang LaraPress</h1>
            <p>Mengenal lebih dekat proyek kami</p>
        </div>
        <div class="content">
            <p>LaraPress adalah sebuah proyek blog sederhana yang dibuat untuk mempelajari dasar-dasar framework Laravel 12. Proyek ini menjadi media pembelajaran untuk memahami konsep Route, View, dan Blade templating.</p>
            <div class="nav">
                <a href="/" class="btn-secondary">← Halaman Utama</a>
                <a href="/kontak" class="btn-primary">Hubungi Kami</a>
            </div>
        </div>
    </div>
</body>
</html>