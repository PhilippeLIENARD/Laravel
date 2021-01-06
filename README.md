<h1>Découverte de Laravel et de Sail (Containeriser Laravel)</h1>

<br>
Pour découvrir Laravel et Sail j'ai réalisé un petit projet qui inclut : 

- Containeriser l'environnement pour développer une application Laravel (via Sail)

- Réaliser une petite application web qui permet d'afficher une liste de BD, en liste complète ou en pagination, avec la possibilité d'éditer, supprimer ou d'en ajouter de nouvelles.
<br><br>


<h2>Pour installer mon site de test "laravel-sail" dans un container</h2>

Prérequis : Docker et Linux installés<br><br>

- <code># curl https://laravel.build/example-app | bash</code>

- Télécharger le code https://github.com/PhilippeLIENARD/Laravel/tree/main/laravel-sail

- Remplacer les fichiers de votre installation avec mes fichiers

- <code># ./vendor/bin/sail up</code> pour lancer appeler le fichier docker-compose.yml et lancer les containers

- <code># sail php artisan migrate</code> (avec l'option --path si nécessaire)



<hr>

<h2>Ce qui a été fait pour réaliser l'application de test</h2>

- Model : définition des propriétés pour dire ce qui peut être enregistré dans la DB 
- PHP artisan : migration pour créer la DB + template du Model <br>
- Migration : méthodes de migration pour créer la table, les colonnes et du contenu test<br>
- Routes : appel du Controller en GET ou en POST<br>
- Controller : création des méthodes pour afficher ou modifier le contenu, et appeler les vues<br>
- Facades : utilisation du principe de facades pour créer un petit outil de nettoyage des chaînes de caractères et le rendre accessible dans le controller du Contenu
- Views : création d'un layout en Blade et des différentes vues, sur base d'un exemple Bootstrap <br>


<h3>Liste des fichiers créés</h3>


- https://github.com/PhilippeLIENARD/Laravel/blob/main/laravel-sail/app/Models/Item.php
- https://github.com/PhilippeLIENARD/Laravel/blob/main/laravel-sail/database/migrations/2021_01_05_133735_items_table.php
- https://github.com/PhilippeLIENARD/Laravel/blob/main/laravel-sail/routes/web.php
- https://github.com/PhilippeLIENARD/Laravel/blob/main/laravel-sail/app/Http/Controllers/ItemController.php
- https://github.com/PhilippeLIENARD/Laravel/blob/main/laravel-sail/app/Http/Controllers/StrTools.php
- https://github.com/PhilippeLIENARD/Laravel/blob/main/laravel-sail/resources/views/items/home.blade.php
- https://github.com/PhilippeLIENARD/Laravel/blob/main/laravel-sail/resources/views/items/singleItem.blade.php
- https://github.com/PhilippeLIENARD/Laravel/blob/main/laravel-sail/resources/views/layouts/global.blade.php
- https://github.com/PhilippeLIENARD/Laravel/blob/main/laravel-sail/resources/views/items/addnew.blade.php 
- https://github.com/PhilippeLIENARD/Laravel/blob/main/laravel-sail/resources/views/items/edit.blade.php


Je me suis principalement basé sur la documentation officielle Laravel Sail : https://laravel.com/docs/8.x/sail, et sur la documentation de l'API
<hr>


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
- **[Curotec](https://www.curotec.com/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

