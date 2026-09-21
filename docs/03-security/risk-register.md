# Risk Register Awal SIKA

> Penilaian level bersifat kualitatif dan sederhana (berorientasi pembelajaran). Diperbarui pada Bab 5–8 ketika implementasi berkembang.

| ID | Aset | Risiko | Dampak | Level | Kontrol awal | Tujuan CIA |
|---|---|---|---|---|---|---|
| R-01 | Data mahasiswa | Dilihat pengguna yang tidak berhak | Privasi mahasiswa terganggu | Sedang | Rancang kontrol akses; implementasi diperdalam di Bab 6–8 | C |
| R-02 | Data KRS | Diubah tanpa otorisasi | Data akademik tidak valid | Tinggi | Validasi, otorisasi, logging; implementasi bertahap | I |
| R-03 | Layanan SIKA | Server tidak tersedia | Pengguna tidak dapat mengakses layanan | Sedang | Backup dan deployment/recovery dibahas pada Bab 8 | A |
| R-04 | Akun & kredensial pengguna | Kata sandi lemah atau dicuri sehingga akun disalahgunakan | Pihak tidak berhak masuk sebagai mahasiswa/admin | Tinggi | Kebijakan kata sandi, penyimpanan kata sandi dengan hash (Bab 6) | C, I |
| R-05 | Konfigurasi aplikasi (kredensial database) | Terunggah ke repository publik atau terlihat di sisi client | Database dapat diakses dan dirusak pihak luar | Tinggi | Pisahkan konfigurasi dari kode, jangan commit rahasia, pisahkan dev/prod (Bab 7–8) | C |
| R-06 | Input pengguna (URL/form, mis. parameter nim) | Input tidak divalidasi atau tidak di-escape | Halaman disisipi skrip berbahaya, data salah/bocor | Sedang | Validasi input, htmlspecialchars pada output (sudah dipakai di praktikum 5), prepared statement (Bab 6) | C, I |

Keterangan CIA: C = Confidentiality, I = Integrity, A = Availability.
