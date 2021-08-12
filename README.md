## Instalasi

Buat database kosong dengan nama: 
```bash
wisataBMS
```
Unduh composer terlebih dahulu di https://getcomposer.org/
Setelah melakukan clone repo ini, masukan command berikut di dalam terminal
```bash
composer install
```
Kemudian rename file 
```bash
.env.example
```
Menjadi
```bash
.env
```
Lalu konfigurasi file .env dan lakukan migrate serta seeding:
```bash
php artisan migrate
php artisan db:seed
```
Admin Login Account
```bash
admin@bms.com
bms123
```
User Login Account
```bash
user@test
user123
```
enjoy thx...

