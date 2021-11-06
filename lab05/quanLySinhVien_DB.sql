create database `quanLySinhVien`;
use `quanLySinhVien`;

drop table Lop;
drop table SinhVien;
create table `Lop`(
MALOP char(5) primary KEY,
TENLOP varchar(50)
);


create table `SinhVien` (
MSSV varchar(7) primary key,
HOTEN varchar(50),
TUOI int,
MALOP char(5),
constraint foreign key (MALOP) references `Lop`(MALOP)
)


/*
select is_Exists_Lop("CTK44","CNTT K44");
drop function is_Exists_Lop;
DELIMITER $$
CREATE FUNCTION `is_Exists_Lop`(malop char(5), tenlop varchar(50)) RETURNS int
DETERMINISTIC
BEGIN
declare rowNumber int;
SET SQL_SAFE_UPDATES=0;
set rowNumber =  (select count(*) from Lop where MALOP like concat("%",malop,"%"));
SET SQL_SAFE_UPDATES=1;
RETURN rowNumber;
END;
DELIMITER;
*/


drop procedure Add_Lop_Proc
DELIMITER $$
create procedure `Add_Lop_Proc`(
malop char(5), 
tenlop varchar(50))
begin
declare message varchar(50);
	insert into Lop values(malop, tenlop); 
    set  message="Thêm lóp thành công"  ;
end;
DELIMITER

call Add_Lop_Proc('CTK42','CONTT K42');
DELIMITER $$

create procedure `Update_Lop`(in malop char(5), tenlop varchar(50)
)
begin
SET SQL_SAFE_UPDATES=0;
update Lop set TENLOP = tenlop where MALOP = malop;
SET SQL_SAFE_UPDATES=1;
end;
DELIMITER;

call Update_Lop('CTK44','CONTT K44');
select * from Lop
drop procedure Del_Lop_Proc;

DELIMITER $$
create procedure `Del_Lop_Proc` (malop char(5))
begin 
if exists (select * from Lop where MALOP = malop) then
	delete from Lop where MALOP = malop;
end if;
end ;
DELIMITER;
select * from Lop
call Del_Lop_Proc('CTK42');

----------------- student -----------------
DELIMITER $$
create procedure `Add_SinhVien_Proc`(
mssv varchar(7),
hoten varchar(50),
tuoi int,
malop char(5)
)
begin 
	insert into SinhVien values(mssv,hoten,tuoi,malop);
end;
DELIMITER;
call Add_SinhVien_Proc('1812860','Nguyen Trien',16,'CTK42')
select * from SinhVien;

DELIMITER $$
create procedure `Update_SinhVien_Proc`(
mssv varchar(7),
hoten varchar(50),
tuoi int,
malop char(5)
)
begin 
	Update  SinhVien set MSSV =mssv,HOTEN = hoten,TUOI=tuoi,MALOP =malop;
end;
DELIMITER;
call Update_SinhVien_Proc('1812860','Nguyen Trien',46,'CTK42');

DELIMITER $$
create procedure `Del_SinhVien_Proc`(
mssv varchar(7)
)
begin 
	Delete from SinhVien where MSSV =mssv;
end;
DELIMITER;
 
call Del_SinhVien_Proc('1812860')

