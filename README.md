<p align="center"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></p>
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Cara Install Project DENGAN github desktop
Untuk menginstal project ini anda harus memiliki Composer
bagi yang belum install composer silahkan download [Klik di sini](https://getcomposer.org/download/1.9.0/composer.phar) tutorial cara instal composer [klik di sini](https://www.malasngoding.com/cara-install-composer/)

Bagi yang sudah memiliki composer silahkan ikuti tutor dibawah ini
- Klik tombol Clone or download
- Klik Open in desktop
- Klik open GithubDesktop.exe
- Silahkan pilih lokasi path yang anda inginkan
- Kemudian klik Clone
- Tunggu sampai proses clone selesai
- Buka folder porject yang sudah di clone melalui terminal
- Lakukan composer install ketik
```terminal
composer install
```
- Tunggu sampai proses selesai
- Buat database baru di phpmyadmin anda beri nama sesuka hati anda
- Copy file .env.example yang ada di dalam folder project dan ubah namanya menjadi .env
bagi yang menggunakan git bash atau terminal linux bisa ketik seperti dibawah
```terminal
cp .env.example .env
```
bagi yang menggunakan terminal windows bisa ketik seperti dibawah
```terminal
copy .env.example .env
```
- Lakukan generate key ketik 
```terminal
php artisan key:generate
```
- Buka file .env
- Ubah konfigurasi database sesuai nama database yang anda buat tadi lalu simpan
- lakukan migrate ketik :
```terminal
php artisan migrate --seed
```
- kemudian ketik :
```
php artisan storage:link
```
- Finish project laravel bisa dijalankan dengan menggunakan development server dengan cara ketik
```terminal
php artisan serve
```
- Lalu ctrl+klik pada http://127.0.0.0:8000

## Cara instal project TANPA github desktop
Bagi yang sudah memiliki composer silahkan ikuti tutor dibawah ini
- Klik tombol Clone or download
- Klik download zip
- Silahkan pilih lokasi path yang anda inginkan
- Kemudian klik Oke
- Tunggu sampai proses download selesai
- Extract here 
- Buka folder porject yang sudah di extract dengan terminal
- Lakukan composer install ketik
```terminal
composer install
```
- Tunggu sampai proses selesai
- Buat database baru di phpmyadmin anda beri nama sesuka hati anda
- Copy file .env.example yang ada di dalam folder project dan ubah namanya menjadi .env
bagi yang menggunakan git bash atau terminal linux bisa ketik seperti dibawah
```terminal
cp .env.example .env
```
bagi yang menggunakan terminal windows bisa ketik seperti dibawah
```terminal
copy .env.example .env
```
- Lakukan generate key ketik 
```terminal
php artisan key:generate
```
- Buka file .env
- Ubah konfigurasi database sesuai nama database yang anda buat tadi lalu simpan
- lakukan migrate ketik :
```terminal
php artisan migrate --seed
```
- kemudian ketik :
```
php artisan storage:link
```
- Finish project laravel bisa dijalankan dengan menggunakan development server dengan cara ketik
```terminal
php artisan serve
```
- Lalu ctrl+klik pada http://127.0.0.0:8000

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)
- [OP.GG](https://op.gg)
- [云软科技](http://www.yunruan.ltd/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Flowchart
![WhatsApp Image 2023-12-04 at 14 44 09](https://github.com/putrafirly/sisteminformasiakuntansi/assets/152130441/0d993a44-3806-4730-9d0f-9021b8682fc3)
![WhatsApp Image 2023-12-04 at 14 31 38](https://github.com/putrafirly/sisteminformasiakuntansi/assets/152130441/e4d5c3ed-e92f-4d00-a985-15a016592f7e)
![WhatsApp Image 2023-12-04 at 14 31 38 (1)](https://github.com/putrafirly/sisteminformasiakuntansi/assets/152130441/827db7ee-6f3f-4ab6-bbca-e7586a6b8923)
![WhatsApp Image 2023-12-04 at 14 31 39](https://github.com/putrafirly/sisteminformasiakuntansi/assets/152130441/c63d315d-cf81-45fd-ba79-130ecd0a2862)
![WhatsApp Image 2023-12-04 at 14 31 39 (1)](https://github.com/putrafirly/sisteminformasiakuntansi/assets/152130441/d863a199-9ddc-4737-a6e1-eeea6fe549e8)
![WhatsApp Image 2023-12-04 at 14 31 39 (2)](https://github.com/putrafirly/sisteminformasiakuntansi/assets/152130441/53d55f40-0705-43d9-908d-debcbd42f1a4)
![WhatsApp Image 2023-12-04 at 14 31 40](https://github.com/putrafirly/sisteminformasiakuntansi/assets/152130441/543580c0-c390-4a58-920f-3e56833e709c)
![WhatsApp Image 2023-12-04 at 14 31 40 (1)](https://github.com/putrafirly/sisteminformasiakuntansi/assets/152130441/7f8deda8-e8b6-481e-bcb8-12abaf3848f5)
![WhatsApp Image 2023-12-04 at 14 31 41](https://github.com/putrafirly/sisteminformasiakuntansi/assets/152130441/c2e3b678-d0d1-41c6-aa7e-bbb617220597)
![WhatsApp Image 2023-12-04 at 14 31 41 (1)](https://github.com/putrafirly/sisteminformasiakuntansi/assets/152130441/ecf6ebc9-e5d2-46f9-b2be-a1bc43e4ef6f)
![WhatsApp Image 2023-12-04 at 14 31 42](https://github.com/putrafirly/sisteminformasiakuntansi/assets/152130441/a56a0335-dc5c-41ca-8842-3cf90a84b434)
![WhatsApp Image 2023-12-04 at 14 31 42 (1)](https://github.com/putrafirly/sisteminformasiakuntansi/assets/152130441/756bc22a-96a6-474e-8380-8bccafb82426)


## Donasinya Kakak https://saweria.co/maulanakevinp Terima Kasih ^_^
