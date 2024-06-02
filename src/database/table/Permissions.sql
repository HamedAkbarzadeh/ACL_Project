CREATE TABLE Persmissions{
    id bigint NOT NULL autoincrement,
     name varchar(255) NOT NULL UNIQUE,
     discription varchar(255) NULL UNIQUE, 
     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
};