create database if not exists EzyChef;
use EzyChef;

/**/
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

/**/
create table if not exists supplier_material_purchase(
  supplier_id varchar(255) not null,
  material_id varchar(255) not null,
  startTime DATE not null,
  endTime DATE not null,
  quantity float not null,
  amount float not null,
  unit_price float not null,
  description text null default 'N/A',
  edit_flag boolean not null default FALSE,
  primary key(supplier_id, material_id, startTime, endTime),
  foreign key(product_id) references product(product_id) on delete restrict on update cascade
);

/**/
create table if not exists assemble(
  product_id varchar(255) not null,
  material_id varchar(255) not null,
  value float not null,
  description text null default 'N/A',
  edit_flag boolean not null default FALSE,
  primary key(product_id, material_id),
  foreign key(product_id) references product(product_id) on delete restrict on update cascade,
  foreign key(material_id) references material(material_id) on delete restrict on update cascade
);
/**/
create table if not exists product(
  product_id varchar(255) not null primary key,
  description text null default 'N/A',
  edit_flag boolean not null default FALSE
);

/**/
create table if not exists sale_unit(
  product_id varchar(255) not null,
  record_time DATE not null,
  value float not null,
  description text null default 'N/A',
  edit_flag boolean not null default FALSE,
  primary key(product_id, record_time),
  foreign key(product_id) references product(product_id) on delete restrict on update cascade
);

/**/
create table if not exists sale_cost(
  product_id varchar(255) not null,
  record_time DATE not null,
  value float not null,
  description text null default 'N/A',
  edit_flag boolean not null default FALSE,
  primary key(product_id, record_time),
  foreign key(product_id) references product(product_id) on delete restrict on update cascade
);

/**/
create table if not exists sale(
  product_id varchar(255) not null,
  record_time DATE not null,
  value float not null,
  description text null default 'N/A',
  edit_flag boolean not null default FALSE,
  primary key(product_id, record_time),
  foreign key(product_id) references product(product_id) on delete restrict on update cascade
);

/**/
create table if not exists profit(
  product_id varchar(255) not null,
  record_time DATE not null,
  value float not null,
  description text null default 'N/A',
  edit_flag boolean not null default FALSE,
  primary key(product_id, record_time),
  foreign key(product_id) references product(product_id) on delete restrict on update cascade
);

/**/
create table if not exists unit_profit(
  product_id varchar(255) not null,
  record_time DATE not null,
  value float not null,
  description text null default 'N/A',
  edit_flag boolean not null default FALSE,
  primary key(product_id, record_time),
  foreign key(product_id) references product(product_id) on delete restrict on update cascade
);

/**/
create table if not exists supplier(
  supplier_id varchar(255) not null primary key,
  description text null default 'N/A',
  edit_flag boolean not null default FALSE
);

/**/
create table if not exists material(
  material_id varchar(255) not null primary key,
  description text null default 'N/A',
  edit_flag boolean not null default FALSE
);

/**/
create table if not exists supplier_purchase(
  supplier_id varchar(255) not null,
  record_time DATE not null,
  value float not null,
  description text null default 'N/A',
  edit_flag boolean not null default FALSE,
  primary key(supplier_id, record_time),
  foreign key(supplier_id) references supplier(supplier_id) on delete restrict on update cascade
);

/**/
create table if not exists material_purchase(
  material_id varchar(255) not null,
  record_time DATE not null,
  value float not null,
  description text null default 'N/A',
  edit_flag boolean not null default FALSE,
  primary key(material_id, record_time),
  foreign key(material_id) references material(material_id) on delete restrict on update cascade
);

/**/
create table if not exists supplier_material(
  indexID int AUTO_INCREMENT not null,
  material_id varchar(255) not null,
  supplier_id varchar(255) not null,
  description text null default 'N/A',
  edit_flag boolean not null default FALSE,
  primary key(indexID),
  foreign key(material_id) references material(material_id) on delete restrict on update cascade,
  foreign key(supplier_id) references supplier(supplier_id) on delete restrict on update cascade
);

/**/
create table if not exists supplier_material_purchase(
  indexID int not null primary key,
  startTime DATE not null,
  endTime DATE not null,
  quantity float not null,
  amount float not null,
  unit_price float not null,
  description text null default 'N/A',
  edit_flag boolean not null default FALSE,
  foreign key(indexID) references supplier_material(indexID) on delete restrict on update cascade
);
