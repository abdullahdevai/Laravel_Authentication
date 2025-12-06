# Laravel Authentication & Profile Management

This project is a Laravel-based web application that provides user authentication and profile management features. Users can register, log in, and manage their personal profiles, including uploading profile images and adding personal information.

## Features

- User registration and authentication
- Profile creation with:
  - Full name
  - Email
  - Phone
  - Address
  - Bio
  - Profile image upload
  - Hobbies
  - Date of birth
- View all profiles (paginated)
- View your own profiles
- Secure file storage for profile images

## Requirements

- PHP >= 8.0
- Composer
- Node.js & npm (for frontend assets)
- MySQL or compatible database

## Installation

1. **Clone the repository:**
   ```sh
   git clone https://github.com/abdullahdevai/Laravel_Authentication.git
   cd Laravel_Authentication
   ```

2. **Install dependencies:**
   ```sh
   composer install
   npm install
   ```

3. **Copy and configure environment:**
   ```sh
   cp .env.example .env
   ```
   Edit `.env` and set your database and mail credentials.

4. **Generate application key:**
   ```sh
   php artisan key:generate
   ```

5. **Run migrations and seeders:**
   ```sh
   php artisan migrate --seed
   ```

6. **Build frontend assets:**
   ```sh
   npm run build
   ```

7. **Start the development server:**
   ```sh
   php artisan serve
   ```

## Usage

- Register a new user or log in.
- Create and manage your profile.
- View all user profiles.

## Folder Structure

- `app/Http/Controllers/` - Application controllers
- `app/Models/` - Eloquent models
- `database/migrations/` - Database schema
- `database/seeders/` - Database seeders
- `resources/views/` - Blade templates
- `public/` - Public assets

## License

This project is open-source and available under the [MIT license](LICENSE).

---

**Author:** [abdullahdevai](https://github.com/abdullahdevai)
