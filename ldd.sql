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
idRepaircompany integer not null primary key,
companyname text not null,
idcity REFERENCES city(idcity) not null
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
idReader integer not null primary key,
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
idInventory REFERENCES inventory(idInventory) not null,
idReader REFERENCES Reader(idReader) not null
);

CREATE TYPE requisitionstatus AS enum ('closed', 'open');

CREATE TABLE requisition
(
idRequistion integer not null primary key,
comment text not null,
finaldate date not null,
deliverydate date not null check(deliverydate <= finaldate),
initialdate date not null check(initialdate <= finaldate),
numberofrenewals integer not null check(numberofrenewals >= 0),
currentstatus requisitionstatus not null,
idReader REFERENCES reader(idReader) not null,
idItem REFERENCES item(idItem) not null1
);

CREATE TYPE reservestatus AS enum ('closed', 'open');

CREATE TABLE reserve
(
idReserve integer not null primary key,
expiredate date not null,
reservedate date not null check(reservedate <= expiredate),
currentstatus reservestatus not null,
idReader REFERENCES reader(idReader) not null,
idItem REFERENCES item(idItem) not null
);

CREATE TYPE itemstatus AS enum ('available', 'repair', 'withdrawn', 'unavailable');

CREATE TABLE item
(
idItem integer not null primary key,
name text not null,
image text,
description text not null,
qrcode text,
currentstatus itemstatus not null,
idInventory REFERENCES inventory(idInventory) not null
);

CREATE TABLE waitinglist
(
idReader REFERENCES reader(idReader) not null primary key,
idItem REFERENCES item(idItem) not null primary key
);

CREATE TABLE tag
(
idtag integer not null primary key,
name text not null
);

CREATE TABLE itemtag
(
idItem REFERENCES item(idItem) not null primary key,
idtag REFERENCES tag(idtag) not null primary key
);

CREATE TABLE repair
(
idRepair integer not null primary key,
finaldate date not null,
initialdate date not null check(initialdate <= finaldate),
reason text not null,
idRepaircompany REFERENCES repaircompany(idRepaircompany) not null,
idItem REFERENCES item(idItem) not null primary key
);

CREATE TABLE inventory
(
idInventory integer not null primary key,
name text not null
);

CREATE TYPE alertcategory AS enum ('requestreceipt', 'expiration', 'itemavailability', 'receptionreceipt');

CREATE TABLE alert
(
idalert integer not null primary key,
catergory alertcategory not null,
content text not null,
createdon date not null,
idItem REFERENCES item(idItem) not null,
idReader REFERENCES reader(idReader) not null,
idmanager REFERENCES manager(idmanager)
);