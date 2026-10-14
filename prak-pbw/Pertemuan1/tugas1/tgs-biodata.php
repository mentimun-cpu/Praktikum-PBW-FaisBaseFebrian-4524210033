<?php
// Biodata.php
function statuskelulusan(float $ipk): string {
    // Modifikasi: Menambahkan kondisi baru untuk Cumlaude
    if ($ipk == 4.00) return 'Cumlaude (Sempurna)';
    if ($ipk >= 3.50) return 'Sangat Memuaskan';
    if ($ipk >= 3.00) return 'Memuaskan';
    return 'Perlu peningkatan';
}

$mahasiswa = [
    'nim' => '2026001',
    'nama' => 'Fais Base',
    'prodi' => 'Teknik Informatika',
    // Modifikasi: Menambahkan field Fakultas
    'fakultas' => 'Ilmu Komputer',
    'semester' => 1,
    'ipk' => 3.72
];
?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Biodata</title>
    <style>
        /* Modifikasi: Menambahkan styling dasar CSS */
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f9; }
        .card { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); max-width: 400px; }
        h1 { color: #333; font-size: 24px; }
        ul { list-style-type: none; padding: 0; }
        li { padding: 8px 0; border-bottom: 1px solid #ddd; }
        .predikat { font-weight: bold; color: #2c3e50; margin-top: 15px; display: inline-block; padding: 5px 10px; background: #e2e8f0; border-radius: 4px; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Biodata Mahasiswa</h1>
        <ul>
            <?php foreach ($mahasiswa as $kunci => $nilai): ?>
                <li><strong><?= ucfirst($kunci) ?>:</strong> <?= htmlspecialchars((string)$nilai) ?></li>
            <?php endforeach; ?>
        </ul>
        <p class="predikat">Predikat: <?= statuskelulusan($mahasiswa['ipk']) ?></p>
    </div>
</body>
</html>