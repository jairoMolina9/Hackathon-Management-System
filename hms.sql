/*
hms.sql
team 1 (Laura, Boubojorn, Qinquan, Jairo)
May 6th, 2019

Database containing the user's credentials
and default data
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

CREATE TABLE sponsors (
  sponsorID int(50) AUTO_INCREMENT PRIMARY KEY,
  name varchar(50),
  budget numeric(9,2)
);

CREATE TABLE teams (
  teamID int(50) AUTO_INCREMENT PRIMARY KEY,
  teamName varchar(50),
  category varchar(50)
);

CREATE TABLE admin (
  adminID int(50) AUTO_INCREMENT PRIMARY KEY,
  name varchar(50),
  username varchar(50),
  password varchar(50),
  phone int(50)
);

CREATE TABLE welcome(
  title varchar(50),
  subtitle TEXT,
  subtitle2 TEXT
);

CREATE TABLE about(
  description TEXT,
  title1 TEXT,
  info1 TEXT,
  title2 TEXT,
  info2 TEXT,
  title3 TEXT,
  info3 TEXT,
  title4 TEXT,
  info4 TEXT
);

CREATE TABLE dashboard(
  address TEXT,
  email TEXT,
  phone varchar(50)
);

/* Creates default admin credentials*/
INSERT INTO admin (name, username, password, phone) VALUES ('Byron','admin', 'csc350', '1234567');
UPDATE admin SET password = MD5(password) WHERE adminID = 1;

/* Creates default welcome page data */
INSERT INTO welcome (title, subtitle, subtitle2) VALUES ('LowFi Hackathon','Borough of Manhattan Community College', 'September 20th, 2019');

/* Creates default about page data */
INSERT INTO about (description, title1, info1, title2, info2, title3, info3, title4, info4)
VALUES ('Welcome to the LowFi hackathon, here you will find the tracks and workshops we have ready for
        you!',
        'Path + Workshop: Alexa',
        'Start building for voice today by adding new capabilities to Alexa, connecting Alexa to devices, or integrating Alexa directly into your products.',
        'Path + Workshop: Wolfram',
        'The Wolfram Language allows programmers to operate with computational intelligence that relies on a vast depth of algorithms',
        'Path: Quantumm',
        'Quantum computers have the potential to solve certain problems dramatically faster than conventional computers, with applications in areas such as machine learning, finance, drug discovery and cryptography.',
        'AWS DeepLens',
        'In collaboration with the BMCC Programming Club the officers will host an intro to deep lens technology from Amazon, experience is not required.'
      );

/* Creates default dashboard page data */
INSERT INTO dashboard (address, email, phone) VALUES ('199 Chambers St #654 New York, NY 10007-0071  USA','hackToday@hms.org', '(347) 345-5437');
