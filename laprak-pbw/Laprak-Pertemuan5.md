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

1. **Navbar Halaman Utama (Guest)** 

menunjukkan tampilan navigation bar pada halaman utama (Home) aplikasi "SMP Mentari" sebelum pengguna melakukan proses login (sebagai tamu/guest). Terdapat menu navigasi "Home", "Buku Tamu", serta tautan untuk fitur autentikasi yaitu "Log in" dan "Register" di sebelah kanan. 
<img width="982" height="156" alt="Screenshot 2026-10-14 173344" src="https://github.com/user-attachments/assets/17310727-118a-4ad2-a5d8-f40041fef146" />

2. **Halaman Registrasi (Register)** 

menampilkan halaman pendaftaran akun baru yang dapat diakses melalui URL /register. Halaman ini merupakan bawaan dari package Laravel Breeze, di mana pengguna diminta untuk menginputkan Nama, Email, Password, dan Konfirmasi Password untuk membuat akun. 
<img width="986" height="882" alt="Screenshot 2026-10-14 173400" src="https://github.com/user-attachments/assets/9431fe0c-76d5-48ea-aaef-19dba383389b" />

3. **Halaman Login**

menampilkan antarmuka halaman login bawaan dari Laravel Breeze yang diakses pada URL /login. Form ini berfungsi untuk memverifikasi kredensial pengguna (Email dan Password) agar dapat masuk ke dalam sistem dasbor admin. 
<img width="992" height="882" alt="Screenshot 2026-10-14 173415" src="https://github.com/user-attachments/assets/60014495-fc48-4e14-9120-a0961e2e02ed" />

4. **Halaman Dashboard (Admin)** 

menampilkan halaman Dashboard setelah pengguna (dalam hal ini bernama "vina") berhasil login. Halaman ini menggunakan layout khusus admin yang dilengkapi dengan sidebar menu di sebelah kiri, berisi menu "Section Master" (Dashboard, Kegiatan, Buku Tamu) dan "Pengaturan" (Konfigurasi Website), serta pesan sambutan "Selamat Datang, vina!" di area utama. 
<img width="991" height="880" alt="Screenshot 2026-10-14 173325" src="https://github.com/user-attachments/assets/a9e6ef83-c2f0-4ba4-a1e0-b296aeaf0c11" />

5. **Halaman Utama**

Setelah Login menampilkan Halaman Utama (Home) yang diakses setelah pengguna berhasil login. Pada bagian navbar, tautan login/register berubah menjadi nama pengguna (vina) beserta dropdown profil. Halaman ini menampilkan bagian "Kegiatan Terbaru di SMP Mentari" yang saat ini menampilkan kotak informasi "Belum Ada Kegiatan" karena data pada database masih kosong.
<img width="1008" height="897" alt="Screenshot 2026-10-14 173105" src="https://github.com/user-attachments/assets/6a536e74-9460-41fd-9f9d-9b5f4dd95bce" />

6. **Halaman Kelola Buku Tamu (Admin)** 

menunjukkan halaman pengelolaan Buku Tamu pada area back-end (admin). Halaman ini disiapkan untuk membaca dan menghapus daftar pesan dari pengunjung (implementasi fitur Read dan Delete). Saat ini tabel menunjukkan pesan peringatan bahwa belum ada pesan yang masuk. 
<img width="995" height="892" alt="Screenshot 2026-10-14 173141" src="https://github.com/user-attachments/assets/925a24ae-ff17-4457-84df-564d72a6670d" />

7. **Halaman Kelola Kegiatan (Admin)**

menampilkan antarmuka pengelolaan CRUD untuk tabel Kegiatan. Pada area admin ini, terdapat tabel "Daftar Kegiatan" yang masih belum memiliki data, serta sebuah tombol biru bertuliskan "+ Tambah Kegiatan" di pojok kanan atas yang difungsikan untuk menambah data kegiatan baru (Create). 
<img width="987" height="886" alt="Screenshot 2026-10-14 173206" src="https://github.com/user-attachments/assets/fde92ba3-e9e4-4a08-9f74-e88414430a35" />

8. **Halaman Pengaturan** 

Pengaturan Website adalah visualisasi dari implementasi fitur Dynamic Settings pada aplikasi. Di halaman ini, admin dapat melakukan konfigurasi website, seperti menentukan "Home Kegiatan Per Page" (jumlah kegiatan yang ditampilkan per halaman) yang secara bawaan diisi dengan nilai 6. 
<img width="995" height="891" alt="Screenshot 2026-10-14 173229" src="https://github.com/user-attachments/assets/25f9251b-9529-419c-8ca3-7a6d0ddb4301" />

9. **Halaman Profil**

Profil menunjukkan rute halaman /profile yang merupakan fitur manajemen profil bawaan dari sistem autentikasi Laravel Breeze. 
<img width="1005" height="897" alt="Screenshot 2026-10-14 173251" src="https://github.com/user-attachments/assets/b2dbd505-c3d0-4581-901a-2c9dacd53f46" />

**Kesimpulan:**
Praktikum berhasil mengimplementasikan sistem autentikasi menggunakan paket Laravel Breeze, yang mencakup fitur Registrasi, Login, dan manajemen Profil pengguna. Selain itu, arsitektur antarmuka admin (Dashboard) berhasil dirancang dengan memanfaatkan Master Layout, dilengkapi sidebar navigasi interaktif. Dari sisi pengolahan data, logika fungsionalitas CRUD (Create, Read, Update, Delete) berhasil diterapkan untuk entitas "Kegiatan" dan "Buku Tamu". Lebih lanjut, praktikum ini membuktikan keberhasilan pengaplikasian fitur Dynamic Settings yang memanfaatkan Database dan sistem Cache Laravel, sehingga admin dapat mengubah konfigurasi website secara dinamis (seperti batas halaman pagination) langsung dari antarmuka antarmuka aplikasi. Semua fitur ini telah terintegrasi dengan mulus pada struktur proyek Laravel 12.
