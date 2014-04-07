
--login user
SELECT name FROM reader WHERE name LIKE :query AND password LIKE :query;

--reserve list
SELECT name,firstname,lastname,reservedate 
FROM reserve,item,reader 
WHERE reserve.iditem = item.iditem AND reserve.idreader = reader.idreader;

--repair list

SELECT name, reason, finaldate, companyname
FROM repair, item, repaircompany
WHERE repair.iditem = item.iditem AND repair.idrepaircompany =repair.idrepaircompany;

--requesition list
SELECT name,firstname,lastname,finaldate
FROM requisition,item,reader 
WHERE requisition.iditem = item.iditem AND requisition.idreader = reader.idreader;

--user list
SELECT username,firstname,lastname,address
FROM reader,manager
WHERE reader.idreader!=manager.idmanager;
--active users
SELECT username,firstname,lastname, address
FROM reader, manager
WHERE reader.idreader!=manager.idmanager AND currentstatus = 'active';
--blocked users
SELECT username,firstname,lastname, address
FROM reader, manager
WHERE reader.idreader!=manager.idmanager AND currentstatus = 'blocked';
--managers
SELECT username,firstname,lastname, address
FROM reader, manager
WHERE reader.idreader=manager.idmanager;

--active alert (once a day query)
SELECT alertcategory,item,reader
FROM alert,item,reader,requesition
WHERE alert.idreader = reader.idreader 
AND alert.iditem = item.iditem 
AND requesition.iditem = alert.iditem
AND (CURRENT_DATE-requesition.finaldate)<=3;

--top 100 tags
SELECT name FROM 
(SELECT DISTINCT ON (idtag), name, count(iditem) AS nitems FROM 
(SELECT * FROM tag JOIN itemtag ON idtag) ORDER BY nitems DESC limit 100);

--get user data
SELECT name FROM reader WHERE name LIKE :query; 

--get item data for tag
SELECT name,image,description,qrcode,currentstatus
FROM item it
INNER JOIN itemtag it1 ON it.iditem = it1.iditem
INNER JOIN tag t ON it1.idtag=t.idtag
WHERE tag.name LIKE tag:query;

--get item data
SELECT name,image,description, qrcode, currentstatus 
FROM item
WHERE item.idItem = :idquery;

--get requesition data
SELECT name,firstname,lastname,finaldate
FROM requisition,item,reader 
WHERE requisition.iditem = item.iditem AND requisition.idreader = reader.idreader AND requisition.idRequesition = :idquery;

--get reservation data
SELECT name,firstname,lastname,finaldate
FROM reserve,item,reader 
WHERE reserve.iditem = item.iditem AND reserve.idreader = reader.idreader AND reserve.idReserve = :idquery;

