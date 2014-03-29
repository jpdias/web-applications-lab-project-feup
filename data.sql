INSERT INTO city VALUES (1, 'Porto');
INSERT INTO city VALUES (2, 'Aveiro');
INSERT INTO city VALUES (3, 'Coimbra');

INSERT INTO repaircompany VALUES (1, 'Reparações & Reparações, Ltd.', 1);
INSERT INTO repaircompany VALUES (2, 'Clínica dos Equipamentos, Ltd.', 2);

INSERT INTO admin VALUES (1, 'admin', 'admin');

INSERT INTO reader VALUES (1, 'reader1', 'passwordreader1', 'rua do reader 1', '1993-01-01', 'reader1@email.com', 'reader', '', 'active');
INSERT INTO reader VALUES (2, 'reader2', 'passwordreader2', 'rua do reader 2', '1993-02-02', 'reader2@email.com', 'reader', '', 'active');
INSERT INTO reader VALUES (1, 'reader3', 'passwordreader3', 'rua do reader 3', '1993-03-03', 'reader3@email.com', 'reader', '', 'active');

INSERT INTO manager VALUES (1, 1);

INSERT INTO requisition VALUES (1, ' ', '2014-07-01', '2014-01-06', '2014-01-01', 1, 'closed', 1, 1);
INSERT INTO requisition VALUES (1, ' ', '2014-07-02', '2014-02-06', '2014-02-01', 1, 'closed', 2, 2);

INSERT INTO reserve VALUES (1, '2014-03-04', '2014-03-01', 'closed', 1, 1);

INSERT INTO item VALUES (1, 'projetor benq', 'http://www.gestorax.pt/projetorbenq.jpg', 'projetor benq modelo 2013', 'http://www.gestorax.pt/projetorbenq', 'available', 1);
INSERT INTO item VALUES (2, 'projetor sony', 'http://www.gestorax.pt/projetorsony.jpg', 'projetor sony modelo 2014', 'http://www.gestorax.pt/projetorsony', 'available', 1);

INSERT INTO tag VALUES (1, 'pojetor');
INSERT INTO tag VALUES (2, 'imagem');
INSERT INTO tag VALUES (3, 'video');

INSERT INTO itemtag VALUES (1, 1);
INSERT INTO itemtag VALUES (1, 2);
INSERT INTO itemtag VALUES (1, 3);
INSERT INTO itemtag VALUES (2, 1);
INSERT INTO itemtag VALUES (2, 2);
INSERT INTO itemtag VALUES (2, 3);

INSERT INTO repair VALUES ('2013-01-04', '2013-01-01', 'sobreaquecimento', 1);

INSERT INTO inventory VALUES (1, 'inventório principal');