# Dukaan
Dukaan is an e-commerce platform based on Laravel framework.

## Installation
**Dukaan** is Laravel application so first of all you need to install dependencies.
###Step 1 : Install composer dependencies. 
```
composer install
```
###Step 2 : Create .env configuration file.
```
mv .env.example .env
```
###Step 3 : Migrate the database.
Configure the database connection on .env file that dukaan going to use
then run the following command:
```
php artisan migrate
```
Now you can run the application by serving the application on the localhost using this command:
```
php artisan serve
```
## Roadmap
Dukaan is under development till now, so here a list what features to include 
- [ ] Add Collections feature.
- [ ] Add CMS.
- [ ] Add featured products feature.
- [ ] Switch to livewire.
- [ ] Add multitenancy.
- [ ] Add multitenancy.