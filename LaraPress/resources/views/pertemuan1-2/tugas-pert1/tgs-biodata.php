<?php
// =======================
// CONTOH 2: BIODATA (MODIFIKASI)
// =======================

function statusKelulusan(float $ipk): string {
    if ($ipk >= 3.50) return 'Sangat Memuaskan (Cumlaude)';
    if ($ipk >= 3.00) return 'Memuaskan';
    if ($ipk >= 2.50) return 'Cukup';
    return 'Perlu Peningkatan';
}

// Kondisi baru: cek kelayakan beasiswa
function cekBeasiswa(float $ipk, int $semester): string {
    if ($ipk >= 3.50 && $semester <= 6) return "Layak Beasiswa Prestasi";
    if ($ipk >= 3.00 && $semester <= 8) return "Layak Beasiswa Bantuan";
    return "Belum Layak Beasiswa";
}

$mahasiswa = [
    'nim'      => '4524210131',
    'nama'     => 'Vina Aisya Hafiz',
    'prodi'    => 'Teknik Informatika',
    'semester' => 5,
    'ipk'      => 3.71,
    'email'    => 'vina.aisya@up.ac.id',   // Field baru
    'alamat'   => 'Jl. Merdeka No. 10, JakartaBogor' // Field baru
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Biodata Modifikasi</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #e9ecef; padding: 20px; }
        .card { background: white; padding: 25px; border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0,0,0,0.1); max-width: 600px; margin: auto; }
        h1 { color: #333; border-bottom: 2px solid #a3caf3; padding-bottom: 10px; }
        ul { list-style: none; padding: 0; }
        li { padding: 8px 0; border-bottom: 1px solid #eee; }
        .label { font-weight: bold; color: #555; display: inline-block; width: 100px; }
        .predikat { margin-top: 20px; padding: 15px; background: #d4edda;
                    color: #30a64c; border-radius: 5px; }
        .beasiswa { margin-top: 10px; padding: 15px; background: #fff3cd;
                    color: #856404; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Biodata Mahasiswa</h1>
        <ul>
            <?php foreach ($mahasiswa as $kunci => $nilai): ?>
                <li>
                    <span class="label"><?= ucfirst($kunci) ?>:</span>
                    <?= htmlspecialchars((string)$nilai) ?>
                </li>
            <?php endforeach; ?>
        </ul>

        <div class="predikat">
            <strong>Predikat:</strong> <?= statusKelulusan($mahasiswa['ipk']) ?>
        </div>

        <div class="beasiswa">
            <strong>Status Beasiswa:</strong>
            <?= cekBeasiswa($mahasiswa['ipk'], $mahasiswa['semester']) ?>
        </div>
    </div>
</body>
</html>
