# Sistem Informasi Pembayaran SPP
> *Mengelola pembayaran SPP dengan sistem informasi.*

Sistem Informasi Pembayaran SPP dibuat dengan Framework **Laravel 8** dan **Livewire 2**

### Daftar Isi
1. [Tentang Sistem Informasi SPP](#tentang)
2. [Tujuan](#tujuan)
3. [Cara Install](#cara-install)
    - [Spesifikasi yang Dibutuhkan](#spesifikasi-minimum-server)
    - [Tahap Install](#tahap-install)
4. [Developer dan Kontributor](#developer-dan-kontributor)
5. [Ingredients (Ramuan)](#ramuan)
6. [Lisensi](#license)
7. [Cara Berkontrobusi](#cara-berkontribusi)
8. [Screenshots](#screenshots)

***

## Tentang

**Sistem Informasi Pembayaran SPP** adalah software yang bertujuan untuk mempermudah pelayanan pembayaran pada sekolah. Software ini bisa digunakan untuk Sekolah Dasar/Sederajat, Sekolah Menengah Pertama/Sederajat, Sekolah Menengah Atas/Sederajat.

## Cara Install
Software ini dapat dipasang dalam server lokal (PC/Laptop) dan server online, dengan spesifikasi berikut :

#### Spesifikasi minimum server
PHP >= 7.4 (dan memenuhi [server requirement Laravel 8.x](https://laravel.com/docs/8.x/deployment#server-requirements))

1. Clone Repo pada terminal : `git clone https://github.com/codegoen/sistem-aplikasi-pembayaran-spp.git`
2. `$ cd sistem-aplikasi-pembayaran-spp`
3. `$ composer install`
4. `$ cp .env.example .env`
5. `$ php artisan key:generate`
6. Buat database pada MySQL untuk aplikasi ini
7. Setting database pada file `.env`, pada variable `APP_DEMO` ubah menjadi false
8. `$ php artisan migrate --seed`
9. `$ php artisan storage:link`
10. `$ php artisan serve`
11. Kunjungi web : `http://localhost:8000/app-install`
12. Login menggunakan email `admin@domain.com` dan password `secret`
12. Isi formulir installasi.
13. Selesai, Anda akan login sebagai Super Admin.


README dibuat dengan refrensi dari [@tedihanafee](https://github.com/tedihanafee)
