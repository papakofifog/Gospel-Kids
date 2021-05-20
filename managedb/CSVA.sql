#drop database CSVA;
create database CSVA;
use  CSVA;

# table to store user primary data
create table user(
userid varchar(15) not null,
lastname varchar(25),
firstname varchar(25),
gender enum('m','f'),
DOB date,
primary key(userid)
);
#drop table user;

#table to store kids data

create table kid(
userid varchar(15) not null,
section enum('Amazing','grace', 'peace'),
firstname varchar(25),
age int,
foreign key(userid) references user(userid) 
);
#drop table kid;

#table to store teacherdata
create table teacher(
userid varchar(15) not null,
memberid varchar(15) not null,
maridgestatus enum('M','S'),
nationality varchar(50),
telphone varchar(50),
email_address varchar(100),
password varchar(50),
foreign key(userid) references user(userid) 
);
#drop table teacher;


#table to store video data
create table CVideos (
videoid int auto_increment,
name varchar(255),
description varchar(255),
date_time_uploaded datetime,
number_views decimal(10),
primary key (videoid)
);
#drop table videoid;

