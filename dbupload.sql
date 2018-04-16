CREATE TABLE Vendors (
	vendor_id int NOT NULL ,
	vendor_name varchar(255) NOT NULL 

);


CREATE TABLE Employee (
	employeeID varchar (50) NOT NULL ,
	name varchar (50) NOT NULL ,
	address varchar (50) NOT NULL ,
	phone_number varchar (50) NOT NULL
);

CREATE TABLE Admin (
	username varchar (50) NOT NULL,
	password varchar (50) NOT NULL
);

insert into Customer values('1','Kami Clow','123 Street','kami@gmail.com')
insert into Customer values('2','Steve Sow','45 W 100 E','steve@gmail.com')	
insert into Customer values('3','Linder Johns','Applewood Way','linderJ@buyers.com')

insert into PaymentInfo values('1','0','10 E 1250 N','1')
insert into PaymentInfo values('1','0','Johnsonville drive','2')
insert into PaymentInfo values('0','1','Applewood Way','3')

insert into CreditCard values('1111-222-3333-4444','visa','05/20')
insert into CreditCard values('2222-333-4444-5555','amex','01/21')

insert into Cash values('$','50')

insert into Orders values('1','2018-01-01')
insert into Orders values('2','2018-01-01')

insert into Vendors values('1','Cotton Vendor')
insert into Vendors values('2','Textile Vendor')

insert into Employee values('1','Austin Cloward','2093 N 40 W','801-111-2222')
insert into Employee values('2','John Smith','250 Driveby','801-134-5211')

insert into Admin vales('admin','My@pwd321')