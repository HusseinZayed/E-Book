drop database ebook;
create database ebook;
use ebook;

/*
User Table
*/

create table user(
user_id integer(255) not null primary key auto_increment,
user_fname varchar(255) not null,
user_lname varchar(255) not null,
user_phone varchar(255) null,
user_regeister_date datetime not null default now(),
user_birth_date date not null,
user_location varchar(255) not null,
user_email varchar(255) unique not null,
user_password varchar(255) not null,
user_role varchar(255) not null,
user_status varchar(255) not null,
user_book_uploaded integer(255) null default '0',
user_book_downloaded integer(255) null default '0',
user_avatar varchar(255) null
);

/*
Book Table
*/

create table book(
book_id integer(255) not null  primary key auto_increment,
book_name varchar(255) not null ,
book_author_name varchar(255) not null,
book_description text(400),
book_publisher_id integer(255) not null,
book_cat_id integer(255) not null,
book_branch_id integer(255) not null,
book_release_date date not null,
book_publish_date datetime default now(),
book_avatar varchar(255) unique,
book varchar(255) unique,
book_size decimal(5,2) not null,
book_price decimal(5,2) not null,
book_status varchar(255) default 'published',
book_downloaded_number integer(255) default '0',
book_like_number integer(255) default '0',
book_dislike_number integer(255) default '0',
book_comment_number integer(255) default '0',
book_rate decimal(3,2) default '0',
book_rate_counter integer(255) default '0'
);
/*
Cateory Table
*/
create table category(
    cat_id integer(255) not null primary key auto_increment,
    cat_name varchar(255) not null unique
);
/*
Branch Table
*/
create table branch(
branch_id integer(255) not null unique primary key auto_increment,
branch_cat_id integer(255) not null,
branch_name varchar(255) not null 
);
/*
Comment Table
*/
create table comment(
    comment_id integer(255) not null unique primary key auto_increment, 
    comment_book_id integer(255) not null, 
    comment_user_id integer(255) not null, 
    comment_title varchar(255) not null,
    comment_content varchar(255) not null,
    comment_status varchar(255)  default 'published',
    comment_date datetime default now()
    );
    /*
Like & Dislike Table
*/
create table likes(
        like_id integer(255) not null unique primary key auto_increment,
        like_user_id integer(255) not null,
        like_book_id integer(255) not null,
        like_action integer(2) not null default '0',
        dislike_action integer(2) not null default '0'
    );
    
    /*
    باقى الجداول ايللى موجوده فى صفحة About us and contacts form
    vission
    mission
    teams
    clients
    language
    email phones address (contacts)
    etc... 
    YOU NEED TO ANALYSIS BEFORE DESIGN
    */

create table download(
download_id integer(255) primary key auto_increment,
book_id integer(255),
user_id integer(255)  default"0",
download_date datetime default now()
);