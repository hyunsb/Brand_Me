create table qualification_edu (
	user_num int auto_increment,
	user_id varchar(10),
	edu1 varchar(20),
	edu1_location varchar(30),
	edu1_period int,
	edu2 varchar(20),
	edu2_location varchar(30),
	edu2_period int,
	edu3 varchar(20),
	edu3_location varchar(30),
	edu3_period int,
	primary key(user_num)
);