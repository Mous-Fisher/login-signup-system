/*creating a database*/

create DATABASE login_system;

/*creating a table inside the database*/

	create table users (
		user_id int(11) not null AUTO_INCREMENT PRIMARY KEY,
		user_first varchar(265) not null,
		user_last varchar(265) not null,
		user_email varchar(265) not null,
		user_uid varchar(265) not null,
		user_pwd varchar(265) not null
	);