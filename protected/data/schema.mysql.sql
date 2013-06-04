
CREATE TABLE sp_users(
		user_id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
		username varchar(32),
		password varchar(32),
		firstname varchar(32),
		lastname varchar(32),
		email varchar(128),
		phone varchar(20),
		cdate datetime,
		status tinyint(1)
	) ENGINE = InnoDB;


CREATE TABLE sp_events(
		event_id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
		user_id int(11),
		event_name varchar(32),
		event_desc text,
		event_shortdesc varchar(512),
		event_venue varchar(32),
		event_image varchar(256),
		event_status tinyint(1),
		FOREIGN KEY (user_id) REFERENCES sp_users(user_id)		
) ENGINE = InnoDB;


CREATE TABLE sp_friends(
		id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
		user_id int(11),
		firstname varchar(32),
		lastname varchar(32),
		email varchar(256),
		phone varchar(20),
		whois varchar(128),
		FOREIGN KEY (user_id) REFERENCES sp_users(user_id)		
) ENGINE = InnoDB;


CREATE TABLE sp_credentials(
		id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
		username varchar(64),
		password varchar(64),
		type tinyint(1)	COMMENT '1-gmail,2-way2sms'
) ENGINE = InnoDB;
ALTER TABLE  `sp_users` CHANGE  `status`  `status` TINYINT( 1 ) NULL DEFAULT  '0';