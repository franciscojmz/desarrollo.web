<?php 

create table discos(

	id_Disco int not null auto_increment,
	nombre varchar (30) not null,
	imagen varchar (100) not null,
	description text null,
	disquera int not null,
	primary key (id_Disco)
	

)ENGINE MyiSAM CHARSET=utf8;

create table disquera( 
id_Disquera int not null auto_increment,
disquera varchar (25) not null,
primary key(id_Disquera)
) ENGINE MyiSAM CHARSET=utf8;

INSERT INTO disquera(id_Disquera, disquera) values
(1,"EMI"),
(2,"Espiral"),
(3,"Sony Music México"),
(4,"Fonovisa"),
(5,"wea"),
(6,"latina");


 ?>