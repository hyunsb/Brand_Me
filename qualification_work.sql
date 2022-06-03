create table qualification_work (
	user_num int auto_increment,
	user_id varchar(10),
	work1 varchar(20),
	work1_location varchar(30),
	work1_period int,
	work2 varchar(20),
	work2_location varchar(30),
	work2_period int,
	work3 varchar(20),
	work3_location varchar(30),
	work3_period int,
	primary key(user_num)
);