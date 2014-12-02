-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2014 a las 23:43:27
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `webgarden`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividadex`
--

CREATE TABLE IF NOT EXISTS `actividadex` (
`idactividadex` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `idcurso` int(11) NOT NULL,
  `idpersona` int(11) NOT NULL,
  `tipo_acti` int(11) NOT NULL,
  `fecha1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `perfilid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
  `identificacion` int(11) NOT NULL,
  `prinombre` varchar(15) NOT NULL,
  `segnombre` varchar(20) DEFAULT NULL,
  `priapellido` varchar(15) NOT NULL,
  `segapellido` varchar(20) DEFAULT NULL,
  `direccion` varchar(15) NOT NULL,
  `desenf` varchar(1000) NOT NULL,
  `retri` varchar(1000) NOT NULL,
  `idruta` int(11) NOT NULL,
  `acudiente` int(11) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `genero` int(11) NOT NULL,
  `idcurso` int(11) NOT NULL,
  `rh` int(11) NOT NULL,
  `tipodoc` int(11) NOT NULL,
  `fecha_naci` date NOT NULL,
  `gruposan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`identificacion`, `prinombre`, `segnombre`, `priapellido`, `segapellido`, `direccion`, `desenf`, `retri`, `idruta`, `acudiente`, `foto`, `genero`, `idcurso`, `rh`, `tipodoc`, `fecha_naci`, `gruposan`) VALUES
(45678923, 'david', 'santiago', 'gordillo', 'vizcaino', 'calle 17 N32-55', 'ninguna', 'ninguna', 2, 99999, 'image/45678923foto3.jpg', 55, 1, 4, 58, '2012-06-12', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
`idcurso` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `idnivel` int(11) NOT NULL,
  `idpersona` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`idcurso`, `nombre`, `idnivel`, `idpersona`) VALUES
(1, 'curso A', 2, 1234);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcaruta`
--

CREATE TABLE IF NOT EXISTS `marcaruta` (
`idmarca` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `marcaruta`
--

INSERT INTO `marcaruta` (`idmarca`, `nombre`) VALUES
(1, 'Renault'),
(11, 'Chevrolet'),
(12, 'suzuki');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE IF NOT EXISTS `nivel` (
`idnivel` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `nivel`
--

INSERT INTO `nivel` (`idnivel`, `nombre`, `descripcion`) VALUES
(1, 'inicial', 'En este nivel se encuentran los niÃƒÂ±os cuyas edades oscilan entre  dos aÃƒÂ±os cumplidos que no han empezado su vida escolar o no tienen ningÃƒÂºn nivel aprobado'),
(2, 'pre-inicial', 'En este nivel encontramos los niÃƒÂ±os cuyas edades estÃƒÂ¡n entre los 2 aÃƒÂ±os cumplidos al iniciar el aÃƒÂ±o escolar y los tres aÃƒÂ±os al finalizar el aÃƒÂ±o lectivo, en este nivel pretendemos que los niÃƒÂ±os y niÃƒÂ±as se socialicen y desarrollen todas sus potencialidades en las diferentes dimensiones, logrando estabilidad emocional, que permita a nuestros pequeÃƒÂ±os en un futuro desenvolverse en nuestra sociedad utilizando como eje central de todas las actividades la lÃƒÂºdica.'),
(3, 'pre-jardin', 'En este nivel se encuentran los niÃƒÂ±os cuyas edades oscilan entre los 3 y los 4 aÃƒÂ±os, este nivel se caracteriza por que niÃƒÂ±os y niÃƒÂ±as inician su proceso para la educaciÃƒÂ³n Pre Escolar Formal, aquÃƒÂ­ se fortalecen procesos cognitivos y psicomotores que favorecen las experiencias significativas.         '),
(4, 'jardin', 'En este nivel se encuentran los niÃƒÂ±os y niÃƒÂ±as cuyas edades oscilan entre los 4 y 5 aÃƒÂ±os de edad, en este nivel se ven reflejados los logros obtenidos en los grados anteriores, empiezan a jugar con letras y nÃƒÂºmeros allÃƒÂ¡ se desarrollan habilidades y destrezas propias de su edad, se enfrentan a retos competitivos a nivel cognitivo y socio cultural.'),
(5, 'transicion', 'En este nivel se encuentran los niÃƒÂ±os cuyas edades oscilan entre los 5 y 6 aÃƒÂ±os de edad en este grado los niÃƒÂ±os aplican todos sus conocimientos de los aÃƒÂ±os anteriores, es aquÃƒÂ­ donde ellos realizan ejercicios de comprensiÃƒÂ³n de lectura, sus trazos ya son claros y definidos, realizan operaciones lÃƒÂ³gico matemÃƒÂ¡ticas, se ven los resultados de niÃƒÂ±os y niÃƒÂ±as seguros e independientes con lo cual logran ser personitas integras y felices que pueden enfrentar su nueva vida escolar sin dificultada.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedad`
--

