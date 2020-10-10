/*
Information:
  This database is built for the business EzyChef in order to analysing profit from each product which has been sold in the past. Also, this database is supporting keeping track of both raw materials, product batches and orders from customers.
Assumption:
  1. Assuming that the database has the name is EzyChef and exists on database system.
  2. Assuming that the database has any existed table.
*/

/*using database EzyChef*/
use EzyChef;
/**/

/*Tier 1*/
/*creating table customer_list*/
create table if not exists customer_list(
  customer_id varchar(100) not null primary key,
  customer_name text not null,
  customer_business_ABN text not null default 'N/A',
  customer_address text not null default 'N/A',
  customer_activation_status boolean not null default TRUE,
  customer_description text not null default 'N/A',
  edit_flag boolean not null default FALSE
);
/**/

/*creating table product_list*/
create table if not exists product_list(
  product_id varchar(100) not null primary key,
  product_name text not null,
  product_reference_price float not null default 0.0,
  product_unit text not null default 'N/A',
  product_type text not null default 'N/A',
  product_activation_status boolean not null default TRUE,
  product_description text not null default 'N/A',
  edit_flag boolean not null default FALSE
);
/**/

/*creating raw_material_list table*/
create table if not exists raw_material_list(
  raw_material_id varchar(100) not null primary key,
  raw_material_name text not null,
  raw_material_duration text not null default 0,
  raw_material_duration_unit text not null default 'N/A',
  raw_material_unit text not null,
  raw_material_storing_instuction text not null default 'N/A',
  raw_material_activation_status boolean not null default TRUE,
  raw_material_description text not null default 'N/A',
  edit_flag boolean not null default FALSE
);
/**/

/*creating table supplier_list*/
create table if not exists supplier_list(
  supplier_id varchar(100) not null primary key,
  supplier_name text not null,
  supplier_address text not null default 'N/A',
  supplier_state text not null default 'N/A',
  supplier_region text not null default 'N/A',
  supplier_activation_status boolean not null default TRUE,
  supplier_description text not null default 'N/A',
  edit_flag boolean not null default FALSE
);
/**/

/*creating table system_administration*/
create table if not exists system_administration(
  system_user_id varchar(100) not null primary key,
  username text not null,
  password text not null,
  system_user_description text not null default 'N/A',
  edit_flag boolean not null default FALSE
);
/**/
/*Tier 1 end*/

/*Tier 2*/
/*creating table customer_contact_detail*/
create table if not exists customer_contact_detail(
  customer_contact_id int not null primary key auto_increment,
  customer_id varchar(100) not null,
  customer_contact_type text not null default 'N/A',
  customer_contact_value text not null,
  customer_contact_person text not null default 'N/A',
  customer_contact_description text not null default 'N/A',
  edit_flag boolean not null default FALSE,
  foreign key(customer_id) references customer_list(customer_id) on update cascade on delete cascade
);
/**/

/*creating table customer_order_list*/
create table if not exists customer_order_list(
  customer_order_id int not null primary key auto_increment,
  customer_id varchar(100) not null,
  placed_order_date text not null,
  customer_order_payment_method text not null default 'N/A',
  order_expected_payment_date text not null default 'N/A',
  total_order_price float not null default 0,
  order_deposit_amount float not null default 0,
  customer_order_start_date text not null default 'N/A',
  customer_order_end_date text not null default 'N/A',
  order_status boolean not null default FALSE,
  order_description text not null default 'N/A',
  edit_flag boolean not null default FALSE,
  foreign key(customer_id) references customer_list(customer_id) on update cascade on delete restrict
);
/**/

/*creating table product_fixed_cost*/
create table if not exists product_fixed_cost(
  product_fixed_cost_id int not null primary key auto_increment,
  product_id varchar(100) not null,
  product_fixed_cost_name text not null default 'N/A',
  product_fixed_cost_value float not null,
  product_fixed_cost_description text not null default 'N/A',
  edit_flag boolean not null default FALSE,
  foreign key(product_id) references product_list(product_id) on update cascade on delete cascade
);
/**/

