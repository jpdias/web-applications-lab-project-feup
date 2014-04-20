insert into city values (1, 'Porto');
insert into city values (2, 'Aveiro');
insert into city values (3, 'Coimbra');

insert into repaircompany values (1, 'Reparações & Reparações, Ltd.', 1);
insert into repaircompany values (2, 'Clínica dos Equipamentos, Ltd.', 2);

insert into inventory values (1, 'inventório principal');

insert into admin values (1, 'admin', 'admin');

insert into reader values (1, 'reader1', 'passwordreader1', 'rua do reader 1', '1993-01-01', 'reader1@email.com', 'reader', '', 'active');
insert into reader values (2, 'reader2', 'passwordreader2', 'rua do reader 2', '1993-02-02', 'reader2@email.com', 'reader', '', 'active');
insert into reader values (3, 'reader3', 'passwordreader3', 'rua do reader 3', '1993-03-03', 'reader3@email.com', 'reader', '', 'active');

insert into manager values (1, 1, 1);

insert into item values (1, 'projetor benq', '../resources/benqprojector2013.jpg', 'projetor benq modelo 2013', '../resources/benqprojector2013qrcode.jpg', 'available', 1);
insert into item values (2, 'projetor sony', '../resources/sonyprojector2014.jpg', 'projetor sony modelo 2014', '../resources/sonyprojector2014qrcode.jpg', 'available', 1);
insert into item values (3, 'projetor sony', '../resources/sonyprojector2013.jpg', 'projetor sony modelo 2013', '../resources/sonyprojector2013qrcode.jpg', 'unavailable', 1);

insert into requisition values (1, ' ', '2014-07-01', '2014-01-06', '2014-01-01', 1, 'closed', 1, 1);
insert into requisition values (2, ' ', '2014-07-02', '2014-02-06', '2014-02-01', 1, 'closed', 2, 2);

insert into reserve values (1, '2014-03-04', '2014-03-01', 'closed', 1, 1);

insert into tag values (1, 'pojetor');
insert into tag values (2, 'imagem');
insert into tag values (3, 'video');

insert into itemtag values (1, 1);
insert into itemtag values (1, 2);
insert into itemtag values (1, 3);
insert into itemtag values (2, 1);
insert into itemtag values (2, 2);
insert into itemtag values (2, 3);

insert into repair values (1, '2013-01-04', '2013-01-01', 'sobreaquecimento', 1, 1);