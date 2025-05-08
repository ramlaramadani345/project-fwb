<p align="center"><strong>RentCar - Sistem Informasi Rental Mobil</strong></p>

<div align="center">

![logo_unsulbar](public/img/logo.jpg)



<b>Ramla ramadani</b><br>
<b>D0222029</b><br>
<b>Framework Web Based</b><br>
<b>2025</b>
</div>

---

## Role dan Fitur-fiturnya

### Pelanggan
- Registrasi & Login
- Melihat daftar tempat rental mobil
- Melihat daftar mobil per tempat rental
- Melihat detail/deskripsi mobil
- Menyewa mobil
- Melakukan Pembayaran


### Pemilik usaha rental mobil
- Registrasi & Login
- Mengelola data mobil : Tambah/Edit/Hapus
- Melihat Daftar penyewa


### Admin
- Login
- Mengelola akun pengguna (pemilik usaha rental mobil & pelanggan)
- Mengelola kategori mobil


---

## Tabel-tabel database beserta field dan tipe datanya

### 1. Tabel users
| Nama Field      | Tipe Data | Keterangan                                     |
|---------------- |-----------|------------------------------------------------|
| id              | BIGINT    | Primary key                                    |
| nama            | VARCHAR   | Nama user                                      |
| email           | VARCHAR   | Email unik user                                |
| password        | VARCHAR   | Kata sandi (hashed)                            |
| peran           | ENUM      | pelanggan, pemilik usaha rental mobil, Admin   |
| created_at      | TIMESTAMP | Timestamp pembuatan                            |
| updated_at      | TIMESTAMP | Timestamp pembaruan                            |

### 2. Tabel rentals (tempat usaha rental mobil)
| Nama Field   | Tipe Data | Keterangan                              |
|--------------|-----------|-----------------------------------------|
| id           | BIGINT    | Primary key                             |
| user_id      | BIGINT    | Foreign key ke tabel users (pemilik)    |
| nama_rental  | VARCHAR   | Nama tempat rental mobil                |
| alamat       | TEXT      | Lokasi rental                           |
| no_tlp       | VARCHAR   | kontak                                  |
| deskripsi    | TEXT      | Profil / informasi                      |
| created_at   | TIMESTAMP | Timestamp pembuatan                     |
| updated_at   | TIMESTAMP | Timestamp pembaruan                     |

### 3. Tabel Cars (Mobil)
| Nama Field       | Tipe Data | Keterangan                             |
|------------------|-----------|----------------------------------------|
| id               | BIGINT    | Primary key                            |
| rental_id        | BIGINT    | Foreign key ke rentals                 |
| nama_mobil       | VARCHAR   | Nama mobil                             |
| slug             | VARCHAR   | untuk URL                              |
| harga_sewa       | INT       | Harga sewa mobil                       |
| gambar           | VARCHAR   | Gambar mobil                           |
| bahan_bakar      | VARCHAR   | Bahan bakar mobil                      |
| jumlah_kursi     | INT       | Jumlah kursi mobil                     |
| transmisi        | VARCHAR   | Manual/otomatis                        |
| status           | VARCHAR   | Tersedia/tidak tersedia                |
| deskripsi        | TEXT      | detail mobil                           |
| P3K              | TINYINT   | mobil memiliki P3K atau tidak          |
| charger          | TINYINT   | mobil memiliki charger atau tidak      |
| ac               | TINYINT   | mobil memiliki ac atau tidak           |
| created_at       | TIMESTAMP | Timestamp pembuatan                    |
| updated_at       | TIMESTAMP | Timestamp pembaruan                    |

### 4. Tabel Bookings (Penyewaan)
| Nama Field       | Tipe Data | Keterangan                       |
|------------------|-----------|----------------------------------|
| id               | BIGINT    | Primary key                      |
| user_id          | BIGINT    | Foreign key ke users(pelanggan)  |
| car_id           | BIGINT    | Foreign key ke cars              |
| tanggal_mulai    | DATE      | tanggal mulai penyewaan          |
| tanggal_selesai  | DATE      | tanggal selesai penyewaan        |
| durasi           | VARCHAR   | durasi penyewaan                 |
| total_harga      | DECIMAL   | total harga sewa                 |
| status_booking   | ENUM      | status penyewaan                 |
| created_at       | TIMESTAMP | Timestamp pembuatan              |
| updated_at       | TIMESTAMP | Timestamp pembaruan              |

### 5. Tabel Payments (Pembayaran)
| Nama Field        | Tipe Data | Keterangan                        |
|-------------------|-----------|-----------------------------------|
| id                | BIGINT    | Primary key                       |
| booking_id        | BIGINT    | Foreign key ke bookings           |
| metode_pembayaran | VARCHAR   | metode pembayaran yang digunakan  |
| status_pembayaran | ENUM      | berhasil, gagal, batal            |
| bukti_pembayaran  | VARCHAR   | foto bukti pembayaran             |
| created_at        | TIMESTAMP | Timestamp pembuatan               |
| updated_at        | TIMESTAMP | Timestamp pembaruan               |

---

## Jenis relasi dan tabel yang berelasi

- users(pemilik) ↔ rentals → One-to-many  
- rentals ↔ cars → One-to-Many  
- users(pelanggan) ↔ bookings → One-to-Many  
- cars ↔ bookings → One-to-Many  
- bookings ↔ payments → One-to-One  

---