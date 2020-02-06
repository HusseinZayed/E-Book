drop database ebook;
create database ebook;
use ebook;

/*
User Table
*/

create table ebook_user(
id integer(255) primary key auto_increment,
fname varchr(255) not null,
lname varchar(255) not null,
phone varchar(255) null,
regeister_date date not null,
birth_date date not null,
email varchar(255) unique not null,
password varchar(255) not null,
role varchar(255) not null,
status varchar(255) not null,
book_uploaded integer(255) null,
book_downloaded integer(255) null,
avatar varchar(255) null
);

/*
Book Table
*/
create table ebbok_book(
    id int primary key auto_increment,
    book_name varchar(255),
    book_author varchar(255),
    book_published_date date,
    book_emmision date,
    book_department varchar(255),
    book_type varchar(255),
    book_downloaded int(255)
);

