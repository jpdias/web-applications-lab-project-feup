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
