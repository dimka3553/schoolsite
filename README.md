<p align="center"><a href="https://bluepundit.eu" target="_blank"><img src="https://bluepundit.eu/img/bluepundit-logo-pundit.png?1" width="100"></a></p>

# Harbour Space Multi Tenant Demo Project
Demo project for the Modern Web Applications 2 course at Harbour Space

## Authors
- [bluePundit](https://bluepundit.eu) - Nico Deblauwe ([@ndeblauw](https://www.github.com/ndeblauw))
- Class of Modern Web Applications 2 - 2023 (Harbour Space University)

## Requirements
This project uses
- [Laravel 9](https://laravel.com/docs/9.x/releases)

## Installation instructions
Same as for a standard Laravel project
- clone the repo
- run `composer install`
- copy the .env.example file to .env
- generate an app key
- create a database and add the credentials to the .env file
- run `php artisan migrate:fresh --seed`

The seeder will create 2 tenants, one for each of the 2 subdomains aa.schoolsite.test and bb.schoolsite.test. 
Don't forget to add those subdomains to your hosts file (in windows)

## Environment Variables
To run this project, you will need to add the following environment variables to your .env file

