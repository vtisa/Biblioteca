-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2023 a las 14:03:45
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `editorial` varchar(50) NOT NULL,
  `especialidad` varchar(50) NOT NULL,
  `año` date NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `titulo`, `autor`, `editorial`, `especialidad`, `año`, `url`) VALUES
(1, 'La bruja', 'Jules Michelet', 'Santillana Educación', 'Ficción', '2016-01-19', 'https://web.seducoahuila.gob.mx/biblioweb/upload/la-bruja.pdf'),
(2, 'Cien años de soledad', 'Gabriel García Márquez', 'Editorial Sudamericana', 'Literatura', '1967-05-30', 'https://www.planetadelibros.com.mx/libros_contenido_extra/37/36904_1_CIEN_ANOS_DE_SOLEDAD_50_aniv.pdf'),
(3, '1984', 'George Orwell', 'Secker and Warburg', 'Ciencia ficción', '1949-06-08', 'https://wjccschools.org/jhs/wp-content/uploads/sites/17/2019/05/1984-Spanish.pdf'),
(4, 'Matar a un ruiseñor', 'Harper Lee', 'J.B. Lippincott & Co.', 'Novela', '1960-07-11', 'https://web.seducoahuila.gob.mx/biblioweb/upload/Harper,%20Lee%20-%20Matar%20Un%20Ruiseñor.pdf'),
(5, 'El Gran Gatsby', 'F. Scott Fitzgerald', 'Charles Scribner\'s Sons', 'Novela', '1925-04-10', 'https://www.imprentanacional.go.cr/editorialdigital/libros/literatura%20universal/el_gran_gatsby_edincr.pdf'),
(6, 'Harry Potter y la piedra filosofal', 'J.K. Rowling', 'Bloomsbury', 'Literatura juvenil', '1997-06-26', 'https://fecolsa.com.co/upload/Actividades%20Equilibrio%20Total/Rowling%2C%20J.%20K.%20-%20%20Harry%20Potter%20y%20la%20piedra%20filosofal.pdf'),
(7, 'Don Quijote de la Mancha', 'Miguel de Cervantes Saavedra', 'Francisco de Robles', 'Clásico de la literatura', '1605-01-01', 'https://www.educa.jcyl.es/educacyl/cm/gallery/Recursos%20Infinity/tematicas/webquijote/pdf/DONQUIJOTE_PARTE1.pdf'),
(8, 'Crimen y castigo', 'Fyodor Dostoevsky', 'The Russian Messenger', 'Novela psicológica', '1866-01-01', 'https://www.suneo.mx/literatura/subidas/Fiodor%20Dostoyevski%20Crimen%20y%20castigo.pdf'),
(9, 'Ulises', 'James Joyce', 'Sylvia Beach', 'Modernismo literario', '1922-02-02', 'https://web.seducoahuila.gob.mx/biblioweb/upload/James%20Joyce%20-%20Ulises.pdf'),
(10, 'El Hobbit', 'J.R.R. Tolkien', 'Allen & Unwin', 'Literatura fantástica', '1937-09-21', 'https://web.seducoahuila.gob.mx/biblioweb/upload/J.R.R.%20Tolkien%20-%20El%20Hobbit.pdf');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
