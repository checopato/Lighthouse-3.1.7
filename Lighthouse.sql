CREATE TABLE users (
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(30) NOT NULL,
	password VARCHAR(30) NOT NULL,
	alias VARCHAR(3) NOT NULL,
	email VARCHAR(30) NOT NULL,
	phone VARCHAR(12),
	is_admin BOOLEAN
);

CREATE TABLE charterers (
	id INT AUTO_INCREMENT PRIMARY KEY,
	full_style VARCHAR(50) NOT NULL,
	nick VARCHAR(15) NOT NULL
);

CREATE TABLE chatererpics (
	id INT AUTO_INCREMENT PRIMARY KEY,
	charterer INT NOT NULL,
	name VARCHAR(30),
	phone VARCHAR(20),
	cel_phone VARCHAR(20),
	email VARCHAR(25)
);

CREATE TABLE shipowners (
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	full_style VARCHAR(50) NOT NULL,
	nick VARCHAR (15) NOT NULL
);

CREATE TABLE entitys (
	id INT AUTO_INCREMENT PRIMARY KEY,
	shipowner INT NOT NULL,
	name VARCHAR(30) NOT NULL,
	info VARCHAR(255)
);

CREATE TABLE entitypics (
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(30) NOT NULL,
	phone VARCHAR(20),
	cel_phone VARCHAR(20),
	email VARCHAR(25)
);

CREATE TABLE entitypics_entitys (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	entity_id INT NOT NULL,
	entitypic_id INT NOT NULL
);

CREATE TABLE fixtures (
	id INT AUTO_INCREMENT PRIMARY KEY,
	user_id INT NOT NULL,
	pic_id INT NOT NULL,
	charterer_id INT NOT NULL,
	shipowner_id INT NOT NULL,
	broker_com FLOAT(2,2) NOT NULL,
	cp_date DATE,
	fix_type VARCHAR(4),
	period_st DATE,
	period_nd DATE,
	start_counting VARCHAR(4),
	cargo_nom_day INT,
	int_per_dat INT,
	final_performer INT
);

CREATE TABLE shippings (
	id INT NOT NULL PRIMARY KEY,
	serie VARCHAR(10) NOT NULL,
	fixture_id INT NOT NULL,
	vessel VARCHAR(20),
	laycan_com DATE,
	laycan_end DATE,
	freight_rate FLOAT(2,2),
	status VARCHAR(10),
	is_fact BOOLEAN
);

CREATE TABLE commisions (
	id INT AUTO_INCREMENT PRIMARY KEY,
	shipping_id VARCHAR(10),
	date_com DATE,
	service VARCHAR(4),
	type_com VARCHAR(2),
	total FLOAT(10,2)
);

CREATE TABLE ports (
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(30) NOT NULL,
	country VARCHAR(30) NOT NULL
);

CREATE TABLE terminals (
	id INT AUTO_INCREMENT PRIMARY KEY,
	ports_id INT NOT NULL,
	name VARCHAR(30) NOT NULL,
	restriction VARCHAR(255),
	description VARCHAR(255)
);

CREATE TABLE parcels (
	id INT AUTO_INCREMENT PRIMARY KEY,
	shipping_id INT NOT NULL,
	port_id INT NOT NULL,
	type_of_call VARCHAR(2),
	volume FLOAT(10,2),
	unit VARCHAR(3),
	cargo VARCHAR(20),
	rate_op FLOAT(10,2),
	rate_av FLOAT(10,2),
	term VARCHAR(7),
	demurrage_rate FLOAT(10,2),
	freight_100 FLOAT(10,2),
	whose_agent BOOLEAN,
	agent VARCHAR(35),
	des_dem_ffi FLOAT(10,2),
	des_dem_char FLOAT(10,2),
	dem_bro FLOAT(10,2),
	baf_usd FLOAT(10,2),
	eta_arr DATE,
	etb_ber DATE,
	etoc_op_comm DATE,
	etoc_op_comp DATE,
	ets_sailed DATE
);