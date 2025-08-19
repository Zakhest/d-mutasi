# D-Mutasi (Multi-Level User)

## 📌 Deskripsi  
D-Mutasi adalah aplikasi berbasis website yang dikembangkan untuk mendigitalisasi proses **mutasi siswa Sekolah Dasar** di Dinas Pendidikan Kota Bogor.  
Penelitian ini berfokus pada **pengembangan fitur Multi-Level User** sehingga aplikasi dapat digunakan oleh **Staf Dinas, Pejabat Dinas, dan Wali Murid** dengan hak akses berbeda.  

Aplikasi ini menggantikan sistem manual (Excel & Word) yang sebelumnya digunakan dalam pembuatan dan pengarsipan surat mutasi, sehingga lebih efisien, akurat, dan terpusat secara digital.  

---

## 🎯 Tujuan  
- Mengembangkan **login multi-level user** pada aplikasi D-Mutasi.  
- Mempermudah **pengelolaan mutasi siswa** (keluar, masuk, keluar negeri).  
- Menyediakan layanan **online** untuk wali murid tanpa harus datang langsung ke kantor Dinas Pendidikan.  

---

## 👥 Jenis Pengguna & Fitur  

### 1. **Staf Dinas Pendidikan**
- Dashboard rekap data mutasi.  
- CRUD data mutasi siswa, data sekolah, data pejabat, dan format surat.  
- Memproses & mencetak surat mutasi dalam format PDF.  

### 2. **Pejabat Dinas (Kadis, Kabid, Kasi)**
- Dashboard mutasi sesuai kewenangan.  
- Verifikasi & tanda tangan digital (ACC) pada permintaan mutasi.  

### 3. **Wali Murid**
- Registrasi & login mandiri.  
- Mengajukan permohonan mutasi dengan unggah berkas.  
- Mengunduh surat mutasi yang sudah disetujui.  

---

## 🛠️ Teknologi yang Digunakan  
- **Bahasa Pemrograman**: PHP  
- **Framework**: CodeIgniter (MVC)  
- **Database**: MySQL  
- **Web Server**: XAMPP (Apache, MySQL, PHP)  
- **Editor**: Visual Studio Code  

---

## ⚙️ Metode Pengembangan  
Metode pengembangan menggunakan **SDLC (Software Development Life Cycle)** dengan tahapan:  
1. **Planning** – Identifikasi kebutuhan & observasi sistem lama.  
2. **Analysis** – Menentukan masalah & solusi.  
3. **Design** – Perancangan database, ERD, DFD, UI/UX.  
4. **Implementation** – Coding dengan CodeIgniter + MySQL.  
5. **Testing** – Uji coba struktural, fungsional, validasi.  
6. **Maintenance** – Pemeliharaan & pembaruan fitur.  

---

## 🚀 Hasil & Manfaat  
- Proses mutasi dapat dilakukan **secara online**.  
- **Efisiensi & transparansi** layanan publik meningkat.  
- Data mutasi tersimpan **terpusat & akurat** dalam database.  
- Mendukung transformasi digital Dinas Pendidikan Kota Bogor.  

---

## 📂 Struktur Proyek (Sederhana)  
```
D-Mutasi/
│── application/
│   ├── controllers/
│   ├── models/
│   ├── views/
│   └── config/
│── database/
│   └── d_mutasi.sql
│── assets/
│   ├── css/
│   ├── js/
│   └── images/
│── README.md
```

---

## 👨‍🎓 Penulis  
**Muhammad Zaki Akbar**  
Program Studi Manajemen Informatika  
Sekolah Vokasi – Universitas Pakuan  
Bogor, 2025  
