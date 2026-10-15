# Panduan Lengkap: Persiapan & Memulai Praktikum Pemrograman Berbasis Web (PBW)

Dokumen ini merangkum seluruh perangkat, dependensi, dan langkah-langkah esensial yang harus disiapkan sebelum menjalani lembar praktikum (laprak) Pemrograman Berbasis Web (PBW), mulai dari proyek **LaraPress**, konfigurasi lingkungan, hingga cara mengaktifkan server dan compiler frontend.

## 1. Daftar Kebutuhan Perangkat & Teknologi (Requirements)

Sebelum memulai praktikum, pastikan seluruh perangkat lunak berikut telah terinstal dan terkonfigurasi dengan baik di sistem komputer Anda:

* **PHP (Versi 8.2 atau lebih baru):** Bahasa pemrograman *server-side* utama yang digunakan untuk menjalankan framework Laravel dan skrip backend.
* **Web Server Lokal (XAMPP atau Laragon):**
  * Menyediakan environment PHP serta engine basis data **MySQL / MariaDB** dan web server **Apache**.
  * *Catatan:* Laragon sangat direkomendasikan bagi pengguna Windows, namun XAMPP juga dapat digunakan dengan baik.
* **Composer (Versi 2.x):**
  * Manajer dependensi (*package manager*) untuk PHP.
  * Digunakan untuk mengunduh, menginstal, dan memperbarui framework Laravel beserta pustaka pendukungnya (seperti paket Breeze).
  * *Tips Setup Path Windows:* Pastikan path direktori PHP (contoh: `C:\xampp\php`) dan MySQL (`C:\xampp\mysql\bin`) sudah ditambahkan ke dalam Environment Variables agar bisa dipanggil lewat terminal.
* **Node.js & npm:** 
  * Dibutuhkan untuk mengelola dependensi frontend, menginstal Tailwind CSS, serta menjalankan compiler asset (Vite) menggunakan perintah `npm run dev`.
* **Code Editor (Visual Studio Code):**
  * Penyunting kode sumber utama.
  * *Saran Ekstensi:* **Laravel Blade Snippets** untuk mempermudah penulisan kode template.
* **Web Browser:** Google Chrome, Mozilla Firefox, atau Brave untuk menguji tampilan aplikasi web.

## 2. Langkah-Langkah Memulai Praktikum & Menjalankan Server

Setelah semua persyaratan terinstal, ikuti tahapan berikut secara berurutan untuk memulai sesi praktikum Anda:

### Langkah A: Menyalakan Web Server Lokal (XAMPP / Laragon)

1. Buka aplikasi **XAMPP Control Panel** (atau dashboard Laragon).
2. Klik tombol **Start** pada bagian **Apache** dan **MySQL** untuk memastikan layanan web server dan basis data berjalan aktif.

### Langkah B: Masuk ke Direktori Proyek

1. Buka aplikasi **Terminal**, **Command Prompt (CMD)**, **PowerShell**, atau terminal bawaan editor (VS Code).
2. Arahkan direktori terminal ke folder penyimpanan server lokal Anda:
   * Jika menggunakan XAMPP: `cd C:\xampp\htdocs`
   * Jika menggunakan Laragon: `cd C:\laragon\www`
3. Masuk ke dalam folder proyek web yang ingin dikerjakan (contoh: proyek *LaraPress* atau *SMP-Mentari*):
   ```bash
   cd LaraPress
   ```

### Langkah C: Mengaktifkan Backend Server (`php artisan serve`)

Untuk menjalankan server lokal Laravel agar aplikasi dapat diakses melalui browser, jalankan perintah Artisan berikut di terminal:

```bash
php artisan serve
```

* Terminal akan menampilkan tautan server lokal, biasanya berupa: `http://127.0.0.1:8000`.
* Buka web browser dan akses tautan tersebut untuk melihat halaman utama aplikasi. Biarkan terminal ini tetap terbuka.

### Langkah D: Mengaktifkan Frontend Asset Compiler (`npm run dev`)

Karena aplikasi modern berbasis Laravel (seperti implementasi Laravel Breeze yang menggunakan Tailwind CSS) memerlukan kompilasi aset frontend secara *real-time*, ikuti langkah berikut:

1. Buka **tab atau jendela terminal baru** (biarkan terminal `php artisan serve` tetap berjalan).
2. Pastikan Anda sudah berada di dalam folder proyek (`cd LaraPress`).
3. Jika ini adalah pertama kalinya Anda menjalankan proyek di perangkat tersebut, instal dependensi Node.js terlebih dahulu:
   ```bash
   npm install
   ```
4. Jalankan Vite development server untuk mengkompilasi file CSS dan JavaScript secara otomatis:
   ```bash
   npm run dev
   ```

## 3. Ringkasan Perintah Penting (Cheat Sheet)

| Kebutuhan / Aksi | Perintah CLI / Terminal | Keterangan | 
| :--- | :--- | :--- | 
| **Cek Versi PHP** | `php -v` | Memastikan PHP terdeteksi dan versinya sesuai. | 
| **Cek Versi Composer** | `composer -V` | Memastikan Composer aktif. | 
| **Membuat Proyek Baru** | `composer create-project laravel/laravel:^12.0 NamaProject` | Mengunduh *skeleton* Laravel baru (contoh: LaraPress). | 
| **Menjalankan Server Backend** | `php artisan serve` | Menyalakan server lokal port `8000`. | 
| **Kompilasi Aset Frontend** | `npm run dev` | Menjalankan Vite untuk memproses CSS/JS secara live. | 
| **Migrasi Database** | `php artisan migrate` | Menerapkan skema tabel ke dalam database MySQL. | 