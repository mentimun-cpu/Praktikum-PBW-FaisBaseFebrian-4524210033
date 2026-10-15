<div align="center">

# **LAPORAN PRAKTIKUM PERTEMUAN1**  
## **PEMROGRAMAN BERBASIS WEB (A)**

<img width="300" height="291" alt="image" src="https://github.com/user-attachments/assets/c8ff510d-7d09-48c7-bca9-d70fab465d65" />


Disusun Oleh:  
**Fais Base Febrian**  
**4524210033**

**Dosen:**  
Bambang Riono Arsad, S.Kom., MMSI 

**S1-TEKNIK INFORMATIKA**  
**FAKULTAS TEKNIK UNIVERSITAS PANCASILA**  
**2026/2027**
</div>

**Tugas 1**
1. **Jalankan seluruh contoh Pertemuan 1 hingga menghasilkan output tanpa error kritis.**

**Kalkulator.php**  
<img width="483" height="921" alt="Screenshot 2026-09-22 175340" src="https://github.com/user-attachments/assets/8b1af213-0666-409c-a736-a78b63a53193" />

**Hasil Run:**  
<img width="615" height="322" alt="Screenshot 2026-09-22 173047" src="https://github.com/user-attachments/assets/71f12be9-90da-461a-ba4e-29c91eea4c80" />
 
**Biodata.php**  
<img width="750" height="776" alt="Screenshot 2026-09-22 175626" src="https://github.com/user-attachments/assets/2d66e310-5b8e-4a04-babb-bcc6dcfb4896" />
  
**Hasil Run:**  
<img width="572" height="401" alt="Screenshot 2026-09-22 173302" src="https://github.com/user-attachments/assets/21bd7f62-4c3b-4231-b26a-7bed0d3b9c55" />


2. **Buat minimal dua modifikasi bermakna pada program (misalnya field baru, kondisi baru, styling, query, atau validasi).**

A. **Modifikasi kalkulator.php: Input dari Form & Validasi**
   Sebelum: Angka dan operator di-hardcode. 
   Sesudah: Input dari form HTML, ada validasi input, dan tampilan lebih rapi.

<img width="1710" height="3408" alt="tgs-kalkulator" src="https://github.com/user-attachments/assets/e5f007f2-dfe2-4296-b57e-7bdfe1144701" />

**Hasil Run:**  
<img width="1146" height="682" alt="Screenshot 2026-09-22 173911" src="https://github.com/user-attachments/assets/808c3833-151a-4dde-a824-f411f3429a65" />


2. #### **Modifikasi biodata.php: Field Baru, Kondisi Baru, Styling**

Sebelum: Hanya field dasar, tanpa styling, hanya satu kondisi.  
	Sesudah: Ada field email & alamat, kondisi beasiswa, dan CSS.  
<img width="1680" height="2762" alt="tgs-biodata" src="https://github.com/user-attachments/assets/2e472080-ee5b-4b4a-bad7-e6dc37949a25" />

**Hasil Run:**  
<img width="1916" height="861" alt="image" src="https://github.com/user-attachments/assets/0b5ba442-1ca9-40eb-811c-2950e66dcd47" />

3. **Tuliskan penjelasan singkat untuk lima bagian kode yang menurut Anda paling penting.**  
1. Superglobals \$\_POST (kalkulator.php)  
   Digunakan untuk mengambil data yang dikirim dari form HTML. Ini penting karena memungkinkan program menerima input dari pengguna, bukan hanya nilai yang di-hardcode.  
2. Struktur switch-case (kalkulator.php)  
   Digunakan untuk memilih operasi aritmatika berdasarkan operator yang dipilih. switch-case lebih rapi dibandingkan if-else bertingkat saat mengevaluasi satu variabel terhadap banyak nilai.  
3. Fungsi dengan Type Hinting (biodata.php)  
   function statusKelulusan(float \$ipk): string memastikan parameter yang masuk bertipe float dan nilai kembalian bertipe string. Ini mencegah bug akibat tipe data yang salah.  
4. Perulangan foreach untuk Array Asosiatif (biodata.php)  
   Digunakan untuk menampilkan seluruh data mahasiswa tanpa menulis satu per satu. Setiap key (nim, nama, dll.) dan value-nya diambil secara otomatis.  
5. htmlspecialchars() untuk Keamanan Output (biodata.php)  
   Fungsi ini mengubah karakter khusus HTML menjadi entitas aman. Sangat penting untuk mencegah serangan XSS (Cross-Site Scripting) jika data berasal dari input pengguna.

4. **Sertakan screenshot sebelum dan sesudah modifikasi.**

**kalkulator.php sebelum modifikasi**  
<img width="615" height="322" alt="Screenshot 2026-09-22 173047" src="https://github.com/user-attachments/assets/f34d441f-19db-4810-b53b-f26872055333" />

**kalkulator.php sesudah modifikasi**  
<img width="1146" height="682" alt="Screenshot 2026-09-22 173911" src="https://github.com/user-attachments/assets/47ab6dd3-8233-495e-8186-9fad1dd34c12" />
  
**biodata.php sebelum modifikasi**  
<img width="572" height="328" alt="Screenshot 2026-09-23 185946" src="https://github.com/user-attachments/assets/ffe2319a-353d-4ac1-8e53-af033333d1b7" />

**biodata.php setelah modifikasi**  
<img width="1916" height="861" alt="image" src="https://github.com/user-attachments/assets/40c3f50b-6738-44c7-82bf-555eff6a37d6" />

5. **Tuliskan satu error yang pernah muncul, penyebabnya, dan langkah perbaikannya**

![][image14]  
**Error:**  
This site can't be reached  
localhost refused to connect.  
ERR\_CONNECTION\_REFUSED

Error ini muncul saat mencoba mengakses http\://localhost/prak-pbw/Pertemuan1/biodata.php di browser.

**Penyebab:**  
Error ini terjadi karena server lokal (Apache) pada XAMPP belum dijalankan. Saat mengetik alamat localhost di browser, browser mencoba menghubungi server web yang berjalan di komputer. Namun, karena Apache sebagai server web belum aktif, tidak ada yang merespons permintaan tersebut, sehingga browser menampilkan pesan ERR\_CONNECTION\_REFUSED (koneksi ditolak).   
<img width="831" height="302" alt="Screenshot 2026-09-23 185303" src="https://github.com/user-attachments/assets/f4ec1782-84f8-4e9b-81c9-8c34a71dd7bb" />

Langkah Perbaikan:

1. Buka aplikasi XAMPP Control Panel di laptop.  
2. Klik tombol Start pada baris Apache dan MySQL.  
3. Tunggu beberapa detik hingga nama modul berwarna hijau dan muncul tulisan *Running*.  
4. Buka kembali browser, lalu akses ulang [http\://localhost/prak-pbw/Pertemuan1/biodata.php](http://localhost/prak-pbw/Pertemuan1/biodata.php).  
5. <img width="831" height="156" alt="Screenshot 2026-09-23 185851" src="https://github.com/user-attachments/assets/6b28b11d-0549-4d1f-aab6-7c3a7775fe94" />

Setelah Apache dijalankan, program biodata.php dapat diakses kembali dan berjalan normal tanpa error.   
<img width="472" height="310" alt="image" src="https://github.com/user-attachments/assets/b15e8c05-7ab2-4f67-b978-96a59e52cc6c" />
