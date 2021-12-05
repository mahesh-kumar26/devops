
# FROM java:8

# COPY ./DostavimVse /DostavimVse
# WORKDIR /DostavimVse
# RUN export MAVEN_OPTS=-Xmx16G

# RUN mvn clean install

# CMD mvn spring-boot:run
######################################################

FROM openjdk:8
FROM maven:3.8.4-jdk-8



RUN mkdir /var/run/mysqld 
RUN chmod +x /var/run/mysqld

COPY DostavimVse/ /DostavimVse/

EXPOSE 3306
EXPOSE 8080

COPY ./run-webapp.sh .
COPY ./wait-for-db.sh .

RUN chmod +x ./run-webapp.sh
RUN chmod +x ./wait-for-db.sh

# ENTRYPOINT ["./run-webapp.sh"]