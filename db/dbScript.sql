create database if not exists `students`;
use `students`;

create table if not exists `user`(
    student_id int(5) not null auto_increment primary key,
    name varchar(255) not null,
    surname varchar(255) not null,
    email varchar(255) not null,
    faculty varchar(30) not null,
    phone_number varchar(255) not null,
    gender varchar(10) not null,
    unique(email)
    last_update TIMESTAMP
)engine=innodb default charset=latin1 auto_increment=100;