/*creating table product_raw_material*/
create table if not exists product_raw_material(
  product_id varchar(100) not null,
  raw_material_id varchar(100) not null,
  product_raw_material_description text not null default 'N/A',
  edit_flag boolean not null default FALSE,
  primary key(product_id, raw_material_id),
  foreign key(product_id) references product_list(product_id) on update cascade on delete restrict,
  foreign key(raw_material_id) references raw_material_list(raw_material_id) on update cascade on delete restrict
);
/**/

/*creating table raw_material_storage*/
create table if not exists raw_material_storage(
  raw_material_batch_id int not null primary key auto_increment,
  raw_material_id varchar(100) not null,
  raw_material_storage_import_date text not null default 'N/A',
  raw_material_storage_expired_date text not null default 'N/A',
  raw_material_average_cost_per_unit float not null,
  raw_material_total_batch_cost float not null,
  raw_material_total_import_quantity float not null,
  raw_material_current_quantity float not null,
  raw_material_batch_description text not null default 'N/A',
  edit_flag boolean not null default FALSE,
  foreign key(raw_material_id) references raw_material_list(raw_material_id) on update cascade on delete restrict
);
/**/

/*creating table supplier_contact_detail*/
create table if not exists supplier_contact_detail(
  supplier_contact_id int not null primary key auto_increment,
  supplier_id varchar(100) not null,
  supplier_contact_type text not null default 'N/A',
  supplier_contact_value text not null,
  supplier_contact_person text not null default 'N/A',
  supplier_contact_detail_description text not null default 'N/A',
  edit_flag boolean not null default FALSE,
  foreign key(supplier_id) references supplier_list(supplier_id) on update cascade on delete restrict
);
/**/
/*Tier 2 end*/

/*Tier 3*/

/*creating table customer_order_batch*/
create table if not exists customer_order_batch(
  customer_order_batch_id int not null primary key auto_increment,
  customer_order_id int not null,
  order_batch_expected_delivery_date text not null default 'N/A',
  total_order_batch_price float not null default 0,
  order_batch_status boolean not null default FALSE,
  order_batch_description text not null default 'N/A',
  edit_flag boolean not null default FALSE,
  foreign key(customer_order_id) references customer_order_list(customer_order_id) on update cascade on delete cascade
);
/**/

/*creating table raw_material_storage_detail*/
create table if not exists raw_material_storage_detail(
  raw_material_storage_detail_id int not null primary key auto_increment,
  raw_material_batch_id int not null,
  supplier_id varchar(100) not null,
  raw_material_cost_per_unit float not null default 0,
  raw_material_import_quantity float not null default 0,
  raw_material_storage_detail_description text not null default 'N/A',
  foreign key(raw_material_batch_id) references raw_material_storage(raw_material_batch_id) on update cascade on delete cascade,
  foreign key(supplier_id) references supplier_list(supplier_id) on update cascade on delete cascade
);
/**/
/*Tier 3 end*/

/*Tier 4*/
/*creating table customer_order_product_detail*/
create table if not exists customer_order_product_detail(
  customer_order_detail_id int not null primary key auto_increment,
  product_id varchar(100) not null,
  customer_order_batch_id int not null,
  order_product_quantity float not null,
  customer_order_detail_price_per_unit float not null default 0,
  customer_order_detail_description text not null default 'N/A',
  edit_flag boolean not null default FALSE,
  foreign key(product_id) references product_list(product_id) on update cascade on delete restrict,
  foreign key(customer_order_batch_id) references customer_order_batch(customer_order_batch_id) on update cascade on delete cascade
);
/**/
/*Tier 4 end*/

/*Tier 5*/
/*creating table customer_order_raw_material_detail*/
create table if not exists customer_order_raw_material_detail(
  order_detail_product_raw_material_id int not null primary key auto_increment,
  customer_order_detail_id int not null,
  raw_material_batch_id int not null,
  order_raw_material_quantity float not null,
  order_detail_product_material_description text not null default 'N/A',
  edit_flag boolean not null default FALSE,
  foreign key(customer_order_detail_id) references customer_order_product_detail(customer_order_detail_id) on update cascade on delete cascade,
  foreign key(raw_material_batch_id) references raw_material_storage(raw_material_batch_id) on update cascade on delete cascade
);
/**/
/*Tier 5 end*/
