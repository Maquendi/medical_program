-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2018 at 04:12 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `cita`
--

CREATE TABLE `cita` (
  `id_cita` int(100) NOT NULL,
  `fecha_cita` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_final` time NOT NULL,
  `id_asistente` int(100) NOT NULL,
  `comentario` varchar(1024) NOT NULL DEFAULT 'sin comentario....',
  `hora_registrada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_doctor` int(100) NOT NULL,
  `id_paciente` int(100) NOT NULL,
  `estado` varchar(55) NOT NULL DEFAULT 'Pendiente'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cita`
--

INSERT INTO `cita` (`id_cita`, `fecha_cita`, `hora_inicio`, `hora_final`, `id_asistente`, `comentario`, `hora_registrada`, `id_doctor`, `id_paciente`, `estado`) VALUES
(1, '2018-04-25', '14:00:00', '15:00:00', 2, '', '2018-03-31 12:45:49', 8, 2, 'Pendiente'),
(2, '2018-10-29', '14:00:00', '15:00:00', 6, 'Esto es un comentario de prueba', '2018-03-31 15:06:15', 5, 1, 'Pendiente'),
(3, '2018-04-10', '08:00:00', '09:00:00', 6, 'Perfil de paciente actualizado', '2018-03-31 15:39:24', 8, 3, 'Pendiente'),
(4, '2018-11-28', '14:01:00', '15:59:00', 6, 'Sin comentario', '2018-03-31 15:52:39', 5, 4, 'Pendiente'),
(7, '2018-11-29', '11:59:00', '14:00:00', 6, 'Sin comentario', '2018-03-31 16:59:32', 7, 4, 'Pendiente'),
(8, '2018-02-28', '14:00:00', '15:00:00', 6, 'Sin comentario', '2018-03-31 17:39:17', 7, 3, 'Pendiente'),
(9, '2018-09-28', '08:30:00', '09:00:00', 6, 'Sin comentario', '2018-03-31 18:06:32', 8, 5, 'Pendiente'),
(10, '2018-11-28', '13:59:00', '15:59:00', 6, 'Sin comentario', '2018-03-31 21:17:18', 5, 6, 'Pendiente'),
(11, '2018-05-28', '09:59:00', '11:59:00', 6, 'Sin comentario', '2018-03-31 21:22:05', 8, 7, 'Pendiente');

-- --------------------------------------------------------

--
-- Table structure for table `consulta`
--

CREATE TABLE `consulta` (
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_paciente` int(100) NOT NULL,
  `id_doctor` int(100) NOT NULL,
  `comentario_medico` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `direccion`
--

CREATE TABLE `direccion` (
  `id` int(100) NOT NULL,
  `calle` varchar(255) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `provincia` varchar(100) NOT NULL,
  `zip` varchar(100) NOT NULL DEFAULT '000000',
  `pais` varchar(100) NOT NULL DEFAULT 'Republica Dominicana',
  `id_paciente` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `direccion`
--

INSERT INTO `direccion` (`id`, `calle`, `ciudad`, `provincia`, `zip`, `pais`, `id_paciente`) VALUES
(1, 'Calle El Montron # 10', 'Santo Domingo', '1- Distrito Nacional', '001201', 'Republica Dominicana', 1),
(2, 'Calle Paseo Del Viento #5', 'Los Rios', '1- Distrito Nacional', '001224', 'Republica Dominicana', 2),
(3, 'Calle Principal #. 35', 'Duquesa, Villa Mella', '26- Santo Domingo', '012000', 'Republica Dominicana', 3),
(4, 'KM 14 #255', 'Los Alcarrizos City', '26- Santo Domingo', '142557', 'Republica Dominicana', 4),
(5, 'Los Cocos 23', 'Samana City', '12- Samana', 'd_0011', 'Republic Dominicana', 5),
(6, 'Calle Principal Num. 15', 'Las Mercedes', '19- Pedernales', 'd_0011', 'Republic Dominicana', 6),
(7, 'Los Tres Brazos 789', 'Constanza Barahona', '20- Barahona', 'd_0011', 'Republic Dominicana', 7);

-- --------------------------------------------------------

--
-- Table structure for table `historial_medico`
--

CREATE TABLE `historial_medico` (
  `id_historial` int(100) NOT NULL,
  `enfermedad` varchar(255) NOT NULL,
  `detalle` text NOT NULL,
  `id_paciente` int(100) NOT NULL,
  `id_medico` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paciente`
--

CREATE TABLE `paciente` (
  `id` int(100) NOT NULL,
  `cedula` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `genero` char(2) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fecha_nac` date NOT NULL,
  `tipo_sangre` char(3) NOT NULL,
  `telefono` varchar(25) NOT NULL,
  `reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paciente`
--

INSERT INTO `paciente` (`id`, `cedula`, `nombre`, `apellido`, `genero`, `email`, `fecha_nac`, `tipo_sangre`, `telefono`, `reg`) VALUES
(1, '223-4152786-2', 'Rosanna', 'Garcia', 'F', 'rosanna@garcia.net', '1990-09-27', 'O+', '849-235-4512', '2018-03-31 15:04:21'),
(2, '223-0072582-1', 'Maquendi', 'Beltran Novas', 'M', 'beltran_novas01@hotmail.com', '1989-04-25', 'A-', '829-497-6028', '2018-03-31 15:04:21'),
(3, '100-3214541-7', 'Manuel', 'Beltran Paula', 'M', 'manuel@gmail.com', '1996-09-20', 'B+', '829-451-9632', '2018-03-31 15:36:09'),
(4, '140-9562147-9', 'Deyanira', 'Florencia Santana', 'F', 'deyanniraflores@gmail.com', '1994-07-26', 'O+', '809-456-9632', '2018-03-31 15:50:33'),
(5, '471-9634512-9', 'Justin', 'Santos', 'M', 'justito@hotmail.com', '1975-07-30', 'O+', '829-789-6542', '2018-03-31 18:06:31'),
(6, '123-5894152-3', 'Ana Julia', 'Samboy Medrano', 'F', 'anajulia@gmail.com', '1984-07-28', 'A-', '829-475-9632', '2018-03-31 21:17:18'),
(7, '231-2541786-1', 'Alexandra', 'Montilla Jimenez', 'F', 'alexandran@gmail.com', '1995-04-27', 'B+', '849-123-9632', '2018-03-31 21:22:04');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id` int(100) NOT NULL,
  `cedula` varchar(80) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL DEFAULT 'password',
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(100) NOT NULL,
  `genero` char(2) NOT NULL,
  `f_nacimiento` date NOT NULL,
  `foto_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `cedula`, `nombre`, `apellido`, `email`, `password`, `reg_time`, `role`, `genero`, `f_nacimiento`, `foto_path`) VALUES
(2, '224-00145825-3', 'Rosaura', 'Veloz Taveras', 'rosauraveloz@hotmail.com', 'password', '2018-03-29 20:35:01', 'Asistente', 'M', '1989-02-05', 'http://localhost:8080/proyecto_final//images/2014-01-01_08_45_17.jpg'),
(3, '223-582654-4', 'Wilton', 'Pelaez', 'asg_suarez@hotmail.com', 'password', '2018-03-29 20:46:31', 'admin', 'H', '1995-12-02', 'http://localhost:8080/proyecto_final//images/IMG-20160103-WA0001.jpg'),
(4, '223-0072582-1', 'Maquendi ', 'Beltran Novas', 'mbn04251989@gmail.com', 'password', '2018-03-29 20:58:58', 'admin', 'H', '1989-04-25', 'http://localhost:8080/proyecto_final//images/IMG-20160103-WA0001.jpg'),
(5, '100-254145-5', 'Juan Carlos', 'Garcias Reynoso', 'juan_garcias@gmail.com', 'password', '2018-03-29 21:36:04', 'Doctor', 'H', '1990-06-20', 'http://localhost:8080/proyecto_final//images/mclaren-p1.jpg'),
(6, '223-145298-4', 'Juan', 'Novas Junior', 'juan_novas@hotmail.com', 'password', '2018-03-30 01:51:38', 'Asistente', 'H', '1995-11-24', 'http://localhost:8080/proyecto_final//images/12046866_10204724142374733_6677856842373668447_n.jpg'),
(7, '100-2547415-9', 'Marcos', 'Mena Rodriguez', 'marco_mena@gmail.com', 'password', '2018-03-30 23:51:56', 'Doctor', 'H', '1970-06-25', 'http://localhost:8080/proyecto_final//images/doctor.jpg'),
(8, '142-6523210-8', 'Jacqueline', 'Suarez Ramirez', 'jaqramirez@aol.com', 'password', '2018-03-30 23:54:16', 'Doctor', 'M', '1990-12-31', 'http://localhost:8080/proyecto_final//images/doctorita.jpg'),
(9, '223-4152789-9', 'Fryan', 'Martinez', 'fryann@aol.com', 'password', '2018-03-31 23:37:10', 'Doctor', 'H', '1984-03-08', 'http://localhost:8080/proyecto_final//images/Aviary_Stock_Photo_2.png'),
(10, '223-5220452-3', 'Luisa', 'Martinez Melo', 'luisa@martinezluisa.com', 'password', '2018-04-03 21:25:03', 'Asistente', 'M', '1995-08-26', 'http://localhost:8080/proyecto_final//images/luisa_martinez.jpg'),
(11, '451-8521478-6', 'Angel', 'Vargas Mena', 'angel_vargas@gmail.com', 'password', '2018-04-03 21:29:09', 'Doctor', 'H', '1981-07-14', 'http://localhost:8080/proyecto_final//images/angel.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `visita_paciente`
--

CREATE TABLE `visita_paciente` (
  `id_visita` int(100) NOT NULL,
  `fecha` date NOT NULL,
  `motivo` varchar(1080) NOT NULL,
  `comentario` text NOT NULL,
  `receta_medicamento` varchar(1080) NOT NULL,
  `date_next_visit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `doctor_fk` (`id_doctor`),
  ADD KEY `asistente_fk` (`id_asistente`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indexes for table `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id_paciente`,`id_doctor`) USING BTREE;

--
-- Indexes for table `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paciente_fk` (`id_paciente`);

--
-- Indexes for table `historial_medico`
--
ALTER TABLE `historial_medico`
  ADD PRIMARY KEY (`id_historial`),
  ADD KEY `paciente_historial_fk` (`id_paciente`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cedula` (`cedula`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `visita_paciente`
--
ALTER TABLE `visita_paciente`
  ADD PRIMARY KEY (`id_visita`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cita`
--
ALTER TABLE `cita`
  MODIFY `id_cita` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `historial_medico`
--
ALTER TABLE `historial_medico`
  MODIFY `id_historial` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `visita_paciente`
--
ALTER TABLE `visita_paciente`
  MODIFY `id_visita` int(100) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `asistente_fk` FOREIGN KEY (`id_asistente`) REFERENCES `personal` (`id`),
  ADD CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id`),
  ADD CONSTRAINT `doctor_fk` FOREIGN KEY (`id_doctor`) REFERENCES `personal` (`id`);

--
-- Constraints for table `direccion`
--
ALTER TABLE `direccion`
  ADD CONSTRAINT `paciente_fk` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id`);

--
-- Constraints for table `historial_medico`
--
ALTER TABLE `historial_medico`
  ADD CONSTRAINT `paciente_historial_fk` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
