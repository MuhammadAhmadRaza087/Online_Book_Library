<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Code of Conduct

To ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

# Online Bookstore Management System

The Online Bookstore Management System is a web application built using the Laravel framework. It provides functionalities for managing books, customers, and an admin interface.

## Project Structure

### Routes

- **Home:** `/` - Displays the main store page with book listings.
- **About Us:** `/about` - About Us page.
- **Contact Us:** `/contact` - Contact Us page.
- **Bookstore:** `/shop` - Displays the available books for purchase.
- **Admin Dashboard:** `/admin` - Access to the admin dashboard.

### Admin Functionalities

- **Add Book:** `/addBook` - Add a new book to the bookstore.
- **Add Customer:** `/addCustomer` - Add a new customer to the system.
- **View Books:** `/viewBook` - View a list of all books in the system.
- **View Customers:** `/viewCustomer` - View a list of all customers in the system.
- **Update Book:** `/updateBook/{id}` - Update information for a specific book.
- **Update Customer:** `/updateCustomer/{id}` - Update information for a specific customer.
- **Delete Book:** `/deleteBook/{id}` - Delete a specific book.
- **Delete Customer:** `/deleteCustomer/{id}` - Delete a specific customer.

### User Authentication

- **Sign Up:** `/signup` - User registration page.
- **Sign Up Processing:** `/signup` (POST) - Process user registration data.
- **Sign In:** `/signin` - User login page.

### Models

- **User Model:** Manages user information, including name, contact, email, password, and user type.
- **Password Reset Tokens:** Handles password reset tokens.
- **Failed Jobs:** Records failed job attempts.
- **Personal Access Tokens:** Manages personal access tokens.

### Migrations

- `users` table: Manages user information.
- `password_reset_tokens` table: Manages password reset tokens.
- `failed_jobs` table: Records failed job attempts.
- `personal_access_tokens` table: Manages personal access tokens.
- `customer` table: Stores customer information.
- `book` table: Stores book information.
- `admin` table: Stores admin credentials.
- `cart` table: Manages customer carts.

### Controllers

- **StoreController:** Handles store-related functionalities.
- **ShowController:** Handles display-related functionalities.
- **ProfileController:** Handles authentication-related functionalities.
- **HomeController:** Handles display-related functionalities.

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/MuhammadAhmadRaza087/Online_Book_Library.git
   ```

2. Navigate to the project directory:

   ```bash
   cd Online_Book_Library
   ```

3. Install PHP dependencies:

   ```bash
   composer install
   ```

4. Install frontend dependencies:

   ```bash
   npm install && npm run dev
   ```

5. Copy the `.env.example` file to `.env` and configure your database connection.

6. Generate the application key:

   ```bash
   php artisan key:generate
   ```

7. Run database migrations:

   ```bash
   php artisan migrate
   ```

8. Serve the application:

   ```bash
   php artisan serve
   ```

The application should now be running at [http://localhost:8000](http://localhost:8000).

## Usage

- Access the application in your web browser.
- Navigate through the available routes such as `/`, `/about`, `/contact`, `/shop`, and `/admin`.
- Perform actions like adding books, managing customers, and more through the provided interfaces.

## Folder Structure

The project follows the standard Laravel folder structure. Key folders include:

- `app`: Contains the application's models, controllers, and other PHP classes.
- `database`: Contains database migrations and seeds.
- `resources`: Contains frontend assets, views, and components.
- `routes`: Contains the route definitions.
- `tests`: Contains PHPUnit test cases.

## Database Migrations

The database migrations create tables such as `users`, `password_reset_tokens`, `failed_jobs`, `personal_access_tokens`, `customer`, `book`, `admin`, and `cart`. These tables store information related to users, books, customers, and administrative tasks.

## Contributing

Feel free to contribute to the development of this project. You can submit issues for bug reports, feature requests, or create pull requests with enhancements.

## License

This project is open-source and available under the [MIT License](LICENSE). You can freely use and modify the code for your own purposes. If you find it helpful, contributions are always appreciated.
