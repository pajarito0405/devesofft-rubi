-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2016 at 01:27 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hello_world`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `album_id` int(11) NOT NULL,
  `nombre` varchar(256) NOT NULL,
  `is_active` int(11) NOT NULL,
  `id_lang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`album_id`, `nombre`, `is_active`, `id_lang`) VALUES
(1, 'Aulas', 1, 1),
(2, 'Classrooms', 0, 2),
(3, 'Cursos', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(11) NOT NULL,
  `nombre` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `nombre`) VALUES
(1, 'Instructor de curso'),
(2, 'InvestigaciÃƒÂ³n'),
(3, 'Desarrollo'),
(4, 'Startups');

-- --------------------------------------------------------

--
-- Table structure for table `bibliografia`
--

CREATE TABLE `bibliografia` (
  `bibliografia_id` int(11) NOT NULL,
  `nombre` varchar(256) NOT NULL,
  `modulo_id` int(11) NOT NULL,
  `file` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `id_lang` int(11) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`, `id_lang`, `is_active`) VALUES
(1, 'Computer Science', 2, 1),
(2, 'Negocios en Internet', 1, 1),
(3, 'Informática', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `certificacion`
--

CREATE TABLE `certificacion` (
  `certificacion_id` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `url` varchar(256) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `certificacion`
--

INSERT INTO `certificacion` (`certificacion_id`, `image`, `url`, `is_active`) VALUES
(1, 'e433da35428fe2795e0422e0436de95e.png', 'http://www.google.com/', 0),
(2, '62c045fe541417b0d1978a5f520c9543.png', 'http://www.facebook.com', 1),
(3, '17e2fe206b5d0892d23a48b61c68e358.png', 'http://www.umet.com.ec', 1);

-- --------------------------------------------------------

--
-- Table structure for table `conversacion`
--

CREATE TABLE `conversacion` (
  `conversacion_id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `texto` text NOT NULL,
  `modulo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `convocatoria`
--

CREATE TABLE `convocatoria` (
  `convocatoria_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `curso_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `convocatoria`
--

INSERT INTO `convocatoria` (`convocatoria_id`, `fecha`, `curso_id`) VALUES
(1, '2016-07-06', 2),
(2, '2016-07-31', 2);

-- --------------------------------------------------------

--
-- Table structure for table `convocatoria_estudiante`
--

CREATE TABLE `convocatoria_estudiante` (
  `convocatoria_estudiante_id` int(11) NOT NULL,
  `convocatoria_id` int(11) NOT NULL,
  `estudiante_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `convocatoria_estudiante`
--

INSERT INTO `convocatoria_estudiante` (`convocatoria_estudiante_id`, `convocatoria_id`, `estudiante_id`) VALUES
(1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `curso`
--

CREATE TABLE `curso` (
  `curso_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `nombre` varchar(256) NOT NULL,
  `resumen` text NOT NULL,
  `descripcion` text NOT NULL,
  `image` varchar(256) NOT NULL,
  `id_lang` int(11) NOT NULL,
  `orden` int(11) NOT NULL,
  `url_video` varchar(256) NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `tiene_presencial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;



--
-- Dumping data for table `curso`
--

INSERT INTO `curso` (`curso_id`, `is_active`, `nombre`, `resumen`, `descripcion`, `image`, `id_lang`, `orden`, `url_video`, `category_id`, `price`, `tiene_presencial`) VALUES
(1, 1, 'Curso  de programación web', '<p>asdfasdfas asdfasdfsa</p>', '<p>asdfasdfasdf</p>', '341a1ffe05e0bb70b07812f95a3cf859.jpg', 1, 3, '', 3, '12.00', 0),
(2, 1, 'Curso de Programación para dispositivos Android', '<p>as;dfklasdflkasfdkasdf as dfasfkda;slkdf;laskdf;las df;laksd;lfkas;ldf as;ldf ;alsd f;asld f;alsdf ;alsd f;as df;as dfa;ls kfd</p>', '<p>\r\n\r\n</p><p><b>Android</b>&nbsp;es un <a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Sistema_operativo">sistema operativo</a>&nbsp;basado en el <a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/N%C3%BAcleo_Linux">núcleo Linux</a>. Fue diseñado principalmente para <a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Dispositivo_m%C3%B3vil">dispositivos móviles</a>&nbsp;con <a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Pantalla_t%C3%A1ctil">pantalla táctil</a>, como <a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Tel%C3%A9fonos_inteligentes">teléfonos inteligentes</a>, <a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Tableta_(computadora)"><i>tablets</i></a>&nbsp;o <a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Tabl%C3%A9fono">tabléfonos</a>; y también para <a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Reloj_inteligente">relojes inteligentes</a>, <a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Televisi%C3%B3n_inteligente">televisores</a>&nbsp;y <a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Autom%C3%B3vil">automóviles</a>. Inicialmente fue desarrollado por <a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Android_Inc.">Android Inc.</a>, empresa que <a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Google">Google</a>&nbsp;respaldó económicamente y más tarde, en <a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/2005">2005</a>, la compró.<a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Android#cite_note-AndroidInc-9">9</a>&nbsp;Android fue presentado en <a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/2007">2007</a>&nbsp;junto la fundación del <a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Open_Handset_Alliance">Open Handset Alliance</a>&nbsp;(un consorcio de compañías de <a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Hardware">hardware</a>, <a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Software">software</a>&nbsp;y <a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Telecomunicaciones">telecomunicaciones</a>) para avanzar en los estándares abiertos de los dispositivos móviles.<a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Android#cite_note-AndroidAnnouncement-10">10</a>&nbsp;El primer móvil con el sistema operativo Android fue el <a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/HTC_Dream">HTC Dream</a>&nbsp;y se vendió en <a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Octubre_de_2008">octubre de 2008</a>.<a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Android#cite_note-11">11</a>&nbsp;Los dispositivos de Android venden más que las ventas combinadas de <a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Windows_Phone">Windows Phone</a>&nbsp;e <a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/IOS">IOS</a>.<a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Android#cite_note-mahapatra1-12">12</a>&nbsp;<a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Android#cite_note-elmer1-13">13</a>&nbsp;<a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Android#cite_note-best_selling-14">14</a>&nbsp;<a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Android#cite_note-sammobile1-15">15</a></p><p>El éxito del sistema operativo se ha convertido en objeto de litigios sobre patentes en el marco de las llamadas «Guerras por patentes de teléfonos inteligentes» (en inglés, <i>Smartphone patent wars</i>) entre las empresas de tecnología.<a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Android#cite_note-cnet2011-16">16</a>&nbsp;<a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Android#cite_note-tomsguide-17">17</a>&nbsp;Según <a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Datos_acerca_de_la_vigilancia_mundial_(2013_a_la_fecha)">documentos secretos filtrados en 2013 y 2014</a>, el sistema operativo es uno de los objetivos de las <a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Agencia_de_inteligencia">agencias de inteligencia</a>&nbsp;internacionales.</p><p>La versión básica de Android es conocida como Android Open Source Project (AOSP).<a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Android#cite_note-18">18</a></p><p>El 25 de junio de 2014 en la Conferencia de Desarrolladores <a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Google_I/O">Google I/O</a>, <a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Google">Google</a>&nbsp;mostró una evolución de la marca Android, con el fin de unificar tanto el <a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Hardware">hardware</a>&nbsp;como el <a target="_blank" rel="nofollow" href="https://es.wikipedia.org/wiki/Software">software</a>&nbsp;y ampliar mercados.</p>\r\n\r\n<p></p>', '68dc56a334e1b6d522cd8ab261fc2246.png', 1, 1, 'https://www.youtube.com/watch?v=3IvfKtgFVMc&list=PLh_neeN4BQCmX4jC9pR_DgZVJ8a4PRMca', 2, '100.00', 1),
(3, 1, 'Curso 3', '<p>asdfasdfasdfa sdfasdfhkjashdfjaks dfka <b>sdfjkas </b>dflas fdasd fajksdfa sldfka sjdflas dfklas dkf asdfaslkdfh asjfd asdfjas dfa dsfas dfasdfs</p>', '<p>asdjfkasdhf askdfh askjdf askjdf ajksdf <b>jkasdfjkadsjfaksjhfdlkasjdfasfdas </b>dfas df safjsjakdfkasdjflkaskldfjklasjdklfa sdfjka sdfjkas dfkjas dfajksl dfjaksdfaslkjdfhajlkjs fdjklas dfasjkd fjaklsdf aksdhfkjasldfajlksdfkalsdfa.</p>', 'd432d034b91509a95d9e26d21c640d0c.jpg', 1, 4, '', 1, '550.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `empresa`
--

CREATE TABLE `empresa` (
  `empresa_id` int(11) NOT NULL,
  `texto` text NOT NULL,
  `phone` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `empresa`
--

INSERT INTO `empresa` (`empresa_id`, `texto`, `phone`, `email`, `address`) VALUES
(1, '<p>\r\n\r\n</p><p>Hello World es un Centro de Estudios que agrupa las nuevas materias que tiene que conocer todo profesional para ser competitivo, dichas materias van de la mano con la tecnologÃƒÂ­a, creatividad e innovaciÃƒÂ³n. La era digital llega a su mÃƒÂ¡xima expresiÃƒÂ³n en esta empresa que forma nuevos talentos.</p><p>Dentro de su recurso humano, Hello World agrupa a profesionales de diversas ÃƒÂ¡reas que facilitan sus conocimientos a otros, ademÃƒÂ¡s ser parte de Hello World ofrece oportunidades como instructor, investigador, desarrollador o en sÃƒÂ­ mismo plataforma de despliegue de nuevos emprendimientos (startups).</p>\r\n\r\n<br><p></p>', '6546464', 'info@helloworld.com', 'aslkdjfklasjfd asldfjalksdjf aslkdf aslkd');

-- --------------------------------------------------------

--
-- Table structure for table `image_album`
--

CREATE TABLE `image_album` (
  `image_album_id` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `album_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `image_album`
--

INSERT INTO `image_album` (`image_album_id`, `image`, `album_id`) VALUES
(2, '8383362e57a85f3048284f2c8d5b4724.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id_lang` int(11) NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id_lang`, `name`) VALUES
(1, 'Spanish'),
(2, 'English'),
(3, 'Portugal'),
(4, 'german'),
(5, 'chino');

-- --------------------------------------------------------

--
-- Table structure for table `modulo`
--

CREATE TABLE `modulo` (
  `modulo_id` int(11) NOT NULL,
  `nombre` varchar(256) NOT NULL,
  `cant_horas` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `id_lang` int(11) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `modulo`
--

INSERT INTO `modulo` (`modulo_id`, `nombre`, `cant_horas`, `price`, `curso_id`, `id_lang`, `is_active`) VALUES
(1, 'Módulo Introductorio', 60, '240.00', 2, 1, 0),
(2, 'Modulo 1', 100, '90.00', 2, 1, 1),
(3, 'Módulo 2', 60, '250.00', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `modulo_estudiante`
--

CREATE TABLE `modulo_estudiante` (
  `modulo_estudiante_id` int(11) NOT NULL,
  `modulo_id` int(11) NOT NULL,
  `estudiante_id` int(11) NOT NULL,
  `terminado` int(11) NOT NULL,
  `nota_examen` decimal(10,2) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `modulo_estudiante`
--

INSERT INTO `modulo_estudiante` (`modulo_estudiante_id`, `modulo_id`, `estudiante_id`, `terminado`, `nota_examen`, `fecha`) VALUES
(2, 2, 3, 0, '0.00', '2016-07-11'),
(3, 3, 3, 0, '0.00', '2016-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `noticia`
--

CREATE TABLE `noticia` (
  `noticia_id` int(11) NOT NULL,
  `titulo` varchar(256) NOT NULL,
  `subtitle` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `noticia`
--

INSERT INTO `noticia` (`noticia_id`, `titulo`, `subtitle`, `image`, `descripcion`, `fecha`, `user_id`) VALUES
(2, 'Noticia 1', 'Subtitulo noticia 1', '36a14f4002a54dacb582cec24875c0eb.jpg', '<p>asdfasfdsfd</p>', '2016-06-13', 1),
(3, 'Titulo 12311', 'Subtitulo 123', '7e74144cbe987021355418afddc3ae22.jpg', '<p>asdafda fsdf asdf asdfas dfaf dasdf asdf asdf asdf asdf asdfas dfas dfa sdfasdfasd</p>', '2016-07-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `opinion`
--

CREATE TABLE `opinion` (
  `opinion_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `modulo_id` int(11) NOT NULL,
  `texto` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `phrase`
--

CREATE TABLE `phrase` (
  `phrase_id` int(11) NOT NULL,
  `titulo` varchar(256) NOT NULL,
  `resumen` text NOT NULL,
  `author` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `pregunta`
--

CREATE TABLE `pregunta` (
  `pregunta_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `modulo_id` int(11) NOT NULL,
  `texto` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `pregunta`
--

INSERT INTO `pregunta` (`pregunta_id`, `is_active`, `modulo_id`, `texto`, `image`, `tipo`) VALUES
(1, 1, 2, 'Pregunta 11', './uploads/preguntas//1467918105.jpg', 2),
(2, 1, 2, 'Pregunta 2', '', 1),
(3, 0, 2, '', './uploads/preguntas//1467918093.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `respuesta`
--

CREATE TABLE `respuesta` (
  `respuesta_id` int(11) NOT NULL,
  `texto` varchar(256) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `es_verdadera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `respuesta`
--

INSERT INTO `respuesta` (`respuesta_id`, `texto`, `pregunta_id`, `is_active`, `es_verdadera`) VALUES
(1, 'Respuesta 11', 1, 1, 1),
(2, 'Respuesta 2', 1, 0, 0),
(3, 'Respuesta 3', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role`) VALUES
(1, 'Admin'),
(2, 'Teacher'),
(3, 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `titulo1` varchar(256) NOT NULL,
  `titulo2` varchar(256) NOT NULL,
  `titulo3` varchar(256) NOT NULL,
  `texto_boton` varchar(256) NOT NULL,
  `url_boton` varchar(256) NOT NULL,
  `es_interna` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `id_lang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `titulo1`, `titulo2`, `titulo3`, `texto_boton`, `url_boton`, `es_interna`, `is_active`, `image`, `id_lang`) VALUES
(1, 'Solo tienes que escoger lo que te gustarÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â­a hacer', 'Aprenda con nosotros', 'Con certificaciones y validez universitaria', 'Inicie su curso ahora', 'http://www.google.com', 0, 1, 'a1e322ae5ada6b61a981126d3c8d03ad.jpg', 1),
(2, 'Solo el que enseÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â±a sabe construir', 'InvestigaciÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â³n y Desarrollo', 'Sus proyectos tecnolÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â³gicos con resultados', 'Conozca nuestras ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¡reas', 'http://www.google.com', 1, 1, '6b3e3b7bc8935533a8520ba9c467a933.jpg', 1),
(3, 'sdfsdfsdf', 'fdsfdsdfsdfsd', 'ffdsdfsfdsfd', 'asfdasfdasfd', 'http://www.google.com', 0, 0, 'd5ef5f396b0a8d6bb22b8ed5fbc8d95c.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `solicitud_saldo`
--

CREATE TABLE `solicitud_saldo` (
  `solicitud_saldo_id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `monto` decimal(10,2) NOT NULL,
  `state` int(11) NOT NULL,
  `user_solicita` int(11) NOT NULL,
  `user_confirma` int(11) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `solicitud_saldo`
--

INSERT INTO `solicitud_saldo` (`solicitud_saldo_id`, `fecha`, `monto`, `state`, `user_solicita`, `user_confirma`, `image`) VALUES
(2, '2016-07-08 14:20:44', '100.00', 1, 3, 1, './uploads/saldo//1468005644.jpg'),
(4, '2016-07-08 15:44:53', '50.00', -1, 3, 1, './uploads/saldo//1468010693.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `solicitud_trabajo`
--

CREATE TABLE `solicitud_trabajo` (
  `solicitud_trabajo_id` int(11) NOT NULL,
  `nombre` varchar(256) NOT NULL,
  `apellidos` varchar(256) NOT NULL,
  `cedula` varchar(256) NOT NULL,
  `ciudad` varchar(256) NOT NULL,
  `telefono` varchar(256) NOT NULL,
  `celular` varchar(256) NOT NULL,
  `area_id` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `observaciones` text NOT NULL,
  `file` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `solicitud_trabajo`
--

INSERT INTO `solicitud_trabajo` (`solicitud_trabajo_id`, `nombre`, `apellidos`, `cedula`, `ciudad`, `telefono`, `celular`, `area_id`, `email`, `observaciones`, `file`) VALUES
(1, 'Pedro ', 'Fuentes', '123456789', 'Quito', '45545454554', '12123131123', 2, 'pfuentes@gmail.com', 'asdfakjsdfhjksadf askjdfh asjdf asjkdf asjdf askj dfjas dfjashfdjaks dfajks djkas djfksa', './uploads/solicitud_trabajo//1467749902.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `tag_id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `id_lang` int(11) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`tag_id`, `name`, `id_lang`, `is_active`) VALUES
(1, 'Matemática 1', 1, 0),
(2, 'Etiqueta 1', 1, 1),
(3, 'Etiqueta 2', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tag_curso`
--

CREATE TABLE `tag_curso` (
  `tag_curso_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `tag_curso`
--

INSERT INTO `tag_curso` (`tag_curso_id`, `tag_id`, `curso_id`) VALUES
(2, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `target_curso`
--

CREATE TABLE `target_curso` (
  `target_curso_id` int(11) NOT NULL,
  `nombre` varchar(256) NOT NULL,
  `curso_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `topico`
--

CREATE TABLE `topico` (
  `topico_id` int(11) NOT NULL,
  `nombre` varchar(256) NOT NULL,
  `modulo_id` int(11) NOT NULL,
  `video_url` varchar(256) NOT NULL,
  `id_lang` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `descripcion` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topico`
--

INSERT INTO `topico` (`topico_id`, `nombre`, `modulo_id`, `video_url`, `id_lang`, `is_active`, `descripcion`) VALUES
(1, 'Topico 1', 2, 'http://www.google.com', 1, 0, ''),
(2, 'Topico 2', 2, 'http://www.facebook.com', 1, 1, 'Mi segunda descripción de prueba'),
(3, 'Topico de prueba 2', 2, 'http://www.mitopico1.com', 1, 1, 'Trabajo con IDE para Android'),
(4, 'Topico 1 módulo 2', 3, 'http://www.mitopico1.com', 1, 1, 'Esto es una descripción para las pruebas');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `monto` decimal(10,2) NOT NULL,
  `fecha` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `modulo_id` int(11) NOT NULL,
  `texto` varchar(256) NOT NULL,
  `type` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `monto`, `fecha`, `user_id`, `modulo_id`, `texto`, `type`, `curso_id`) VALUES
(3, '100.00', '2016-07-11 16:58:29', 3, 0, 'Curso comprado correctamente ( Curso de Programación para dispositivos Android )', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `cedula` varchar(256) NOT NULL,
  `country_id` int(11) NOT NULL,
  `direccion` text NOT NULL,
  `role_id` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `billetera` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `is_active`, `name`, `email`, `password`, `phone`, `cedula`, `country_id`, `direccion`, `role_id`, `image`, `billetera`) VALUES
(1, 1, 'Rafael Bomate', 'rfbomate86@gmail.com', 'dc1b859c6c5d92073cb0ec8cf9bdb6f6', '02546987', '', 1, '', 1, './uploads/user/1467993142.jpg', '0.00'),
(2, 0, 'Alain Ruiz Chamizo', 'alainruizchamizo@gmail.com', 'dc1b859c6c5d92073cb0ec8cf9bdb6f6', '455454554111', '12212121212', 0, '<p>Mi casa en quito</p>', 1, '', '0.00'),
(3, 1, 'Yenia Román Bu', 'yeniaromanbu@gmail.com', 'dc1b859c6c5d92073cb0ec8cf9bdb6f6', '113213113', '132131321132', 0, 'mi casa', 3, '', '100.00');

-- --------------------------------------------------------

--
-- Table structure for table `valoracion`
--

CREATE TABLE `valoracion` (
  `valoracion_id` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `modulo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `bibliografia`
--
ALTER TABLE `bibliografia`
  ADD PRIMARY KEY (`bibliografia_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `certificacion`
--
ALTER TABLE `certificacion`
  ADD PRIMARY KEY (`certificacion_id`);

--
-- Indexes for table `conversacion`
--
ALTER TABLE `conversacion`
  ADD PRIMARY KEY (`conversacion_id`);

--
-- Indexes for table `convocatoria`
--
ALTER TABLE `convocatoria`
  ADD PRIMARY KEY (`convocatoria_id`);

--
-- Indexes for table `convocatoria_estudiante`
--
ALTER TABLE `convocatoria_estudiante`
  ADD PRIMARY KEY (`convocatoria_estudiante_id`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`curso_id`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`empresa_id`);

--
-- Indexes for table `image_album`
--
ALTER TABLE `image_album`
  ADD PRIMARY KEY (`image_album_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id_lang`);

--
-- Indexes for table `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`modulo_id`);

--
-- Indexes for table `modulo_estudiante`
--
ALTER TABLE `modulo_estudiante`
  ADD PRIMARY KEY (`modulo_estudiante_id`);

--
-- Indexes for table `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`noticia_id`);

--
-- Indexes for table `opinion`
--
ALTER TABLE `opinion`
  ADD PRIMARY KEY (`opinion_id`);

--
-- Indexes for table `phrase`
--
ALTER TABLE `phrase`
  ADD PRIMARY KEY (`phrase_id`);

--
-- Indexes for table `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`pregunta_id`);

--
-- Indexes for table `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`respuesta_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `solicitud_saldo`
--
ALTER TABLE `solicitud_saldo`
  ADD PRIMARY KEY (`solicitud_saldo_id`);

--
-- Indexes for table `solicitud_trabajo`
--
ALTER TABLE `solicitud_trabajo`
  ADD PRIMARY KEY (`solicitud_trabajo_id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`tag_id`);

--
-- Indexes for table `tag_curso`
--
ALTER TABLE `tag_curso`
  ADD PRIMARY KEY (`tag_curso_id`);

--
-- Indexes for table `target_curso`
--
ALTER TABLE `target_curso`
  ADD PRIMARY KEY (`target_curso_id`);

--
-- Indexes for table `topico`
--
ALTER TABLE `topico`
  ADD PRIMARY KEY (`topico_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`valoracion_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bibliografia`
--
ALTER TABLE `bibliografia`
  MODIFY `bibliografia_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `certificacion`
--
ALTER TABLE `certificacion`
  MODIFY `certificacion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `conversacion`
--
ALTER TABLE `conversacion`
  MODIFY `conversacion_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `convocatoria`
--
ALTER TABLE `convocatoria`
  MODIFY `convocatoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `convocatoria_estudiante`
--
ALTER TABLE `convocatoria_estudiante`
  MODIFY `convocatoria_estudiante_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `curso_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `empresa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `image_album`
--
ALTER TABLE `image_album`
  MODIFY `image_album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id_lang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `modulo`
--
ALTER TABLE `modulo`
  MODIFY `modulo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `modulo_estudiante`
--
ALTER TABLE `modulo_estudiante`
  MODIFY `modulo_estudiante_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `noticia`
--
ALTER TABLE `noticia`
  MODIFY `noticia_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `opinion`
--
ALTER TABLE `opinion`
  MODIFY `opinion_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `phrase`
--
ALTER TABLE `phrase`
  MODIFY `phrase_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `pregunta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `respuesta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `solicitud_saldo`
--
ALTER TABLE `solicitud_saldo`
  MODIFY `solicitud_saldo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `solicitud_trabajo`
--
ALTER TABLE `solicitud_trabajo`
  MODIFY `solicitud_trabajo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tag_curso`
--
ALTER TABLE `tag_curso`
  MODIFY `tag_curso_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `target_curso`
--
ALTER TABLE `target_curso`
  MODIFY `target_curso_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `topico`
--
ALTER TABLE `topico`
  MODIFY `topico_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `valoracion`
--
ALTER TABLE `valoracion`
  MODIFY `valoracion_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
