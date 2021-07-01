## Instalasi

Setelah melakukan clone repo ini, lakukan instalasi paket dengan composer:

```bash
composer install
```
Selanjutnya, buat database kosong dengan nama 'wisataBMS'. Lalu konfigurasi file .env dan lakukan migrate serta seeding:
```bash
php artisan migrate
php artisan db:seed
```
