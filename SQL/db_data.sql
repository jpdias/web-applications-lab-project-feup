insert into address values (1, 'Porto');
insert into address values (2, 'Aveiro');
insert into address values (3, 'Coimbra');

insert into repaircompany values (1, 'Reparações & Reparações, Lda', 1);
insert into repaircompany values (2, 'Clínica dos Equipamentos, Lda', 2);
insert into repaircompany values (3, 'Livraria da Asprela', 1);
insert into repaircompany values (4, 'Matos Electrónica, Lda', 3);

insert into inventory values (1, 'Inventário Principal');

insert into admin values (1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

insert into reader values (1, 'joao', 'fdf079fa33e55fd158c6bfbf01b9852e5d5513a8', 'rua Alexandre Castro', '1993-01-01', 'joao@email.com', 'Joao', '', 'active');
insert into reader values (2, 'jose', 'c32fdf32bbd842c60ae3c07d3d881ba76f4baa88', 'rua D. Carlos', '1993-02-02', 'jose@email.com', 'Jose', 'Silva', 'active');
insert into reader values (3, 'maria', '8cb2237d0679ca88db6464eac60da96345513964', 'rua da capital', '1990-03-03', 'maria@email.com', 'Maria', 'Lopes', 'blocked');
insert into reader values (4, 'ana', '62bef202e0097fa6919c67163c8593cd4a02c729', 'rua D. Diniz', '1994-12-03', 'ana@email.com', 'Ana', 'Diniz', 'active');
insert into reader values (5, 'antonio', 'ece4318484831762b36ba19efc66f928e76709ed', 'rua 25 de Abril', '1995-11-13', 'antonio@email.com', 'Antonio', 'Costa', 'active');
insert into reader values (6, 'carlos', '883393fe2f9269228ced913f36cc4c9509486327', 'rua Francisco Junior', '1981-08-20', 'carlos@email.com', 'Carlos', 'Soares', 'active');

insert into manager values (1, 1, 1);

insert into item values (1, 'projector benq', '../resources/benqprojector2013.jpg', 'projector benq model 2013', '../resources/benqprojector2013qrcode.jpg', 'available', 1);
insert into item values (2, 'projector sony', '../resources/sonyprojector2014.jpg', 'projector sony model 2014', '../resources/sonyprojector2014qrcode.jpg', 'available', 1);
insert into item values (3, 'dvi cable BlueRigger', '../resources/dvicablebluerigger.jpg', 'dvi cable', '../resources/dvicableblueriggerqrcode.jpg', 'available', 1);
insert into item values (4, 'HP Universal DisplayPort', '../resources/displayporthp.jpg', 'DP to DVI Video Adapter Cable Converter', '../resources/displayporthpqrcode.jpg', 'withdrawn', 1);
insert into item values (5, 'book Database management systems', '../resources/databasemanagement.jpg', 'Ramakrishnan, Raghu; Database management systems. ISBN: 0-07-116898-2', '../resources/databasemanagementqrcode.jpg', 'available', 1);
insert into item values (6, 'book Designing web usability', '../resources/webusability.jpg', 'Nielsen, Jakob; Designing web usability. ISBN: 1-56205-810-X', '../resources/webusabilityqrcode.jpg', 'available', 1);
insert into item values (7, 'tablet Samsung T3100', '../resources/samsungt3100.jpg', 'Samsung T3100 Galaxy Tab 3 8.0 Wi-Fi - 16GB (White) ', '../resources/samsungt3100.jpg', 'available', 1);
insert into item values (8, 'tablet Apple iPad 4', '../resources/ipad4.jpg', 'Apple iPad 4 - 16GB Wi-Fi (Branco)', '../resources/ipad4.jpg', 'available', 1);
insert into item values (9, 'tablet Microsoft Surface RT', '../resources/microsoftsurfacert.jpg', 'Microsoft Surface RT - 32GB + Capa Tátil', '../resources/microsoftsurfacert.jpg', 'unavailable', 1);


insert into requisition values (1, ' ', '2014-01-01', '2014-01-08', '2014-01-04', 1, 'closed', 1, 1);
insert into requisition values (2, ' ', '2014-02-01', '2014-02-08', '2014-02-04', 1, 'closed', 2, 2);
insert into requisition values (3, 'Pages show a little wear in bent and folded corners', '2014-02-01', '2014-02-21', '2014-02-20', 5, 'closed', 6, 5);
insert into requisition values (4, 'Some markings', '2014-04-21', '2014-05-03', '2014-05-02', 3, 'closed', 5, 6);
insert into requisition values (5, ' ', '2014-02-25', '2018-05-03', '2014-05-01', 1, 'closed', 6, 3);

insert into reserve values (1, '2014-03-01', '2014-03-04', 'closed', 1, 1);
insert into reserve values (2, '2014-03-04', '2018-03-04', 'open', 6, 5);

insert into tag values (1, 'projector');
insert into tag values (2, 'image');
insert into tag values (3, 'video');
insert into tag values (4, 'cable');
insert into tag values (5, 'book');
insert into tag values (6, 'tablet');

insert into itemtag values (1, 1);
insert into itemtag values (1, 2);
insert into itemtag values (1, 3);
insert into itemtag values (2, 1);
insert into itemtag values (2, 2);
insert into itemtag values (2, 3);
insert into itemtag values (3, 4);
insert into itemtag values (4, 4);
insert into itemtag values (5, 5);
insert into itemtag values (6, 5);
insert into itemtag values (7, 6);
insert into itemtag values (8, 6);
insert into itemtag values (9, 6);

insert into repair values (1, '2013-01-01', '2013-01-04', 'sobreaquecimento', 1, 1);