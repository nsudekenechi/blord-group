/*
tables to create => investment_options, pricing_plan
*/
CREATE DATABASE fundflex;
-- Creating table for user
CREATE TABLE users (
    id INT, fullname VARCHAR(40) NOT NULL,  username VARCHAR(30) NOT NULL, email VARCHAR(30) NOT NULL, password VARCHAR(100) NOT NULL, amount DECIMAL(10, 2) DEFAULT 0,
    
);