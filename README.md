# Workflow Instalasi & Pengenalan: PHP, Laravel, & LaraPress (Windows + XAMPP)

Panduan langkah demi langkah *environment setup*, pengenalan dasar, dan instalasi PHP, Laravel, serta LaraPress yang disesuaikan khusus untuk sistem operasi **Windows** dengan **XAMPP**.

---

## 1. Prerequisites Check (Windows Stack)

Sebelum memulai, pastikan perangkat Windows Anda telah terpasang komponen berikut:

| Komponen | Lingkungan / Tool | Keterangan |
| --- | --- | --- |
| **OS** | Windows 10 / 11 | Platform Utama |
| **Server & DB** | XAMPP (PHP 8.2+, Apache, MySQL) | Local Web Server |
| **PHP Package Manager** | Composer | Wajib untuk Laravel & LaraPress |
| **Java Build Tool** | Apache Maven | Untuk modul/dependensi berbasis Java (jika ada) |
| **Frontend Runtime** | Node.js (LTS) & NPM | Untuk *assets bundling* (Vite/Tailwind/Mix) |
| **Terminal** | Command Prompt / PowerShell / Git Bash | Eksekusi perintah CLI |

---

## 2. Setup Environment Windows & XAMPP

### A. Pengaturan PHP (XAMPP) ke Environment Variables (PATH)

Agar perintah `php` dan `composer` dapat dipanggil dari folder mana saja melalui CMD/PowerShell:

1. Buka **System Properties** di Windows (`Win + R` $\rightarrow$ ketik `sysdm.cpl` $\rightarrow$ Enter).
2. Masuk ke tab **Advanced** $\rightarrow$ Klik **Environment Variables**.
3. Pada bagian *System variables*, cari variabel **Path**, lalu klik **Edit**.
4. Klik **New**, tambahkan path folder PHP dari XAMPP (default: `C:\xampp\php`).
5. Klik **OK** pada semua jendela.

> **Catatan Maven:** Pastikan path Maven (misal: `C:\apache-maven-x.x.x\bin`) juga sudah ditambahkan ke *Path* dan `JAVA_HOME` sudah dikonfigurasi di Environment Variables jika proyek mengintegrasikan Java.

### B. Instalasi Composer di Windows

