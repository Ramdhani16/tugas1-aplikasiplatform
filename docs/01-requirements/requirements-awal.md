# Requirement Awal SIKA

> Baseline Bab 1. Requirement ini akan diperbarui pada Bab 2–8 (Incremental Secure SDLC).

## Problem Statement

Data akademik (profil mahasiswa, data dosen, mata kuliah, dan KRS) sering tersebar di berkas terpisah sehingga sulit dicari, mudah tidak konsisten, dan belum memiliki pembatasan akses yang jelas. SIKA dibangun sebagai aplikasi berbasis web yang memusatkan data pada satu basis data (MariaDB) dan menampilkannya melalui browser sesuai hak akses pengguna. Pada tahap MVP pembelajaran, SIKA dibatasi pada modul Dashboard, Data Mahasiswa, Data Dosen, Mata Kuliah, dan KRS.

## Stakeholder

| Stakeholder | Peran | Kepentingan | Hak akses / catatan |
|---|---|---|---|
| Mahasiswa | Pengguna utama | Melihat profil, daftar mata kuliah, dan mengisi KRS. | Baca data miliknya sendiri; isi/ubah KRS miliknya. |
| Dosen | Pengguna | Melihat data dosen dan mata kuliah yang relevan. | Baca data terbatas sesuai perannya. |
| Administrator | Pengelola sistem | Menjaga data master (mahasiswa, dosen, mata kuliah) tetap benar dan mutakhir. | Tambah, ubah, hapus data master; akses paling luas sehingga paling perlu diawasi. |
| Pihak kampus (prodi/bagian akademik) | Pemangku kepentingan | Data akademik akurat, aman, dan tersedia untuk kebutuhan layanan akademik. | Menetapkan kebijakan; menerima laporan/ringkasan. |

## Daftar Requirement

| ID | Requirement | Jenis | Terkait keamanan/privasi | Kriteria uji |
|---|---|---|---|---|
| FR-01 | Mahasiswa dapat membuka halaman profil dan melihat data akademiknya (NIM, nama, program studi, angkatan). | Fungsional | Ya (privasi) | Membuka halaman profil menampilkan data yang sesuai dengan NIM mahasiswa tersebut. |
| FR-02 | Mahasiswa dapat melihat daftar mata kuliah yang tersedia. | Fungsional | Tidak | Halaman Mata Kuliah menampilkan seluruh mata kuliah yang ada di database. |
| FR-03 | Mahasiswa dapat melihat dan mengisi KRS dari daftar mata kuliah yang tersedia. | Fungsional | Ya (integritas) | Mata kuliah yang dipilih tersimpan dan tampil pada KRS milik mahasiswa itu saja. |
| FR-04 | Sistem menampilkan Dashboard berisi ringkasan data akademik (jumlah mahasiswa, dosen, dan mata kuliah). | Fungsional | Tidak | Angka pada Dashboard sama dengan jumlah data pada database. |
| FR-05 | Administrator dapat menambah, mengubah, dan menghapus data mahasiswa. | Fungsional | Ya (integritas) | Perubahan data oleh admin tercermin pada halaman Data Mahasiswa dan tercatat dalam log. |
| FR-06 | Administrator dapat mengelola data dosen dan data mata kuliah. | Fungsional | Ya (integritas) | Tambah/ubah/hapus dosen dan mata kuliah berhasil dan konsisten. |
| FR-07 | Dosen dapat melihat data dosen dan daftar mata kuliah yang relevan dengannya. | Fungsional | Ya (privasi) | Dosen hanya melihat data sesuai haknya. |
| FR-08 | Sistem membatasi tampilan data berdasarkan peran pengguna (mahasiswa, dosen, administrator). | Fungsional | Ya (kontrol akses) | Mahasiswa tidak dapat membuka data mahasiswa lain atau fitur admin. |
| NFR-01 | Halaman utama dapat digunakan pada browser modern (Chrome, Firefox, Edge). | Nonfungsional | Tidak | Halaman tampil dan berfungsi normal pada ketiga browser. |
| NFR-02 | Data akademik tidak boleh ditampilkan kepada pengguna yang tidak berhak. | Nonfungsional / Security | Ya (Confidentiality) | Percobaan mengakses data tanpa hak ditolak. |
| NFR-03 | Data harus tetap benar dan konsisten; perubahan data penting dapat ditelusuri (logging). | Nonfungsional / Security | Ya (Integrity) | Setiap perubahan KRS/data master menghasilkan catatan log. |
| NFR-04 | Layanan SIKA tersedia pada jam akademik dan data dapat dipulihkan dari backup. | Nonfungsional / Security | Ya (Availability) | Backup dapat direstore pada uji pemulihan. |
| NFR-05 | Halaman utama dimuat dalam waktu wajar (target: kurang dari 3 detik pada jaringan lokal). | Nonfungsional | Tidak | Waktu muat pada tab Network Developer Tools kurang dari 3 detik. |

Requirement yang bertanda **Ya** pada kolom keamanan/privasi harus ditinjau ulang pada setiap tahap SDLC.
