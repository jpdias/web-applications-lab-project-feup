DROP TABLE IF EXISTS alert CASCADE;
DROP TABLE IF EXISTS repair CASCADE;
DROP TABLE IF EXISTS itemtag CASCADE;
DROP TABLE IF EXISTS tag CASCADE;
DROP TABLE IF EXISTS waitinglist CASCADE;
DROP TABLE IF EXISTS reserve CASCADE;
DROP TABLE IF EXISTS requisition CASCADE;
DROP TABLE IF EXISTS item CASCADE;
DROP TABLE IF EXISTS manager CASCADE;
DROP TABLE IF EXISTS reader CASCADE;
DROP TABLE IF EXISTS admin CASCADE;
DROP TABLE IF EXISTS inventory CASCADE;
DROP TABLE IF EXISTS repaircompany CASCADE;
DROP TABLE IF EXISTS address CASCADE;

CREATE TABLE address
(
idAddress integer not null primary key,
name text not null
);

CREATE TABLE repaircompany
(
idRepaircompany integer not null primary key,
companyname text not null,
idAddress integer REFERENCES address(idAddress) not null
);

CREATE TABLE inventory
(
idInventory integer not null primary key,
name text not null
);

CREATE TABLE admin
(
idAdmin integer not null primary key,
username text unique not null,
password text not null
);

DROP TYPE IF EXISTS readerstatus;

CREATE TYPE readerstatus AS enum ('blocked', 'active', 'closed');

CREATE TABLE reader
(
idReader integer not null primary key,
username text unique not null,
password text not null,
address text,
birthdate date,
email text unique not null,
firstname text not null,
lastname text,
currentstatus readerstatus not null
);

CREATE TABLE manager
(
idManager integer not null primary key,
idInventory integer REFERENCES inventory(idInventory) not null,
idReader integer REFERENCES reader(idReader) not null
);

DROP TYPE IF EXISTS itemstatus;

CREATE TYPE itemstatus AS enum ('available', 'repair', 'withdrawn', 'unavailable');

CREATE TABLE item
(
idItem integer not null primary key,
name text not null,
image text,
description text not null,
qrcode text,
currentstatus itemstatus not null,
idInventory integer REFERENCES inventory(idInventory) not null
);

DROP TYPE IF EXISTS requisitionstatus;

CREATE TYPE requisitionstatus AS enum ('closed', 'open');

CREATE TABLE requisition
(
idRequisition integer not null primary key,
comment text not null,
initialdate date not null,
finaldate date not null check(finaldate >= initialdate),
deliverydate date check(deliverydate <= finaldate),
numberofrenewals integer not null check(numberofrenewals >= 0),
currentstatus requisitionstatus not null,
idReader integer REFERENCES reader(idReader) not null,
idItem integer REFERENCES item(idItem) not null
);

DROP TYPE IF EXISTS reservestatus;

CREATE TYPE reservestatus AS enum ('closed', 'open');

CREATE TABLE reserve
(
idReserve integer not null primary key,
reservedate date not null check(reservedate <= expiredate),
expiredate date not null,
currentstatus reservestatus not null,
idReader integer REFERENCES reader(idReader) not null,
idItem integer REFERENCES item(idItem) not null
);

CREATE TABLE waitinglist
(
idReader integer REFERENCES reader(idReader) not null,
idItem integer REFERENCES item(idItem) not null
);

CREATE TABLE tag
(
idTag integer not null primary key,
name text not null
);

CREATE TABLE itemtag
(
idItem integer REFERENCES item(idItem) not null,
idTag integer REFERENCES tag(idTag) not null
);

CREATE TABLE repair
(
idRepair integer not null primary key,
initialdate date not null,
finaldate date not null check(finaldate >= initialdate),
reason text not null,
idRepaircompany integer REFERENCES repaircompany(idRepaircompany) not null,
idItem integer REFERENCES item(idItem) not null
);

DROP TYPE IF EXISTS alertcategory;

CREATE TYPE alertcategory AS enum ('requestreceipt', 'expiration', 'itemavailability', 'receptionreceipt','confirmationemail');

CREATE TABLE alert
(
idAlert integer not null primary key,
catergory alertcategory not null,
content text not null,
createdon date not null,
idItem integer REFERENCES item(idItem),
idReader integer REFERENCES reader(idReader) not null,
idManager integer REFERENCES manager(idManager)
);