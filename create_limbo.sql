drop database if exists limbo_db; 
create database limbo_db ; 
use limbo_db ;

CREATE TABLE IF NOT EXISTS stuff
(
  id INT UNIQUE PRIMARY KEY AUTO_INCREMENT,
  description TEXT,
  timeFound DATETIME,
  timeAdded DATETIME,
  location TEXT
);

EXPLAIN stuff;