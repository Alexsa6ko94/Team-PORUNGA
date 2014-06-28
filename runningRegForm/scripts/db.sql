create table if not exists funcontent
(
	id int not null auto_increment primary key,
	img varchar(255) not null,
	text text not null COLLATE utf8_unicode_ci
);

insert into funcontent (img, text) values ("Design/SuperView/SuperView.jpg", "За да четете този форум, трабва да имате ренгеново зрение.
Изкарайте Fast Track курс по ренгеново зрение на стойност от 390лв.");
