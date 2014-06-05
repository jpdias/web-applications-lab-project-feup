insert into address values (1, 'Porto');
insert into address values (2, 'Aveiro');
insert into address values (3, 'Coimbra');

insert into repaircompany values (1, 'Reparações & Reparações, Ltd.', 1);
insert into repaircompany values (2, 'Clínica dos Equipamentos, Ltd.', 2);

insert into inventory values (1, 'Inventário Principal');

insert into admin values (1, 'admin', 'admin');

insert into reader values (1, 'reader1', 'd4313748fd463f49cb630922c5533af29d2f4fe0', 'rua do reader 1', '1993-01-01', 'reader1@email.com', 'reader', '1', 'active');
insert into reader values (2, 'reader2', '9d272404caa43207c4787967c230f3cb867b2e2f', 'rua do reader 2', '1993-02-02', 'reader2@email.com', 'reader', '2', 'active');
insert into reader values (3, 'reader3', 'db5a5191caac93c53ac8b3d22a2cc768dee75af8', 'rua do reader 3', '1993-03-03', 'reader3@email.com', 'reader', '3', 'active');

insert into manager values (1, 1, 1);

insert into item values (1, 'projetor benq', '../resources/benqprojector2013.jpg', 'projetor benq modelo 2013', '../resources/benqprojector2013qrcode.jpg', 'available', 1);
insert into item values (2, 'projetor sony', '../resources/sonyprojector2014.jpg', 'projetor sony modelo 2014', '../resources/sonyprojector2014qrcode.jpg', 'available', 1);
insert into item values (3, 'projetor sony', '../resources/sonyprojector2013.jpg', 'projetor sony modelo 2013', '../resources/sonyprojector2013qrcode.jpg', 'available', 1);
insert into item values (4, 'projetor sony', '../resources/sonyprojector2013.jpg', 'projetor sony modelo 2013', '../resources/sonyprojector2013qrcode.jpg', 'available', 1);
insert into item values (5, 'projetor sony', '../resources/sonyprojector2013.jpg', 'projetor sony modelo 2013', '../resources/sonyprojector2013qrcode.jpg', 'available', 1);
insert into item values (6, 'projetor sony', '../resources/sonyprojector2013.jpg', 'projetor sony modelo 2013', '../resources/sonyprojector2013qrcode.jpg', 'available', 1);
insert into item values (7, 'projetor sony', '../resources/sonyprojector2013.jpg', 'projetor sony modelo 2013', '../resources/sonyprojector2013qrcode.jpg', 'unavailable', 1);
insert into item values (8, 'projetor sony', '../resources/sonyprojector2013.jpg', 'projetor sony modelo 2013', '../resources/sonyprojector2013qrcode.jpg', 'unavailable', 1);

insert into requisition values (1, ' ', '2014-01-01', '2014-01-08', '2014-01-04', 1, 'closed', 1, 1);
insert into requisition values (2, ' ', '2014-02-01', '2014-02-08', '2014-02-04', 1, 'closed', 2, 2);

insert into reserve values (1, '2014-03-01', '2014-03-04', 'closed', 1, 1);

insert into tag values (1, 'pojetor');
insert into tag values (2, 'imagem');
insert into tag values (3, 'video');

insert into itemtag values (1, 1);
insert into itemtag values (1, 2);
insert into itemtag values (1, 3);
insert into itemtag values (2, 1);
insert into itemtag values (2, 2);
insert into itemtag values (2, 3);

insert into repair values (1, '2013-01-01', '2013-01-04', 'sobreaquecimento', 1, 1);