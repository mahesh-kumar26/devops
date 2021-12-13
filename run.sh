#!/bin/bash


mvn package -P init-base

mvn package -P web-app

java -jar target/*.jar
