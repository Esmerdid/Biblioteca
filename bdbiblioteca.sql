-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2018 a las 19:59:15
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdbiblioteca`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizardevolucion` (IN `iddev` INT, IN `idlec` INT, IN `idlib` INT, IN `idpres` INT, IN `fecdev` DATE, IN `recib` VARCHAR(20))  UPDATE devolucion set  Iddevolucion=iddev,Idlector=idlec,Idlibro=idlib,Idprestamo=idpres,fecdevolucion=fecdev,recibido=recib WHERE Iddevolucion=iddev$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarlector` (IN `idlec` INT, IN `nomlec` VARCHAR(20), IN `apelec` VARCHAR(20), IN `tipo` VARCHAR(2), IN `cc` INT, IN `dire` VARCHAR(20), IN `numtel` VARCHAR(20), IN `email` VARCHAR(20))  UPDATE lectores set Idlector=idlec,nomlector=nomlec,apelector=apelec,tipoDoc=tipo,identificacion=cc,direccion=dire,numcontac=numtel,correo=email  WHERE Idlector=idlec$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarlibro` (IN `idlib` INT, IN `nomlib` VARCHAR(30), IN `gen` VARCHAR(40), IN `ejem` INT)  UPDATE libros SET Idlibro = idlib, nomlibro = nomlib, genero = gen, Ejemplares = ejem WHERE idlibro = idlib$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarlibro_edit_autor` (IN `idlib` INT, IN `idedit` INT, IN `idaut` INT)  NO SQL
UPDATE libro_edit_autor SET Idlibro = idlib, Ideditorial = idedit, Idautor = idaut WHERE Idlibro = idlib$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarprestamo` (IN `idpres` INT, IN `idlec` INT, IN `idusu` INT, IN `idlib` INT, IN `fecpres` DATE)  UPDATE prestamos set Idprestamo=idpres,Idlector=idlec,Idusuario=Idusu,Idlibr=idlib,fecprestamo=fecpres WHERE Idprestamo=idpres$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarusuario` (IN `idusu` INT, IN `idper` INT, IN `nomusu` VARCHAR(20), IN `apelusu` VARCHAR(20))  UPDATE usuarios set Idusuario=idusu,Idperfil=idper,Nomusuario=nomusu,apeusu=apelusu WHERE Idusuario=idusu$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `borrardevolucion` (IN `iddev` INT)  DELETE FROM devolucion where Iddevolucion=iddev$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `borrarlector` (IN `idlec` INT)  DELETE FROM lectores where Idlector=idlec$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `borrarlibro` (IN `idlib` INT)  NO SQL
DELETE FROM libros where Idlibro=idlib$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `borrarLibro_edit_autor` (IN `idLib` INT)  NO SQL
DELETE FROM libro_edit_autor WHERE Idlibro=idLib$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `borrarprestamo` (IN `idpres` INT)  DELETE FROM prestamos where Idprestamo=idpres$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `borrarusuario` (IN `idusu` INT)  DELETE FROM usuarios where Idusuario=idusu$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultardevolucion` ()  SELECT * FROM devolucion$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultarLector` ()  NO SQL
SELECT * FROM lectores$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultarLectorLike` (IN `apellido` VARCHAR(20))  SELECT * FROM lectores WHERE apelector LIKE CONCAT ('%',apellido,'%')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultarLibro` ()  SELECT * FROM libros$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultarprestamo` ()  SELECT * FROM prestamos$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultarusuario` (IN `user` VARCHAR(20), IN `pass` VARCHAR(25))  SELECT * FROM usuarios WHERE usuario = user AND passwordusu = pass$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `creardevolucion` (IN `idlec` INT, IN `idlib` INT, IN `idpres` INT, IN `fecdev` DATE)  insert into devolucion (Idlector,Idlibro,Idprestamo,fecdevolucion)VALUES (idlec,idlib,Idpres,fecdev)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crearlector` (IN `nomlec` VARCHAR(20), IN `apelec` VARCHAR(20), IN `tipo` VARCHAR(2), IN `cc` VARCHAR(20), IN `dire` VARCHAR(20), IN `numtel` VARCHAR(20), IN `email` VARCHAR(30))  insert into lectores (nomlector,apelector,tipoDoc,identificacion,direccion,numcontac,correo)VALUES (nomlec,apelec,tipo,cc,dire,numtel,email)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crearlibro` (IN `id` INT, IN `nomlib` VARCHAR(30), IN `gen` VARCHAR(40), IN `ejemp` INT)  NO SQL
insert into libros(IdLibro,nomlibro,genero,Ejemplares)VALUES (id,nomlib,gen,ejemp)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crearLibro_edit_autor` (IN `idLib` INT(11), IN `idEdit` INT(11), IN `idAut` INT(11))  NO SQL
insert into libro_edit_autor(Idlibro,Ideditorial,Idautor)VALUES (idLib,idEdit,idAut)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crearprestamo` (IN `idlec` INT, IN `idusu` INT, IN `idlib` INT, IN `fecpres` DATE, IN `stdo` VARCHAR(20))  insert into prestamos(Idlector,idusuario,idlibro,fecprestamo,estado)VALUES (idlec,idusu,idlib,fecpres,stdo)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crearusuario` (IN `idusu` INT, IN `idper` INT, IN `nomusu` VARCHAR(20), IN `apelusu` VARCHAR(20))  insert into prestamos(idusuario,idperfil,nomususario,apeusu)VALUES (idusu,idper,nomusu,apelusu)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `Idautor` int(11) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Apellido` varchar(20) DEFAULT NULL,
  `Nacionalidad` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`Idautor`, `Nombre`, `Apellido`, `Nacionalidad`) VALUES
(1, 'María', 'Seoane', 'Colombiano'),
(2, 'Rosana', 'Guber', 'Español'),
(3, 'Sibila', 'Camps', 'Inglesa'),
(4, 'Pablo', 'de Santis', 'Italiano'),
(5, 'María Hortencia', 'Lacau', 'Colombiana'),
(6, 'Ana', 'Strupp', 'Inglesa'),
(7, 'Mempo', 'Giardinelli', 'Italiano'),
(8, 'Juan', 'Forn', 'Estadounidense'),
(9, 'Orlando', 'Barone', 'Colombiano'),
(10, 'María Rosa', 'Lojo', 'Española'),
(11, 'Jorge', 'Castelli', 'Español'),
(12, 'Marco Tulio', 'Aguilera', 'Mexicano'),
(13, 'Magdalena', 'Ruiz Guiñazú', 'Mexicano'),
(14, 'César Luis', 'Díaz', 'Colombiano'),
(15, 'Juan', 'Carr', 'Ingles'),
(16, 'Yanina', 'Kinigsberg', 'Alemana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devolucion`
--

