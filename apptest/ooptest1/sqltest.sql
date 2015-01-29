 CREATE TABLE IF NOT EXIST user (
 id int not null KEY AUTO_INCREMENT ,
 username varchar(50) not null ,
 class int not null,
 tname varchar(50) not null,
 score float not null
 )ENGINE=innoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;