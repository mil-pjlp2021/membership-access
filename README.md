### Instalasi

Proses instalasi sebagai berikut

```sh
$ git clone https://github.com/mil-pjlp2021/membership-access.git
$ cd membership-access
$ composer update
```

Buat file .env

```sh
cp .env-example .env
$ php artisan key:generate
```

Buat database di mySQL

Sesuaikan database di .env

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=membership_access_db
DB_USERNAME=root
DB_PASSWORD=
```

Masukkan client id dan secret key untuk google dan facebook login di file .env
```sh
GOOGLE_OAUTH_CLIENT_ID=
GOOGLE_OAUTH_SECRET_ACCESS_KEY=

FACEBOOK_LOGIN_CLIENT_ID=
FACEBOOK_LOGIN_SECRET_ACCESS_KEY=
```

`migrate --seed` untuk membuat tabel dan mengisi data
```sh
$ php artisan migrate --seed
```
`npm run build` untuk men-generate frontend
```sh
$ npm run build
```

Dan jalankan menggunakan perintah

```sh
$ php artisan serve
```

Generated User
```sh
admin@email.com | password | role=admin
tester1@email.com | password | role=Tipe A
tester2@email.com | password | role=Tipe B
tester3@email.com | password | role=Tipe C

```