CREATE TABLE `devolucion` (
  `Iddevolucion` int(11) NOT NULL,
  `Idlector` int(11) NOT NULL,
  `Idlibro` int(11) NOT NULL,
  `Idprestamo` int(11) NOT NULL,
  `fecdevolucion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `devolucion`
--

INSERT INTO `devolucion` (`Iddevolucion`, `Idlector`, `Idlibro`, `Idprestamo`, `fecdevolucion`) VALUES
(1, 1, 1, 1, '2018-05-09'),
(2, 1, 3, 2, '2018-05-08'),
(3, 11, 7, 4, '2018-05-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editoriales`
--

CREATE TABLE `editoriales` (
  `Ideditorial` int(11) NOT NULL,
  `Nomeditorial` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `editoriales`
--

INSERT INTO `editoriales` (`Ideditorial`, `Nomeditorial`) VALUES
(1, 'ALIENTA EDITORIAL'),
(2, 'AUSTRAL'),
(3, 'BACKLIST'),
(4, 'BOOKET'),
(5, 'CLICK EDICIONES'),
(6, 'DESTINO INFANTIL & J'),
(7, 'EDICIONES CORÍN TELL'),
(8, 'EDICIONES DESTINO'),
(9, 'EDICIONES LUCIÉRNAGA'),
(10, 'EDICIONES MARTÍNEZ R'),
(11, 'EDICIONES ONIRO'),
(12, 'EDITORIAL PLANETA'),
(13, 'EDITORIAL CRÍTICA'),
(14, 'PLANETALECTOR'),
(15, 'SALSA BOOKS'),
(16, 'PARA DUMMIES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lectores`
--

CREATE TABLE `lectores` (
  `Idlector` int(11) NOT NULL,
  `nomlector` varchar(20) NOT NULL,
  `apelector` varchar(20) NOT NULL,
  `tipoDoc` varchar(2) NOT NULL,
  `identificacion` varchar(20) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `numcontac` varchar(20) NOT NULL,
  `correo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lectores`
--

INSERT INTO `lectores` (`Idlector`, `nomlector`, `apelector`, `tipoDoc`, `identificacion`, `direccion`, `numcontac`, `correo`) VALUES
(1, 'Andrea Carolina', 'Marchena', 'CE', '657', 'HRA 50', '987654', 'andre@gmail.com'),
(2, 'Saskia', 'Duran Herrera', '', '321411', 'calle 10B # 11-02', '456678', 'sasduran@gmail.com'),
(9, 'Xiomara', 'Del valle', 'CC', '120987', 'CALLE 10', '4567', 'xiomy.delvalle@gmail'),
(10, 'Marlon ', 'Anguila', 'CC', '25678', 'Calle 10D  # 11-20', '33322255', 'vicky@hotmail.com'),
(11, 'Marcos', 'Badillo Salcedo', 'CC', '789652', 'Kra 51B # 10 - 10', '12345', 'mark@yahoo.com'),
(12, 'Stephania', 'De Castro', 'TI', '900421590', 'Calle 21 # 8 -04', '1111', 'stephy@hotmail.com'),
(13, 'Micaela', 'Viloria Vasquez', 'CC', '90042159025', 'calle 10 # 11-235', '3096381', 'miquivoloira@outlook.com'),
(14, 'Pedro ', 'Rodriguez', 'CC', '98765', 'Clle 32 # 20-56', '56789', 'pedro.rodriguez@yahoo.es'),
(28, 'Esmerdi', 'Duran Del valle', 'CC', '12345', 'calle 8', '12345', 'emdurand@yahoo.es'),
(37, '', '', 'CC', '', '', '', ''),
(40, 'a', 'a', 'CC', '52', 'a', '5', 'a@yahoo.es'),
(41, 'a', 'a', 'CC', '65', 'a', '5', 'e2@hay.es'),
(55, 'u', 'u', 'CC', '5', 'u', '5', 'u@u.u');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `Idlibro` int(11) NOT NULL,
  `nomlibro` varchar(40) DEFAULT NULL,
  `genero` varchar(40) DEFAULT NULL,
  `Ejemplares` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`Idlibro`, `nomlibro`, `genero`, `Ejemplares`) VALUES
(1, 'El poder del pueblo', 'Política', 3),
(2, 'El hombre hormiga', 'Artículo', 9),
(3, 'Steve Jobs', 'Biografía', 2),
(4, 'Face to Face', 'Artículo', 1),
(5, 'Ecosistemas', 'Ciencias básicas', 5),
(6, 'Milenio I', 'Ciencias básicas', 9),
(7, 'Milenio II', 'Ciencias básicas', 12),
(8, 'El socialismo', 'Política', 5),
(9, 'Hágase Rico ', 'Economía', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro_edit_autor`
--

CREATE TABLE `libro_edit_autor` (
  `Idlibro` int(11) NOT NULL,
  `Ideditorial` int(11) NOT NULL,
  `Idautor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libro_edit_autor`
--

INSERT INTO `libro_edit_autor` (`Idlibro`, `Ideditorial`, `Idautor`) VALUES
(2, 7, 5),
(1, 12, 14),
(3, 14, 13),
(4, 7, 5),
(5, 12, 15),
(6, 14, 9),
(7, 14, 9),
(8, 1, 7),
(9, 13, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `Idperfil` int(11) NOT NULL,
  `Nomperfil` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`Idperfil`, `Nomperfil`) VALUES
(1, 'Administrador'),
(2, 'Bibliotecario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `Idprestamo` int(11) NOT NULL,
  `Idlector` int(11) NOT NULL,
  `Idusuario` int(11) NOT NULL,
  `Idlibro` int(11) NOT NULL,
  `fecprestamo` date NOT NULL,
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`Idprestamo`, `Idlector`, `Idusuario`, `Idlibro`, `fecprestamo`, `estado`) VALUES
(1, 1, 1, 1, '2018-05-08', 'RECIBIDO'),
(2, 1, 1, 3, '2018-05-08', 'RECIBIDO'),
(3, 10, 1, 6, '2018-05-08', 'PRESTADO'),
(4, 11, 1, 7, '2018-05-08', 'RECIBIDO'),
(5, 9, 1, 4, '2018-05-08', 'PRESTADO'),
(6, 12, 1, 2, '2018-05-07', 'PRESTADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Idusuario` int(11) NOT NULL,
  `Idperfil` int(11) DEFAULT NULL,
  `Nomusuario` varchar(20) DEFAULT NULL,
  `Apeusu` varchar(20) DEFAULT NULL,
  `identificacion` varchar(20) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `passwordusu` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Idusuario`, `Idperfil`, `Nomusuario`, `Apeusu`, `identificacion`, `usuario`, `passwordusu`) VALUES
(1, 2, 'Esmerdi ', 'Duran', '1044425763', 'esmerdyd', '12345'),
(2, 1, 'Marco', 'Badillo', '1044425123', 'marcobd', '0101');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`Idautor`);

--
-- Indices de la tabla `devolucion`
--
ALTER TABLE `devolucion`
  ADD PRIMARY KEY (`Iddevolucion`),
  ADD KEY `Idlector` (`Idlector`),
  ADD KEY `Idlibro` (`Idlibro`),
  ADD KEY `Idprestamo` (`Idprestamo`);

--
-- Indices de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  ADD PRIMARY KEY (`Ideditorial`);

--
-- Indices de la tabla `lectores`
--
ALTER TABLE `lectores`
  ADD PRIMARY KEY (`Idlector`),
  ADD UNIQUE KEY `identificacion` (`identificacion`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`Idlibro`);

--
-- Indices de la tabla `libro_edit_autor`
--
ALTER TABLE `libro_edit_autor`
  ADD KEY `Idlibro` (`Idlibro`),
  ADD KEY `Ideditorial` (`Ideditorial`),
  ADD KEY `Idautor` (`Idautor`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`Idperfil`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`Idprestamo`),
  ADD KEY `Idlector` (`Idlector`),
  ADD KEY `Idusuario` (`Idusuario`),
  ADD KEY `Idlibro` (`Idlibro`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Idusuario`),
  ADD UNIQUE KEY `identificacion` (`identificacion`),
  ADD UNIQUE KEY `cedula` (`Idperfil`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autores`
--
ALTER TABLE `autores`
  MODIFY `Idautor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `devolucion`
--
ALTER TABLE `devolucion`
  MODIFY `Iddevolucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  MODIFY `Ideditorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `lectores`
--
ALTER TABLE `lectores`
  MODIFY `Idlector` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `Idprestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `devolucion`
--
ALTER TABLE `devolucion`
  ADD CONSTRAINT `devolucion_ibfk_1` FOREIGN KEY (`Idlector`) REFERENCES `lectores` (`Idlector`),
  ADD CONSTRAINT `devolucion_ibfk_2` FOREIGN KEY (`Idlibro`) REFERENCES `libros` (`Idlibro`),
  ADD CONSTRAINT `devolucion_ibfk_3` FOREIGN KEY (`Idprestamo`) REFERENCES `prestamos` (`Idprestamo`);

--
-- Filtros para la tabla `libro_edit_autor`
--
ALTER TABLE `libro_edit_autor`
  ADD CONSTRAINT `libro_edit_autor_ibfk_1` FOREIGN KEY (`Idlibro`) REFERENCES `libros` (`Idlibro`),
  ADD CONSTRAINT `libro_edit_autor_ibfk_2` FOREIGN KEY (`Ideditorial`) REFERENCES `editoriales` (`Ideditorial`),
  ADD CONSTRAINT `libro_edit_autor_ibfk_3` FOREIGN KEY (`Idautor`) REFERENCES `autores` (`Idautor`);

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `prestamos_ibfk_1` FOREIGN KEY (`Idlector`) REFERENCES `lectores` (`Idlector`),
  ADD CONSTRAINT `prestamos_ibfk_2` FOREIGN KEY (`Idusuario`) REFERENCES `usuarios` (`Idusuario`),
  ADD CONSTRAINT `prestamos_ibfk_3` FOREIGN KEY (`Idlibro`) REFERENCES `libros` (`Idlibro`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Idperfil`) REFERENCES `perfil` (`Idperfil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
