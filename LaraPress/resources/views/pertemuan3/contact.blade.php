<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - LaraPress</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #dc91ff 0%, #6ff8ff 100%);
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
            background: linear-gradient(135deg, #dda3ff 0%, #88e3ff 100%);
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

        .contact-list {
            list-style: none;
            margin-bottom: 30px;
        }

        .contact-list li {
            display: flex;
            align-items: center;
            padding: 16px 20px;
            background: #f8f9ff;
            border-radius: 12px;
            margin-bottom: 12px;
            border-left: 4px solid #76bfff;
            transition: all 0.3s ease;
        }

        .contact-list li:hover {
            background: #eef4ff;
            transform: translateX(5px);
        }

        .contact-list .icon {
            font-size: 1.5rem;
            margin-right: 15px;
        }

        .contact-list strong {
            color: #333;
            margin-right: 8px;
        }

        .contact-list span {
            color: #666;
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
            background: linear-gradient(135deg, #89c6fc 0%, #00f2fe 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(137, 195, 247, 0.88);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(134, 199, 255, 0.82);
        }

        .btn-secondary {
            background: #f0f0f5;
            color: #7ec3ff;
        }

        .btn-secondary:hover {
            background: #a8d0f3;
            color: white;
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📬 Kontak Kami</h1>
            <p>Hubungi kami melalui informasi berikut</p>
        </div>
        <div class="content">
            <ul class="contact-list">
                <li>
                    <span class="icon">✉️</span>
                    <strong>Email:</strong>
                    <span>admin@larapress.com</span>
                </li>
                <li>
                    <span class="icon">📞</span>
                    <strong>Telepon:</strong>
                    <span>(021) 555-1234</span>
                </li>
                <li>
                    <span class="icon">📍</span>
                    <strong>Alamat:</strong>
                    <span>Jl. Pendidikan No. 45, Jakarta</span>
                </li>
            </ul>
            <div class="nav">
                <a href="/" class="btn-secondary">← Halaman Utama</a>
                <a href="/tentang-kami" class="btn-primary">Tentang Kami</a>
            </div>
        </div>
    </div>
</body>
</html>