1. Download installer **Composer-Setup.exe** dari situs resmi [getcomposer.org](https://getcomposer.org/).
2. Jalankan installer, pilih mode *Developer Mode* (opsional).
3. Saat installer meminta lokasi PHP executable, arahkan ke:
`C:\xampp\php\php.exe`
4. Selesaikan instalasi.

### C. Verifikasi Instalasi

Buka **Command Prompt (CMD)** atau **PowerShell** baru, lalu jalankan:

```cmd
php -v
composer --version
mvn -v

```

---

## 3. Pengenalan & Instalasi Laravel

### Apa itu Laravel?

Laravel adalah *framework* web berbasis PHP dengan arsitektur **MVC (Model-View-Controller)** yang menyediakan sintaks elegan, sistem routing ekspresif, ORM (Eloquent), serta fitur keamanan bawaan.

### Langkah Instalasi di XAMPP

1. **Jalankan XAMPP Control Panel**
* Start Service **Apache** dan **MySQL**.


2. **Masuk ke Directory Workspace**
Anda bisa menempatkan proyek di dalam folder `htdocs` XAMPP atau folder kerja lain:
```cmd
cd C:\xampp\htdocs

```


3. **Buat Proyek Laravel Baru**
```cmd
composer create-project laravel/laravel:"^12.0" LaraPress

```


4. **Masuk ke Folder Proyek**
```cmd
cd LaraPress

```


5. **Konfigurasi Environment Database (`.env`)**
Buka file `.env` menggunakan VS Code / Text Editor, sesuaikan pengaturan MySQL bawaan XAMPP:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_laravel
DB_USERNAME=root
DB_PASSWORD=

```
> **Catatan laravel:** Kalau error ga bisa instal
1. Error: Could not parse version constraint ”12.0”
• Penyebab: Terjadi kesalahan format penulisan pada file konfigurasi (seperti composer.json). Karakter kutipan yang digunakan adalah kutipan tipografis/pintar (” ”), bukan kutipan lurus standar (" "). Biasanya ini terjadi akibat hasil copy-paste dari blog atau aplikasi teks.
• Solusi:
	1. Buka file konfigurasi tempat dependensi ditulis.
	2. Cari baris teks versi 12.0.
	3. Hapus kutipan melengkung (”) dan ganti dengan kutipan lurus standar (").
	4. Contoh Perbaikan: Ubah "package": ”12.0” menjadi "package": "12.0".
2. Error: The zip extension and unzip/7z commands are both missing
• Penyebab: Lingkungan PHP (XAMPP) belum mengaktifkan ekstensi zip, sehingga Composer tidak bisa mengunduh dan mengekstrak file paket/dependensi.
• Solusi:
	1. Buka file konfigurasi PHP (php.ini) yang terletak di direktori instalasi XAMPP (biasanya di C:\xampp\php\php.ini).
	2. Cari baris teks ;extension=zip menggunakan fitur pencarian (Ctrl + F).
	3. Aktifkan ekstensi dengan cara menghapus tanda titik koma (;) di awal baris, sehingga berubah menjadi extension=zip.
	4. Simpan file php.ini.
	5. Restart Apache via XAMPP Control Panel dan buka ulang (restart) Terminal/Command Prompt sebelum menjalankan kembali perintah Composer.

*(Password bawaan MySQL pada XAMPP disetel kosong secara default).*

6. **Generate Application Key & Buat Database**
* Buka browser dan akses `http://localhost/phpmyadmin`.
* Buat database baru bernama `db_laravel`.
* Kembali ke terminal, jalankan migrasi awal:
```cmd
php artisan key:generate
php artisan migrate

```




7. **Jalankan Local Development Server**
```cmd
php artisan serve

```


Akses aplikasi di browser via URL: `[http://127.0.0.1:8000](http://127.0.0.1:8000)`

---

## 4. Pengenalan & Instalasi LaraPress

### Apa itu LaraPress?

LaraPress adalah paket CMS/Blog berbasis Laravel yang menambahkan fitur manajemen konten, modul admin, *content builder*, dan *user access control* langsung di atas struktur Laravel.

### Langkah Instalasi LaraPress

1. **Clone Repositori LaraPress / Install via Composer**
*Jika berupa proyek terpisah (Boilerplate/Template):*
```cmd
cd C:\xampp\htdocs
git clone https://github.com/larapress/larapress.cmd my-larapress
cd my-larapress

```


*Jika dipasang sebagai paket pada proyek Laravel yang sudah ada:*
```cmd
composer require larapress/larapress

```


2. **Install Dependensi PHP & Frontend**
```cmd
composer install
npm install
npm run build

```


3. **Konfigurasi Database & Environment**
* Duplikasi file `.env.example` menjadi `.env` jika belum ada:
```cmd
copy .env.example .env

```


* Buka `http://localhost/phpmyadmin` dan buat database baru (misal: `db_larapress`).
* Sesuaikan file `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_larapress
DB_USERNAME=root
DB_PASSWORD=

```




4. **Jalankan Key Generation, Migrasi, & Seeding**
```cmd
php artisan key:generate
php artisan migrate --seed

```


5. **Membuat Symbolic Link Storage (Media & Upload)**
```cmd
php artisan storage:link

```


6. **Jalankan Server LaraPress**
```cmd
php artisan serve

```


Akses dashboard admin LaraPress di `[http://127.0.0.1:8000/admin](http://127.0.0.1:8000/admin)`.

---

## 5. Ringkasan Perintah Penting (Cheat Sheet Windows)

```cmd
:: Verifikasi Runtime
php -v
composer --version
mvn -v

:: Server & Cache Handling
php artisan serve                   :: Jalankan server lokal
php artisan route:list              :: Cek daftar route
php artisan config:clear            :: Hapus cache konfigurasi
php artisan cache:clear             :: Hapus cache aplikasi

:: Database Handling
php artisan migrate                 :: Jalankan migrasi database
php artisan migrate:fresh --seed    :: Reset database total & isi data awal

:: Frontend Assets (Vite/NPM)
npm run dev                         :: Mode live hot-reload
npm run build                       :: Build aset produksi

```
> **Catatan pull jika menggunakan laravel:**
- (lalukan pull file.blade.php) di diketori/folder C:\xampp\htdocs\LaraPres\resources
- (lalukan pull web.php) di diketori/folder C:\xampp\htdocs\LaraPres\routes
