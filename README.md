# Note Manager

A simple note manager with CRUD implementation.

## Instruction on how to run in your localhost

Requirement:

- composer
- npm

Clone the repository and change directory

```
git clone https://github.com/jedymatt/NoteManager.git

cd NoteManager
```

---
Install necessary composer dependencies and npm packages

```
composer install
npm install && npm run dev
```

---

Copy .env.example to .env file and then generate app key.

```
cp .env.example .env
php artisan key:generate
```

Notice: the empty value APP_KEY in the .env file has been generated

---

Create database and name it to 'note_manager' according your .env file, or you can change the database name according to
you.

Note: You can also change the database connection in your .env file.

---
Migrate tables to database

```
php artisan migrate
```

Optional: You can populate random data to the database through `php artisan db:seed`

---
Run in your localhost

```
php artisan serve
```
