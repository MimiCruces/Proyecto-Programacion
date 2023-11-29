DROP SCHEMA IF EXISTS `registro`;

CREATE SCHEMA IF NOT EXISTS  `registro` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `registro`;
CREATE TABLE `usuario` (
  `nombre` text COLLATE utf8mb4_spanish2_ci NOT NULL,
   `edad` int(11) NOT NULL,
  `direccion` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `correo` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre_usuario` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Fecha_Registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;


INSERT INTO `usuario` VALUES ('Noemi Guadalupe',21,'San Pablito,Chiconcuac','5614444521','noemicruces18@aragon.unam.mx','Mimi','1902','2023-11-20 08:20:57',1);
