
 - Instalar o laravel versao 8 
  `- composer create-project --prefer-dist laravel/laravel crud-with-livewere` 
 - Instalar o breeze para desenvolvimento
  `- composer require laravel/breeze -- dev`
  `php artisan breeze:install`
 - Run npm install and npm run dev
  `npm install && npm run dev`
 - Run migration
  `php artisan migrate`
 - Instalar livewire
   `composer require livewire/livewire`

 - make book
   `php artisan make:model Book -a`
   `Model created successfully.`
   `Factory created successfully.`
   `Created Migration: 2021_08_11_181922_create_books_table`
   `Seeder created successfully.`
   `Controller created successfully.`
 - Criando componentes livewire
   `php artisan livewire:make Book/Index`
   `php artisan livewire:make Book/Edit`
   `php artisan livewire:make Book/Create`
   `php artisan livewire:make Book/Show`
