#!/bin/sh

set -e

service $1 start

until  $1 -u "root" -e 'use mysql;'; do
  >&2 echo "DB is not connected"
  sleep 1000
done

>&2 echo "DB is connected"
exec "$2"