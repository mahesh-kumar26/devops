FROM maven:3.8.4-jdk-8

COPY . /DostavimVse

WORKDIR /DostavimVse

CMD mvn package -P init-base && \
    java -jar ./target/dostavimvse-0.0.1-SNAPSHOT.jar 
CMD   mvn package -P web-app clean package && \
    java -jar ./target/dostavimvse-0.0.1-SNAPSHOT.jar

EXPOSE 8080
