CREATE DATABASE IF NOT EXISTS `mercado`;
USE `mercado`;


CREATE TABLE IF NOT EXISTS `productos` (
  `id` varchar(5) NOT NULL,
  `Nombre` varchar(50) NOT NULL DEFAULT '0',
  `Precio` double(10,2) DEFAULT NULL,
  `FechaElaboracion` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO productos(id,Nombre,Precio,FechaElaboracion) Values
('P0001','Leche Gloria',2.50,'2017-01-01'),
('P0002','JW Etiqueta Negra 700 ml',120.00,'2014-05-10'),
('P0003','TV Panasonic 32 pulgadas',1200.00,'2016-12-01'),
('P0004','Laptop Toshiba Satellite pq31',1500.00,'2014-10-01'),
('P0005','Agua Mineral Milechi 7 Litros',8.00,'2014-01-11');

select * from productos;