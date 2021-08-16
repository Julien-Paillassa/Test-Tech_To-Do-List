## Template Symfony

Symfony 5.2  
Bootstrap 4.6  
Webpack  
Font Awesome  

### Prerequisites

1. Check composer is installed
2. Check yarn & node are installed

### Install

1. Clone this project
2. Run `composer install`
3. Run `yarn install`
4. Run `yarn encore dev` to build assets

### Working

1. Run `symfony console d:d:c`, `symfony console make:migration`, `symfony console d:m:m`, `symfony console d:f:l` to create, create a migration and load fixtures
2. Run `symfony server:start` to launch your local php web server
3. Run `yarn run dev --watch` to launch your local server for assets
