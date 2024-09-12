create database computerForce;

use computerForce;

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `suburb` varchar(100) NOT NULL,
  `postcode` int(4) NOT NULL,
  `state` varchar(3) NOT NULL,
  `mobilephone` varchar(10) NOT NULL,
   PRIMARY KEY  (`username`)
);