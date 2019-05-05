/*
hms.sql
information
information
Database containing the user's credentials
*/

CREATE DATABASE hms COLLATE latin1_general_cs;
USE hms;

CREATE TABLE participants (
  studentID int(50) AUTO_INCREMENT PRIMARY KEY,
  username varchar(50),
  firstName varchar(50),
  lastName varchar(50),
  school varchar(50),
  password varchar(50),
  shirtSize char,
  foodType varchar(50),
  teamID int(50)
);

CREATE TABLE admin (
  admindID int(50),
  firstName varchar(50),
  lastName varchar(50),
  password varchar(50),
  phone int(50)
);

CREATE TABLE teams (
  teamID int(50) AUTO_INCREMENT PRIMARY KEY,
  teamName varchar(50),
  category varchar(50)
);
