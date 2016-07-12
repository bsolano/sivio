CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `fecha_de_nacimiento` date DEFAULT NULL,
  `estado_civil` varchar(15) DEFAULT NULL,
  `escolaridad` varchar(25) DEFAULT NULL,
  `atencion_especializada` varchar(45) DEFAULT NULL,
  `nacionalidad` varchar(45) DEFAULT NULL,
  `genero` char(1) DEFAULT NULL,
  `ocupacion` varchar(50) DEFAULT NULL,
  `lugar_trabajo` varchar(350) DEFAULT NULL,
  `adicciones` varchar(45) DEFAULT NULL,
  `condicion_migratoria` varchar(45) DEFAULT NULL,
  `condicion_laboral` varchar(15) DEFAULT NULL,
  `experiencia_laboral` tinyint(1) DEFAULT NULL,
  `condicion_aseguramiento` varchar(45) DEFAULT NULL,
  `vivienda` varchar(45) DEFAULT NULL,
  `tipo_familia` varchar(45) DEFAULT NULL,
  `embarazo` int(11) DEFAULT NULL,
  `condicion_salud` varchar(200) DEFAULT NULL,
  `identificacion` int(11) DEFAULT NULL,
  `tipo_identificacion` varchar(45) DEFAULT NULL,
  `telefono` varchar(8) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `num_de_hijos` int(11) DEFAULT NULL,
  `provincia` varchar(45) DEFAULT NULL,
  `canton` varchar(45) DEFAULT NULL,
  `direccion` text,
  `hijos_mayor_doce` tinyint(1) DEFAULT NULL,
  `num_hijos_ceaam` int(11) NOT NULL,
  `num_familia` varchar(10) NOT NULL,
  `rol_familia` varchar(25) NOT NULL,
  `acepta_seguimiento` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

--en caso de actualizar, eliminar y crear. 
drop trigger people.copiar_tabla;
delimiter //
CREATE TRIGGER `copiar_tabla` AFTER UPDATE ON people
FOR EACH ROW BEGIN
--agregar en el insert los campos que se hayan agregado a people, al final de los values para mantener la consistencia. 
   insert into `logs`(
		`person_id`, `nombre`, `apellidos`, `fecha_de_nacimiento`, `estado_civil`, 
		`escolaridad`, `nacionalidad`, `genero`, `ocupacion`,  `lugar_trabajo`, `adicciones`,
		`condicion_migratoria`, `condicion_laboral`, `experiencia_laboral`, `condicion_aseguramiento`,
		`vivienda`, `tipo_familia`, `embarazo`, `condicion_salud`, `identificacion`, `tipo_identificacion`,
		`telefono`, `edad`, `num_de_hijos`, `direccion_oculta`,  `provincia`,`canton`, `direccion`, 
		`hijos_mayor_doce`, `num_hijos_ceaam`, `num_familia`, `rol_familia`, `acepta_seguimiento`,
		`atencion_especializada`,  `es_agresor`
	)
   select *
   from people
   where id = NEW.id;
END;
//
delimiter ;

drop trigger people.copiar_tabla_insert;
delimiter //
CREATE TRIGGER `copiar_tabla_insert` AFTER INSERT ON people
FOR EACH ROW BEGIN
--agregar en el insert los campos que se hayan agregado a people, al final de los values para mantener la consistencia. 
   insert into `logs`(
		`person_id`, `nombre`, `apellidos`, `fecha_de_nacimiento`, `estado_civil`, 
		`escolaridad`, `nacionalidad`, `genero`, `ocupacion`,  `lugar_trabajo`, `adicciones`,
		`condicion_migratoria`, `condicion_laboral`, `experiencia_laboral`, `condicion_aseguramiento`,
		`vivienda`, `tipo_familia`, `embarazo`, `condicion_salud`, `identificacion`, `tipo_identificacion`,
		`telefono`, `edad`, `num_de_hijos`, `direccion_oculta`,  `provincia`,`canton`, `direccion`, 
		`hijos_mayor_doce`, `num_hijos_ceaam`, `num_familia`, `rol_familia`, `acepta_seguimiento`,
		`atencion_especializada`,  `es_agresor`
	)
   select *
   from people
   where id = NEW.id;
END;
//
delimiter ;