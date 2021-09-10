-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 06-05-2021 a las 23:09:27
-- Versión del servidor: 5.7.34
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `innoam_ecosoft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actas`
--

CREATE TABLE `actas` (
  `id` int(50) NOT NULL,
  `num_manifiesto` int(255) NOT NULL,
  `ciudad` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `id_manifiesto` int(11) NOT NULL,
  `entidad` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `equipo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `placa_vehiculo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `conductor_operativo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `hora_recoleccion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_material` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `material_cantidad` int(100) NOT NULL,
  `material_metrica` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_plastico` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `plastico_cantidad` int(100) NOT NULL,
  `plastico_metrica` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_lodos` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `lodos_cantidad` int(100) NOT NULL,
  `lodos_metrica` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_carton` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `carton_cantidad` int(100) NOT NULL,
  `carton_metrica` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_vidrio` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `vidrio_cantidad` int(100) NOT NULL,
  `vidrio_metrica` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_metales` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `metales_cantidad` int(100) NOT NULL,
  `metales_metrica` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_filtros` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `filtros_cantidad` int(100) NOT NULL,
  `filtros_metrica` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_aceites` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `aceites_cantidad` int(100) NOT NULL,
  `aceites_metrica` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_solventes` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `solventes_cantidad` int(100) NOT NULL,
  `solventes_metrica` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_residuo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `residuo_cantidad` int(100) NOT NULL,
  `residuo_metrica` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_fluorescente` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fluorescente_cantidad` int(100) NOT NULL,
  `fluorescente_metrica` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_bateria` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `bateria_cantidad` int(100) NOT NULL,
  `bateria_metrica` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_pila` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `pila_cantidad` int(100) NOT NULL,
  `pila_metrica` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_r_organico` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `r_organico_cantidad` int(100) NOT NULL,
  `r_organico_metrica` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_r_ordinario` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `r_ordinario_cantidad` int(100) NOT NULL,
  `r_ordinario_metrica` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_r_reciclable` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `r_reciclable_cantidad` int(100) NOT NULL,
  `r_reciclable_metrica` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_r_cortopun` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `r_cortopun_cantidad` int(100) NOT NULL,
  `r_cortopun_metrica` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_epps` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `epps_cantidad` int(100) NOT NULL,
  `epps_metrica` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `otros1_nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `otros1_cantidad` int(100) NOT NULL,
  `otros1_metrica` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `otros2_nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `otros2_cantidad` int(100) NOT NULL,
  `otros2_metrica` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` text COLLATE utf8_spanish_ci NOT NULL,
  `firma_despachador` longtext COLLATE utf8_spanish_ci NOT NULL,
  `firma_recibido` longtext COLLATE utf8_spanish_ci NOT NULL,
  `nit` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `actas`
--

INSERT INTO `actas` (`id`, `num_manifiesto`, `ciudad`, `fecha`, `id_manifiesto`, `entidad`, `equipo`, `placa_vehiculo`, `conductor_operativo`, `hora_recoleccion`, `nombre_material`, `material_cantidad`, `material_metrica`, `nombre_plastico`, `plastico_cantidad`, `plastico_metrica`, `nombre_lodos`, `lodos_cantidad`, `lodos_metrica`, `nombre_carton`, `carton_cantidad`, `carton_metrica`, `nombre_vidrio`, `vidrio_cantidad`, `vidrio_metrica`, `nombre_metales`, `metales_cantidad`, `metales_metrica`, `nombre_filtros`, `filtros_cantidad`, `filtros_metrica`, `nombre_aceites`, `aceites_cantidad`, `aceites_metrica`, `nombre_solventes`, `solventes_cantidad`, `solventes_metrica`, `nombre_residuo`, `residuo_cantidad`, `residuo_metrica`, `nombre_fluorescente`, `fluorescente_cantidad`, `fluorescente_metrica`, `nombre_bateria`, `bateria_cantidad`, `bateria_metrica`, `nombre_pila`, `pila_cantidad`, `pila_metrica`, `nombre_r_organico`, `r_organico_cantidad`, `r_organico_metrica`, `nombre_r_ordinario`, `r_ordinario_cantidad`, `r_ordinario_metrica`, `nombre_r_reciclable`, `r_reciclable_cantidad`, `r_reciclable_metrica`, `nombre_r_cortopun`, `r_cortopun_cantidad`, `r_cortopun_metrica`, `nombre_epps`, `epps_cantidad`, `epps_metrica`, `otros1_nombre`, `otros1_cantidad`, `otros1_metrica`, `otros2_nombre`, `otros2_cantidad`, `otros2_metrica`, `observaciones`, `firma_despachador`, `firma_recibido`, `nit`) VALUES
(1, 0, '', '', 0, '', '', '', '', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', '', '', 900880649),
(2, 1, 'Barrancabermeja', '2021-03-27', 0, 'PETROTECH DE COLOMBIA S.A.S - RIG 5', '', 'Tjx141', 'Orlando navarro', '08:05', 'Material Absorbente', 54, 'KG ', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', 'Residuos OrgÃ¡nicos', 85, 'KG ', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', '', '', 900880649);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alertas`
--

CREATE TABLE `alertas` (
  `id` int(50) NOT NULL,
  `v_tecnomecanica` date NOT NULL,
  `v_soat` date NOT NULL,
  `v_c_sanitarios` date NOT NULL,
  `placa` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `id_vehiculo` int(50) NOT NULL,
  `nit` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chequeos`
--

CREATE TABLE `chequeos` (
  `id` int(11) NOT NULL,
  `chequeo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_respuesta` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `obligatoriedad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `verificacion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `seccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `nit` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_clientes` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_ident` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `identificacion` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `digito` int(10) NOT NULL,
  `representante` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `direccion_admin` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `direccion_corres` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(110) COLLATE utf8_spanish_ci NOT NULL,
  `sitio_web` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `acti_eco` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `cotizacion` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `horario_lv` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `horario_lv1` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `horario_sd` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `horario_sd1` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `asesor` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contacto_gen` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo_gen` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contacto_com` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo_com` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` text COLLATE utf8_spanish_ci NOT NULL,
  `usuarios_id` int(11) NOT NULL,
  `nit` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_clientes`, `nombre`, `estado`, `categoria`, `tipo_ident`, `identificacion`, `digito`, `representante`, `telefono`, `direccion_admin`, `direccion_corres`, `pais`, `ciudad`, `sitio_web`, `acti_eco`, `cotizacion`, `horario_lv`, `horario_lv1`, `horario_sd`, `horario_sd1`, `asesor`, `contacto_gen`, `correo_gen`, `contacto_com`, `correo_com`, `observaciones`, `usuarios_id`, `nit`) VALUES
(21, 'PETROTECH DE COLOMBIA S.A.S - RIG 5', 'Activo', 'Cliente Directo', 'NIT', '900387207', 3, '', '3188016774', 'Carrera 9 No. 77 - 67 Oficina 803 Ed. Torre Unika', 'Carrera 9 No. 77 - 67 Oficina 803 Ed. Torre Unika', 'Colombia', 'BARRANCABERMEJA / SANTANDER', 'http://www.petrotech.com.co/', '', '', '07:00', '05:00', '', '', 'Cristian Javier Diaz Toledo ', 'Aura Milena Arrieta Parra', 'jgomez1genio@gmail.com', '', '', '', 249, 900880649),
(22, 'TECNIORIENTE WELL SERVICES AND GENERATION S.A.S.', 'Activo', 'Cliente Directo', 'NIT', '834001427', 1, '', '314375044', 'P F 4 KM 1 VIA CAÃ‘O LIMON VDA MATEGALLINA', 'P F 4 KM 1 VIA CAÃ‘O LIMON VDA MATEGALLINA', 'Colombia', 'BARRANCABERMEJA / SANTANDER', '', '', '', '06:00', '17:00', '', '', 'Cristian Javier Diaz Toledo ', 'Edinson Cardoza', 'monicafernanda1275282@gmail.com', '', '', '', 249, 900880649),
(23, 'SETIP INGENIERIA S.A', 'Activo', 'Cliente Directo', 'NIT', '830092876', 1, '', '12364792', 'Barrancabermeja, Santander', 'Barrancabermeja, Santander', 'Colombia', 'BARRANCABERMEJA / SANTANDER', '', '', '', '06:00', '17:00', '', '', 'Cristian Javier Diaz Toledo ', '	Martha Ines Silva Porras', 'hseq.ws@setipingenieria.com', '', '', '', 249, 900880649),
(24, 'Construcciones Sercocivil S.A.S', 'Activo', 'Cliente Directo', 'NIT', '829001188', 8, '', '3124770056 ', 'CORRE EL CENTRO VDA EL QUEMADERO', 'CORRE EL CENTRO VDA EL QUEMADERO', 'Colombia', 'BARRANCABERMEJA / SANTANDER', '', '', '', '06:00', '17:00', '', '', 'Cristian Javier Diaz Toledo ', 'construcciones sercocivil s.a.s', 'sercocivil@hotmail.com', '', '', '', 249, 900880649),
(25, 'CHAMPIONX DE COLOMBIA LTDA', 'Activo', 'Cliente Directo', 'NIT', '860030808', 2, '', '3186190576', 'Avenida Calle 100 No. 19-54 Piso 4 Ed. Prime Tower, BogotÃ¡ - Colombia', 'Avenida Calle 100 No. 19-54 Piso 4 Ed. Prime Tower, BogotÃ¡ - Colombia', 'Colombia', 'BARRANCABERMEJA / SANTANDER', '', '', '', '06:00', '17:00', '', '', 'Cristian Javier Diaz Toledo ', 'CHAMPIONX DE COLOMBIA LTDA', 'ngutierrez@championx.com', '', '', '', 249, 900880649),
(26, 'Braserv Petroleo Ltda Sucursal Colombiana', 'Activo', 'Cliente Directo', 'NIT', '900563833', 9, '', '3175273270', 'KM11 Corregimiento el Centro', 'KM11 Corregimiento el Centro', 'Colombia', 'BARRANCABERMEJA / SANTANDER', '', '', '', '07:00', '17:00', '', '', 'Cristian Javier Diaz Toledo ', 'eeeee', 'monicafernanda1275282@gmail.com', '', '', '', 250, 900880649);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disposicion_manejo`
--

CREATE TABLE `disposicion_manejo` (
  `id_disposicion` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `nit` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `nit` int(50) NOT NULL,
  `digito` int(10) NOT NULL,
  `nombre` varchar(55) COLLATE utf8_spanish_ci NOT NULL,
  `representante` varchar(55) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(110) COLLATE utf8_spanish_ci NOT NULL,
  `sitio_web` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `contacto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `email_tec` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `email_logis` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `logo_name` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `logo_file` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `licencia` text COLLATE utf8_spanish_ci NOT NULL,
  `licencia_name` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `licencia_file` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `responsable_plan` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contactos_emerg` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`nit`, `digito`, `nombre`, `representante`, `telefono`, `direccion`, `correo`, `pais`, `ciudad`, `sitio_web`, `contacto`, `email_tec`, `email_logis`, `logo_name`, `logo_file`, `licencia`, `licencia_name`, `licencia_file`, `responsable_plan`, `contactos_emerg`) VALUES
(900880649, 9, 'INNOAMBIENTAL E.S.P. SAS', 'Cristian Javier Diaz Toledo', '3118765315', 'Corregimiento el Centro, Campo 22', 'innoambiental.esp.sas@gmail.com', 'Colombia', 'BARRANCABERMEJA / SANTANDER', 'innoambiental.com.co', '', '', '', 'innoambiental.png', 'img/uploads/innoambiental.png', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `esp_adicionales`
--

CREATE TABLE `esp_adicionales` (
  `id` int(50) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `nit` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_recorrido`
--

CREATE TABLE `estados_recorrido` (
  `id` int(50) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `orden` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nit` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas_servicio`
--

CREATE TABLE `lineas_servicio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(600) COLLATE utf8_spanish_ci NOT NULL,
  `codigo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `unidad` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nit` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manejo`
--

CREATE TABLE `manejo` (
  `id_manejo` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `nit` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metricas`
--

CREATE TABLE `metricas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `abreviacion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nit` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `metricas`
--

INSERT INTO `metricas` (`id`, `nombre`, `abreviacion`, `nit`) VALUES
(1, 'Kilogramos', 'KG', 900880649);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_ident` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `identificacion` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `digito` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `representante` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `direccion_admon` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `direccion_corres` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sitio_web` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `acti_eco` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_prov` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `disposiciones` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `licencia_name` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `licencia` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `licencia_tipo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `horario_lv` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `horario_lv1` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `horario_sd` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `horario_sd1` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `contacto_compras` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo_compras` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contacto_comer` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo_comer` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `nit` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `res_generales`
--

CREATE TABLE `res_generales` (
  `id_residuos` int(50) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `disposicion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `codigo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `valor` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `metrica` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `facturacion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nit` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `riesgos`
--

CREATE TABLE `riesgos` (
  `id` int(50) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `nit` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `rol` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(2, 'Administrador'),
(3, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE `sucursales` (
  `id_sucur` int(11) NOT NULL,
  `tipo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `origen` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `clasificacion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contacto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `celular` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `zona` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `horario_lv` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `horario_lv1` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `horario_sd` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `horario_sd1` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `latitud` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `longitud` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `nit` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`id_sucur`, `tipo`, `origen`, `nombre`, `clasificacion`, `contacto`, `telefono`, `celular`, `correo`, `direccion`, `pais`, `ciudad`, `zona`, `horario_lv`, `horario_lv1`, `horario_sd`, `horario_sd1`, `latitud`, `longitud`, `id_user`, `nit`) VALUES
(78, '', '', 'PETROTECH DE COLOMBIA S.A.S', '', '', '3188016774', '', '', 'Carrera 9 No. 77 - 67 Oficina 803 Ed. Torre Unika', 'Colombia', 'BARRANCABERMEJA / SANTANDER', '', '07:00', '05:00', '', '', '', '', 249, 900880649),
(79, '', '', 'ECNIORIENTE WELL SERVICES AND GENERATION S.A.S.', '', '', '314375044', '', '', 'P F 4 KM 1 VIA CA&Ntilde;O LIMON VDA MATEGALLINA', 'Colombia', 'BARRANCABERMEJA / SANTANDER', '', '06:00', '17:00', '', '', '', '', 249, 900880649),
(80, '', '', 'SETIP INGENIERIA S.A', '', '', '12364792', '', '', 'Barrancabermeja, Santander', 'Colombia', 'BARRANCABERMEJA / SANTANDER', '', '06:00', '17:00', '', '', '', '', 249, 900880649),
(81, '', '', 'construcciones sercocivil s.a.s', '', '', '3124770056 ', '', '', 'CORRE EL CENTRO VDA EL QUEMADERO', 'Colombia', 'BARRANCABERMEJA / SANTANDER', '', '06:00', '17:00', '', '', '', '', 249, 900880649),
(82, '', '', 'CHAMPIONX DE COLOMBIA LTDA', '', '', '3186190576', '', '', 'Avenida Calle 100 No. 19-54 Piso 4 Ed. Prime Tower, Bogot&aacute; - Colombia', 'Colombia', 'BARRANCABERMEJA / SANTANDER', '', '06:00', '17:00', '', '', '', '', 249, 900880649),
(83, '', '', 'Braserv Petroleo Ltda Sucursal Colombiana', '', '', '3175273270', '', '', 'KM11 Corregimiento el Centro', 'Colombia', 'BARRANCABERMEJA / SANTANDER', '', '07:00', '17:00', '', '', '', '', 250, 900880649);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ud_negocio`
--

CREATE TABLE `ud_negocio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(600) COLLATE utf8_spanish_ci NOT NULL,
  `codigo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sigla` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nit` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `usuario` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(110) COLLATE utf8_spanish_ci NOT NULL,
  `rol` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `identificacion` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `cargo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `modulo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `propio` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `celular` varchar(45) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `pais` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(220) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `licencia` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_venc` date NOT NULL,
  `firma_name` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `firma` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `parafiscales_name` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `parafiscales` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `empresas_nit` int(50) NOT NULL,
  `usuario_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `usuario`, `correo`, `clave`, `rol`, `nombre`, `identificacion`, `cargo`, `estado`, `modulo`, `propio`, `telefono`, `celular`, `pais`, `ciudad`, `direccion`, `licencia`, `fecha_venc`, `firma_name`, `firma`, `parafiscales_name`, `parafiscales`, `empresas_nit`, `usuario_id`) VALUES
(249, 'cristian', 'cristiandiazt03@gmail.com', '925d7518fc597af0e43f5606f9a51512', 2, 'Cristian Javier Diaz Toledo', '91527701', 'Gerente', 'Activo', '', '', '', '3118765315', 'Colombia', 'BARRANCABERMEJA / SANTANDER', '', '', '0000-00-00', '', '', '', '', 900880649, 6),
(250, 'Monica', 'monicafernanda1275282@gmail.com', 'b766d5effd14bbb529bf28b872a09d92', 2, 'M&oacute;nica Barbosa', '1005182136', 'auxiliar administrativa', 'Activo', '', 'Propio', '3008274742', '', 'Colombia', '', '', '', '0000-00-00', '', '', '', '', 900880649, 249);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_maestro`
--

CREATE TABLE `usuario_maestro` (
  `id` int(11) NOT NULL,
  `usuario` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(55) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario_maestro`
--

INSERT INTO `usuario_maestro` (`id`, `usuario`, `clave`) VALUES
(6, 'CDT.administracion', '925d7518fc597af0e43f5606f9a51512'),
(7, 'martin', '925d7518fc597af0e43f5606f9a51512');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id_vehiculo` int(11) NOT NULL,
  `marca` varchar(110) COLLATE utf8_spanish_ci NOT NULL,
  `capacidad` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `metrica` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `placa` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `color` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_vehiculo` varchar(110) COLLATE utf8_spanish_ci NOT NULL,
  `proveedor` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `propietario` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `ident_propietario` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `num_tecno` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_v_tecno` date NOT NULL,
  `num_soat` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_v_soat` date NOT NULL,
  `fecha_v_csanitarios` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `nit` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas`
--

CREATE TABLE `zonas` (
  `id_zonas` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(110) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `nit` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actas`
--
ALTER TABLE `actas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nit` (`nit`);

--
-- Indices de la tabla `alertas`
--
ALTER TABLE `alertas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_vehiculo` (`id_vehiculo`),
  ADD KEY `nit` (`nit`);

--
-- Indices de la tabla `chequeos`
--
ALTER TABLE `chequeos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nit` (`nit`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_clientes`),
  ADD KEY `nit` (`nit`);

--
-- Indices de la tabla `disposicion_manejo`
--
ALTER TABLE `disposicion_manejo`
  ADD PRIMARY KEY (`id_disposicion`),
  ADD KEY `nit` (`nit`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`nit`);

--
-- Indices de la tabla `esp_adicionales`
--
ALTER TABLE `esp_adicionales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nit` (`nit`);

--
-- Indices de la tabla `estados_recorrido`
--
ALTER TABLE `estados_recorrido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nit` (`nit`);

--
-- Indices de la tabla `lineas_servicio`
--
ALTER TABLE `lineas_servicio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nit` (`nit`);

--
-- Indices de la tabla `manejo`
--
ALTER TABLE `manejo`
  ADD PRIMARY KEY (`id_manejo`),
  ADD KEY `nit` (`nit`);

--
-- Indices de la tabla `metricas`
--
ALTER TABLE `metricas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nit` (`nit`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nit` (`nit`);

--
-- Indices de la tabla `res_generales`
--
ALTER TABLE `res_generales`
  ADD PRIMARY KEY (`id_residuos`),
  ADD KEY `nit` (`nit`);

--
-- Indices de la tabla `riesgos`
--
ALTER TABLE `riesgos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nit` (`nit`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`id_sucur`),
  ADD KEY `nit` (`nit`);

--
-- Indices de la tabla `ud_negocio`
--
ALTER TABLE `ud_negocio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nit` (`nit`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `empresas_nit` (`empresas_nit`),
  ADD KEY `rol` (`rol`);

--
-- Indices de la tabla `usuario_maestro`
--
ALTER TABLE `usuario_maestro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id_vehiculo`),
  ADD KEY `nit` (`nit`);

--
-- Indices de la tabla `zonas`
--
ALTER TABLE `zonas`
  ADD PRIMARY KEY (`id_zonas`),
  ADD KEY `nit` (`nit`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actas`
--
ALTER TABLE `actas`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `alertas`
--
ALTER TABLE `alertas`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `chequeos`
--
ALTER TABLE `chequeos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_clientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `disposicion_manejo`
--
ALTER TABLE `disposicion_manejo`
  MODIFY `id_disposicion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `esp_adicionales`
--
ALTER TABLE `esp_adicionales`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estados_recorrido`
--
ALTER TABLE `estados_recorrido`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lineas_servicio`
--
ALTER TABLE `lineas_servicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `manejo`
--
ALTER TABLE `manejo`
  MODIFY `id_manejo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `metricas`
--
ALTER TABLE `metricas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `res_generales`
--
ALTER TABLE `res_generales`
  MODIFY `id_residuos` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `riesgos`
--
ALTER TABLE `riesgos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  MODIFY `id_sucur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT de la tabla `ud_negocio`
--
ALTER TABLE `ud_negocio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT de la tabla `usuario_maestro`
--
ALTER TABLE `usuario_maestro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `zonas`
--
ALTER TABLE `zonas`
  MODIFY `id_zonas` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actas`
--
ALTER TABLE `actas`
  ADD CONSTRAINT `actas_ibfk_1` FOREIGN KEY (`nit`) REFERENCES `empresas` (`nit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `alertas`
--
ALTER TABLE `alertas`
  ADD CONSTRAINT `alertas_ibfk_1` FOREIGN KEY (`id_vehiculo`) REFERENCES `vehiculos` (`id_vehiculo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alertas_ibfk_2` FOREIGN KEY (`nit`) REFERENCES `empresas` (`nit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `chequeos`
--
ALTER TABLE `chequeos`
  ADD CONSTRAINT `chequeos_ibfk_1` FOREIGN KEY (`nit`) REFERENCES `empresas` (`nit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`nit`) REFERENCES `empresas` (`nit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `disposicion_manejo`
--
ALTER TABLE `disposicion_manejo`
  ADD CONSTRAINT `disposicion_manejo_ibfk_1` FOREIGN KEY (`nit`) REFERENCES `empresas` (`nit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `esp_adicionales`
--
ALTER TABLE `esp_adicionales`
  ADD CONSTRAINT `esp_adicionales_ibfk_1` FOREIGN KEY (`nit`) REFERENCES `empresas` (`nit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `estados_recorrido`
--
ALTER TABLE `estados_recorrido`
  ADD CONSTRAINT `estados_recorrido_ibfk_1` FOREIGN KEY (`nit`) REFERENCES `empresas` (`nit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `lineas_servicio`
--
ALTER TABLE `lineas_servicio`
  ADD CONSTRAINT `lineas_servicio_ibfk_1` FOREIGN KEY (`nit`) REFERENCES `empresas` (`nit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `manejo`
--
ALTER TABLE `manejo`
  ADD CONSTRAINT `manejo_ibfk_1` FOREIGN KEY (`nit`) REFERENCES `empresas` (`nit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `metricas`
--
ALTER TABLE `metricas`
  ADD CONSTRAINT `metricas_ibfk_1` FOREIGN KEY (`nit`) REFERENCES `empresas` (`nit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD CONSTRAINT `proveedores_ibfk_1` FOREIGN KEY (`nit`) REFERENCES `empresas` (`nit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `res_generales`
--
ALTER TABLE `res_generales`
  ADD CONSTRAINT `res_generales_ibfk_1` FOREIGN KEY (`nit`) REFERENCES `empresas` (`nit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `riesgos`
--
ALTER TABLE `riesgos`
  ADD CONSTRAINT `riesgos_ibfk_1` FOREIGN KEY (`nit`) REFERENCES `empresas` (`nit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD CONSTRAINT `sucursales_ibfk_1` FOREIGN KEY (`nit`) REFERENCES `empresas` (`nit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ud_negocio`
--
ALTER TABLE `ud_negocio`
  ADD CONSTRAINT `ud_negocio_ibfk_1` FOREIGN KEY (`nit`) REFERENCES `empresas` (`nit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`rol`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`empresas_nit`) REFERENCES `empresas` (`nit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `vehiculos_ibfk_1` FOREIGN KEY (`nit`) REFERENCES `empresas` (`nit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `zonas`
--
ALTER TABLE `zonas`
  ADD CONSTRAINT `zonas_ibfk_1` FOREIGN KEY (`nit`) REFERENCES `empresas` (`nit`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
