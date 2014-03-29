DROP TABLE IF EXISTS alert;
DROP TABLE IF EXISTS inventory;
DROP TABLE IF EXISTS repair;
DROP TABLE IF EXISTS itemtag;
DROP TABLE IF EXISTS tag;
DROP TABLE IF EXISTS waitinglist;
DROP TABLE IF EXISTS item;
DROP TABLE IF EXISTS reserve;
DROP TABLE IF EXISTS requisition;
DROP TABLE IF EXISTS manager;
DROP TABLE IF EXISTS reader;
DROP TABLE IF EXISTS admin;
DROP TABLE IF EXISTS repaircompany;
DROP TABLE IF EXISTS city;

CREATE TABLE city
(
idcity integer not null primary key,
name text not null
);

CREATE TABLE repaircompany
(
idrepaircompany integer not null primary key,
companyname text not null,
idcity references city(idcity) not null
);

CREATE TABLE admin
(
idadmin integer not null primary key,
username unique not null,
password unique not null,
);

CREATE TYPE readerstatus AS enum ('blocked', 'active', 'closed');

CREATE TABLE reader
(
idreader integer not null primary key,
username unique not null,
password unique not null,
address text,
birthdate date,
email unique not null,
firstname text not null,
lastname text,
currentstatus readerstatus not null
);

CREATE TABLE manager
(
idmanager integer not null primary key,
idinventory references inventory(idinventory) not null
);

CREATE TYPE requisitionstatus AS enum ('closed', 'open');

CREATE TABLE requisition
(
idrequistion integer not null primary key,
comment text not null,
finaldate date not null,
deliverydate date not null check(deliverydate <= finaldate),
initialdate date not null check(initialdate <= finaldate),
numberofrenewals integer not null check(numberofrenewals >= 0),
currentstatus requisitionstatus not null
idreader references reader(idreader) not null,
iditem references item(iditem) not null
);

CREATE TYPE reservestatus AS enum ('closed', 'open');

CREATE TABLE reserve
(
idreserve integer not null primary key,
expiredate date not null,
reservedate date not null check(reservedate <= expiredate),
currentstatus reservestatus not null,
idreader references reader(idreader) not null,
iditem references item(iditem) not null
);

CREATE TYPE itemstatus AS enum ('available', 'repair', 'withdrawn', 'unavailable');

CREATE TABLE item
(
iditem integer not null primary key,
name text not null,
image text,
description text not null,
qrcode text,
currentstatus itemstatus not null,
idinventory references inventory(idinventory) not null
);

CREATE TABLE waitinglist
(
idreader references reader(idreader) not null primary key,
iditem references item(iditem) not null primary key
);

CREATE TABLE tag
(
idtag integer not null primary key,
name text not null
);

CREATE TABLE itemtag
(
iditem references item(iditem) not null primary key,
idtag references tag(idtag) not null primary key
);

CREATE TABLE repair
(
idrepair integer not null primary key,
finaldate date not null,
initialdate date not null check(initialdate <= finaldate),
reason text not null,
idrepaircompany references repaircompany(idrepaircompany) not null
);

CREATE TABLE inventory
(
idinventory integer not null primary key,
name text not null
);

CREATE TYPE alertcategory AS enum ('requestreceipt', 'expiration', 'itemavailability', 'receptionreceipt');

CREATE TABLE alert
(
idalert integer not null primary key,
catergory alertcategory not null
content text not null,
createdon date not null,
iditem references item(iditem) not null,
idreader references reader(idreader) not null
idmanager references manager(idmanager) not null
);