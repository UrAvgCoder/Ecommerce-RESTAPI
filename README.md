# Basic RESTFUL API
## Just a basic Ecommerce website using RESTFUL API.

## Quick Start

``` bash
# Install Dependencies
composer install

# Run Migrations
php artisan migrate

# Import Articles
php artisan db:seed

# Add virtual host if using Apache

# If you get an error about an encryption key
php artisan key:generate


## Endpoints

### List all articles with links and meta
GET api/products

### Get single article
GET api/products/{product}

### Delete article
``` bash
DELETE api/products/{product}
```

### Add article
``` bash
POST api/products
title/body
```

### Update article
``` bash
PUT api/products/{product}

## App Info

### Author

UrAvgCoder ;)

### Version

1.0.0
