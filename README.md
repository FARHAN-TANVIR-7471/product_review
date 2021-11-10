
# Project Title

Fake Review Identification

## Introduction

A fake review can destroy the audience base. Cause all audiences actually buy products/services based on review. So fake reviews can damage the credibility of a platform substantially.

A user maximum review on our side five times per day. 

## Installation

Download or clone the code from repository.
Unzip the zip file or Run this command to clone

    git clone https://github.com/FARHAN-TANVIR-7471/product_review.git


Open browser; goto [localhost/phpmyadmin](http://localhost/phpmyadmin).

Create a database with name **areview** and import the file **areview.sql** in that database
### Prerequisites

What things you need to install the software and how to install them


## Requirements

      - PHP version: 8.0.65 or newer
      - MySQL database (or access to create one) version: 5.7 or newer
      - MySQLi module for PHP
      - GD module for PHP


## How to install        
 
MySQL Details

      - MySQL Username = root
    
      - MySQL Password = 
    
      - MySQL Database = review

then

import database

      localhost:5003/phpmyadmin    
    
    

## Rename Some file
    LINUX
      - cd www
      - cp index.php.example index.php
      - cp .htaccess.example .htaccess
      - cd public
      - cp index.php.example index.php
      - cp .htaccess.example .htaccess

    WINDOWS
      - root folder
      - copy index.php.example index.php
      - copy .htaccess.example .htaccess
      - cd public
      - copy index.php.example index.php
      - copy .htaccess.example .htaccess
      - cd config
      - copy app.php.example app.php
      - copy database.php.example database.php

## Base URL

This is the current Base URL

    http://localhost:8000/
    
    
  
# Note: Check GD library installed. Try to upload a image.


#         dd(\Route::getCurrentRoute()->getName());

# For Farhan Only
            "@php -r \"file_exists('config/app.php.example') || copy('config/app.php.example', 'config/app.php');\"",
            "@php -r \"file_exists('config/database.php.example') || copy('config/database.php.example', 'config/database.php');\"",
            "@php -r \"file_exists('config/notification.php.example') || copy('config/notification.php.example', 'config/notification.php');\"",
            "@php -r \"file_exists('public/.htaccess.example') || copy('public/.htaccess.example', 'public/.htaccess');\"",
            "@php -r \"file_exists('public/index.php.example') || copy('public/index.php.example', 'public/index.php');\"",
            "@php -r \"file_exists('.htaccess.example') || copy('.htaccess.example', '.htaccess');\"",
            "@php -r \"file_exists('index.php.example') || copy('index.php.example', 'index.php');\""


# migration alternative 
https://laravel.com/docs/8.x/migrations#squashing-migrations


Model namespace
``` use Kyslik\ColumnSortable\Sortable; ```
inside model
```use Sortable;```
