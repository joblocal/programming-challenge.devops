#!/bin/sh
/usr/bin/php /var/www/artisan queue:listen --tries=3 --memory=256
