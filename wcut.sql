-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 21-08-2014 a las 01:26:51
-- Versión del servidor: 5.5.34
-- Versión de PHP: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `wcut`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `permissions` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'Users', '{"users":1}', '2014-06-02 11:11:46', '2014-06-02 11:11:46'),
(2, 'Admins', '{"admin":1,"users":1}', '2014-06-02 11:11:46', '2014-06-02 11:11:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `throttle`
--

CREATE TABLE `throttle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `attempts` int(11) DEFAULT NULL,
  `suspended` tinyint(1) DEFAULT NULL,
  `banned` tinyint(1) DEFAULT NULL,
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_attempt_at`, `suspended_at`, `banned_at`) VALUES
(1, 1, NULL, 0, 0, NULL, NULL, NULL, NULL),
(2, 2, NULL, 0, NULL, NULL, '2014-07-24 08:42:23', NULL, NULL),
(3, 3, NULL, 3, 0, NULL, '2014-08-18 21:18:23', NULL, NULL),
(4, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(125) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `genero` enum('masculino','femenino','no definido') DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `telefono` varchar(75) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `newsletter` tinyint(1) DEFAULT NULL,
  `permissions` text,
  `activated` tinyint(1) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) DEFAULT NULL,
  `reset_password_code` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `first_name`, `last_name`, `genero`, `fecha_nacimiento`, `telefono`, `estado`, `newsletter`, `permissions`, `activated`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `created_at`, `updated_at`) VALUES
(1, 'keloxers@gmail.com', '$2y$10$2EEjrAJZDhZsyNCGSNOK2uJ/nXP8.oLhFRuuvgZZ4lIBlqaCdgIKG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2014-07-23 00:47:10', '2014-08-21 01:10:55', '$2y$10$QGspS.mYh4GZFgRLDNaXyu3C6mDDfbwghPpiwbHPKFfGFimjyxTMu', NULL, '2014-07-22 15:46:33', '2014-08-20 22:10:55'),
(2, 'vjyacster@gmail.com', '$2y$10$jq/hCmz/6EEG45gQBBJlNefeZgnUCjDt945XLHx.n3zi6kvKAru32', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2014-08-18 21:28:28', '2014-08-19 03:51:26', '$2y$10$gig6WuWLBeWZN3Ui8AJGVODWjU6e7hCfDx9ZOfC7UAZUpsNEKLYce', NULL, '2014-08-18 15:24:03', '2014-08-18 21:51:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_groups`
--

CREATE TABLE `users_groups` (
  `user_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users_groups`
--

INSERT INTO `users_groups` (`user_id`, `group_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wcuts`
--

CREATE TABLE `wcuts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) DEFAULT '0',
  `wcut` text,
  `urlceo` varchar(6) DEFAULT NULL,
  `visitas` int(11) DEFAULT '0',
  `ip` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `generate` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
