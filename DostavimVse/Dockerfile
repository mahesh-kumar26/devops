
FROM openjdk:8
FROM maven:3.8.4-jdk-8



RUN mkdir /var/run/mysqld 
RUN chmod +x /var/run/mysqld

COPY DostavimVse/ /DostavimVse/

EXPOSE 3306
EXPOSE 8080

COPY ./run.sh .
COPY ./wait.sh .

RUN chmod +x ./run.sh
RUN chmod +x ./wait.sh



FROM maven:3.8.4-jdk-8

COPY . /DostavimVse
WORKDIR /DostavimVse

COPY ../wait.sh /DostavimVse/wait.sh
COPY ../run.sh /DostavimVse/run.sh

EXPOSE 8080

RUN chmod +x wait.sh
RUN chmod +x run.sh