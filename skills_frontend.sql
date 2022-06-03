create table skills_frontend (
	user_num int auto_increment,
	user_id varchar(10),
	career varchar(20),
	skills1 varchar(20),
	skills2 varchar(20),
	skills3 varchar(20),
	skills4 varchar(20),
	skills1_per int,
	skills2_per int,
	skills3_per int,
	skills4_per int,
	primary key(user_num)
);