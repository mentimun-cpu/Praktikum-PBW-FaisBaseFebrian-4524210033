<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di LaraPress</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #beffdeea 0%, #dfcaae 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: #f7fffc;
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
            background: linear-gradient(135deg, #b6caff 0%, #d0ffe2 100%);
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

        .content {
            padding: 40px;
        }

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
            display: inline-block;
        }

        .btn-primary {
            background: linear-gradient(135deg, #94a6f3 0%, #92e3e9 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(50, 175, 184, 0.99);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(121, 144, 250, 0.85);
        }

        .btn-secondary {
            background: #f0f0f5;
            color: #7c94ff;
        }

        .btn-secondary:hover {
            background: #8aa0ff;
            color: white;
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🚀 Selamat Datang di LaraPress</h1>
            <p>Blog sederhana berbasis Laravel 12</p>
        </div>
        <div class="content">
            <p>Ini adalah halaman utama dari aplikasi blog kita. Jelajahi halaman lainnya untuk mengenal LaraPress lebih dekat.</p>
            <div class="nav">
                <a href="/tentang-kami" class="btn-primary">Tentang Kami</a>
                <a href="/kontak" class="btn-secondary">Hubungi Kami</a>
            </div>
        </div>
    </div>
</body>
</html>