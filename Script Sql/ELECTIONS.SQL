create database elections;
use elections;

create table if not exists election(
idElection int (11) primary key auto_increment,
year int (4) not null,
vote_count int (10) not null,
political_party ENUM('democrat', 'republic', 'other') not null,
code_county_id int (11) not null
);


create table if not exists county(
code_county int (11) primary key,
code_state varchar(10) not null,
county varchar(50) not null,
population int(10) not null,
area int(10) not null
);

create table if not exists coordinator(
idCoordinator int (11) primary key auto_increment,
name varchar(100) not null,
document varchar(20) not null,
email varchar(100) not null,
password varchar(30) not null
);


insert into coordinator (name, document, email, password) values ('Imanku', '10004123', 'imanku@imanku.com', '12345');

ALTER TABLE election
ADD foreign key (code_county_id) references county(code_county) ON DELETE CASCADE;
