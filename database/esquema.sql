-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-10-2014 a las 18:52:45
-- Versión del servidor: 5.6.19-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `santiago`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
  `documento` int(11) NOT NULL,
  `legajo` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`documento`),
  UNIQUE KEY `legajo` (`legajo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`documento`, `legajo`) VALUES
(23456789, 'DFR456'),
(45678900, 'ERT123'),
(28456982, 'GOY589'),
(20670089, 'HTP889'),
(26568987, 'LOI569'),
(36650929, 'PMR325'),
(31504948, 'POO986'),
(20555664, 'TTN188');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE IF NOT EXISTS `asistencia` (
  `comision` int(11) DEFAULT NULL,
  `alumno` int(11) DEFAULT NULL,
  `clase` int(11) DEFAULT NULL,
  `id_asistencia` int(11) NOT NULL AUTO_INCREMENT,
  `presente` tinyint(1) DEFAULT NULL,
  `justificada` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_asistencia`),
  KEY `fk_comisionAsistencia` (`comision`),
  KEY `fk_AlumnoAsistencia` (`alumno`),
  KEY `fk_clase` (`clase`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE IF NOT EXISTS `carrera` (
  `id_carrera` varchar(3) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id_carrera`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id_carrera`, `nombre`) VALUES
('ENF', 'Tenicatura en Enferemería'),
('RED', 'Tecnicatura en Redes'),
('SFW', 'Tenicatura en Software');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clase`
--

CREATE TABLE IF NOT EXISTS `clase` (
  `id_clase` int(11) NOT NULL AUTO_INCREMENT,
  `obligatorio` tinyint(1) DEFAULT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL,
  `aula` text NOT NULL,
  `dictada` tinyint(1) DEFAULT NULL,
  `recuperatoria_de` int(11) DEFAULT NULL,
  `comision` int(11) DEFAULT NULL,
  `profesor` int(11) DEFAULT NULL,
  `hora_ingreso_profesor` time DEFAULT NULL,
  `hora_salida_profesor` time DEFAULT NULL,
  PRIMARY KEY (`id_clase`),
  KEY `fk_comisionClase` (`comision`),
  KEY `fk_recuperatoria_de` (`recuperatoria_de`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comision`
--

CREATE TABLE IF NOT EXISTS `comision` (
  `id_comision` int(11) NOT NULL AUTO_INCREMENT,
  `carrera` varchar(3) NOT NULL,
  `materia` int(11) NOT NULL,
  `anio` int(11) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_comision`),
  UNIQUE KEY `unq_comision` (`carrera`,`materia`,`anio`,`numero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comision_alumno`
--

CREATE TABLE IF NOT EXISTS `comision_alumno` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `comision` int(11) NOT NULL,
  `alumno` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursada`
--

CREATE TABLE IF NOT EXISTS `cursada` (
  `id_carrera` varchar(3) NOT NULL,
  `materia` int(11) NOT NULL,
  `anio` int(11) NOT NULL DEFAULT '0',
  `f_inicio` date NOT NULL,
  `f_fin` date NOT NULL,
  `cuatrimestre` int(11) DEFAULT NULL,
  `porc_asistencia` double NOT NULL,
  PRIMARY KEY (`id_carrera`,`materia`,`anio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
  `id_carrera` varchar(3) NOT NULL,
  `codigo_materia` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `anio` int(11) DEFAULT NULL,
  `cuatrimestre` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_carrera`,`codigo_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id_carrera`, `codigo_materia`, `nombre`, `anio`, `cuatrimestre`) VALUES
('ENF', 1, 'Fundamentos de enfermería', 1, 1),
('ENF', 2, 'Física y química biológica', 1, 1),
('ENF', 3, 'Anatomía y fisiología', 1, 1),
('ENF', 4, 'Nutrición', 1, 2),
('ENF', 5, 'Psicología general y evolutiva', 1, 2),
('ENF', 6, 'Nutrición', 1, 2),
('ENF', 7, 'Biosetadística y epidemiología', 1, 2),
('ENF', 8, 'Enfermería del adulto y del anciano', 2, 1),
('ENF', 9, 'Psicología social', 2, 1),
('ENF', 10, 'Farmacología', 2, 1),
('ENF', 11, 'Dietoterapia', 2, 2),
('ENF', 12, 'Enfermería en salud mental y psiquiatría', 2, 2),
('ENF', 13, 'Computación aplicada', 2, 2),
('ENF', 14, 'Enfermería materno-infantil y del adolescente', 3, 1),
('ENF', 15, 'Inglés', 3, 1),
('ENF', 16, 'Enfermería ética y legal', 3, 1),
('ENF', 17, 'Antropología', 3, 2),
('ENF', 18, 'Enfermería en salud comunitaria', 3, 2),
('RED', 1, 'Expresión y comunicación', 1, 1),
('RED', 2, 'Inglés I', 1, 1),
('RED', 3, 'Matemática aplicada I', 1, 1),
('RED', 4, 'Arquitectura de computadoras I', 1, 1),
('RED', 5, 'Electrónica I', 1, 1),
('RED', 6, 'Física para las telecomunicaciones', 1, 1),
('RED', 7, 'Programación I', 1, 1),
('RED', 8, 'Sistemas operativos I', 1, 2),
('RED', 9, 'Programación II', 1, 2),
('RED', 10, 'Arquitectura de computadoras II', 1, 2),
('RED', 11, 'Física para las telecomunicaciones II', 1, 2),
('RED', 12, 'Legislación de las comunicaciones', 2, 1),
('RED', 13, 'Talleres de tecnología aplicada', 2, 1),
('RED', 14, 'Matemática aplicada II', 2, 1),
('RED', 15, 'Programación III', 2, 1),
('RED', 16, 'Redes', 2, 1),
('RED', 17, 'Electrónica II', 2, 1),
('RED', 18, 'Arquitectura de computadoras III', 2, 1),
('RED', 19, 'Sistemas operativos II', 2, 1),
('RED', 20, 'Gestión y administración empresarial', 2, 2),
('RED', 21, 'Tratamiento de señal', 2, 2),
('RED', 22, 'Equipos y medios de transmisión I', 2, 2),
('RED', 23, 'Actualización tecnológica I', 2, 2),
('RED', 24, 'Transmisión de datos I', 2, 2),
('RED', 25, 'Actualización tecnológica II', 3, 1),
('RED', 26, 'Transmisión de datos II', 3, 1),
('RED', 27, 'Redes de alta velocidad', 3, 1),
('RED', 28, 'Sistemas telefónicos', 3, 1),
('RED', 29, 'Ingeniería de protocolos', 3, 2),
('RED', 30, 'Equipos y medios de transmisión II', 3, 2),
('RED', 31, 'Sistemas operativos III', 3, 2),
('SFW', 1, 'Introducción a la programación', 1, 1),
('SFW', 2, 'Laboratorio de programación', 1, 1),
('SFW', 3, 'Matemática aplicada I', 1, 1),
('SFW', 4, 'Inglés I', 1, 1),
('SFW', 5, 'Técnicas avanzadas de programación', 1, 2),
('SFW', 6, 'Estructura de datos y algoritmos', 1, 2),
('SFW', 7, 'Paradigmans de programación', 1, 2),
('SFW', 8, 'Matématica aplicada II', 1, 2),
('SFW', 9, 'Inglés II', 1, 2),
('SFW', 10, 'Laboratorio Avanzado de Programación II', 2, 1),
('SFW', 11, 'Bases de datos I', 2, 1),
('SFW', 12, 'Programación web I', 2, 1),
('SFW', 13, 'Redes y seguridad informática', 2, 1),
('SFW', 14, 'Ingeniería de software', 2, 2),
('SFW', 15, 'Programación web II', 2, 2),
('SFW', 16, 'Bases de datos II', 2, 2),
('SFW', 17, 'Gestión de proyectos de software', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `f_nacimiento` date DEFAULT NULL,
  `direccion` varchar(100) NOT NULL,
  `documento` int(11) NOT NULL,
  PRIMARY KEY (`documento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`nombre`, `apellido`, `f_nacimiento`, `direccion`, `documento`) VALUES
('Pancrasio', 'Garcia', '1945-05-01', 'Callecita 123', 12428953),
('Pablo', 'Carro', '1980-06-20', 'parque mitre 22', 20555664),
('Moises', 'Vilca', '2060-10-10', '25 de mayo 222', 20670089),
('Tito', 'Lopez', '2000-11-04', 'acapulco 244', 20693300),
('Pedro', 'Sanchez', '1987-01-15', 'torraco 445', 20995500),
('Javier', 'Yañez', '1984-06-15', 'Av. Lista 543', 23456789),
('Rupert', 'Huenchuquir', '1988-07-22', 'Florecio Raminnetti 851', 26568987),
('Especulapio', 'Nuñez', '1985-06-17', '25 de mayo 658', 28456982),
('Iuliano', 'Gelvez', '1985-08-22', 'Florentino Ameghino 251', 31504948),
('Lahermenegilda', 'Delpueblo', '1988-01-09', 'Vivalaseñora 845', 32654987),
('Dario', 'Guzman', '1989-01-01', 'Av. Manuel 90', 35456789),
('Fernando', 'Valdebenito', '1992-04-07', 'Cannito 425', 36650929),
('Ximena', 'Gutierres', '1987-01-17', 'Av. Coronel 1234', 45678900),
('Rupertinski', 'Galadrianno', '1988-01-05', 'Alavuelta Delaezquina 871', 48789654),
('Lexa', 'Gomez', '1960-12-30', 'Av. Camero 58', 98765436);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE IF NOT EXISTS `profesor` (
  `documento` int(11) NOT NULL,
  PRIMARY KEY (`documento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`documento`) VALUES
(12428953),
(20693300),
(20995500),
(32654987),
(35456789),
(48789654),
(98765436);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prof_comision`
--

CREATE TABLE IF NOT EXISTS `prof_comision` (
  `profesor` int(11) NOT NULL,
  `id_comision` int(11) NOT NULL AUTO_INCREMENT,
  `f_desde` date NOT NULL,
  `f_hasta` date NOT NULL,
  PRIMARY KEY (`profesor`,`id_comision`,`f_desde`),
  KEY `fk_comision` (`id_comision`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `fk_docAlumno` FOREIGN KEY (`documento`) REFERENCES `persona` (`documento`);

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `fk_comisionAsistencia` FOREIGN KEY (`comision`) REFERENCES `comision` (`id_comision`),
  ADD CONSTRAINT `fk_AlumnoAsistencia` FOREIGN KEY (`alumno`) REFERENCES `alumno` (`documento`),
  ADD CONSTRAINT `fk_clase` FOREIGN KEY (`clase`) REFERENCES `clase` (`id_clase`);

--
-- Filtros para la tabla `clase`
--
ALTER TABLE `clase`
  ADD CONSTRAINT `fk_comisionClase` FOREIGN KEY (`comision`) REFERENCES `comision` (`id_comision`),
  ADD CONSTRAINT `fk_recuperatoria_de` FOREIGN KEY (`recuperatoria_de`) REFERENCES `clase` (`id_clase`);

--
-- Filtros para la tabla `comision`
--
ALTER TABLE `comision`
  ADD CONSTRAINT `fk_comisionCarrera` FOREIGN KEY (`carrera`, `materia`, `anio`) REFERENCES `cursada` (`id_carrera`, `materia`, `anio`);

--
-- Filtros para la tabla `cursada`
--
ALTER TABLE `cursada`
  ADD CONSTRAINT `fk_cursada` FOREIGN KEY (`id_carrera`, `materia`) REFERENCES `materia` (`id_carrera`, `codigo_materia`);

--
-- Filtros para la tabla `materia`
--
ALTER TABLE `materia`
  ADD CONSTRAINT `fk_materia` FOREIGN KEY (`id_carrera`) REFERENCES `carrera` (`id_carrera`);

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `fk_documento` FOREIGN KEY (`documento`) REFERENCES `persona` (`documento`);

--
-- Filtros para la tabla `prof_comision`
--
ALTER TABLE `prof_comision`
  ADD CONSTRAINT `fk_profesor` FOREIGN KEY (`profesor`) REFERENCES `profesor` (`documento`),
  ADD CONSTRAINT `fk_comision` FOREIGN KEY (`id_comision`) REFERENCES `comision` (`id_comision`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
