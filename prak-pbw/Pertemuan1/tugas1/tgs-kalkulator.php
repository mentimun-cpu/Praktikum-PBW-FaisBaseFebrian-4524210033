<?php
// kalkulator.php
$hasil = null;
$pesan = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = (float) ($_POST['a'] ?? 0);
    // Perbaikan Bug: Sebelumnya variabel $b mengambil dari $_POST['a']
    $b = (float) ($_POST['b'] ?? 0); 
    $operator = $_POST['operator'] ?? '+';

    switch ($operator) {
        case '+':
            $hasil = $a + $b;
            break;
        case '-':
            $hasil = $a - $b;
            break;
        case '*':
            $hasil = $a * $b;
            break;
        case '/':
            // Perbaikan Bug: Mencegah eksekusi $a / $b saat $b = 0 agar tidak Fatal Error
            if ($b == 0) {
                $pesan = 'Pembagian dengan nol tidak diperbolehkan.';
            } else {
                $hasil = $a / $b;
            }
            break;
        // Modifikasi: Menambahkan operator Modulo (Sisa Bagi)
        case '%':
            if ($b == 0) {
                $pesan = 'Modulo dengan nol tidak diperbolehkan.';
            } else {
                $hasil = $a % $b;
            }
            break;
        default:
            $pesan = 'Operator Tidak Valid.';
    }
}
?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Kalkulator</title>
    <style>
        /* Modifikasi: Menambahkan styling form */
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f9f9f9; }
        .kalkulator { background: white; padding: 25px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); display: inline-block; }
        input, select, button { padding: 10px; margin: 5px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px; }
        button { background-color: #007bff; color: white; cursor: pointer; font-weight: bold; border: none; }
        button:hover { background-color: #0056b3; }
        .alert { color: red; font-weight: bold; }
        .result { color: green; font-weight: bold; font-size: 18px; }
    </style>
</head>
<body>
    <div class="kalkulator">
        <h1>Kalkulator Sederhana</h1>
        <form method="post">
            <input type="number" step="any" name="a" required placeholder="Angka pertama">
            <select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="%">%</option>
            </select>
            <input type="number" step="any" name="b" required placeholder="Angka kedua">
            <button type="submit">Hitung</button>
        </form>

        <?php if ($pesan): ?>
            <p class="alert"><?= htmlspecialchars($pesan) ?></p>
        <?php elseif ($hasil !== null): ?>
            <p class="result">Hasil: <?= htmlspecialchars((string)$hasil) ?></p>
        <?php endif; ?>
    </div>
</body>
</html>