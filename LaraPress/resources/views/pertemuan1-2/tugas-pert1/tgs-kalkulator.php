<?php
// =======================
// CONTOH 1: KALKULATOR (MODIFIKASI)
// =======================

$hasil = "";
$error = "";

// Cek apakah form sudah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $angka1   = $_POST['angka1'];
    $angka2   = $_POST['angka2'];
    $operator = $_POST['operator'];

    // Validasi: pastikan input angka
    if (!is_numeric($angka1) || !is_numeric($angka2)) {
        $error = "Input harus berupa angka!";
    } else {
        $angka1 = (float)$angka1;
        $angka2 = (float)$angka2;

        switch ($operator) {
            case "+": $hasil = $angka1 + $angka2; break;
            case "-": $hasil = $angka1 - $angka2; break;
            case "*": $hasil = $angka1 * $angka2; break;
            case "/":
                if ($angka2 == 0) {
                    $error = "Tidak bisa membagi dengan nol!";
                } else {
                    $hasil = $angka1 / $angka2;
                }
                break;
            default: $error = "Operator tidak valid!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Modifikasi</title>
    <style>
        body { font-family: Arial; background: #f0f2f5; padding: 30px; }
        .box { background: white; padding: 25px; max-width: 400px; margin: auto;
               border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        input, select { padding: 8px; margin: 5px 0; width: 100%; box-sizing: border-box; }
        button { background: #007bff; color: white; padding: 10px; border: none;
                 width: 100%; border-radius: 5px; cursor: pointer; }
        button:hover { background: #0056b3; }
        .hasil { background: #d4edda; padding: 10px; margin-top: 15px;
                 border-radius: 5px; color: #155724; }
        .error { background: #f8d7da; padding: 10px; margin-top: 15px;
                 border-radius: 5px; color: #721c24; }
    </style>
</head>
<body>
    <div class="box">
        <h2>Kalkulator Sederhana</h2>
        <form method="POST">
            <label>Angka 1:</label>
            <input type="text" name="angka1" placeholder="Masukkan angka" required>

            <label>Operator:</label>
            <select name="operator">
                <option value="+">+ (Tambah)</option>
                <option value="-">- (Kurang)</option>
                <option value="*">* (Kali)</option>
                <option value="/">/ (Bagi)</option>
            </select>

            <label>Angka 2:</label>
            <input type="text" name="angka2" placeholder="Masukkan angka" required>

            <button type="submit">Hitung</button>
        </form>

        <?php if ($error): ?>
            <div class="error"><?= $error ?></div>
        <?php elseif ($hasil !== ""): ?>
            <div class="hasil">Hasil: <b><?= $hasil ?></b></div>
        <?php endif; ?>
    </div>
</body>
</html>
