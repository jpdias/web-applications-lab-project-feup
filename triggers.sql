CREATE TRIGGER alert_requisition
AFTER INSERT ON requisition
REFERENCING 
	NEW AS n_req
BEGIN
	UPDATE item
		SET item.currentstatus = 'unavailable'
		WHERE item.iditem = n_req.iditem;
	INSERT INTO alert('expiration',
		n_req.text,
		n_req.finaldate,
		n_req.iditem,
		n_req.idreader,
		1); /*default manager*/
END;
		
CREATE TRIGGER alert_reserve
AFTER INSERT ON reserve
REFERENCING 
	NEW AS n_res
WHEN((SELECT currentstatus FROM item WHERE iditem=n_res.iditem) = 'available')
BEGIN
	INSERT INTO alert('itemavailability',
		n_res.text,
		n_res.expiredate,
		n_res.iditem,
		n_res.idreader,
		1); /*default manager*/
END;

CREATE TRIGGER repairing
AFTER INSERT ON repair
REFERENCING
	NEW AS n_rep
BEGIN
	UPDATE item
		SET item.currentstatus='repair'
		WHERE item.iditem = n_rep.iditem;
END;







