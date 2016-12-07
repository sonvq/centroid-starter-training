#!/usr/bin/env bash

echo "Installing..."
composer install

echo "Start install CentroidCMS"
php artisan asgard:install
