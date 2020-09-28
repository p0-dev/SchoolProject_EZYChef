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
/*System Administration*/
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
