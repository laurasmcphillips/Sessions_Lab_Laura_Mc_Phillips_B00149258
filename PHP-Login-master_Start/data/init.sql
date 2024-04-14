CREATE DATABASE sessionsDB;
    USE sessionsDB;

    CREATE TABLE Users (
                           username VARCHAR(255) PRIMARY KEY,
                           firstname VARCHAR(100),
                           lastname VARCHAR(100),
                           password VARCHAR(50),
                           address VARCHAR(255),
                           address2 VARCHAR(255),
                           city VARCHAR(100),
                           county VARCHAR(100)
    );