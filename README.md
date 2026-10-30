# BAB I RINGKASAN PROYEK
## 1.1 Deskripsi Aplikasi
**SIMLAB** adalah sebuah platform berbasis web yang dirancang untuk mendigitalisasi dan mengotomatisasi seluruh proses bisnis laboratorium, mulai dari penyampaian informasi kepada publik hingga manajemen operasional internal pengujian sampel.
Sistem ini memfasilitasi interaksi antar masyarakat umum, pelanggan laboratorium, dan staf internal (Pegawai/Analis) guna meningkatkan efisiensi, akurasi data, dan transparansi dalam pelayanan jasa pengujian sampel.

## 1.2 Spesifikasi Teknologi
Aplikasi ini dikembangkan menggunakan teknologi terbaru dengan arsitektur modern:
* **Backend Framwork:** Laravel 11.x
* **Bahasa Pemrograman:** PHP >= 8.2
* **Frontende Bundler:** Vite 5.x
* **Frontend Stack:** Tailwind CSS
* **Database:** SQLite
* **Web Server (Lokal):** Laragon

## 1.3 Hak Akses & Fitur Utama Sistem
Sistem ini memiliki beberapa fitur utama terbagi berdasarkan 3 level hak akses pengguna:

### 1. Level Publik (Tanpa Login)
* **Landing Page Informasi:** Menampilkan profil laboratorium, daftar layana pengujian yang tersdia, tarif jasa, alur pengujian, dan kontak resmi.

### 2. Level Pelanggan (Setelah Login)
* **Pendaftaran Pengujian:** Formulir daring untuk mengajukan permohonan pengujian sampel baru
* **Pelacakan Sampel (Tracking):** Memantau status pengujian sampel secara real-time (misalnya: Menunggu antrean, Sedang diuji, Selesai)
* **Riwayat Pengujian:** melihat daftar riwayat pengujian sampel yang pernah diajukan sebelumnya.

### 3. Level Pegawai/Admin Internal (Setelah Login)
* **Penerimaan Sampel (Front OFfice):** Verifikasi fisik sampel yang masuk, pencatatan kondisi sampel
* **Manajemen Sutar Tugas:** Membuat dan menerbitkan surat tugas resmi untuk menunjuk Analis/Teknisi Lab yang bertanggung jawab atas pengujian sampel
* **Lembar Hasil Uji:** Input data parameter hasil pengujian lab hingga penerbitan dokumen sertifikathasil uji
* **Manajemen Transaksi & Keuangan:** Pengelolaan status pembayaran jasa pengujian, pembuatan invoice, dan pencatatan kas masuk dari pelanggan.

# BAB II PANDUAN MEMULAI


BAB III STRUKTUR KODE & KONVENSI

BAB IV SKEMA DATABASE & MODEL


