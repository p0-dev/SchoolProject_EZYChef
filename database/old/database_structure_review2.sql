/**/
/*Database review 2*/
/*27/09/2020*/

create database if not exists EzyChef;
use EzyChef;

/*
System permission:
0: Lowest user's level
1: Average users
2: Experts
3: Managers
4: Admin
*/
/*SYSTEM ADMINISTRATION*/
create table if not exists system_administration(
  username varchar(100) not null primary key,
  password text not null,
  permission int not null default 0,
  description text null default 'N/A',
  edit_flag boolean not null default FALSE
);
/*
insert into system_administration(username, password, permission)
values('admin', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 4);
*/

/*LIST OF PRODUCTS*/
create table if not exists products(
  id varchar(100) not null primary key,
  description text null default 'N/A',
  edit_flag boolean not null default FALSE
);
/*
insert into products(id)
values('test1');
*/

/*PRODUCT SALE UNITS*/
create table if not exists unit_sales(
  product_id varchar(100) not null,
  record_time DATE not null,
  sale_unit int not null,
  description text null default 'N/A',
  edit_flag boolean not null default FALSE,
  primary key(product_id, record_time),
  foreign key(product_id) references products(id) on delete restrict on update cascade
);
/*
insert into unit_sales(product_id, record_time, sale_unit)
values('test2', '2020-01-01', 100);
*/

/*COST OF SALE (PRODUCT) PER MONTH*/
create table if not exists sale_cost(
  product_id varchar(100) not null,
  record_time DATE not null,
  sale_cost float not null,
  description text null default 'N/A',
  edit_flag boolean not null default FALSE,
  primary key(product_id, record_time),
  foreign key(product_id) references products(id) on delete restrict on update cascade
);
/*
insert into sale_cost(product_id, record_time, sale_cost)
values('test2', '2020-01-01', 100);
*/

/*COST OF SALE PER UNIT PER MONTH*/
create table if not exists sale_cost_unit(
  product_id varchar(100) not null,
  record_time DATE not null,
  sale_cost_unit float not null,
  description text null default 'N/A',
  edit_flag boolean not null default FALSE,
  primary key(product_id, record_time),
  foreign key(product_id) references products(id) on delete restrict on update cascade
);

/*
insert into sale_cost_unit(product_id, record_time, sale_cost_unit)
values('test2', '2020-01-01', 100);
*/
