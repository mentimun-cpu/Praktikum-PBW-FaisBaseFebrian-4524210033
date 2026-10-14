<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - LaraPress</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #a1c4fd 0%, #c2e9fb 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: #fff;
            max-width: 480px;
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.2);
            overflow: hidden;
            animation: fadeIn 0.6s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .header {
            background: linear-gradient(135deg, #89f7fe 0%, #66a6ff 100%);
            color: white;
            padding: 35px 30px;
            text-align: center;
        }

        .header h1 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .header p {
            font-size: 0.9rem;
            opacity: 0.95;
        }

        .content {
            padding: 35px 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 0.9rem;
            font-weight: 600;
            color: #444;
        }

        .form-group input {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            font-size: 0.95rem;
            font-family: inherit;
            transition: border-color 0.3s ease;
            outline: none;
        }

        .form-group input:focus {
            border-color: #66a6ff;
        }

        .alert-error {
            background: #ffe5e5;
            color: #d93838;
            padding: 12px 16px;
            border-radius: 10px;
            font-size: 0.85rem;
            margin-bottom: 20px;
            border-left: 4px solid #d93838;
        }

        .btn-submit {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 50px;
            background: linear-gradient(135deg, #66a6ff 0%, #89f7fe 100%);
            color: white;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(102, 166, 255, 0.4);
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(102, 166, 255, 0.6);
        }

        .nav {
            margin-top: 25px;
            text-align: center;
        }

        .nav a {
            text-decoration: none;
            color: #66a6ff;
            font-weight: 600;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }

        .nav a:hover {
            color: #4a84d4;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🔐 Login LaraPress</h1>
            <p>Masukkan kredensial Anda untuk masuk</p>
        </div>
        
        <div class="content">
            {{-- Menampilkan Pesan Error jika Login Gagal --}}
            @if ($errors->any())
                <div class="alert-error">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="contoh@larapress.com" required autofocus>
                </div>

                <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <input type="password" id="password" name="password" placeholder="••••••••" required>
                </div>

                <button type="submit" class="btn-submit">Masuk Sekarang</button>
            </form>

            <div class="nav">
                <a href="/">← Kembali ke Halaman Utama</a>
            </div>
        </div>
    </div>
</body>
</html>