# Hostel Management Mobile App

## Developed Using [NativePHP](https://nativephp.com/)

## Steps to run locally

### Step 1

Clone this repo

```bash 
git clone https://github.com/codingwithrk/hostel-management-app.git
```

### Step 2

- Composer update

```bash
composer update
```

This will ask for license to make sure you purchase it. [Get license](https://nativephp.com/mobile)

- NPM install

```bash
npm install
```

- NPM build

```bash
npm run build
```

### Step 3

- Copy .env.example

```bash
cp .env.example .env
```

- Generate key

```bash
php artisan key:generate
```

- Run migrate

```bash
php artisan migrate
```

- Now in .env change

```dotenv
NATIVEPHP_APP_ID=com.yourcompany.yourapp
NATIVEPHP_APP_VERSION="DEBUG"
NATIVEPHP_APP_VERSION_CODE="1"
```

### Step 4

- Run NativePHP installer

```bash
php artisan native:install
```

- Start app

```bash
php artisan native:run
```

🎉 there your app is running

## Any issues here the [Discord](https://discord.gg/X62tWNStZK)
