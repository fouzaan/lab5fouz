/* 
Author: Fouzaan
file: lab7_auto_records.sql 
Date: 2023-03-31
Course: INFT1206
Contact: fouzaan.shaiknissar@dcmail.ca
*/
-- DROP'ping tables clear out any existing data
DROP TABLE IF EXISTS automobiles;

-- CREATE the table, note that id has to be unique, and you must have a name
CREATE TABLE automobiles(
	id INTEGER PRIMARY KEY NOT NULL,
  make VARCHAR(15) NOT NULL,
  model VARCHAR(20) NOT NULL,
  year INT NOT NULL,
  owner VARCHAR(50) NOT NULL,
  msrp DECIMAL(8,2) NOT NULL,
  purchase_date DATE NOT NULL
);

GRANT ALL ON automobiles TO faculty;

-- Inserting data into the table
INSERT INTO automobiles (id, make, model, year, owner, msrp, purchase_date) 
VALUES (2, 'Porsche', '911', 2022, 'Jane Smith', 103400.00, '2022-08-15');

INSERT INTO automobiles (id, make, model, year, owner, msrp, purchase_date) 
VALUES (1, 'Tesla', 'Model S', 2023, 'Apple', 79990.00, '2023-03-01');

INSERT INTO automobiles (id, make, model, year, owner, msrp, purchase_date) 
VALUES (3, 'Audi', 'RS7', 2021, 'Mike Lee', 119000.00, '2021-10-10');

INSERT INTO automobiles (id, make, model, year, owner, msrp, purchase_date) 
VALUES (4, 'BMW', 'M5', 2023, 'ragada', 102650.00, '2023-02-22');


INSERT INTO automobiles (id, make, model, year, owner, msrp, purchase_date) 
VALUES (5, 'Lamborghini', 'Aventador', 2023, 'james web', 417650.00, '2023-01-05');

-- listing the data in ascending order
SELECT make, model, year, msrp 
FROM automobiles 
ORDER BY year ASC;

-- updating the info

UPDATE automobiles 
SET owner = 'fouzaan ahmed' 
WHERE make = 'Tesla' AND model = 'Model S';

-- deleting the data
DELETE FROM automobiles 
WHERE make = 'Audi' AND model = 'RS7';