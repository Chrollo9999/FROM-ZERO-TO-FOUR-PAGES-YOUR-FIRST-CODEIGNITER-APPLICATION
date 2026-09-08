# SimplePOS — CodeIgniter 4

A beginner-friendly, four-page Point-of-Sale starter. Customer and user records are currently stored in static PHP arrays, so no database is required.

## Pages

| URL | Controller method | Purpose |
| --- | --- | --- |
| `/` | `Pages::home` | Landing page |
| `/about` | `Pages::about` | Project information |
| `/customers` | `Customers::index` | Five customer records |
| `/users` | `Users::index` | Five staff/user records |

## Requirements

- PHP 8.1 or newer, with the extensions required by CodeIgniter 4
- Composer 2

## Install and run

From this project folder, run:

```bash
composer install
php spark serve
```

Then open <http://localhost:8080> in your browser and use the navigation bar to visit all four pages.

The `.env` file already sets:

```ini
app.baseURL = 'http://localhost:8080/'
```

Change this value if you serve the app from another address. Keep the trailing slash.

## Where to look

- Routes: `app/Config/Routes.php`
- Controllers and temporary data: `app/Controllers/`
- Page templates: `app/Views/`
- Styles: `public/css/style.css`

## Verify

After installing dependencies, list the registered routes:

```bash
php spark routes
```

You should see GET routes for `/`, `about`, `customers`, and `users`.
