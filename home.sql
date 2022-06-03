create table home (
	user_num int auto_increment,
	user_id  varchar(10) not null,
	user_name varchar(10) not null,
	occupation varchar(30),
	home_introduction varchar(30),
	user_img varchar(50),
	git varchar(50),
	blog varchar(50),
	instagram varchar(50),
	primary key(user_num)
);