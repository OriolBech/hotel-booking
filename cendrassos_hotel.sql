-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 21-11-2021 a las 12:58:55
-- Versión del servidor: 5.7.33-0ubuntu0.18.04.1
-- Versión de PHP: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cendrassos_hotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacio`
--

CREATE TABLE `habitacio` (
  `id` int(5) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `preu` int(10) NOT NULL,
  `m2` int(10) NOT NULL,
  `serveis` varchar(255) NOT NULL,
  `max_ocupants` int(4) NOT NULL,
  `n_total` int(5) NOT NULL,
  `descripcio` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `habitacio`
--

INSERT INTO `habitacio` (`id`, `nom`, `preu`, `m2`, `serveis`, `max_ocupants`, `n_total`, `descripcio`) VALUES
(1, 'Estandard', 40, 30, 'Neteja', 2, 10, '<p>Vols un servei superior a l\'econòmic i bàsic? Aquesta és la teva habitació. On a part dels serveis bàsics podràs gaudir de serveis extres com banyera i tovalloles netes.</p>'),
(2, 'Prèmium', 60, 50, 'Neteja', 3, 1, '<p>La millor habitació que podràs trobar en tota la comarca. Banyera d&#39;hidromassatge, wifi personal, massatge i un bitcoin de regal.</p> <p>Si vols tindre la millor experiència, no dubtis en allotjar-te a l&#39;habitació Prèmium, que és prèmium de veritat.</p>'),
(3, 'Econòmica', 34, 32, 'Neteja', 3, 15, 'L&#39;habitació més econòmica de tota la comarca. Si vols tenir una experiència essencial sense pagar de més, aquesta és la teva habitació.'),
(4, 'Estandard Promo', 20, 30, 'Neteja', 3, 10, '<p>Habitació Estandar amb promoció de temporada. Disfruta dels avantatges d&#39;una habitació amb les necessitats bàsiques a un preu econòmic.</p><p>En aquesta habitació tindràs serveis bàsics com dutxa, lavabo i llit.</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id` int(5) NOT NULL,
  `ocupants` int(5) NOT NULL,
  `data_reserva` date NOT NULL,
  `data_entrada` date NOT NULL,
  `data_sortida` date NOT NULL,
  `num_targeta` varchar(255) NOT NULL,
  `id_usuari` int(5) NOT NULL,
  `id_habitacio` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`id`, `ocupants`, `data_reserva`, `data_entrada`, `data_sortida`, `num_targeta`, `id_usuari`, `id_habitacio`) VALUES
(14, 2, '2021-11-14', '2021-11-17', '2021-11-29', '3243 5436 4565 4654', 5, 3),
(20, 3, '2021-11-16', '2021-11-16', '2021-11-19', '4000 0566 5566 5556', 8, 3),
(21, 3, '2021-11-17', '2021-11-19', '2021-12-20', '3566 0020 2036 0505', 8, 1),
(22, 2, '2021-11-18', '2021-11-19', '2021-12-05', '4000 0566 5566 5556', 5, 3),
(24, 3, '2021-11-21', '2021-11-23', '2021-11-27', '4543654654654', 5, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuari`
--

CREATE TABLE `usuari` (
  `id` int(5) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `cognoms` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `data_naixament` date NOT NULL,
  `rol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuari`
--

INSERT INTO `usuari` (`id`, `nom`, `cognoms`, `email`, `password`, `data_naixament`, `rol`) VALUES
(4, 'admin', 'admin', 'admin@test.local', '$2y$10$mtkZdBvHx9TA8zU5MVy7W.xRGF9smWMz86y6eTjo9mG.czWbS19qK', '1995-12-31', 'admin'),
(5, 'Oriol', 'Bech', 'oriol@cendrassos.local', '$2y$10$NLy.g7/XeqKyIYdHM/QKl.MRgdQgFeVSLGz4dOO9S2GDdKXxCsEaW', '2001-01-28', 'client'),
(6, 'test', 'test', 'test@test.local', '$2y$10$LnWTLUNeJ5477KaXy8gL9ergAaDl.1XYpL9XKRGokl9Y4vIKwPAwu', '1998-02-23', 'gestor'),
(8, 'Adrián ', 'Pons', 'adrianponsl@gmail.com', '$2y$10$XD7upVhjVBEfBDpO8Bdvw.edQHg46XFfdKBiaHCZTIjgS5md2lFWK', '2021-11-11', 'gestor'),
(9, 'Adrián', 'Pons', 'apons@cendrassos.local', '$2y$10$EwyeqUVV4RbrPharAZKFGOcCEDd8tvc/1v0LVnrSeC34VMtViU7Hm', '1995-03-06', 'client');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `habitacio`
--
ALTER TABLE `habitacio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuari` (`id_usuari`),
  ADD KEY `id_habitacio` (`id_habitacio`);

--
-- Indices de la tabla `usuari`
--
ALTER TABLE `usuari`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `habitacio`
--
ALTER TABLE `habitacio`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `usuari`
--
ALTER TABLE `usuari`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`id_habitacio`) REFERENCES `habitacio` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`id_usuari`) REFERENCES `usuari` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
