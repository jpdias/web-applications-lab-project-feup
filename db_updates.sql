--reader updates

UPDATE reader 
SET password = :passw
WHERE username = :usern;

UPDATE reader 
SET address = :addressw
WHERE username = :usern;

UPDATE reader 
SET birthdate = :birth
WHERE username = :usern;

UPDATE reader 
SET email = :email
WHERE username = :usern;

UPDATE reader 
SET firstname = :firstn, lastname = :lastn
WHERE username = :usern;

--manager upadates about readers

UPDATE reader 
SET currentstatus = :newstatus
WHERE username = :usern;

--item updates

UPDATE item
SET currentstatus = :newstatus
WHERE idItem = :idquery;

UPDATE alert
SET category  = :newcat
WHERE idReader =  :idQuery;

UPDATE alert
SET category  = :newcat
WHERE idAlert =  :idQuery;

UPDATE alert
SET category  = :newcat
WHERE idAlert =  :idQuery;

UPDATE alert
SET category  = :newcat
WHERE idReader =  :idQuery;

--requesition/reservation updates

UPDATE requisition
SET finaldate = :newfinal
WHERE idRequesition = :idreq;

UPDATE requisition
SET numberofrenewals = numberofrenewals + 1
WHERE idRequesition = :idreq;

UPDATE requisition
SET currentstatus = :newstatus
WHERE idRequesition = :idreq;

UPDATE reserve
SET expiredate = :newexp
WHERE idReserve = :idres;

UPDATE reserve
SET currentstatus = :newstatus
WHERE idReserve = :idres;


--Deletes

DELETE FROM alert WHERE alert.idAlert = :idQuery;

--Transactions

--Confirmation new password / email
--Serializable
BEGIN;
	UPDATE reader 
		SET password = :passw
		WHERE username = :usern;
	INSERT ON alert (category,content,createdon,idReader)
		VALUES('confirmationemail','Account Confirmation -  New Password', CURRENT_DATE,n_reader.idReader);
COMMIT;

BEGIN;
	UPDATE reader 
		SET email = :email
		WHERE username = :usern;
	INSERT ON alert (category,content,createdon,idReader)
		VALUES('confirmationemail','Account Confirmation -  New Email', CURRENT_DATE,n_reader.idReader);		
COMMIT;

--Create tags
--Serializable
BEGIN;
	INSERT ON tag VALUES(:idtag,:name);
	INSERT ON itemtag VALUES(:iditem,:idtag);
COMMIT;
