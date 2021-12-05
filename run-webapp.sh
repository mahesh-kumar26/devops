#!/bin/bash

set -eu

cd /DostavimVse
mvn clean install -DskipTests
mvn package
java -jar target/*.jar
