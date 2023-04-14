/* 
Author: Fouzaan
file: lab9_users.sql 
Date: 2023-04-5
Course: INFT1206
Contact: fouzaan.shaiknissar@dcmail.ca
*/

-- Drop the table users if it exists
DROP TABLE IF EXISTS users;

-- Create the table users with the given fields
CREATE TABLE users (
    id VARCHAR(20) PRIMARY KEY,
    password VARCHAR(15) NOT NULL,
    first_name VARCHAR(20) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email_address VARCHAR(255) NOT NULL,
    enrol_date DATE NOT NULL,
    last_access DATE NOT NULL
);

-- granting permissions to faculty.
GRANT ALL ON users TO faculty;

-- Inserting the first record
INSERT INTO users (id, password, first_name, last_name, email_address, enrol_date, last_access)
VALUES ('jdoe', 'testpass', 'John', 'Doe', 'jdoe@durhamcollege.ca', '2023-01-01', '2023-02-01');

-- secound account
INSERT INTO users (id, password, first_name, last_name, email_address, enrol_date, last_access)
VALUES ('jane', 'mypassword', 'Jane', 'Smith', 'jane.smith@example.com', '2023-01-01', '2023-02-03');

-- third account
INSERT INTO users (id, password, first_name, last_name, email_address, enrol_date, last_access)
VALUES ('james', 'secret123', 'James', 'Johnson', 'james.johnson@example.com', '2023-01-01', '2023-02-02');

-- query.
SELECT * FROM users;