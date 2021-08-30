<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
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

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

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
- **[CMS Max](https://www.cmsmax.com/)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


Home  »  Laravel   »   How to Create Laravel 8 Vue JS CRUD Single Page Application (SPA)
How to Create Laravel 8 Vue JS CRUD Single Page Application (SPA)
Last updated on: August 7, 2021 by Editorial Team


Throughout this Laravel Vue js CRUD example tutorial, you will see and understand how to build Create, Read, Update, and Delete API and how to consume APIs to perform CRUD operations in Laravel Vue JS application.

In computer science, create, read, update, and delete are not just mere words. They are the foundational building block of every application for creating, reading, updating, and deleting the data. The terminology might be different sometimes, for instance, retrieval rather than read, modify somewhat of the update, or destroy alternately of delete.

Nevertheless, in this laravel vue js crud tutorial, we will help you ascertain how to integrate the laravel vue js CRUD operations in a single page application with vue js components and laravel app.

<h1>Laravel 8 Vue JS CRUD Example</h1>
<ul><li>Create a Laravel Project</li><li>Enable database connection</li><li>Create a model and run migration</li><li>Create and configure the controller</li><li>Add routes</li><li>Install Laravel Vue UI</li><li>Install NPM dependencies</li><li>Build Vue Js CRUD Components</li><li>Test Laravel Vue JS CRUD operations</li></ul>

<h2>In Windows:</h2>

<p>copy .env.example .env</p>

<h2>In Linux/Mac:</h2>

<p>cp .env.example .env</p>

<h2>Database Connection</br>
This step explains how to make database connection by adding database name, username and password in .env config file of your project:</h2>
<p>
DB_CONNECTION=mysql</br>
DB_HOST=127.0.0.1</br>
DB_PORT=3306</br>
DB_DATABASE=db</br>
DB_USERNAME=root</br>
DB_PASSWORD=</br>
</p>

<h2>Next, you need to evoke migration with below command: </h2>
<p>php artisan migrate</p>

<h2>npm install</h2>

<h2>
The npm run watch command compiles the assets, not just that with run watch command you don’t fret about re-run the compiler over and over again.</h2>

<p>npm run watch</p>

<p>php artisan serve</p>

<h2>Open the URL in the browser: </h2>

<p>http://127.0.0.1:8000</p>