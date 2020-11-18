create database if not exists recode;

create table if not exists recode.students (
    id int not null auto_increment primary key,
    name varchar(80) not null,
    phone varchar(30) not null
);

