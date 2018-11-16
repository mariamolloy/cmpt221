DROP DATABASE IF EXISTS site_db;
CREATE DATABASE site_db;
USE site_db;
DROP TABLE IF EXISTS presidents;
CREATE TABLE presidents 
(
  id INT AUTO_INCREMENT PRIMARY KEY,
  fname TEXT NOT NULL,
  lname TEXT NOT NULL,
  num INT NOT NULL,
  dob DATETIME not null
);

INSERT INTO presidents (fname, lname, num, dob)
VALUES ("Abraham", "Lincoln", 16, '1809-02-12 00:00:00'),
       ("John", "Kennedy", 35, '1917-05-29 00:00:00'),
       ("Lyndon", "Johnson", 36, '1908-08-27 00:00:00'),
       ("John", "Adams", 2, '1735-10-30 00:00:00'),
       ("John Quincy", "Adams", 6, '1767-07-11 00:00:00')
       ;

SELECT * from presidents;
SELECT lname, num, dob FROM presidents ORDER BY num;
SELECT lname, num, dob FROM presidents ORDER BY lname;
