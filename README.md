# Hostel Management Mobile App

## Developed Using [NativePHP](https://nativephp.com/)

## Steps to run locally

### Step 1

Clone this repo

```bash 
git clone https://github.com/codingwithrk/hostel-management-app.git
```

### Step 2

- Copy .env.example

```bash
cp .env.example .env
```

- Generate key

```bash
php artisan key:generate
```

- Now in .env change

```dotenv
NATIVEPHP_APP_ID=com.yourcompany.yourapp
NATIVEPHP_APP_VERSION="DEBUG"
NATIVEPHP_APP_VERSION_CODE="1"
```

### Step 3

- Composer update

```bash
composer update
```

- NPM install

```bash
npm install
```

- NPM build

```bash
npm run build
```

### Step 4

- Install [NativePHP](https://nativephp.com/).

- Add this in composer.json

```text
"repositories": [
    {
        "type": "composer",
        "url": "https://nativephp.composer.sh"
    }
],
```

- Then run

```bash
composer require nativephp/mobile
```

This will ask for license to make sure you purchase it. [Get license](https://nativephp.com/mobile)

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