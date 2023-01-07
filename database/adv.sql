Create database if not exists adv;
use adv;
drop database adv;
ALTER DATABASE adv CHARACTER SET utf8 COLLATE utf8_general_ci;

DROP TABLE IF exists user_;
DROP TABLE IF exists news_; 

create table if not exists user_(

id int auto_increment primary key,
nome varchar(50),
email varchar(255),
senha varchar(255),
telefone int(13)

);

create table if not exists news(

id int auto_increment primary key,
titulo varchar(255),
desc_ varchar(255),
caminho_img varchar(255),
caminho_doc varchar(255),
data_up datetime
);

select * from news;

Create database if not exists adv;
use adv;

ALTER DATABASE adv CHARACTER SET utf8 COLLATE utf8_general_ci;

DROP TABLE IF exists user_;
DROP TABLE IF exists news_; 

CREATE TABLE IF NOT EXISTS user_ (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50),
    email VARCHAR(255),
    senha VARCHAR(255),
    telefone INT(13)
);


create table if not exists news(

id int auto_increment primary key,
titulo varchar(255),
desc_ varchar(255),
caminho_img varchar(255),
caminho_doc varchar(255),
data_up datetime
);


create table if not EXISTS feedback(

id int auto_increment primary key,
name varchar(255) not null,
grade int(10) not null,
message varchar(255),
crated_at datetime 

);

-- feedback table okay
