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

**Tampilan Halaman Login LaraPress**
menampilkan antarmuka halaman Autentikasi (Login) dari aplikasi "LaraPress". Halaman ini didesain secara modern dengan latar belakang bernuansa biru muda. Pada bagian tengah, terdapat kotak form login yang meminta pengguna untuk memverifikasi identitas mereka. Form tersebut terdiri dari dua input utama, yaitu kolom "Alamat Email" yang pada gambar diisi dengan kredensial vina@gmail.com, serta kolom "Kata Sandi" yang inputnya disembunyikan demi keamanan. Terdapat tombol aksi "Masuk Sekarang" untuk memproses data login ke server, serta tautan navigasi " Kembali ke Halaman Utama" di bagian bawah bagi pengguna yang ingin membatalkan proses login. 
<img width="1110" height="931" alt="Screenshot 2026-10-14 165959" src="https://github.com/user-attachments/assets/ec62ee8f-d235-4061-bc96-0ba8473ecfd3" />

**Kesimpulan Praktikum** 
Berdasarkan praktikum yang telah dilakukan, dapat disimpulkan bahwa: Sistem autentikasi yang lengkap dan aman telah berhasil diimplementasikan ke dalam aplikasi web "LaraPress" melalui instalasi package Laravel Breeze. Melalui praktikum ini, telah dipahami konsep fundamental autentikasi seperti cara kerja password hashing, perlindungan keamanan dari serangan CSRF, serta peran penting Sessions dan Cookies dalam mengenali pengguna yang sedang login. Selain pembuatan form login dan registrasi, keamanan aplikasi berhasil ditingkatkan dengan menerapkan perlindungan middleware('auth') pada rute grup CRUD, yang berfungsi untuk memblokir akses ke halaman manajemen postingan dan mengarahkan pengguna yang belum terautentikasi kembali ke halaman login secara otomatis. 
