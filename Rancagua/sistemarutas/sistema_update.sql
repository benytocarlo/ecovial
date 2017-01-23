-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 14-11-2010 a las 21:16:59
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `sistema`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `camiones`
-- 

CREATE TABLE `camiones` (
  `id` int(11) NOT NULL auto_increment,
  `tipo_vehiculo` varchar(250) NOT NULL,
  `patente` varchar(250) NOT NULL,
  `tara` varchar(250) NOT NULL,
  `empresa` varchar(250) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=97 ;

-- 
-- Volcar la base de datos para la tabla `camiones`
-- 

INSERT INTO `camiones` VALUES (16, 'Camion', 'WU-7603', '13840', '7');
INSERT INTO `camiones` VALUES (2, 'Camion 3/4', 'FCED-39', '0', '8');
INSERT INTO `camiones` VALUES (19, 'Camion', 'WR-8297', '11110', '6');
INSERT INTO `camiones` VALUES (18, 'Camion', 'BP-6708', '16150', '7');
INSERT INTO `camiones` VALUES (63, 'Camion', 'XH-6647', '16460', '9');
INSERT INTO `camiones` VALUES (17, 'Camion', 'WR-8294', '11260', '6');
INSERT INTO `camiones` VALUES (10, 'Camion', 'BVDF-34', '10530', '7');
INSERT INTO `camiones` VALUES (11, 'Camion', 'BP-6708', '16150', '6');
INSERT INTO `camiones` VALUES (12, 'Camion', 'XY-1931', '16090', '6');
INSERT INTO `camiones` VALUES (13, 'Camion', 'ZK-4705', '7780', '6');
INSERT INTO `camiones` VALUES (20, 'Camion', 'WR-8294', '11260', '6');
INSERT INTO `camiones` VALUES (74, 'Camion', 'BVBR-45', '10200', '6');
INSERT INTO `camiones` VALUES (22, 'Camion', 'WR-8295', '11730', '6');
INSERT INTO `camiones` VALUES (37, 'Camion', 'CCKK-11', '11000', '11');
INSERT INTO `camiones` VALUES (24, 'Camion', 'WR-8296', '11110', '6');
INSERT INTO `camiones` VALUES (25, 'Camion', 'YW-8606', '11420', '6');
INSERT INTO `camiones` VALUES (26, 'Camion', 'WH-7751', '11550', '9');
INSERT INTO `camiones` VALUES (27, 'Camion', 'BBVW-22', '11000', '9');
INSERT INTO `camiones` VALUES (28, 'Camion', 'WW-4242', '16680', '9');
INSERT INTO `camiones` VALUES (29, 'Camion', 'KY-6057', '11020', '10');
INSERT INTO `camiones` VALUES (30, 'Camion', 'RF-7569', '11160', '10');
INSERT INTO `camiones` VALUES (31, 'Camion', 'WS-5390', '7820', '6');
INSERT INTO `camiones` VALUES (34, 'Camion', 'CGBV-28', '8510', '11');
INSERT INTO `camiones` VALUES (36, 'Camion', 'XF-9386', '11000', '9');
INSERT INTO `camiones` VALUES (38, 'Camion', 'YT-4320', '11000', '9');
INSERT INTO `camiones` VALUES (62, 'Camion', 'EF-6494', '5100', '13');
INSERT INTO `camiones` VALUES (40, 'Camion', 'KB-8635', '18110', '9');
INSERT INTO `camiones` VALUES (41, 'Camion', 'VK-6644', '11000', '7');
INSERT INTO `camiones` VALUES (42, 'Camion', 'SW-2088', '11110', '6');
INSERT INTO `camiones` VALUES (59, 'Camion', 'TH-7001', '15920', '14');
INSERT INTO `camiones` VALUES (58, 'Camion', 'XY-9735', '15330', '9');
INSERT INTO `camiones` VALUES (46, 'Camion', 'XH-5508', '11110', '9');
INSERT INTO `camiones` VALUES (47, 'Camion', 'LC-7507', '11100', '11');
INSERT INTO `camiones` VALUES (48, 'Camion', 'BGTX-10', '14000', '4');
INSERT INTO `camiones` VALUES (49, 'Camioneta', 'CKWK-77', '1620', '11');
INSERT INTO `camiones` VALUES (50, 'Camion', 'RV-7055', '10970', '16');
INSERT INTO `camiones` VALUES (51, 'Camion', 'CDCT-92', '11150', '17');
INSERT INTO `camiones` VALUES (53, 'Camioneta', 'WX-8979', '', '18');
INSERT INTO `camiones` VALUES (54, 'Camioneta', 'MY-5601', '', '16');
INSERT INTO `camiones` VALUES (57, 'Camion', 'BDTX-88', '15810', '14');
INSERT INTO `camiones` VALUES (60, 'Camion', 'XY-9734', '15330', '9');
INSERT INTO `camiones` VALUES (61, 'Camion', 'BSDT-16', '16230', '9');
INSERT INTO `camiones` VALUES (64, 'Camioneta', 'YX-5073', '', '18');
INSERT INTO `camiones` VALUES (66, 'Camion', 'CDCK-94', '11520', '19');
INSERT INTO `camiones` VALUES (67, 'Camioneta', 'BWLY-21', '', '11');
INSERT INTO `camiones` VALUES (68, 'Camion', 'RD-6688', '7210', '14');
INSERT INTO `camiones` VALUES (69, 'Camion', 'RR-5153', '7580', '14');
INSERT INTO `camiones` VALUES (71, 'Camion', 'VV-4614', '10670', '14');
INSERT INTO `camiones` VALUES (72, 'Camion', 'ND-2003', '7060', '14');
INSERT INTO `camiones` VALUES (73, 'Camion', 'KL-5912', '7270', '14');
INSERT INTO `camiones` VALUES (75, 'Camion', 'BVBR-46', '10280', '6');
INSERT INTO `camiones` VALUES (94, 'Camioneta', 'YD-9978', '', '21');
INSERT INTO `camiones` VALUES (80, 'Camion', 'CSYF-54', '6500', '4');
INSERT INTO `camiones` VALUES (79, 'Camion', 'BVBR-44', '10200', '6');
INSERT INTO `camiones` VALUES (81, 'Camion', 'TX-6174', '', '20');
INSERT INTO `camiones` VALUES (82, 'Camion', 'PX-1320', '5224', '14');
INSERT INTO `camiones` VALUES (83, 'Camion', 'UH-8196', '7200', '12');
INSERT INTO `camiones` VALUES (84, 'Camion', 'UK-1895', '7670', '12');
INSERT INTO `camiones` VALUES (85, 'Camioneta', 'WB-4849', '', '21');
INSERT INTO `camiones` VALUES (86, 'Camion', 'BGJH-72', '16000', '9');
INSERT INTO `camiones` VALUES (87, 'Camion', 'XH-5509', '11320', '9');
INSERT INTO `camiones` VALUES (88, 'Camion', 'YL-9796', '7580', '22');
INSERT INTO `camiones` VALUES (89, 'Camion', 'PX-5148', '9710', '9');
INSERT INTO `camiones` VALUES (90, 'Camion', 'XS-9161', '10990', '9');
INSERT INTO `camiones` VALUES (91, 'Camion', 'WE-7680', '16500', '9');
INSERT INTO `camiones` VALUES (92, 'Camion', 'DH-7505', '7820', 'Elija una Opcion');
INSERT INTO `camiones` VALUES (93, 'Camion', 'CBBS-81', '18260', '6');
INSERT INTO `camiones` VALUES (95, 'Camioneta', 'BKLF-58', '', '11');
INSERT INTO `camiones` VALUES (96, 'Camion', 'CJYY-91', '', '4');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `chofer`
-- 

CREATE TABLE `chofer` (
  `id` int(11) NOT NULL auto_increment,
  `rut` varchar(15) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=70 ;

-- 
-- Volcar la base de datos para la tabla `chofer`
-- 

INSERT INTO `chofer` VALUES (1, '162710443', 'Juan Soto');
INSERT INTO `chofer` VALUES (2, '79588563', 'Jose Luis Salas');
INSERT INTO `chofer` VALUES (4, '11321663-8', 'Carlos Montecinos');
INSERT INTO `chofer` VALUES (5, '11950255-1', 'Marcelo Miranda');
INSERT INTO `chofer` VALUES (6, '6327366', 'Jose Cavieres');
INSERT INTO `chofer` VALUES (7, '4685351-2', 'Santiago Gonzalez');
INSERT INTO `chofer` VALUES (8, '12785652-4', 'Claudio Bravo');
INSERT INTO `chofer` VALUES (67, '12329421-1', 'Daniel Navarro Aguilera');
INSERT INTO `chofer` VALUES (10, '10721950-1', 'Ruben Pereira');
INSERT INTO `chofer` VALUES (11, '6580202-3', 'Luis Oyarce');
INSERT INTO `chofer` VALUES (12, '12296586-4', 'Eduardo Cancino');
INSERT INTO `chofer` VALUES (13, '10809493-1', 'Hugo Opazo');
INSERT INTO `chofer` VALUES (14, '10734007-6', 'Luis Fenolio');
INSERT INTO `chofer` VALUES (15, '11882197-1', 'Marcos Corrales');
INSERT INTO `chofer` VALUES (16, '13762800-7', 'Patricio Delgado');
INSERT INTO `chofer` VALUES (17, '15133146-7', 'Ramon Bravo');
INSERT INTO `chofer` VALUES (18, '14623566-2', 'Juan Norambuena');
INSERT INTO `chofer` VALUES (19, '5764819-8', 'Humberto Barros');
INSERT INTO `chofer` VALUES (20, '10172227-9', 'Jose Sepulveda');
INSERT INTO `chofer` VALUES (21, '12914942-6', 'Mauricio Correa');
INSERT INTO `chofer` VALUES (22, '9069833-8', 'Rafael Correa');
INSERT INTO `chofer` VALUES (23, '14064224-K', 'Cristian Vallejos');
INSERT INTO `chofer` VALUES (24, '12516495-1', 'Jose Gajardo');
INSERT INTO `chofer` VALUES (25, '12180046-2', 'Hector Caro');
INSERT INTO `chofer` VALUES (26, '12693509-9', 'Patricio Carrasco');
INSERT INTO `chofer` VALUES (27, '11528602-1', 'Luis Cornejo');
INSERT INTO `chofer` VALUES (28, '7961366-5', 'Jorge Poblete');
INSERT INTO `chofer` VALUES (29, '13349796-K', 'Cristian Cordova');
INSERT INTO `chofer` VALUES (30, '12418077-5', 'Ivan Sepulveda');
INSERT INTO `chofer` VALUES (31, '15216344-4', 'Cristian Mardones');
INSERT INTO `chofer` VALUES (32, '14048155-6', 'Esteban Riveros');
INSERT INTO `chofer` VALUES (33, '14015179-3', 'Ramon Iturriaga');
INSERT INTO `chofer` VALUES (34, '7036492-1', 'Ricardo Cerda');
INSERT INTO `chofer` VALUES (35, '6267370-2', 'Benigno Quinteros');
INSERT INTO `chofer` VALUES (36, '13344177-8', 'Marcelo Hernandez');
INSERT INTO `chofer` VALUES (37, '15559262-1', 'Raul Silva');
INSERT INTO `chofer` VALUES (38, '14332477-k', 'Cesar Silva');
INSERT INTO `chofer` VALUES (39, '5899864-8', 'Francisco Arevalos');
INSERT INTO `chofer` VALUES (40, '11997225-6', 'Alejandro Pereira');
INSERT INTO `chofer` VALUES (41, '15437075-7', 'Jose Luis Abarzua');
INSERT INTO `chofer` VALUES (42, '14011992-K', 'Hector Donoso');
INSERT INTO `chofer` VALUES (43, '16943863-3', 'Walter Donoso');
INSERT INTO `chofer` VALUES (44, '12778917-7', 'Oscar Donoso');
INSERT INTO `chofer` VALUES (45, '16686198-5', 'Cristobal Santelices');
INSERT INTO `chofer` VALUES (46, '13779149-8', 'Cristian Acuña');
INSERT INTO `chofer` VALUES (47, '10003428-K', 'Claudio Araya');
INSERT INTO `chofer` VALUES (48, '9071670-0', 'Miguel Miranda');
INSERT INTO `chofer` VALUES (49, '16191897-0', 'Felipe Silva');
INSERT INTO `chofer` VALUES (50, '14303331-7', 'Andres Leiva');
INSERT INTO `chofer` VALUES (51, '10192253-7', 'Alex Martinez');
INSERT INTO `chofer` VALUES (53, '7341031-2', 'Marcos Arriagada');
INSERT INTO `chofer` VALUES (54, '12521532-7', 'Cristian Pereira');
INSERT INTO `chofer` VALUES (55, '9514182-k', 'Teofilo Hernandez');
INSERT INTO `chofer` VALUES (56, '8689444-0', 'Luis Navarro');
INSERT INTO `chofer` VALUES (57, '5999460-3', 'Carlos Carrero');
INSERT INTO `chofer` VALUES (58, '10692903-3', 'Isabel Muñoz');
INSERT INTO `chofer` VALUES (59, '10582647-8', 'Waldo Orellana');
INSERT INTO `chofer` VALUES (60, '16853226-1', 'Hugo Rojas');
INSERT INTO `chofer` VALUES (61, '14199944-3', 'Miguel Jorquera');
INSERT INTO `chofer` VALUES (62, '4923024-9', 'Luis Leiva');
INSERT INTO `chofer` VALUES (63, '8132838-2', 'Juan Nuñez');
INSERT INTO `chofer` VALUES (64, '15990016-9', 'Claudio Esteban');
INSERT INTO `chofer` VALUES (65, '18212429-K', 'Eduardo  Guerrero');
INSERT INTO `chofer` VALUES (66, '11762321-1', 'Victor Martinez');
INSERT INTO `chofer` VALUES (68, '11953254-K', 'Jose Espinoza');
INSERT INTO `chofer` VALUES (69, '13003907-3', 'Carlos Cordova');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `cliente`
-- 

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(250) NOT NULL,
  `calle` varchar(250) NOT NULL,
  `comuna` varchar(250) NOT NULL,
  `ciudad` varchar(250) NOT NULL,
  `telefono` varchar(250) NOT NULL,
  `rut` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

-- 
-- Volcar la base de datos para la tabla `cliente`
-- 

INSERT INTO `cliente` VALUES (9, 'Constructora TAFCA', 'Diego de Almagro 1799', 'Rancagua', 'Rancagua', '72-220506', '78386350-2', '');
INSERT INTO `cliente` VALUES (8, 'Ecovial Ltda.', 'Hijuela 10 lote A Maquehua', 'Curico', 'Curico', '75-543470', '77580000-3', 'contacto@ecovial.cl');
INSERT INTO `cliente` VALUES (25, 'Parthenon S.A.', 'Avda. Estoril 58 Of. 1011', 'Las Condes', 'Santiago', '', '96568240-6', '');
INSERT INTO `cliente` VALUES (22, 'Ingein Ltda.', 'Marchant Pereira 367 of. 204', 'Providencia', 'Santiago', '2259141', '96.756.760-4', 'rmorales@ingein-construcciones.cl');
INSERT INTO `cliente` VALUES (12, 'Direccion de Vialidad Moptt', 'Carampangue 757', 'San Fernando', 'Rancagua', '582332', '61202000-0', '');
INSERT INTO `cliente` VALUES (13, 'Darwin Bueno Falcon', 'Victoria 8826 ', 'La Cisterna', 'Santiago ', '5583100', '11770867-5', '');
INSERT INTO `cliente` VALUES (14, 'Sociedad Constructora Las Araucarias', 'Yungay 121', 'Curico', 'Curico', '543226', '78644080-7', '');
INSERT INTO `cliente` VALUES (15, 'Sociedad Constructora Quinguz Ltda', 'Av. Vicuña Mackena 7255', 'La Florida', 'Santiago', '02-2219185', '78646310-6', '');
INSERT INTO `cliente` VALUES (16, 'Tomas Tapia Ureta', 'Ruta E-66 Nº 130 Santo Domingo', 'Santo Domingo', 'Valparaiso', '', '6359866-6', '');
INSERT INTO `cliente` VALUES (17, 'Socieda Constructora Girasoles ltda', 'Los Girasoles 1253 ', 'Rancagua', 'Rancagua', '501777', '76318420-K', '');
INSERT INTO `cliente` VALUES (18, 'Barros y Bruzzone ltda', 'Camino Lo pinto 2.5 Colina', 'Santiago', 'Santiago', '02-7451015', '78081230-3', '');
INSERT INTO `cliente` VALUES (19, 'Soc. de Ingenieria y Construccion Camino Nuevo Ltda', 'Diego de Almagro 1803 ', 'Rancagua', 'Rancagua', '246246', '77653480-3', '');
INSERT INTO `cliente` VALUES (20, 'Maestranza y Planta de Aridos Rio Maipo', 'las Industruas 4579', 'San Antonio', '', '', '9668830-5', '');
INSERT INTO `cliente` VALUES (39, 'Mixvial Ltda', 'Hijuela 10 Lote A Maquehua', 'Curico', 'Curico', '544076', '76.236.020-9', 'Recepcion@mixvial.cl');
INSERT INTO `cliente` VALUES (24, 'Ecovial Asfalto Ltda.', 'Hijuela 10 lote A Maquehua', 'Curico', 'Curico', '543472', '76113156-7', 'mcabello@ecovial.cl');
INSERT INTO `cliente` VALUES (30, 'Mix Vial Limitada', 'Hijuela 10 Lote A Maquehua', 'Curico', 'Curico', '314526', '76236020-9', '');
INSERT INTO `cliente` VALUES (37, 'Benito', 'talca', 'talca', 'talca', '12321', '123123', 'asdasd');
INSERT INTO `cliente` VALUES (38, 'Ecovial Maquinarias Ltda', 'Hijuela 10 lote A Maquehua', 'Curico', 'Curico', '', '76112189-8', '');
INSERT INTO `cliente` VALUES (40, 'Isabel Loretto Muñoz Villagra', 'Condomio Los Guindos Pje 4 casa 2316', 'Curico', 'Curico', '', '10692903-3', '');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `data`
-- 

CREATE TABLE `data` (
  `num` int(8) NOT NULL,
  `fecha` date NOT NULL,
  `obra` varchar(150) NOT NULL,
  `cliente` varchar(150) NOT NULL,
  `operador` varchar(100) NOT NULL,
  `maquina` varchar(100) NOT NULL,
  `h_inicio` int(8) NOT NULL,
  `h_termino` int(8) NOT NULL,
  `t_horas` int(8) NOT NULL,
  `litros` int(6) NOT NULL,
  `h_litros` int(6) NOT NULL,
  `t_realiza` varchar(100) NOT NULL,
  `d_trabajo` varchar(100) NOT NULL,
  `fresado1` int(4) NOT NULL,
  `fresado` int(4) NOT NULL,
  `imprimacion1` int(4) NOT NULL,
  `imprimacion2` int(4) NOT NULL,
  `data_fresado` int(150) NOT NULL,
  `data_imprimacion` int(150) NOT NULL,
  `observaciones` int(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `data`
-- 

INSERT INTO `data` VALUES (1, '0000-00-00', 'q', 'w', 'e', 'r', 123, 123, 213, 12, 213, 't', 'y', 213, 0, 213, 12, 0, 0, 0);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `detalle_orden_compra`
-- 

CREATE TABLE `detalle_orden_compra` (
  `id` int(11) NOT NULL auto_increment,
  `id_orden_compra` varchar(250) NOT NULL,
  `cantidad` varchar(250) NOT NULL,
  `unidad` varchar(250) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `precio_unitario` varchar(250) NOT NULL,
  `total` varchar(250) NOT NULL,
  `extra1` varchar(250) NOT NULL,
  `extra2` varchar(250) NOT NULL,
  `extra3` varchar(250) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=73 ;

-- 
-- Volcar la base de datos para la tabla `detalle_orden_compra`
-- 

INSERT INTO `detalle_orden_compra` VALUES (69, '1', '30', '30', 'Talonarios  50/3 Report de medicion de superficie para imprimacion y liga impreso a un color ', '1300', '39000', '', '', '');
INSERT INTO `detalle_orden_compra` VALUES (68, '1', '30', '30', 'Talonarios  50/3 Report de medicion de superficie para imprimacion y liga impreso a un color ', '1300', '39000', '', '', '');
INSERT INTO `detalle_orden_compra` VALUES (67, '1', '30', '30', 'Talonarios  50/3 Report de medicion de superficie para imprimacion y liga impreso a un color ', '1300', '39000', '', '', '');
INSERT INTO `detalle_orden_compra` VALUES (64, '11', '10', '', 'Valvula de cono lubricado de 2" con flange marca resum americana 200 wor', '235000', '2350000', '', '', '');
INSERT INTO `detalle_orden_compra` VALUES (63, '7', '10', '', 'Valvulas de cono lubricado de 2" con flange marca Resum americana 200 wor', '', '0', '', '', '');
INSERT INTO `detalle_orden_compra` VALUES (62, '7', '10', '', 'Valvulas de cono lubricado de 2" con flange marca Resum americana 200 wor', '235000', '2350000', '', '', '');
INSERT INTO `detalle_orden_compra` VALUES (61, '7', '10', '', 'Valvulas de cono lubricado de 2" con flange marca Resum americana 200 wor', '', '0', '', '', '');
INSERT INTO `detalle_orden_compra` VALUES (72, '2', '', '', '', '', '0', '', '', '');
INSERT INTO `detalle_orden_compra` VALUES (71, '2', '', '', '', '', '0', '', '', '');
INSERT INTO `detalle_orden_compra` VALUES (70, '2', '', '', '', '', '0', '', '', '');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `detalle_pesaje`
-- 

CREATE TABLE `detalle_pesaje` (
  `guia` varchar(10) NOT NULL,
  `producto` varchar(250) NOT NULL,
  `litros` varchar(250) NOT NULL,
  `valor_unitario` varchar(250) NOT NULL,
  `auto` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`auto`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=324 ;

-- 
-- Volcar la base de datos para la tabla `detalle_pesaje`
-- 

INSERT INTO `detalle_pesaje` VALUES ('10828', '23', '378', '394', 1);
INSERT INTO `detalle_pesaje` VALUES ('10857', '17', '13.00', '75016', 146);
INSERT INTO `detalle_pesaje` VALUES ('10856', '17', '12.50', '75015', 145);
INSERT INTO `detalle_pesaje` VALUES ('10855', '19', '1.50', '75014', 144);
INSERT INTO `detalle_pesaje` VALUES ('10854', '17', '12.50', '75013', 143);
INSERT INTO `detalle_pesaje` VALUES ('10829', '17', '20', '75012', 142);
INSERT INTO `detalle_pesaje` VALUES ('10830', '16', '3.00', '75010', 141);
INSERT INTO `detalle_pesaje` VALUES ('10827', '17', '20', '75009', 140);
INSERT INTO `detalle_pesaje` VALUES ('10942', '21', '3000', '308', 87);
INSERT INTO `detalle_pesaje` VALUES ('10831', '17', '12', '75008', 139);
INSERT INTO `detalle_pesaje` VALUES ('10826', '17', '22', '75007', 138);
INSERT INTO `detalle_pesaje` VALUES ('10953', '24', '244', '368', 91);
INSERT INTO `detalle_pesaje` VALUES ('10852', '17', '11.50', '75006', 137);
INSERT INTO `detalle_pesaje` VALUES ('10853', '17', '10.00', '75005', 136);
INSERT INTO `detalle_pesaje` VALUES ('10832', '18', '21.00', '75004', 135);
INSERT INTO `detalle_pesaje` VALUES ('10834', '18', '21.00', '75003', 134);
INSERT INTO `detalle_pesaje` VALUES ('10833', '18', '14.00', '75002', 133);
INSERT INTO `detalle_pesaje` VALUES ('10835', '18', '13.00', '75001', 132);
INSERT INTO `detalle_pesaje` VALUES ('10836', '18', '15.00', '75000', 131);
INSERT INTO `detalle_pesaje` VALUES ('10849', '21', '1530', '290', 130);
INSERT INTO `detalle_pesaje` VALUES ('10837', '17', '12.50', '52535', 129);
INSERT INTO `detalle_pesaje` VALUES ('10838', '17', '12', '52535', 128);
INSERT INTO `detalle_pesaje` VALUES ('10839', '17', '14.00', '52535', 127);
INSERT INTO `detalle_pesaje` VALUES ('10840', '17', '13.00', '52535', 126);
INSERT INTO `detalle_pesaje` VALUES ('10841', '17', '14.00', '52535', 125);
INSERT INTO `detalle_pesaje` VALUES ('10842', '19', '7.00', '56800', 124);
INSERT INTO `detalle_pesaje` VALUES ('10843', '23', '5000', '0', 123);
INSERT INTO `detalle_pesaje` VALUES ('10844', '18', '21.00', '75000', 122);
INSERT INTO `detalle_pesaje` VALUES ('10845', '18', '14.00', '75000', 121);
INSERT INTO `detalle_pesaje` VALUES ('10846', '18', '13.00', '75000', 120);
INSERT INTO `detalle_pesaje` VALUES ('10850', '22', '367', '343', 119);
INSERT INTO `detalle_pesaje` VALUES ('10851', '', '', '', 118);
INSERT INTO `detalle_pesaje` VALUES ('10847', '23', '1701', '394', 51);
INSERT INTO `detalle_pesaje` VALUES ('10848', '24', '450', '342.95', 52);
INSERT INTO `detalle_pesaje` VALUES ('10868', '34', '200', '305', 53);
INSERT INTO `detalle_pesaje` VALUES ('10869', '22', '3000', '361', 54);
INSERT INTO `detalle_pesaje` VALUES ('10929', '23', '617', '394', 56);
INSERT INTO `detalle_pesaje` VALUES ('10927', '21', '5400', '308', 57);
INSERT INTO `detalle_pesaje` VALUES ('10883', '34', '1350', '305', 58);
INSERT INTO `detalle_pesaje` VALUES ('10894', '34', '400', '305', 59);
INSERT INTO `detalle_pesaje` VALUES ('10898', '23', '400', '394', 60);
INSERT INTO `detalle_pesaje` VALUES ('10899', '34', '1980', '293', 61);
INSERT INTO `detalle_pesaje` VALUES ('10904', '22', '120', '350', 62);
INSERT INTO `detalle_pesaje` VALUES ('10904', '22', '120', '250', 63);
INSERT INTO `detalle_pesaje` VALUES ('10910', '25', '6300', '293', 64);
INSERT INTO `detalle_pesaje` VALUES ('10956', '25', '1575', '350', 94);
INSERT INTO `detalle_pesaje` VALUES ('10955', '23', '500', '395', 93);
INSERT INTO `detalle_pesaje` VALUES ('10954', '23', '500', '394', 92);
INSERT INTO `detalle_pesaje` VALUES ('10943', '21', '360', '308', 88);
INSERT INTO `detalle_pesaje` VALUES ('10945', '22', '20', '350', 89);
INSERT INTO `detalle_pesaje` VALUES ('10947', '29', '2000', '367', 90);
INSERT INTO `detalle_pesaje` VALUES ('10964', '29', '2600', '367', 95);
INSERT INTO `detalle_pesaje` VALUES ('10965', '21', '200', '308', 96);
INSERT INTO `detalle_pesaje` VALUES ('10965', '30', '1', '10000', 99);
INSERT INTO `detalle_pesaje` VALUES ('10978', '23', '560', '394', 100);
INSERT INTO `detalle_pesaje` VALUES ('10990', '25', '1620', '293', 101);
INSERT INTO `detalle_pesaje` VALUES ('10994', '25', '1800', '293', 102);
INSERT INTO `detalle_pesaje` VALUES ('10995', '29', '1400', '367', 103);
INSERT INTO `detalle_pesaje` VALUES ('11354', '23', '350', '394', 104);
INSERT INTO `detalle_pesaje` VALUES ('11380', '23', '367', '394', 105);
INSERT INTO `detalle_pesaje` VALUES ('11385', '29', '2480', '367', 106);
INSERT INTO `detalle_pesaje` VALUES ('11390', '23', '840', '394', 107);
INSERT INTO `detalle_pesaje` VALUES ('11391', '23', '1020', '394', 108);
INSERT INTO `detalle_pesaje` VALUES ('11392', '25', '990', '293', 110);
INSERT INTO `detalle_pesaje` VALUES ('11412', '21', '600', '308', 111);
INSERT INTO `detalle_pesaje` VALUES ('11415', '22', '3', '80750', 112);
INSERT INTO `detalle_pesaje` VALUES ('11416', '22', '2', '82750', 113);
INSERT INTO `detalle_pesaje` VALUES ('11417', '29', '2270', '367', 114);
INSERT INTO `detalle_pesaje` VALUES ('11418', '25', '4500', '293', 115);
INSERT INTO `detalle_pesaje` VALUES ('11419', '23', '960', '395', 116);
INSERT INTO `detalle_pesaje` VALUES ('10858', '19', '3.50', '75017', 147);
INSERT INTO `detalle_pesaje` VALUES ('10859', '18', '14.00', '75018', 148);
INSERT INTO `detalle_pesaje` VALUES ('10860', '18', '14.50', '75019', 149);
INSERT INTO `detalle_pesaje` VALUES ('10861', '18', '12.50', '75020', 150);
INSERT INTO `detalle_pesaje` VALUES ('10862', '18', '21.00', '75021', 151);
INSERT INTO `detalle_pesaje` VALUES ('10863', '18', '20.50', '75022', 152);
INSERT INTO `detalle_pesaje` VALUES ('10864', '17', '7.50', '75023', 153);
INSERT INTO `detalle_pesaje` VALUES ('10865', '17', '15.50', '75024', 154);
INSERT INTO `detalle_pesaje` VALUES ('10866', '17', '11.50', '75025', 155);
INSERT INTO `detalle_pesaje` VALUES ('10867', '19', '7.00', '75026', 156);
INSERT INTO `detalle_pesaje` VALUES ('10870', '17', '22.00', '67400', 157);
INSERT INTO `detalle_pesaje` VALUES ('10871', '17', '22.00', '67400', 158);
INSERT INTO `detalle_pesaje` VALUES ('10872', '17', '6.50', '67400', 159);
INSERT INTO `detalle_pesaje` VALUES ('10873', '17', '12.50', '67400', 160);
INSERT INTO `detalle_pesaje` VALUES ('10874', '17', '19.50', '67400', 161);
INSERT INTO `detalle_pesaje` VALUES ('10875', '17', '', '55300', 162);
INSERT INTO `detalle_pesaje` VALUES ('10876', '17', '8.00', '55300', 163);
INSERT INTO `detalle_pesaje` VALUES ('10877', '18', '14.50', '75000', 164);
INSERT INTO `detalle_pesaje` VALUES ('10878', '18', '15.00', '75000', 165);
INSERT INTO `detalle_pesaje` VALUES ('10879', '18', '12.50', '75000', 166);
INSERT INTO `detalle_pesaje` VALUES ('10880', '18', '14.00', '75000', 167);
INSERT INTO `detalle_pesaje` VALUES ('10881', '18', '14.00', '75000', 168);
INSERT INTO `detalle_pesaje` VALUES ('10882', '17', '14.00', '52535', 169);
INSERT INTO `detalle_pesaje` VALUES ('10884', '17', '13.50', '52535', 170);
INSERT INTO `detalle_pesaje` VALUES ('10885', '17', '21.50', '67400', 171);
INSERT INTO `detalle_pesaje` VALUES ('10886', '17', '14.00', '53580', 172);
INSERT INTO `detalle_pesaje` VALUES ('10887', '17', '20.00', '67400', 173);
INSERT INTO `detalle_pesaje` VALUES ('10888', '17', '13.50', '53580', 174);
INSERT INTO `detalle_pesaje` VALUES ('10889', '17', '22.50', '67400', 175);
INSERT INTO `detalle_pesaje` VALUES ('10890', '17', '13.00', '53580', 176);
INSERT INTO `detalle_pesaje` VALUES ('10891', '17', '19.50', '67400', 177);
INSERT INTO `detalle_pesaje` VALUES ('10892', '19', '7.50', '55300', 178);
INSERT INTO `detalle_pesaje` VALUES ('10893', '17', '20.50', '67400', 179);
INSERT INTO `detalle_pesaje` VALUES ('10895', '17', '5.00', '53580', 180);
INSERT INTO `detalle_pesaje` VALUES ('10896', '17', '11.00', '53480', 181);
INSERT INTO `detalle_pesaje` VALUES ('10897', '17', '13.00', '53480', 182);
INSERT INTO `detalle_pesaje` VALUES ('10900', '17', '13.50', '67400', 183);
INSERT INTO `detalle_pesaje` VALUES ('10901', '17', '14.00', '67400', 184);
INSERT INTO `detalle_pesaje` VALUES ('10902', '17', '6.50', '53580', 185);
INSERT INTO `detalle_pesaje` VALUES ('10903', '17', '7.00', '53580', 186);
INSERT INTO `detalle_pesaje` VALUES ('10904', '17', '22.50', '53580', 187);
INSERT INTO `detalle_pesaje` VALUES ('10905', '17', '22.00', '67400', 188);
INSERT INTO `detalle_pesaje` VALUES ('10906', '18', '14.00', '76538', 189);
INSERT INTO `detalle_pesaje` VALUES ('10907', '18', '12.50', '76538', 190);
INSERT INTO `detalle_pesaje` VALUES ('10908', '18', '15.00', '76538', 191);
INSERT INTO `detalle_pesaje` VALUES ('10909', '18', '14.00', '76538', 192);
INSERT INTO `detalle_pesaje` VALUES ('10911', '18', '12.00', '76538', 193);
INSERT INTO `detalle_pesaje` VALUES ('10912', '17', '8.00', '67400', 194);
INSERT INTO `detalle_pesaje` VALUES ('10913', '17', '8.50', '67400', 195);
INSERT INTO `detalle_pesaje` VALUES ('10914', '17', '6.00', '1111', 196);
INSERT INTO `detalle_pesaje` VALUES ('10915', '17', '20.50', '67400', 197);
INSERT INTO `detalle_pesaje` VALUES ('10916', '17', '12.00', '67400', 198);
INSERT INTO `detalle_pesaje` VALUES ('10917', '17', '7.50', '67400', 199);
INSERT INTO `detalle_pesaje` VALUES ('10918', '17', '21.50', '67400', 200);
INSERT INTO `detalle_pesaje` VALUES ('10919', '17', '20.00', '67400', 201);
INSERT INTO `detalle_pesaje` VALUES ('10920', '17', '6.50', '67400', 202);
INSERT INTO `detalle_pesaje` VALUES ('10921', '17', '20.00', '67400', 203);
INSERT INTO `detalle_pesaje` VALUES ('10922', '19', '4.50', '56800', 204);
INSERT INTO `detalle_pesaje` VALUES ('10923', '18', '14.50', '76538', 205);
INSERT INTO `detalle_pesaje` VALUES ('10924', '18', '14.50', '76538', 206);
INSERT INTO `detalle_pesaje` VALUES ('10925', '18', '15.00', '76538', 207);
INSERT INTO `detalle_pesaje` VALUES ('10926', '18', '23.00', '76538', 208);
INSERT INTO `detalle_pesaje` VALUES ('10928', '27', '14.00', '1111', 209);
INSERT INTO `detalle_pesaje` VALUES ('10930', '26', '13.00', '1500', 210);
INSERT INTO `detalle_pesaje` VALUES ('10931', '26', '14.00', '1500', 211);
INSERT INTO `detalle_pesaje` VALUES ('10932', '26', '14.00', '1500', 212);
INSERT INTO `detalle_pesaje` VALUES ('10933', '17', '14.00', '53580', 213);
INSERT INTO `detalle_pesaje` VALUES ('10934', '17', '14', '53580', 214);
INSERT INTO `detalle_pesaje` VALUES ('10935', '17', '14', '53580', 215);
INSERT INTO `detalle_pesaje` VALUES ('10936', '17', '14.00', '53580', 216);
INSERT INTO `detalle_pesaje` VALUES ('10937', '17', '22', '53580', 217);
INSERT INTO `detalle_pesaje` VALUES ('10938', '17', '22', '53580', 218);
INSERT INTO `detalle_pesaje` VALUES ('10939', '17', '15', '53580', 219);
INSERT INTO `detalle_pesaje` VALUES ('10940', '17', '15', '53580', 220);
INSERT INTO `detalle_pesaje` VALUES ('10941', '17', '15', '53580', 221);
INSERT INTO `detalle_pesaje` VALUES ('10944', '17', '14.00', '56400', 222);
INSERT INTO `detalle_pesaje` VALUES ('10946', '17', '14.50', '53580', 223);
INSERT INTO `detalle_pesaje` VALUES ('10948', '17', '15.50', '53580', 224);
INSERT INTO `detalle_pesaje` VALUES ('10949', '', '', '', 225);
INSERT INTO `detalle_pesaje` VALUES ('10950', '', '', '', 226);
INSERT INTO `detalle_pesaje` VALUES ('10951', '17', '15.00', '53580', 227);
INSERT INTO `detalle_pesaje` VALUES ('10952', '17', '15.00', '53580', 228);
INSERT INTO `detalle_pesaje` VALUES ('10957', '17', '8.00', '54708', 229);
INSERT INTO `detalle_pesaje` VALUES ('10958', '17', '21.50', '54708', 230);
INSERT INTO `detalle_pesaje` VALUES ('10959', '17', '22.50', '54708', 231);
INSERT INTO `detalle_pesaje` VALUES ('10960', '19', '5.50', '100000', 232);
INSERT INTO `detalle_pesaje` VALUES ('10961', '19', '5.00', '100000', 233);
INSERT INTO `detalle_pesaje` VALUES ('10962', '18', '22.00', '76538', 234);
INSERT INTO `detalle_pesaje` VALUES ('10963', '18', '19.50', '76538', 235);
INSERT INTO `detalle_pesaje` VALUES ('10966', '18', '21.00', '76538', 236);
INSERT INTO `detalle_pesaje` VALUES ('10971', '18', '13.00', '76538', 237);
INSERT INTO `detalle_pesaje` VALUES ('10969', '18', '13.50', '76538', 238);
INSERT INTO `detalle_pesaje` VALUES ('10970', '18', '14.00', '76538', 239);
INSERT INTO `detalle_pesaje` VALUES ('10972', '17', '15.00', '53580', 240);
INSERT INTO `detalle_pesaje` VALUES ('10973', '17', '13.00', '53580', 241);
INSERT INTO `detalle_pesaje` VALUES ('10974', '17', '14.00', '53580', 242);
INSERT INTO `detalle_pesaje` VALUES ('10975', '19', '6.50', '57900', 243);
INSERT INTO `detalle_pesaje` VALUES ('10976', '17', '14.00', '53580', 244);
INSERT INTO `detalle_pesaje` VALUES ('10977', '17', '13.00', '53580', 245);
INSERT INTO `detalle_pesaje` VALUES ('10978', '17', '13.50', '53580', 246);
INSERT INTO `detalle_pesaje` VALUES ('10979', '', '', '', 247);
INSERT INTO `detalle_pesaje` VALUES ('10980', '17', '20.50', '53580', 248);
INSERT INTO `detalle_pesaje` VALUES ('10981', '20', '8.00', '54874', 249);
INSERT INTO `detalle_pesaje` VALUES ('10982', '20', '14.50', '54874', 250);
INSERT INTO `detalle_pesaje` VALUES ('10983', '20', '15.00', '54874', 251);
INSERT INTO `detalle_pesaje` VALUES ('10984', '20', '14.50', '54874', 252);
INSERT INTO `detalle_pesaje` VALUES ('10985', '20', '13.50', '54874', 253);
INSERT INTO `detalle_pesaje` VALUES ('10986', '17', '14.00', '53580', 254);
INSERT INTO `detalle_pesaje` VALUES ('10987', '17', '20.50', '53580', 255);
INSERT INTO `detalle_pesaje` VALUES ('10988', '17', '14.50', '53580', 256);
INSERT INTO `detalle_pesaje` VALUES ('10989', '17', '15.00', '53580', 257);
INSERT INTO `detalle_pesaje` VALUES ('10991', '', '', '', 258);
INSERT INTO `detalle_pesaje` VALUES ('10992', '17', '8.00', '67400', 259);
INSERT INTO `detalle_pesaje` VALUES ('10993', '17', '7.50', '67400', 260);
INSERT INTO `detalle_pesaje` VALUES ('10996', '17', '22.00', '67400', 261);
INSERT INTO `detalle_pesaje` VALUES ('10997', '17', '8.00', '67400', 262);
INSERT INTO `detalle_pesaje` VALUES ('10998', '', '', '', 263);
INSERT INTO `detalle_pesaje` VALUES ('10999', '17', '8.00', '67400', 264);
INSERT INTO `detalle_pesaje` VALUES ('11000', '17', '22.00', '67400', 265);
INSERT INTO `detalle_pesaje` VALUES ('11362', '17', '14.00', '67400', 266);
INSERT INTO `detalle_pesaje` VALUES ('11363', '17', '14.00', '67400', 267);
INSERT INTO `detalle_pesaje` VALUES ('11364', '17', '13.50', '67400', 268);
INSERT INTO `detalle_pesaje` VALUES ('11351', '17', '12.00', '67400', 269);
INSERT INTO `detalle_pesaje` VALUES ('11352', '17', '12.00', '67400', 270);
INSERT INTO `detalle_pesaje` VALUES ('11353', '17', '8.00', '67400', 271);
INSERT INTO `detalle_pesaje` VALUES ('11355', '17', '22.00', '67400', 272);
INSERT INTO `detalle_pesaje` VALUES ('11356', '17', '14.00', '53580', 273);
INSERT INTO `detalle_pesaje` VALUES ('11357', '17', '22.50', '67400', 274);
INSERT INTO `detalle_pesaje` VALUES ('11358', '17', '14.00', '53580', 275);
INSERT INTO `detalle_pesaje` VALUES ('11359', '17', '12.50', '53580', 276);
INSERT INTO `detalle_pesaje` VALUES ('11360', '17', '20.50', '67400', 277);
INSERT INTO `detalle_pesaje` VALUES ('11361', '17', '13.50', '53580', 278);
INSERT INTO `detalle_pesaje` VALUES ('11365', '17', '13.50', '53580', 279);
INSERT INTO `detalle_pesaje` VALUES ('11366', '', '', '', 280);
INSERT INTO `detalle_pesaje` VALUES ('11367', '17', '8.50', '67400', 281);
INSERT INTO `detalle_pesaje` VALUES ('11368', '17', '', '67400', 282);
INSERT INTO `detalle_pesaje` VALUES ('11369', '17', '8.50', '67400', 283);
INSERT INTO `detalle_pesaje` VALUES ('11370', '17', '14.50', '67400', 284);
INSERT INTO `detalle_pesaje` VALUES ('11371', '17', '7.00', '67400', 285);
INSERT INTO `detalle_pesaje` VALUES ('11372', '17', '8.00', '67400', 286);
INSERT INTO `detalle_pesaje` VALUES ('11373', '17', '8.50', '67400', 287);
INSERT INTO `detalle_pesaje` VALUES ('11374', '', '', '', 288);
INSERT INTO `detalle_pesaje` VALUES ('11375', '17', '14.50', '67400', 289);
INSERT INTO `detalle_pesaje` VALUES ('11376', '17', '13.50', '67400', 290);
INSERT INTO `detalle_pesaje` VALUES ('11377', '17', '13.50', '67400', 291);
INSERT INTO `detalle_pesaje` VALUES ('11378', '17', '22.50', '67400', 292);
INSERT INTO `detalle_pesaje` VALUES ('11379', '17', '14.00', '53580', 293);
INSERT INTO `detalle_pesaje` VALUES ('11381', '17', '21.50', '67400', 294);
INSERT INTO `detalle_pesaje` VALUES ('11382', '17', '14.00', '53580', 295);
INSERT INTO `detalle_pesaje` VALUES ('11383', '17', '14.00', '53580', 296);
INSERT INTO `detalle_pesaje` VALUES ('11384', '17', '15.00', '53580', 297);
INSERT INTO `detalle_pesaje` VALUES ('11386', '17', '22.00', '67400', 298);
INSERT INTO `detalle_pesaje` VALUES ('11387', '17', '22.50', '67400', 299);
INSERT INTO `detalle_pesaje` VALUES ('11388', '17', '20.00', '67400', 300);
INSERT INTO `detalle_pesaje` VALUES ('11389', '17', '15.50', '67400', 301);
INSERT INTO `detalle_pesaje` VALUES ('11392', '', '', '', 302);
INSERT INTO `detalle_pesaje` VALUES ('11393', '', '', '', 303);
INSERT INTO `detalle_pesaje` VALUES ('11394', '', '', '', 304);
INSERT INTO `detalle_pesaje` VALUES ('11395', '', '', '', 305);
INSERT INTO `detalle_pesaje` VALUES ('11396', '18', '14.50', '76538', 306);
INSERT INTO `detalle_pesaje` VALUES ('11397', '18', '14.00', '76538', 307);
INSERT INTO `detalle_pesaje` VALUES ('11398', '18', '14.00', '76538', 308);
INSERT INTO `detalle_pesaje` VALUES ('11399', '18', '14.00', '76538', 309);
INSERT INTO `detalle_pesaje` VALUES ('11400', '18', '14.00', '76538', 310);
INSERT INTO `detalle_pesaje` VALUES ('11401', '18', '14.00', '76538', 311);
INSERT INTO `detalle_pesaje` VALUES ('11402', '18', '15.00', '76538', 312);
INSERT INTO `detalle_pesaje` VALUES ('11403', '17', '10.50', '67400', 313);
INSERT INTO `detalle_pesaje` VALUES ('11404', '17', '14.50', '53580', 314);
INSERT INTO `detalle_pesaje` VALUES ('11405', '17', '22.00', '53580', 315);
INSERT INTO `detalle_pesaje` VALUES ('11406', '17', '14.50', '53580', 316);
INSERT INTO `detalle_pesaje` VALUES ('11407', '17', '13.50', '53580', 317);
INSERT INTO `detalle_pesaje` VALUES ('11408', '17', '6.50', '53580', 318);
INSERT INTO `detalle_pesaje` VALUES ('11409', '18', '21.50', '76538', 319);
INSERT INTO `detalle_pesaje` VALUES ('11410', '18', '20.00', '76538', 320);
INSERT INTO `detalle_pesaje` VALUES ('11411', '18', '7.00', '76538', 321);
INSERT INTO `detalle_pesaje` VALUES ('11413', '', '', '', 322);
INSERT INTO `detalle_pesaje` VALUES ('11414', '', '', '', 323);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `detalle_presupuesto`
-- 

CREATE TABLE `detalle_presupuesto` (
  `id` int(11) NOT NULL auto_increment,
  `id_presupuesto` varchar(20) NOT NULL,
  `id_mezcla` varchar(250) NOT NULL,
  `unidad` varchar(250) NOT NULL,
  `cantidad` varchar(250) NOT NULL,
  `precio_unitario` varchar(250) NOT NULL,
  `precio_total` varchar(250) NOT NULL,
  `extra` varchar(250) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=273 ;

-- 
-- Volcar la base de datos para la tabla `detalle_presupuesto`
-- 

INSERT INTO `detalle_presupuesto` VALUES (268, '87', '27', '', '12', '12332', '147984', '');
INSERT INTO `detalle_presupuesto` VALUES (269, '87', '27', '', '12', '12332', '147984', '');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `detalle_traslado`
-- 

CREATE TABLE `detalle_traslado` (
  `id` int(11) NOT NULL auto_increment,
  `n_guia` varchar(250) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `cantidad` varchar(250) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=78 ;

-- 
-- Volcar la base de datos para la tabla `detalle_traslado`
-- 

INSERT INTO `detalle_traslado` VALUES (77, '11414', 'CSS1-H Traslado no contituye venta', '5300');
INSERT INTO `detalle_traslado` VALUES (36, '10998', 'Bitumen CA-24', '25800');
INSERT INTO `detalle_traslado` VALUES (34, '10950', 'CA-Elastomerico ', '4722');
INSERT INTO `detalle_traslado` VALUES (35, '10991', 'Emulsion Imprimante', '6000');
INSERT INTO `detalle_traslado` VALUES (76, '11413', 'Traslado de CA-24', '11320');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ingreso_materias`
-- 

CREATE TABLE `ingreso_materias` (
  `id` int(11) NOT NULL auto_increment,
  `orden_compra` varchar(250) NOT NULL,
  `guia` varchar(250) NOT NULL,
  `proveedor` varchar(250) NOT NULL,
  `materia` varchar(250) NOT NULL,
  `fecha_guia` date NOT NULL,
  `cantidad` varchar(250) NOT NULL,
  `precio_unitario` varchar(250) NOT NULL,
  `patente` varchar(250) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- Volcar la base de datos para la tabla `ingreso_materias`
-- 

INSERT INTO `ingreso_materias` VALUES (6, '321', '159', '4', '5', '2010-11-03', '200', '458', 'BVNB25');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ingreso_orden`
-- 

CREATE TABLE `ingreso_orden` (
  `id` int(11) NOT NULL auto_increment,
  `orden` varchar(250) NOT NULL,
  `cliente` varchar(250) NOT NULL,
  `fecha` date NOT NULL,
  `tipo_mezcla` varchar(250) NOT NULL,
  `mezcla` varchar(250) NOT NULL,
  `cantidad` varchar(250) NOT NULL,
  `precio_unitario` varchar(250) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

-- 
-- Volcar la base de datos para la tabla `ingreso_orden`
-- 

INSERT INTO `ingreso_orden` VALUES (4, '12', '8', '2010-10-12', 'Emulsion', '14', '12', '');
INSERT INTO `ingreso_orden` VALUES (3, '1', '9', '2010-10-29', 'Arido', '4', '23', '');
INSERT INTO `ingreso_orden` VALUES (5, '108-005', '8', '2010-09-15', 'Mezcla', '17', '1859.97', '');
INSERT INTO `ingreso_orden` VALUES (6, '12', '8', '2010-11-10', 'Mezcla', '20', '12', '');
INSERT INTO `ingreso_orden` VALUES (7, '101510001', '10', '2010-07-01', 'Mezcla', '17', '20', '');
INSERT INTO `ingreso_orden` VALUES (8, '560019', '22', '2010-10-25', 'Mezcla', '18', '2190', '');
INSERT INTO `ingreso_orden` VALUES (9, '560020', '22', '2010-10-25', 'Emulsion', '23', '25025', '');
INSERT INTO `ingreso_orden` VALUES (10, 'TSCB2', '9', '2010-11-02', 'Mezcla', '17', '250', '');
INSERT INTO `ingreso_orden` VALUES (11, 'VIALIDAD', '12', '2010-11-02', 'Mezcla', '16', '30', '');
INSERT INTO `ingreso_orden` VALUES (12, 'EABR68', '24', '2010-11-02', 'Mezcla', '17', '200', '');
INSERT INTO `ingreso_orden` VALUES (13, 'Parthenon', '25', '2010-11-02', 'Mezcla', '19', '7', '');
INSERT INTO `ingreso_orden` VALUES (14, '6625', '19', '2010-11-03', 'Mezcla', '17', '14', '');
INSERT INTO `ingreso_orden` VALUES (15, 'orden de  Compra 01-001', '15', '2010-11-03', 'Mezcla', '17', '11', '');
INSERT INTO `ingreso_orden` VALUES (16, '4963', '9', '2010-11-04', 'Mezcla', '17', '22', '');
INSERT INTO `ingreso_orden` VALUES (17, '09-0001', '24', '2010-10-08', 'Mezcla', '17', '641', '');
INSERT INTO `ingreso_orden` VALUES (18, 'OPEPA', '24', '2010-11-01', 'Mezcla', '17', '500', '');
INSERT INTO `ingreso_orden` VALUES (19, 'ECMAM', '8', '2010-11-01', 'Mezcla', '17', '500', '');
INSERT INTO `ingreso_orden` VALUES (30, '5421', '9', '2010-11-09', 'Mezcla', '17', '150', '');
INSERT INTO `ingreso_orden` VALUES (22, '108-08', '8', '2010-09-22', 'Emulsion', '25', '44151.39', '');
INSERT INTO `ingreso_orden` VALUES (23, '118011', '14', '2010-11-08', 'Emulsion', '23', '3000', '');
INSERT INTO `ingreso_orden` VALUES (24, '314398', '14', '2010-11-08', 'Emulsion', '23', '150', '');
INSERT INTO `ingreso_orden` VALUES (25, '31439', '14', '2010-11-08', 'Emulsion', '23', '', '');
INSERT INTO `ingreso_orden` VALUES (26, '9168155', '40', '2010-11-09', 'Emulsion', '21', '200', '');
INSERT INTO `ingreso_orden` VALUES (27, 'Soc. Const.Girasoles', '17', '2010-11-09', 'Mezcla', '19', '7', '');
INSERT INTO `ingreso_orden` VALUES (28, '108-008', '8', '2010-11-09', 'Emulsion', '23', '560', '');
INSERT INTO `ingreso_orden` VALUES (29, '108-006', '8', '2010-09-15', 'Mezcla', '20', '338', '');
INSERT INTO `ingreso_orden` VALUES (31, '108-017', '8', '2010-11-12', 'Emulsion', '22', '10', '');
INSERT INTO `ingreso_orden` VALUES (32, '113-007', '8', '2010-11-12', 'Emulsion', '22', '2', '');
INSERT INTO `ingreso_orden` VALUES (33, '21-0002', '24', '2010-11-12', 'Emulsion', '25', '4959', '');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `materias`
-- 

CREATE TABLE `materias` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(250) NOT NULL,
  `extra` varchar(250) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- Volcar la base de datos para la tabla `materias`
-- 

INSERT INTO `materias` VALUES (5, 'Petroleo Diesel', '');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `mezclas`
-- 

CREATE TABLE `mezclas` (
  `id` int(11) NOT NULL auto_increment,
  `tipo` varchar(250) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `valor` varchar(250) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

-- 
-- Volcar la base de datos para la tabla `mezclas`
-- 

INSERT INTO `mezclas` VALUES (20, 'Mezcla', 'Binder', '1820');
INSERT INTO `mezclas` VALUES (21, 'Emulsion', 'Emulsion Imprimante', '980');
INSERT INTO `mezclas` VALUES (19, 'Mezcla', 'Mezcla Asfaltica T.M 1/2 Serviu', '1770');
INSERT INTO `mezclas` VALUES (18, 'Mezcla', 'Mezcla Asfaltica T.M. 3/4 Elastomerico', '1820');
INSERT INTO `mezclas` VALUES (22, 'Emulsion', 'CSS-1h', '992');
INSERT INTO `mezclas` VALUES (17, 'Mezcla', 'Mezcla Asfaltica T.M 3/4 MOP', '1842');
INSERT INTO `mezclas` VALUES (16, 'Mezcla', 'Mezcla Asfaltica T.M. 3/4 Serviu', '1758');
INSERT INTO `mezclas` VALUES (23, 'Emulsion', 'CQS-1h Elastomerico', '970');
INSERT INTO `mezclas` VALUES (24, 'Emulsion', 'CSS 1H (R)', '992');
INSERT INTO `mezclas` VALUES (25, 'Emulsion', 'Emulsion Imprimante (R)', '980');
INSERT INTO `mezclas` VALUES (26, 'Arido', 'Gravilla 3/4"', '1506');
INSERT INTO `mezclas` VALUES (27, 'Arido', 'Gravilla T/M 1/2" ', '1518');
INSERT INTO `mezclas` VALUES (28, 'Arido', 'Polvo Roca T/M 3/8"', '1659');
INSERT INTO `mezclas` VALUES (29, 'Emulsion', 'Petroleo Diesel NU 1202', '');
INSERT INTO `mezclas` VALUES (30, 'Emulsion', 'Tambor Metalico', '');
INSERT INTO `mezclas` VALUES (34, 'Mezcla', 'MIX - Prime', '0');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `obra`
-- 

CREATE TABLE `obra` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(250) NOT NULL,
  `ubicacion` varchar(250) NOT NULL,
  `ciudad` varchar(250) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

-- 
-- Volcar la base de datos para la tabla `obra`
-- 

INSERT INTO `obra` VALUES (5, 'Litueche Rapel TAFCA', 'Litueche', 'Litueche');
INSERT INTO `obra` VALUES (8, 'Estacion Transf. El Olivar Division El Teniente Codelco', 'Olivar', 'Rancagua');
INSERT INTO `obra` VALUES (7, 'Licitacion Publica Nº10-30087204-0-02', 'Pudahuel', 'Santiago');
INSERT INTO `obra` VALUES (9, 'Conservacion Mayor Autopista del Maipo', 'Autopista del Maipo', '');
INSERT INTO `obra` VALUES (10, 'Ruta H-82-l Comuna Las Cabras ', 'Las Cabras', '');
INSERT INTO `obra` VALUES (11, 'Bacheos Profundos Ruta 68', 'Ruta 68', '');
INSERT INTO `obra` VALUES (12, 'Obra Bacheos Ruta 68', 'Ruta 68', '');
INSERT INTO `obra` VALUES (14, 'Obra Santa Cruz Bucalemu', 'Bucalemu', 'Santa Cruz');
INSERT INTO `obra` VALUES (15, 'Obra Rincon Los Mayos', 'Vialidad', '');
INSERT INTO `obra` VALUES (16, 'Villa Conavicoop Parthenon', 'Parthenon', '');
INSERT INTO `obra` VALUES (17, 'Chillan - Talca', 'Talca', '');
INSERT INTO `obra` VALUES (18, 'Obra Calle de Servicio Maquehua', 'Maquehua', '');
INSERT INTO `obra` VALUES (19, 'Quinta de Tilcoco Guacarhue', 'Quinta de Tilcoco', 'Guacarhue');
INSERT INTO `obra` VALUES (21, 'Licitacion 3/2010 Las Araucarias', 'Curico', 'Curico');
INSERT INTO `obra` VALUES (22, 'Loteo Manquehue, Machali', 'Rancagua', 'Rancagua');
INSERT INTO `obra` VALUES (23, 'Obra El Asta Pichidehua ( Camino Nuevo)', 'Pichidegua', '');
INSERT INTO `obra` VALUES (24, 'Lolol (camino Nuevo)', '', '');
INSERT INTO `obra` VALUES (25, 'Obra Litueche ( Aridos Rio Maipo)', 'Litueche', '');
INSERT INTO `obra` VALUES (26, 'Las Chacras (Camino Nuevo)', 'San Jose Marchihue', '');
INSERT INTO `obra` VALUES (27, 'Conservacion Global 8ª Etapa Colchagua', 'Colchagua', '');
INSERT INTO `obra` VALUES (28, 'Obra Ruta 68', '', '');
INSERT INTO `obra` VALUES (29, 'Obra Pichilemu ( PA)', 'Pichilemu', '');
INSERT INTO `obra` VALUES (30, 'Obra Planta Mix Vial Curico ', 'Curico', '');
INSERT INTO `obra` VALUES (41, 'Obra Contrato Scada N', '', '');
INSERT INTO `obra` VALUES (32, 'Obra Ecovial Maquinarias', '', '');
INSERT INTO `obra` VALUES (33, 'Obra Mixvial Curico', 'Curico', '');
INSERT INTO `obra` VALUES (34, 'Obra Quinta de Tilcoco (Moptt)', '', '');
INSERT INTO `obra` VALUES (35, 'Licitacion 13/2010 Pichilemu (Las Araucarias)', 'Pichilemu', '');
INSERT INTO `obra` VALUES (36, 'Ruta Los Conquistadores Las Araucarias', '', '');
INSERT INTO `obra` VALUES (37, 'Los Maquis(Moptt)', '', '');
INSERT INTO `obra` VALUES (38, 'Obra Longitudinal Sur Km 175 Teno (Isabel Muñoz)', 'Teno', '');
INSERT INTO `obra` VALUES (39, 'San Francisco ( Girasoles)', 'San Francisco', '');
INSERT INTO `obra` VALUES (40, 'Obra Los Vilos', 'Los Vilos', '');
INSERT INTO `obra` VALUES (42, 'SanClemente (PA)', '', '');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `orden_compra`
-- 

CREATE TABLE `orden_compra` (
  `id` int(11) NOT NULL auto_increment,
  `fecha` date NOT NULL,
  `cliente` varchar(250) NOT NULL,
  `sub_neto` varchar(250) NOT NULL,
  `descuento` varchar(250) NOT NULL,
  `neto` varchar(250) NOT NULL,
  `iva` varchar(250) NOT NULL,
  `total` varchar(250) NOT NULL,
  `forma_de_pago` varchar(250) NOT NULL,
  `plazo_entrega` varchar(250) NOT NULL,
  `observaciones` varchar(250) NOT NULL,
  `extra` varchar(250) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 PACK_KEYS=0 AUTO_INCREMENT=24 ;

-- 
-- Volcar la base de datos para la tabla `orden_compra`
-- 

INSERT INTO `orden_compra` VALUES (23, '2010-11-12', '7', '', '', '', '', '', '', '', '', '');
INSERT INTO `orden_compra` VALUES (22, '2010-11-12', '7', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `pesaje`
-- 

CREATE TABLE `pesaje` (
  `id` int(11) NOT NULL auto_increment,
  `temperatura` varchar(25) NOT NULL,
  `num_pesaje` varchar(250) NOT NULL,
  `patente` varchar(250) NOT NULL,
  `fecha_hora` date NOT NULL,
  `transportista` varchar(250) NOT NULL,
  `chofer` varchar(250) NOT NULL,
  `peso_bruto` varchar(250) NOT NULL,
  `tara` varchar(250) NOT NULL,
  `obra` varchar(250) NOT NULL,
  `n_orden` varchar(250) NOT NULL,
  `cliente` varchar(250) NOT NULL,
  `nula` varchar(100) NOT NULL,
  `tipo_guia` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 PACK_KEYS=1 DELAY_KEY_WRITE=1 AUTO_INCREMENT=11420 ;

-- 
-- Volcar la base de datos para la tabla `pesaje`
-- 

INSERT INTO `pesaje` VALUES (10851, '', '', '34', '2010-11-03', '15', '18', '', '', '21', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10850, '', '', '34', '2010-11-03', '15', '18', '', '', '21', '', '14', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10847, '', '', '34', '2010-11-02', '11', '18', '', '', '18', '', '24', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10846, '175', '70', '27', '2010-11-02', '9', '28', '34860', '11000', '7', '10846', '22', '', '');
INSERT INTO `pesaje` VALUES (10848, '', '', '48', '2010-11-02', '4', '30', '', '', '19', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10845, '175', '49', '46', '2010-11-02', '9', '27', '36280', '11110', '7', '10845', '22', '', '');
INSERT INTO `pesaje` VALUES (10844, '175', '4', '45', '2010-11-02', '9', '26', '49430', '11110', '7', '10844', '22', '', '');
INSERT INTO `pesaje` VALUES (10843, '', '', '47', '2010-11-02', '11', '29', '', '', '17', '', '8', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10842, '158', '35', '44', '2010-11-02', '13', '25', '23410', '11110', '16', '10842', '25', '', '');
INSERT INTO `pesaje` VALUES (10841, '158', '45', '24', '2010-11-02', '6', '11', '36920', '11110', '12', '10841', '24', '', '');
INSERT INTO `pesaje` VALUES (10840, '158', '70', '43', '2010-11-02', '9', '24', '34860', '11110', '12', '10840', '24', '', '');
INSERT INTO `pesaje` VALUES (10839, '158', '45', '42', '2010-11-02', '6', '12', '36920', '11110', '12', '10839', '24', '', '');
INSERT INTO `pesaje` VALUES (10838, '158', '71', '19', '2010-11-02', '6', '8', '33870', '11110', '12', '10838', '24', '', '');
INSERT INTO `pesaje` VALUES (10837, '158', '71', '17', '2010-11-02', '6', '17', '33870', '11260', '12', '10837', '24', '', '');
INSERT INTO `pesaje` VALUES (10849, '', '', '34', '2010-11-03', '15', '18', '', '', '22', '', '24', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10836, '178', '80', '16', '2010-11-02', '7', '9', '41470', '13840', '7', '10836', '22', '', '');
INSERT INTO `pesaje` VALUES (10835, '175', '70', '41', '2010-11-02', '', '23', '34860', '11000', '7', '10835', '22', '', '');
INSERT INTO `pesaje` VALUES (10833, '175', '78', '10', '2010-11-02', '7', '4', '35910', '10530', '7', '10833', '22', '', '');
INSERT INTO `pesaje` VALUES (10834, '175', '41', '40', '2010-11-02', '9', '22', '56520', '18110', '7', '10834', '22', '', '');
INSERT INTO `pesaje` VALUES (10832, '175', '4', '39', '2010-11-02', '6', '13', '49430', '11000', '7', '10832', '22', '', '');
INSERT INTO `pesaje` VALUES (10853, '158', '83', '16', '2010-11-03', '6', '1', '32310', '13840', '7', '10853', '24', '', '');
INSERT INTO `pesaje` VALUES (10852, '158', '83', '24', '2010-11-03', '6', '11', '32310', '11110', '12', '10852', '24', '', '');
INSERT INTO `pesaje` VALUES (10826, '158', '', '11', '2010-11-02', '14', '5', '', '', '14', '', '9', '', '');
INSERT INTO `pesaje` VALUES (10831, '158', '71', '38', '2010-11-02', '9', '21', '', '', '14', '10831', '9', '', '');
INSERT INTO `pesaje` VALUES (10827, '158', '', '12', '2010-11-02', '14', '6', '', '', '14', '', '9', '', '');
INSERT INTO `pesaje` VALUES (10830, '158', '54', '37', '2010-11-02', '12', '20', '16090', '11000', '15', '10830', '12', '', '');
INSERT INTO `pesaje` VALUES (10828, '', '', '34', '2010-11-02', '11', '18', '', '', '7', '', '22', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10829, '158', '4', '36', '2010-11-02', '9', '19', '', '', '14', '10829', '9', '', '');
INSERT INTO `pesaje` VALUES (10854, '158', '84', '19', '2010-11-03', '6', '8', '33880', '11110', '12', '10854', '24', '', '');
INSERT INTO `pesaje` VALUES (10855, '158', '85', '37', '2010-11-03', '12', '20', '13600', '11000', '15', '10855', '12', '', '');
INSERT INTO `pesaje` VALUES (10856, '158', '86', '42', '2010-11-03', '6', '12', '34110', '11110', '12', '10856', '24', '', '');
INSERT INTO `pesaje` VALUES (10857, '158', '88', '19', '2010-11-03', '6', '17', '35360', '11110', '12', '10857', '24', '', '');
INSERT INTO `pesaje` VALUES (10858, '158', '76', '26', '2010-11-03', '4', '17', '17600', '11550', '22', '10858', '20', '', '');
INSERT INTO `pesaje` VALUES (10859, '175', '92', '10', '2010-11-03', '7', '4', '35590', '10530', '7', '10859', '22', '', '');
INSERT INTO `pesaje` VALUES (10860, '175', '93', '16', '2010-11-03', '7', '9', '40520', '13840', '7', '10860', '22', '', '');
INSERT INTO `pesaje` VALUES (10861, '175', '94', '41', '2010-11-03', '7', '23', '33820', '11000', '7', '10861', '22', '', '');
INSERT INTO `pesaje` VALUES (10862, '158', '96', '18', '2010-11-03', '8', '5', '54400', '16150', '7', '10862', '22', '', '');
INSERT INTO `pesaje` VALUES (10863, '178', '97', '12', '2010-11-03', '8', '6', '52950', '16090', '7', '10863', '22', '', '');
INSERT INTO `pesaje` VALUES (10864, '158', '98', '50', '2010-11-03', '16', '32', '24980', '10970', '23', '10864', '19', '', '');
INSERT INTO `pesaje` VALUES (10865, '158', '100', '43', '2010-11-03', '9', '24', '40110', '11110', '12', '10865', '8', '', '');
INSERT INTO `pesaje` VALUES (10866, '158', '101', '51', '2010-11-03', '17', '33', '32040', '11150', '24', '10866', '15', '', '');
INSERT INTO `pesaje` VALUES (10867, '158', '102', '52', '2010-11-03', '13', '25', '18380', '6020', '16', '10867', '25', '', '');
INSERT INTO `pesaje` VALUES (10868, '', '', '53', '2010-11-03', '18', '34', '', '', '25', '', '20', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10869, '', '', '54', '2010-11-03', '16', '35', '', '', '26', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10870, '158', '103', '11', '2010-11-04', '8', '5', '56990', '16150', '5', '10870', '9', '', '');
INSERT INTO `pesaje` VALUES (10871, '158', '104', '12', '2010-11-04', '8', '6', '56890', '16090', '5', '10871', '9', '', '');
INSERT INTO `pesaje` VALUES (10872, '158', '102', '52', '2010-11-04', '14', '7', '18380', '6020', '5', '10872', '9', '', '');
INSERT INTO `pesaje` VALUES (10873, '158', '94', '41', '2010-11-04', '14', '13', '33820', '11000', '5', '10873', '9', '', '');
INSERT INTO `pesaje` VALUES (10874, '', '108', '56', '2010-11-04', '9', '22', '50170', '14500', '5', '10874', '9', '', '');
INSERT INTO `pesaje` VALUES (10875, '158', '109', '50', '2010-11-04', '16', '32', '25280', '10970', '23', '10875', '19', '', '');
INSERT INTO `pesaje` VALUES (10876, '158', '109', '50', '2010-11-04', '16', '32', '25280', '10970', '23', '10875', '19', '', '');
INSERT INTO `pesaje` VALUES (10877, '178', '110', '46', '2010-11-04', '9', '27', '37760', '11110', '7', '10877', '22', '', '');
INSERT INTO `pesaje` VALUES (10878, '178', '113', '16', '2010-11-04', '7', '31', '41030', '13840', '7', '10878', '22', '', '');
INSERT INTO `pesaje` VALUES (10879, '175', '114', '41', '2010-11-04', '7', '23', '34110', '11000', '7', '10879', '22', '', '');
INSERT INTO `pesaje` VALUES (10880, '175', '115', '10', '2010-11-04', '7', '4', '35700', '10530', '7', '10880', '22', '', '');
INSERT INTO `pesaje` VALUES (10881, '175', '116', '27', '2010-11-04', '9', '28', '36360', '11000', '7', '10881', '22', '', '');
INSERT INTO `pesaje` VALUES (10882, '158', '117', '19', '2010-11-04', '6', '8', '36450', '11110', '12', '10882', '8', '', '');
INSERT INTO `pesaje` VALUES (10883, '', '', '34', '2010-11-04', '11', '18', '', '', '7', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10884, '158', '118', '42', '2010-11-04', '6', '12', '36040', '11110', 'Eliga una OpciÃ³n', '10884', '8', '', '');
INSERT INTO `pesaje` VALUES (10885, '158', '119', '57', '2010-11-04', '14', '36', '55290', '15810', '5', '10885', '9', '', '');
INSERT INTO `pesaje` VALUES (10886, '158', '120', '17', '2010-11-04', '6', '17', '36840', '11260', '12', '10886', '8', '', '');
INSERT INTO `pesaje` VALUES (10887, '158', '121', '58', '2010-11-04', '9', '24', '51910', '15330', '5', '10887', '9', '', '');
INSERT INTO `pesaje` VALUES (10888, '158', '122', '24', '2010-11-04', '6', '11', '36360', '11110', '12', '10888', '8', '', '');
INSERT INTO `pesaje` VALUES (10889, '158', '123', '59', '2010-11-04', '14', '37', '57200', '15920', '5', '10889', '9', '', '');
INSERT INTO `pesaje` VALUES (10890, '158', '125', '60', '2010-11-04', '9', '26', '39170', '15330', '12', '10890', '8', '', '');
INSERT INTO `pesaje` VALUES (10891, '158', '127', '61', '2010-11-04', '9', '13', '52590', '16230', '5', '10891', '9', '', '');
INSERT INTO `pesaje` VALUES (10892, '158', '128', '62', '2010-11-04', '13', '25', '18390', '5100', '16', '10892', '25', '', '');
INSERT INTO `pesaje` VALUES (10893, '158', '129', '63', '2010-11-04', '14', '38', '53790', '16460', '5', '10893', '9', '', '');
INSERT INTO `pesaje` VALUES (10894, '', '', '64', '2010-11-04', '18', '39', '', '', '27', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10895, '158', '131', '66', '2010-11-04', '19', '40', '20350', '11520', '12', '10895', '8', '', '');
INSERT INTO `pesaje` VALUES (10896, '158', '132', '18', '2010-11-04', '8', '5', '36660', '16150', '12', '10896', '8', '', '');
INSERT INTO `pesaje` VALUES (10897, '158', '133', '12', '2010-11-04', '8', '6', '40190', '16090', '12', '10897', '8', '', '');
INSERT INTO `pesaje` VALUES (10898, '', '', '67', '2010-11-04', '11', '41', '', '', '28', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10899, '', '', '47', '2010-11-04', '11', '29', '', '', '7', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10900, '158', '134', '42', '2010-11-05', '6', '12', '36130', '11110', '5', '10900', '9', '', '');
INSERT INTO `pesaje` VALUES (10901, '158', '135', '20', '2010-11-05', '6', '17', '36910', '11260', '5', '10901', '9', '', '');
INSERT INTO `pesaje` VALUES (10902, '158', '136', '24', '2010-11-05', '6', '11', '23520', '11110', '12', '10902', '8', '', '');
INSERT INTO `pesaje` VALUES (10903, '158', '137', '19', '2010-11-05', '6', '8', '23990', '11110', '12', '10903', '8', '', '');
INSERT INTO `pesaje` VALUES (10904, '158', '138', '11', '2010-11-05', '8', '5', '57200', '16150', '5', '10904', '8', '', '');
INSERT INTO `pesaje` VALUES (10905, '158', '140', '12', '2010-11-05', '8', '6', '56770', '16090', '5', '10905', '9', '', '');
INSERT INTO `pesaje` VALUES (10906, '178', '144', '10', '2010-11-05', '7', '4', '36240', '10530', '7', '10906', '22', '', '');
INSERT INTO `pesaje` VALUES (10907, '178', '145', '41', '2010-11-05', '7', '23', '33770', '11000', '7', '10907', '22', '', '');
INSERT INTO `pesaje` VALUES (10908, '178', '147', '16', '2010-11-05', '7', '9', '41580', '13840', '7', '10908', '22', '', '');
INSERT INTO `pesaje` VALUES (10909, '175', '148', '46', '2010-11-05', '9', '27', '36740', '11110', '7', '10909', '22', '', '');
INSERT INTO `pesaje` VALUES (10910, '', '', '34', '2010-11-05', '11', '18', '', '', '8', '', '8', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10911, '175', '149', '27', '2010-11-05', '9', '28', '32920', '11000', '7', '10911', '22', '', '');
INSERT INTO `pesaje` VALUES (10912, '158', '150', '68', '2010-11-05', '14', '42', '21760', '7210', '5', '10912', '9', '', '');
INSERT INTO `pesaje` VALUES (10913, '158', '151', '69', '2010-11-05', '14', '43', '22920', '7580', '5', '10913', '9', '', '');
INSERT INTO `pesaje` VALUES (10914, '2222', '151', '26', '2010-11-05', '18', '17', '22920', '11550', '22', '10914', '9', '', '');
INSERT INTO `pesaje` VALUES (10915, '158', '152', '57', '2010-11-05', '14', '36', '53770', '15810', '5', '10915', '9', '', '');
INSERT INTO `pesaje` VALUES (10916, '158', '154', '71', '2010-11-05', '14', '44', '32370', '10670', '5', '10916', '9', '', '');
INSERT INTO `pesaje` VALUES (10917, '158', '155', '72', '2010-11-05', '14', '45', '21320', '7060', '5', '10917', '9', '', '');
INSERT INTO `pesaje` VALUES (10918, '158', '156', '60', '2010-11-05', '9', '26', '54530', '15330', '5', '10918', '9', '', '');
INSERT INTO `pesaje` VALUES (10919, '158', '157', '61', '2010-11-05', '9', '13', '53330', '16230', '5', '10919', '9', '', '');
INSERT INTO `pesaje` VALUES (10920, '158', '158', '73', '2010-11-05', '14', '46', '19270', '7270', '5', '10920', '9', '', '');
INSERT INTO `pesaje` VALUES (10921, '158', '160', '40', '2010-11-05', '9', '22', '54890', '18110', '5', '10921', '9', '', '');
INSERT INTO `pesaje` VALUES (10922, '158', '162', '62', '2010-11-05', '13', '25', '13300', '5100', '16', '10922', '25', '', '');
INSERT INTO `pesaje` VALUES (10923, '178', '163', '42', '2010-11-05', '6', '10', '37570', '11110', '7', '10923', '22', '', '');
INSERT INTO `pesaje` VALUES (10924, '178', '163', '42', '2010-11-05', '6', '12', '37570', '11110', '7', '10924', '22', '', '');
INSERT INTO `pesaje` VALUES (10925, '178', '164', '17', '2010-11-05', '6', '17', '38230', '11260', '7', '10925', '22', '', '');
INSERT INTO `pesaje` VALUES (10926, '175', '165', '18', '2010-11-05', '8', '5', '57890', '16150', '7', '10926', '22', '', '');
INSERT INTO `pesaje` VALUES (10927, '', '', '47', '2010-11-05', '11', '29', '', '', '29', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10928, '222', '149', '26', '2010-11-06', '19', '18', '32920', '11550', '23', '10928', '24', '', '');
INSERT INTO `pesaje` VALUES (10929, '', '', '34', '2010-11-06', '11', '18', '', '', '9', '', '8', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10930, '000', '169', '19', '2010-11-06', '6', '8', '30650', '11110', '30', '10930', '30', '', '');
INSERT INTO `pesaje` VALUES (10931, '00', '170', '24', '2010-11-06', '6', '11', '31810', '11110', '30', '10931', '30', '', '');
INSERT INTO `pesaje` VALUES (10932, '00', '171', '25', '2010-11-06', '6', '47', '32730', '11420', '30', '10932', '30', '', '');
INSERT INTO `pesaje` VALUES (10933, '158', '176', '74', '2010-11-07', '6', '48', '36320', '10200', '29', 'OPEPA', '24', '', '');
INSERT INTO `pesaje` VALUES (10934, '158', '177', '22', '2010-11-07', '6', '50', '36420', '11730', '29', 'OPEPA', '24', '', '');
INSERT INTO `pesaje` VALUES (10935, '158', '178', '79', '2010-11-07', '6', '51', '37830', '10200', '29', 'OPEPA', '24', '', '');
INSERT INTO `pesaje` VALUES (10936, '158', '179', '75', '2010-11-07', '6', '49', '36440', '10280', '29', 'OPEPA', '24', '', '');
INSERT INTO `pesaje` VALUES (10937, '158', '180', '18', '2010-11-07', '7', '5', '57340', '16150', '29', 'OPEPA', '24', '', '');
INSERT INTO `pesaje` VALUES (10938, '158', '181', '12', '2010-11-07', '6', '6', '54850', '16090', '29', 'OPEPA', '24', '', '');
INSERT INTO `pesaje` VALUES (10939, '158', '182', '24', '2010-11-07', '6', '11', '38270', '11110', '29', 'ECMAM', '8', '', '');
INSERT INTO `pesaje` VALUES (10940, '158', '183', '19', '2010-11-07', '6', '8', '37780', '11110', '29', 'ECMAM', '8', '', '');
INSERT INTO `pesaje` VALUES (10941, '158', '184', '25', '2010-11-07', '6', '47', '37980', '11420', '29', 'ECMAM', '8', '', '');
INSERT INTO `pesaje` VALUES (10942, '', '', '47', '2010-11-08', '11', '29', '', '', '29', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10943, '', '', '34', '2010-11-08', '11', '18', '', '', '9', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10944, '158', '185', '19', '2010-11-08', '6', '8', '36600', '11110', '29', '09-0001', '24', '', '');
INSERT INTO `pesaje` VALUES (10945, '', '', '19', '2010-11-08', '6', '8', '', '', '29', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10946, '158', '184', '25', '2010-11-08', '6', '47', '37980', '11420', '29', '09-0001', '24', '', '');
INSERT INTO `pesaje` VALUES (10947, '', '', '80', '2010-11-08', '4', '53', '', '', '32', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10948, '158', '188', '79', '2010-11-08', '6', '51', '39040', '10200', '29', '09-0001', '24', '', '');
INSERT INTO `pesaje` VALUES (10949, '', '', '80', '2010-11-08', '12', '49', '', '', '25', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10950, '', '', '81', '2010-11-08', '20', '54', '', '', '33', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10951, '158', '189', '74', '2010-11-08', '6', '48', '37630', '10200', '29', '09-0001', '24', '', '');
INSERT INTO `pesaje` VALUES (10952, '158', '190', '75', '2010-11-08', '6', '49', '37970', '10280', '29', '09-0001', '24', '', '');
INSERT INTO `pesaje` VALUES (10953, '', '', '34', '2010-11-08', '11', '18', '', '', '34', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10954, '', '', '34', '2010-11-08', '11', '18', '', '', '35', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10955, '', '', '34', '2010-11-08', '15', '18', '', '', '36', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10956, '', '', '48', '2010-11-08', '11', '30', '', '', '7', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10957, '158', '191', '82', '2010-11-09', '14', '55', '19960', '5224', '14', 'orden de  Compra 01-001', '9', '', '');
INSERT INTO `pesaje` VALUES (10958, '158', '194', '57', '2010-11-09', '14', '36', '55740', '15810', '14', 'orden de  Compra 01-001', '9', '', '');
INSERT INTO `pesaje` VALUES (10959, '158', '195', '59', '2010-11-09', '14', '37', '56950', '15920', '14', 'orden de  Compra 01-001', '9', '', '');
INSERT INTO `pesaje` VALUES (10960, '158', '196', '83', '2010-11-09', '12', '56', '16930', '7200', '37', 'VIALIDAD', '12', '', '');
INSERT INTO `pesaje` VALUES (10961, '158', '197', '84', '2010-11-09', '12', '57', '16230', '7670', '37', 'VIALIDAD', '12', '', '');
INSERT INTO `pesaje` VALUES (10962, '158', '198', '18', '2010-11-09', '8', '5', '56520', '16150', '7', '560019', '22', '', '');
INSERT INTO `pesaje` VALUES (10963, '175', '199', '58', '2010-11-09', '9', '24', '51170', '15330', '7', '560019', '22', '', '');
INSERT INTO `pesaje` VALUES (10964, '', '', '80', '2010-11-09', '4', '53', '', '', '32', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10965, '', '', '85', '2010-11-09', '21', '58', '', '', '38', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10966, '175', '200', '86', '2010-11-09', '9', '59', '54190', '16000', '7', '560019', '22', '', '');
INSERT INTO `pesaje` VALUES (10971, '175', '205', '27', '2010-11-09', '9', '28', '34850', '11000', '7', '560019', '22', '', '');
INSERT INTO `pesaje` VALUES (10969, '178', '203', '87', '2010-11-09', '9', '60', '35660', '11000', '7', '560019', '22', '', '');
INSERT INTO `pesaje` VALUES (10970, '175', '204', '46', '2010-11-09', '9', '27', '36540', '11110', '7', '560019', '22', '', '');
INSERT INTO `pesaje` VALUES (10972, '158', '206', '79', '2010-11-09', '6', '51', '37440', '10200', '29', '09-0001', '24', '', '');
INSERT INTO `pesaje` VALUES (10973, '158', '207', '25', '2010-11-09', '6', '47', '35280', '11420', '29', '09-0001', '24', '', '');
INSERT INTO `pesaje` VALUES (10974, '158', '208', '74', '2010-11-09', '6', '48', '36400', '10200', '29', '09-0001', '24', '', '');
INSERT INTO `pesaje` VALUES (10975, '158', '209', '88', '2010-11-09', '22', '61', '19070', '7580', '39', 'Soc. Const.Girasoles', '17', '', '');
INSERT INTO `pesaje` VALUES (10976, '158', '210', '75', '2010-11-09', '6', '49', '35750', '10280', '29', '09-0001', '24', '', '');
INSERT INTO `pesaje` VALUES (10977, '158', '211', '22', '2010-11-09', '6', '50', '35860', '11730', '29', '09-0001', '24', '', '');
INSERT INTO `pesaje` VALUES (10978, '158', '212', '24', '2010-11-09', '6', '11', '36400', '11110', '29', '09-0001', '24', '', '');
INSERT INTO `pesaje` VALUES (10979, '', '', '48', '2010-11-09', '11', '30', '', '', '9', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10980, '158', '213', '12', '2010-11-09', '8', '6', '53400', '16090', '29', '09-0001', '24', '', '');
INSERT INTO `pesaje` VALUES (10981, '158', '216', '89', '2010-11-09', '9', '62', '29210', '9710', '9', '108-006', '8', '', '');
INSERT INTO `pesaje` VALUES (10982, '158', '217', '19', '2010-11-09', '6', '8', '37040', '11110', '9', '108-006', '8', '', '');
INSERT INTO `pesaje` VALUES (10983, '158', '218', '16', '2010-11-09', '7', '9', '40720', '13840', '9', '108-006', '8', '', '');
INSERT INTO `pesaje` VALUES (10984, '158', '219', '10', '2010-11-09', '7', '4', '36600', '10530', '9', '108-006', '8', '', '');
INSERT INTO `pesaje` VALUES (10985, '158', '220', '41', '2010-11-09', '7', '23', '35640', '11000', '9', '108-006', '8', '', '');
INSERT INTO `pesaje` VALUES (10986, '158', '221', '90', '2010-11-09', '9', '63', '36690', '10990', '9', '108-005', '8', '', '');
INSERT INTO `pesaje` VALUES (10987, '158', '200', '91', '2010-11-09', '9', '64', '54190', '16500', '9', '108-005', '8', '', '');
INSERT INTO `pesaje` VALUES (10988, '158', '222', '17', '2010-11-09', '6', '10', '38040', '11260', '9', '108-005', '8', '', '');
INSERT INTO `pesaje` VALUES (10989, '158', '223', '42', '2010-11-09', '6', '12', '38520', '11110', '9', '108-005', '8', '', '');
INSERT INTO `pesaje` VALUES (10990, '', '', '34', '2010-11-09', '11', '18', '', '', '29', '', '', 'si', '');
INSERT INTO `pesaje` VALUES (10991, '', '', '48', '2010-11-09', '11', '30', '', '', '40', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10992, '158', '225', '69', '2010-11-10', '14', '43', '22530', '7580', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (10993, '158', '226', '73', '2010-11-10', '14', '46', '20700', '7270', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (10994, '', '', '47', '2010-11-10', '11', '29', '', '', '29', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10995, '', '', '80', '2010-11-10', '4', '53', '', '', '32', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10996, '158', '227', '18', '2010-11-10', '8', '5', '56980', '16150', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (10997, '158', '228', '72', '2010-11-10', '14', '45', '21940', '7060', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (10998, '', '', '93', '2010-11-10', '6', '66', '', '', '33', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (10999, '158', '229', '92', '2010-11-10', '14', '65', '22940', '7820', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (11000, '158', '232', '12', '2010-11-10', '8', '6', '56900', '16090', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (11362, '158', '244', '87', '2010-11-10', '9', '60', '36790', '11110', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (11363, '158', '244', '46', '2010-11-10', '9', '27', '36790', '11110', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (11364, '158', '245', '42', '2010-11-10', '6', '12', '36300', '11110', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (11351, '158', '233', '71', '2010-11-10', '14', '44', '33180', '10670', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (11352, '158', '233', '71', '2010-11-10', '14', '44', '33180', '10670', '5', '4963', '9', 'si', '');
INSERT INTO `pesaje` VALUES (11353, '158', '234', '68', '2010-11-10', '14', '42', '22040', '7210', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (11354, '', '', '34', '2010-11-10', '11', '18', '', '', '9', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (11355, '158', '235', '59', '2010-11-10', '14', 'Eliga una Opción', '56800', '15920', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (11356, '158', '236', '19', '2010-11-10', '6', '8', '36950', '11110', '29', '09-0001', '24', '', '');
INSERT INTO `pesaje` VALUES (11357, '158', '232', '57', '2010-11-10', 'Eliga una Opción', '36', '56900', '15810', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (11358, '158', '238', '10', '2010-11-10', '7', '4', '36100', '10530', '29', '09-0001', '24', '', '');
INSERT INTO `pesaje` VALUES (11359, '158', '239', '41', '2010-11-10', '7', '23', '34050', '11000', '29', '09-0001', '24', '', '');
INSERT INTO `pesaje` VALUES (11360, '158', '240', '86', '2010-11-10', '9', '59', '54200', '16000', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (11361, '158', '241', '24', '2010-11-10', '6', '11', '36060', '11110', '29', '09-0001', '24', '', '');
INSERT INTO `pesaje` VALUES (11365, '158', '242', '16', '2010-11-10', '7', '9', '38830', '13840', '29', '09-0001', '24', '', '');
INSERT INTO `pesaje` VALUES (11366, '', '', '34', '2010-11-11', '12', '45', '', '', '23', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (11367, '158', '246', '69', '2010-11-11', '14', '43', '22800', '7580', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (11368, '158', '247', '71', '2010-11-11', '14', '44', '31780', '10670', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (11369, '158', '248', '68', '2010-11-11', '14', '42', '22590', '7210', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (11370, '158', '249', '74', '2010-11-11', '6', '48', '36930', '10200', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (11371, '158', '250', '73', '2010-11-11', '14', '46', '20370', '7270', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (11372, '158', '251', '72', '2010-11-11', '14', '45', '21950', '7060', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (11373, '158', '252', '92', '2010-11-11', '14', '65', '23080', '7820', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (11374, '', '', '34', '2010-11-11', '12', '54', '', '', '23', '', '', 'si', '');
INSERT INTO `pesaje` VALUES (11375, '158', '253', '75', '2010-11-11', '6', '49', '36780', '10280', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (11376, '158', '253', '22', '2010-11-11', '6', '50', '36780', '11730', '5', '4963', '9', 'si', '');
INSERT INTO `pesaje` VALUES (11377, '158', '253', '22', '2010-11-11', '6', '50', '36780', '11730', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (11378, '158', '255', '18', '2010-11-11', '8', '5', '57660', '16150', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (11379, '158', '256', '24', '2010-11-11', '6', '11', '37340', '11110', '29', '09-0001', '24', '', '');
INSERT INTO `pesaje` VALUES (11380, '', '', '34', '2010-11-11', '11', '18', '', '', '9', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (11381, '158', '257', '57', '2010-11-11', '14', '36', '55710', '15810', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (11382, '158', '258', '19', '2010-11-11', '6', '8', '37340', '11110', '29', '09-0001', '24', '', '');
INSERT INTO `pesaje` VALUES (11383, '158', '258', '25', '2010-11-11', '6', '47', '37340', '11420', '29', '09-0001', '24', '', '');
INSERT INTO `pesaje` VALUES (11384, '158', '260', '79', '2010-11-11', '6', '51', '37810', '10200', '29', '09-0001', '24', '', '');
INSERT INTO `pesaje` VALUES (11385, '', '', '80', '2010-11-11', '4', '53', '', '', '32', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (11386, '158', '261', '59', '2010-11-11', '14', '37', '56280', '15920', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (11387, '158', '262', '12', '2010-11-11', '8', '6', '57200', '16090', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (11388, '158', '263', '58', '2010-11-11', '9', '24', '51990', '15330', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (11389, '158', '264', '16', '2010-11-11', '7', '9', '41940', '13840', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (11390, '', '', '34', '2010-11-11', '11', '18', '', '', '9', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (11391, '', '', '34', '2010-11-11', '11', '18', '', '', '7', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (11392, '', '', '47', '2010-11-11', '4', '29', '', '', '29', '', '', 'si', '');
INSERT INTO `pesaje` VALUES (11393, '', '', '47', '2010-11-11', '4', '29', '', '', '29', '', '', 'si', '');
INSERT INTO `pesaje` VALUES (11394, '', '', '47', '2010-11-11', '4', '29', '', '', '29', '', '', 'si', '');
INSERT INTO `pesaje` VALUES (11395, '', '', '47', '2010-11-11', '4', '29', '', '', '29', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (11396, '178', '274', '75', '2010-11-12', '6', '49', '36620', '10280', '7', '560019', '22', '', '');
INSERT INTO `pesaje` VALUES (11397, '175', '275', '22', '2010-11-12', '6', '50', '36800', '11730', '7', '560019', '22', '', '');
INSERT INTO `pesaje` VALUES (11398, '175', '275', '22', '2010-11-12', '6', '50', '36800', '11730', '7', '560019', '22', 'si', '');
INSERT INTO `pesaje` VALUES (11399, '175', '276', '24', '2010-11-12', '6', '11', '36450', '11110', '7', '560019', '22', '', '');
INSERT INTO `pesaje` VALUES (11400, '175', '277', '19', '2010-11-12', '6', '8', '36860', '11110', '7', '560019', '22', '', '');
INSERT INTO `pesaje` VALUES (11401, '175', '278', '25', '2010-11-12', '6', '17', '36540', '11420', '7', '560019', '22', '', '');
INSERT INTO `pesaje` VALUES (11402, '175', '279', '79', '2010-11-12', '6', '51', '37140', '10200', '7', '560019', '22', '', '');
INSERT INTO `pesaje` VALUES (11403, '158', '280', '71', '2010-11-12', '14', '44', '30420', '10670', '5', '4963', '9', '', '');
INSERT INTO `pesaje` VALUES (11404, '158', '281', '74', '2010-11-12', '6', '48', '36550', '10200', '29', '09-0001', '24', '', '');
INSERT INTO `pesaje` VALUES (11405, '158', '282', '12', '2010-11-12', '8', '6', '56770', '16090', '29', '09-0001', '24', '', '');
INSERT INTO `pesaje` VALUES (11406, '158', '283', '10', '2010-11-12', '7', '4', '37050', '10530', '29', '09-0001', '24', '', '');
INSERT INTO `pesaje` VALUES (11407, '158', '284', '16', '2010-11-12', '7', '31', '38690', '13840', '29', '09-0001', '24', '', '');
INSERT INTO `pesaje` VALUES (11408, '158', '285', '41', '2010-11-12', '7', '23', '22710', '11000', '29', '09-0001', '24', '', '');
INSERT INTO `pesaje` VALUES (11409, '175', '286', '11', '2010-11-12', '8', '5', '55580', '16150', '7', '560019', '22', '', '');
INSERT INTO `pesaje` VALUES (11410, '175', '289', '58', '2010-11-12', '9', '24', '52080', '15330', '7', '560019', '22', '', '');
INSERT INTO `pesaje` VALUES (11411, '175', '290', '46', '2010-11-12', '9', '27', '23890', '11110', '7', '560019', '22', '', '');
INSERT INTO `pesaje` VALUES (11412, '', '', '94', '2010-11-12', '21', '67', '', '', '38', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (11413, '', '', '93', '2010-11-12', '6', '66', '', '', '33', '', '', 'si', '');
INSERT INTO `pesaje` VALUES (11414, '', '', '48', '2010-11-12', '11', '30', '', '', '40', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (11415, '', '', '95', '2010-11-12', '11', '68', '', '', '9', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (11416, '', '', '95', '2010-11-12', '11', '68', '', '', '41', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (11417, '', '', '80', '2010-11-12', '4', '53', '', '', '32', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (11418, '', '', '34', '2010-11-12', '11', '18', '', '', '42', '', '', '', 'emulsion');
INSERT INTO `pesaje` VALUES (11419, '', '', '96', '2010-11-13', '11', '69', '', '', '9', '', '', '', 'emulsion');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `presupuesto`
-- 

CREATE TABLE `presupuesto` (
  `id` int(11) NOT NULL auto_increment,
  `fecha` date NOT NULL,
  `cliente` varchar(20) NOT NULL,
  `obra` varchar(20) NOT NULL,
  `total_neto` varchar(250) NOT NULL,
  `descuento` varchar(250) NOT NULL,
  `total_descuento` varchar(250) NOT NULL,
  `iva` varchar(250) NOT NULL,
  `total_bruto` varchar(250) NOT NULL,
  `forma_de_pago` varchar(250) NOT NULL,
  `plazo_entrega` varchar(250) NOT NULL,
  `validez_prespuesto` varchar(250) NOT NULL,
  `reajustes` varchar(250) NOT NULL,
  `observaciones` varchar(5000) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=92 ;

-- 
-- Volcar la base de datos para la tabla `presupuesto`
-- 

INSERT INTO `presupuesto` VALUES (91, '2010-11-07', '12', '9', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `presupuesto` VALUES (90, '2010-11-07', '18', '25', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `presupuesto` VALUES (89, '2010-11-07', '17', '21', '8316', '1', '8233', '1564', '9797', '', '', '', '', '');
INSERT INTO `presupuesto` VALUES (88, '2010-11-07', '25', '21', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `presupuesto` VALUES (87, '2010-11-07', '12', '9', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `presupuesto` VALUES (86, '2010-11-07', '25', '21', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `presupuesto` VALUES (85, '2010-11-07', '25', '21', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `presupuesto` VALUES (84, '2010-11-07', '25', '21', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `proveedor`
-- 

CREATE TABLE `proveedor` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(250) NOT NULL,
  `calle` varchar(250) NOT NULL,
  `comuna` varchar(250) NOT NULL,
  `ciudad` varchar(250) NOT NULL,
  `telefono` varchar(250) NOT NULL,
  `rut` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- 
-- Volcar la base de datos para la tabla `proveedor`
-- 

INSERT INTO `proveedor` VALUES (1, 'Gilbert Vivallo Yañez', 'Avda. Cachapoal 651', 'Rancagua', 'Rancagua', '72-321229', '15164369-8', 'henry.vivallo@hotmail.com');
INSERT INTO `proveedor` VALUES (4, 'Aridos Cachapoal Ltda', 'Av Lo Conty 825 Gultro', 'Olivar', 'Rancagua', '584500', '79.993.110-9', '');
INSERT INTO `proveedor` VALUES (5, 'Flores y Kersting S.A', 'Maruri 1048', 'Rancagua', 'Rancagua', '235352', '93720000-5', '');
INSERT INTO `proveedor` VALUES (6, 'Sergio Perez y Cia Ltda', 'Carelmapu 2473 Pedro Aguirre Cerda', 'Santiago', 'Santiago', '5225224', '77423510-8', '');
INSERT INTO `proveedor` VALUES (7, 'Grafica As de Trebol Ltda', 'Av Cachapoal 1189', 'Rancagua', 'Rancagua', '239952', '78768270-7', 'pattytorres@graficasdetrebol.cl');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `transportista`
-- 

CREATE TABLE `transportista` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(250) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

-- 
-- Volcar la base de datos para la tabla `transportista`
-- 

INSERT INTO `transportista` VALUES (6, 'Transvial');
INSERT INTO `transportista` VALUES (4, 'Ecovial Maquinarias Ltda.');
INSERT INTO `transportista` VALUES (7, 'Botacura');
INSERT INTO `transportista` VALUES (8, 'Transportes JC');
INSERT INTO `transportista` VALUES (9, 'Aridos Cachapoal Ltda');
INSERT INTO `transportista` VALUES (10, 'Revestimiento Becat');
INSERT INTO `transportista` VALUES (11, 'Ecovial Ltda.');
INSERT INTO `transportista` VALUES (12, 'Vialidad');
INSERT INTO `transportista` VALUES (13, 'Parthenon S.A.');
INSERT INTO `transportista` VALUES (14, 'Constructora Tafca');
INSERT INTO `transportista` VALUES (15, 'Las Araucarias');
INSERT INTO `transportista` VALUES (16, 'Camino Nuevo');
INSERT INTO `transportista` VALUES (17, 'Soc. Const. Quinguz');
INSERT INTO `transportista` VALUES (18, 'Aridos Rio Maipo');
INSERT INTO `transportista` VALUES (19, 'Petromax');
INSERT INTO `transportista` VALUES (20, 'Mixvial Ltda');
INSERT INTO `transportista` VALUES (21, 'Isabel Muñoz');
INSERT INTO `transportista` VALUES (22, 'Girasoles');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuarios`
-- 

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL auto_increment,
  `nom_comp` varchar(250) NOT NULL,
  `nom_user` varchar(50) NOT NULL,
  `pass_user` varchar(50) NOT NULL,
  `privilegio` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Volcar la base de datos para la tabla `usuarios`
-- 

INSERT INTO `usuarios` VALUES (1, 'Marco Chaura', 'marco', 'marco123', 'AD');
INSERT INTO `usuarios` VALUES (2, 'Benito Gutierrez', 'benito', 'benito123', 'DG');