CREATE TABLE IF NOT EXISTS `novedad` (
`idnovedad` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `iddocente` int(11) NOT NULL,
  `idalumno` int(11) NOT NULL,
  `tiponov` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `perfilid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametro`
--

CREATE TABLE IF NOT EXISTS `parametro` (
`idparametro` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `parametro`
--

INSERT INTO `parametro` (`idparametro`, `nombre`) VALUES
(1, 'genero'),
(2, 'rh'),
(3, 'tipodocalum'),
(4, 'gruposan'),
(5, 'tipodocpers'),
(6, 'tiponove'),
(7, 'tipoactex');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
`idperfil` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`idperfil`, `nombre`) VALUES
(1, 'acudiente'),
(3, 'profesor'),
(4, 'conductor'),
(5, 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `identificacion` int(11) NOT NULL,
  `prinombre` varchar(15) NOT NULL,
  `segnombre` varchar(20) DEFAULT NULL,
  `priapellido` varchar(15) NOT NULL,
  `segapellido` varchar(20) DEFAULT NULL,
  `telefono` varchar(15) NOT NULL,
  `direccion` varchar(15) NOT NULL,
  `foto` varchar(300) DEFAULT NULL,
  `pass` varchar(200) NOT NULL,
  `genero` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tipodoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`identificacion`, `prinombre`, `segnombre`, `priapellido`, `segapellido`, `telefono`, `direccion`, `foto`, `pass`, `genero`, `email`, `tipodoc`) VALUES
(1, 'N/A', 'nunguno', '', 'ninguno', '1111', '11111', '1111', 'erfvedc', 55, '11', 11),
(123, 'admin', 'admin', 'admin', 'admin', '54654', 'calle 14', 'image/123descarga.jpg', '123', 55, 'admin@gmail.com', 24),
(1234, 'carlos', 'andres', 'vargas', 'pinzon', '43242', 'calle 14 ', 'image/1234foto1.jpg', '1234', 55, 'voos16@gmail.com', 25),
(99999, 'Andrea', 'Carolina', 'Ortiz', 'Ortiz', 'telef', 'calle', 'image/99999foto2.jpg', '99999', 2, 'fulanitop@mail.com', 24),
(789456, 'juan', 'carlos', 'perez', 'segundo', '123456', 'calle 15', 'image/perfil.png', '789456', 55, 'choloparise.u.s@hotmail.com', 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perxper`
--

CREATE TABLE IF NOT EXISTS `perxper` (
  `identificacion` int(11) NOT NULL,
  `perfil` int(11) NOT NULL,
`idperxper` int(11) NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Volcado de datos para la tabla `perxper`
--

INSERT INTO `perxper` (`identificacion`, `perfil`, `idperxper`, `activo`) VALUES
(123, 1, 35, 2),
(123, 3, 36, 2),
(123, 4, 37, 2),
(123, 5, 38, 1),
(1234, 1, 39, 2),
(1234, 3, 40, 1),
(1234, 4, 41, 2),
(1234, 5, 42, 2),
(99999, 1, 43, 1),
(99999, 3, 44, 2),
(99999, 4, 45, 2),
(99999, 5, 46, 2),
(789456, 1, 47, 2),
(789456, 3, 48, 2),
(789456, 4, 49, 1),
(789456, 5, 50, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ruta`
--

CREATE TABLE IF NOT EXISTS `ruta` (
`idruta` int(11) NOT NULL,
  `placa` varchar(15) NOT NULL,
  `npuesto` int(11) NOT NULL,
  `idconductor` int(11) NOT NULL,
  `modelo` int(11) NOT NULL,
  `idmarca` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `ruta`
--

INSERT INTO `ruta` (`idruta`, `placa`, `npuesto`, `idconductor`, `modelo`, `idmarca`) VALUES
(1, 'Alumno sin ruta', 0, 1, 0, 1),
(2, 'ASC123', 10, 789456, 1950, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valor`
--

CREATE TABLE IF NOT EXISTS `valor` (
`idvalor` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `idparametro` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Volcado de datos para la tabla `valor`
--

INSERT INTO `valor` (`idvalor`, `nombre`, `idparametro`) VALUES
(2, 'femenino', 1),
(3, '+', 2),
(4, '-', 2),
(5, 'Tarjeta de identidad', 3),
(7, 'A', 4),
(8, 'B', 4),
(9, 'AB', 4),
(10, 'O', 4),
(24, 'CC', 5),
(25, 'CE', 5),
(26, 'TI', 5),
(42, 'citacion', 6),
(44, 'diciplinar', 6),
(45, 'academica', 6),
(46, 'rifa', 7),
(47, 'salida pedagogica', 7),
(48, 'competencia', 7),
(49, 'bazar', 7),
(50, 'curso extracurricular', 7),
(51, 'entrega informes academicos', 7),
(55, 'Masculino', 1),
(57, 'Llamado de atencion', 6),
(58, 'Registro civil', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividadex`
--
ALTER TABLE `actividadex`
 ADD PRIMARY KEY (`idactividadex`), ADD KEY `idcurso` (`idcurso`,`idpersona`), ADD KEY `idpersona` (`idpersona`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
 ADD PRIMARY KEY (`identificacion`), ADD KEY `idruta` (`idruta`,`acudiente`,`idcurso`), ADD KEY `acudiente` (`acudiente`), ADD KEY `idcurso` (`idcurso`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
 ADD PRIMARY KEY (`idcurso`), ADD KEY `idnivel` (`idnivel`), ADD KEY `idpersona` (`idpersona`);

--
-- Indices de la tabla `marcaruta`
--
ALTER TABLE `marcaruta`
 ADD PRIMARY KEY (`idmarca`);

--
-- Indices de la tabla `nivel`
--
ALTER TABLE `nivel`
 ADD PRIMARY KEY (`idnivel`);

--
-- Indices de la tabla `novedad`
--
ALTER TABLE `novedad`
 ADD PRIMARY KEY (`idnovedad`), ADD KEY `idde` (`iddocente`,`idalumno`), ADD KEY `idpara` (`idalumno`), ADD KEY `idalumno` (`idalumno`), ADD KEY `idalumno_2` (`idalumno`);

--
-- Indices de la tabla `parametro`
--
ALTER TABLE `parametro`
 ADD PRIMARY KEY (`idparametro`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
 ADD PRIMARY KEY (`idperfil`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
 ADD PRIMARY KEY (`identificacion`), ADD KEY `idper` (`foto`);

--
-- Indices de la tabla `perxper`
--
ALTER TABLE `perxper`
 ADD PRIMARY KEY (`idperxper`), ADD KEY `identificacion` (`identificacion`,`perfil`), ADD KEY `perfil` (`perfil`);

--
-- Indices de la tabla `ruta`
--
ALTER TABLE `ruta`
 ADD PRIMARY KEY (`idruta`), ADD KEY `idconductor` (`idconductor`), ADD KEY `idmarca` (`idmarca`);

--
-- Indices de la tabla `valor`
--
ALTER TABLE `valor`
 ADD PRIMARY KEY (`idvalor`), ADD KEY `idparametro` (`idparametro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividadex`
--
ALTER TABLE `actividadex`
MODIFY `idactividadex` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
MODIFY `idcurso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `marcaruta`
--
ALTER TABLE `marcaruta`
MODIFY `idmarca` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `nivel`
--
ALTER TABLE `nivel`
MODIFY `idnivel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `novedad`
--
ALTER TABLE `novedad`
MODIFY `idnovedad` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `parametro`
--
ALTER TABLE `parametro`
MODIFY `idparametro` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
MODIFY `idperfil` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `perxper`
--
ALTER TABLE `perxper`
MODIFY `idperxper` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `ruta`
--
ALTER TABLE `ruta`
MODIFY `idruta` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `valor`
--
ALTER TABLE `valor`
MODIFY `idvalor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividadex`
--
ALTER TABLE `actividadex`
ADD CONSTRAINT `actividadex_ibfk_1` FOREIGN KEY (`idcurso`) REFERENCES `curso` (`idcurso`),
ADD CONSTRAINT `actividadex_ibfk_2` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`identificacion`);

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`idruta`) REFERENCES `ruta` (`idruta`),
ADD CONSTRAINT `alumno_ibfk_2` FOREIGN KEY (`acudiente`) REFERENCES `persona` (`identificacion`),
ADD CONSTRAINT `alumno_ibfk_3` FOREIGN KEY (`idcurso`) REFERENCES `curso` (`idcurso`);

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`idnivel`) REFERENCES `nivel` (`idnivel`),
ADD CONSTRAINT `curso_ibfk_2` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`identificacion`);

--
-- Filtros para la tabla `novedad`
--
ALTER TABLE `novedad`
ADD CONSTRAINT `novedad_ibfk_1` FOREIGN KEY (`iddocente`) REFERENCES `persona` (`identificacion`),
ADD CONSTRAINT `novedad_ibfk_2` FOREIGN KEY (`idalumno`) REFERENCES `alumno` (`identificacion`);

--
-- Filtros para la tabla `perxper`
--
ALTER TABLE `perxper`
ADD CONSTRAINT `perxper_ibfk_1` FOREIGN KEY (`identificacion`) REFERENCES `persona` (`identificacion`),
ADD CONSTRAINT `perxper_ibfk_2` FOREIGN KEY (`perfil`) REFERENCES `perfil` (`idperfil`);

--
-- Filtros para la tabla `ruta`
--
ALTER TABLE `ruta`
ADD CONSTRAINT `ruta_ibfk_1` FOREIGN KEY (`idconductor`) REFERENCES `persona` (`identificacion`),
ADD CONSTRAINT `ruta_ibfk_2` FOREIGN KEY (`idmarca`) REFERENCES `marcaruta` (`idmarca`);

--
-- Filtros para la tabla `valor`
--
ALTER TABLE `valor`
ADD CONSTRAINT `valor_ibfk_1` FOREIGN KEY (`idparametro`) REFERENCES `parametro` (`idparametro`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
