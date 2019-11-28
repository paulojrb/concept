create user 'vul'@'localhost' IDENTIFIED BY 'pass';
create database vul;
grant all privileges on vul.* to 'vul'@'localhost';
use vul;

create table login(
    cod int not null primary key auto_increment,
    ip varchar(15) not null,
    user varchar(20) null,
    vezes int not null DEFAULT 1
);

create table chat(
    cod int not null primary key auto_increment,
    nick varchar(50) not null,
    message varchar(400) not null,
    data timestamp not null
);

create table user(
    cod int not null primary key auto_increment,
    nick varchar(30) not null,
    pass varchar(40) not null
);

insert into chat (nick, message, data) values ('admin', 'CC1F26DFBB9758FB04041FE6C477B05802A92C1C77B05B6CC289D79A752E534E', now());
insert into chat (nick, message, data) values ('admin', 'Cant wait! @David Curabitur nec massa ultrices, consequat erat sit amet, luctus justo. Meeting?', now());
insert into chat (nick, message, data) values ('admin', 'Well done @all. See you all Fusce tempus ipsum a mi rutrum, at dignissim mauris vulputate.', now());
insert into chat (nick, message, data) values ('admin', 'Great start guys, Fusce tempus ipsum a mi rutrum, at dignissim mauris vulputate.', now());
insert into chat (nick, message, data) values ('admin', 'Nice one @Komal, Nulla ut diam porttitor odio malesuada malesuada eu at ipsum. ', now());

insert into user (nick, pass) values ('admin', '@zzx144ddaa');