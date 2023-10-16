-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2023 a las 23:06:02
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
-- Base de datos: `indumentaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `tipo`) VALUES
(3, 'Blusas'),
(1, 'Jeans'),
(6, 'Polleras'),
(5, 'Remeras'),
(7, 'Shorts'),
(4, 'Tops'),
(2, 'Vestidos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indumentaria`
--

CREATE TABLE `indumentaria` (
  `id` int(11) NOT NULL,
  `producto` varchar(45) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `precio` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `proveedor` int(11) NOT NULL,
  `imagen` varchar(250) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `indumentaria`
--

INSERT INTO `indumentaria` (`id`, `producto`, `categoria`, `precio`, `stock`, `proveedor`, `imagen`, `descripcion`) VALUES
(21, 'Cargo beige', 'Jeans', 12000, 7, 2, 'https://acdn.mitiendanube.com/stores/001/147/209/products/img_51141-28913eeaf324fdfe0716842461099324-640-0.jpeg', 'Jean cargo en color beige. Disponible en talles 38, 40 y 42.'),
(22, 'Top strapless', 'Tops', 8000, 4, 1, 'https://www.distritomoda.com.ar/sites/default/files/styles/producto_interior/public/imagenes/diseno_sin_titulo_-_2023-05-19t121153.395_1684509123.jpg?itok=dLUjDmLl', 'Top strapless con corte cruzado. Disponible en colores negro, azul, blanco y lila.'),
(23, 'Vestido orange', 'Vestidos', 10000, 7, 3, 'https://i.pinimg.com/736x/99/e5/39/99e5390c6cc491b96264df2c1ecb2531.jpg', 'Vestido modelo asimétrico en color naranja'),
(24, 'Vestido ani', 'Vestidos', 10000, 5, 4, 'https://www.distritomoda.com.ar/sites/default/files/styles/producto_interior/public/imagenes/img_4487-rotated_1676296400.jpeg?itok=wqUqS30H', 'Vestido manga larga y cuello polera. Disponible en rosa, negro y azul eléctrico. Espalda descubierta.'),
(26, 'Vestido katy', 'Vestidos', 12000, 4, 2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSN3U4dwb9Ub4XlFdr5UYGCe-_8cp4h_JuCFQ&usqp=CAU', 'Vestido con tela de lentejuelas y tirantes, espalda abierta. Disponible en negro y plateado.'),
(27, 'Top asimétrico black', 'Tops', 8000, 3, 4, 'https://i0.wp.com/domenicoshop.cl/wp-content/uploads/2022/07/WhatsApp-Image-2022-08-03-at-3.36.31-PM.jpeg?fit=1242%2C1538&ssl=1', 'Top asimétrico disponible en negro, blanco y verde.'),
(34, 'Vestido chocolate', 'Vestidos', 17000, 3, 5, 'https://www.distritomoda.com.ar/sites/default/files/styles/producto_interior/public/imagenes/whatsapp_image_2022-01-19_at_09.34.23_1642597580.jpeg?itok=r3kenquk', 'Vestido de fiesta en satén color chocolate.'),
(37, 'Wide leg', 'Jeans', 12000, 7, 5, 'https://ninayco.com/56154-large_default/jean-cargo-wide-leg-jea1152.jpg', 'Jean wide leg común disponible en talles 38 y 40.'),
(38, 'Blusa white', 'Blusas', 9000, 7, 6, 'https://www.distritomoda.com.ar/sites/default/files/styles/producto_interior/public/imagenes/selly-35_1685385896.jpg?itok=QhEXen9K', ''),
(39, 'Blusa caladita', 'Blusas', 11000, 5, 2, 'https://www.distritomoda.com.ar/sites/default/files/styles/producto_interior/public/imagenes/img_1554_1691970832.jpg?itok=XBL3enhI', ''),
(40, 'Mini tableada jean', 'Polleras', 11000, 11, 6, 'https://d22fxaf9t8d39k.cloudfront.net/d992ab15ccd88ae571c72b09ff7e6d28e9f9d98e7bb345455f1b35829dedb10885285.jpeg', ''),
(41, 'Mini jean roturas', 'Polleras', 10500, 20, 4, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTHURPIa9Yy50OfD54WKWO91Yn_JBQ1-Z6Ng&usqp=CAU', ''),
(44, 'Reme mica', 'Remeras', 10500, 11, 5, 'https://luleamindful.com/wp-content/uploads/2023/04/10.4-REMERA-OVERSIZE-NO-GENDER-DESCENDIENTES.jpg', 'Remera básica blanca de algodón con estampado verde.'),
(45, 'Reme DBDS', 'Remeras', 12300, 11, 6, 'https://d22fxaf9t8d39k.cloudfront.net/2c4a1453fa1f0375c6c3579379bc41304433be39dfcf0b4bc53514afee7618137239.jpg', 'Remera de algodón disponible en blanco y negro con espalda estampada en colores neón.'),
(46, 'Short de jean', 'Shorts', 10300, 6, 2, 'https://d2r9epyceweg5n.cloudfront.net/stores/001/645/978/products/img_27741-5a7a4389954cebee5416934874562557-480-0.jpg', 'Short de jean tiro medio disponible en talles 36, 38 y 40'),
(47, 'Short Kim largo', 'Shorts', 12300, 8, 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQU87eFA_3r0h9ho6pqPZpuShsvcpwo_wd1Og&usqp=CAU', 'Short largo tiro alto, disponible en colores jean, blanco y gris. Talles 38, 40 y 42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `contacto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `nombre`, `apellido`, `contacto`) VALUES
(1, 'julian', 'mezas', 'julimezas@gmail.com'),
(2, 'Horacio', 'Velez', 'horiveles@gmail.com'),
(3, 'Roman', 'Castaño', 'romancastaño@gmail.com'),
(4, 'Maia', 'Jimenez', 'maiajimenez@gmail.com'),
(5, 'Coco', 'Channel', 'coco.channel@gmail.com'),
(6, 'Karl', 'Lagerfeld', 'karllag@yahoo.com.es'),
(7, 'Macarena', 'Alvarez', 'macarena.alvarez@safa.edu.ar'),
(8, 'Laura', 'Gomez', 'laugomez@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `password` varchar(200) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `admin`) VALUES
(1, 'webadmin', '$2y$10$LiOoBZIuKusFuC/2iBnHrexBYp/a89uA8au9v9xxFrBiQYPSCLVCC', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tipo` (`tipo`);

--
-- Indices de la tabla `indumentaria`
--
ALTER TABLE `indumentaria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_indumentaria_proveedores` (`proveedor`),
  ADD KEY `fk_indumentaria_categorias` (`categoria`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `indumentaria`
--
ALTER TABLE `indumentaria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `indumentaria`
--
ALTER TABLE `indumentaria`
  ADD CONSTRAINT `fk_indumentaria_categorias` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`tipo`),
  ADD CONSTRAINT `fk_indumentaria_proveedores` FOREIGN KEY (`proveedor`) REFERENCES `proveedores` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
