#!/bin/sh

set -e

service mysql start



until mysql -u "root" -e 'use mysql;'; do
  >&2 echo "MySQL is unavailable - sleeping"
  sleep 100
done
  

>&2 echo "MySQL is up - executing command"
exec "$1"