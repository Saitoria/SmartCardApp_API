create database if not exists smartcard_db;
use smartcard_db;

create table if not exists student(
student_id char(11) not null,
student_fname varchar(50) not null,
programme varchar(10) not null,
year integer not null,
sem1_pay BIT(1) not null,
sem2_pay BIT(1) not null,
img_dir varchar(255) not null,
primary key(student_id)
);

create table if not exists udsm_staff(
staff_id char(13) not null,
staff_fname varchar(10) not null,
staff_admin bit(1) not null,
department varchar(10) not null,
staff_password varchar(255) not null,
primary key(staff_id)
);

insert into student(student_id,student_fname,programme,year,sem1_pay,sem2_pay,img_dir) values (20190411297,"Saroni W. Saitoria","CEIT",3,1,0,"profilePicture/20190411297");
insert into student(student_id,student_fname,programme,year,sem1_pay,sem2_pay,img_dir) values (20190408545,"Aaron Audax","CS",3,1,1,"profilePicture/20190408545");
insert into student(student_id,student_fname,programme,year,sem1_pay,sem2_pay,img_dir) values (20190407303,"Winstone Mjule","CS",3,1,0,"profilePicture/20190407303");
insert into student(student_id,student_fname,programme,year,sem1_pay,sem2_pay,img_dir) values (20190412582,"Mathias Thomas","CS",3,1,1,"profilePicture/20190412582");
insert into student(student_id,student_fname,programme,year,sem1_pay,sem2_pay,img_dir) values (20190408124,"Daniel S. Msangi","CEIT",3,1,0,"profilePicture/20190408124");
insert into student(student_id,student_fname,programme,year,sem1_pay,sem2_pay,img_dir) values (20190410399,"Calvin A. Ogigo","CEIT",3,1,0,"profilePicture/20190410399");
insert into student(student_id,student_fname,programme,year,sem1_pay,sem2_pay,img_dir) values (20190412812,"Machuche M. Wambura","CEIT",3,1,1,"profilePicture/20190412812");
insert into student(student_id,student_fname,programme,year,sem1_pay,sem2_pay,img_dir) values (20190408908,"Elizabeth A. Mwakitambo","BIT",3,1,0,"profilePicture/20190408908");
insert into student(student_id,student_fname,programme,year,sem1_pay,sem2_pay,img_dir) values (20190413149,"Gabriela R Woiso" ,"BIT",3,1,0,"profilePicture/20190413149");
insert into student(student_id,student_fname,programme,year,sem1_pay,sem2_pay,img_dir) values (20190412632,"Winfrida Yudathadei","BIT",3,1,1,"profilePicture/20190412632");
insert into student(student_id,student_fname,programme,year,sem1_pay,sem2_pay,img_dir) values (20190405756,"Emmanuel J. Malamsha","CS",3,1,0,"profilePicture/20190405756");
insert into student(student_id,student_fname,programme,year,sem1_pay,sem2_pay,img_dir) values (20190400175,"Sophia Y. Ahmed","BIT",3,1,1,"profilePicture/20190400175");


insert into udsm_staff(staff_id,staff_fname,staff_admin,department,staff_password) values (2010031001,"Hassan Omary",1,"CSE","OMARY");
insert into udsm_staff(staff_id,staff_fname,staff_admin,department,staff_password) values (2010031209,"Salome Maro",0,"CSE","MARO");
insert into udsm_staff(staff_id,staff_fname,staff_admin,department,staff_password) values (2010022512,"Baraka Maiseli",0,"ETE","MAISELI");
insert into udsm_staff(staff_id,staff_fname,staff_admin,department,staff_password) values (2010031509,"Merina  Marcelino",0,"CSE","MARCELINO");

