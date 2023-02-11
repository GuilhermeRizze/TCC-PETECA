-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Dez-2019 às 00:03
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `portal_de_provas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bauteca`
--

CREATE TABLE `bauteca` (
  `cod_bau` int(11) NOT NULL,
  `professor` varchar(70) NOT NULL,
  `cod_materia` int(11) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `texto` varchar(1000) NOT NULL,
  `anexo1` varchar(400) NOT NULL,
  `anexo2` varchar(400) NOT NULL,
  `anexo3` varchar(400) NOT NULL,
  `anexo4` varchar(400) NOT NULL,
  `anexo5` varchar(400) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bauteca`
--

INSERT INTO `bauteca` (`cod_bau`, `professor`, `cod_materia`, `titulo`, `texto`, `anexo1`, `anexo2`, `anexo3`, `anexo4`, `anexo5`) VALUES
(28, '---', 15, 'Android', 'Leiam o texto abaixo ', 'Cadastra Roteiro.png', 'Banner PetecA.pptx', 'PortfÃ³lio- Editar.docx', 'troca- celular.pdf', ''),
(25, 'Ana Paula', 24, 'Fundamentos', ' Leiam o texto abaixo inserido', 'Aula 1- Fundamentos bÃ¡sicos da informÃ¡tica.docx', '', '', '', ''),
(24, 'Maria', 18, 'Como Usar o Word', ' Segue inseridos no arquivo o Manual BÃ¡sico do Word no formato em PDF utilizado na aula.', 'word_basico.pdf', '', '', '', ''),
(29, 'TESTE', 15, 'TESTE', 'TESTE ', 'TCC PetecA.pdf', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `correcao`
--

CREATE TABLE `correcao` (
  `cod_correcao` int(11) NOT NULL,
  `id_questao` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_prova` int(11) NOT NULL,
  `correcao` varchar(100) NOT NULL,
  `id_resposta` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `cod_curso` int(11) NOT NULL,
  `curso` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`cod_curso`, `curso`) VALUES
(1, 'TÉCNICO INFORMÁTICA'),
(2, 'TÉCNICO AGROPECUÁRIA'),
(3, 'TÉCNICO AGROINDÚSTRIA '),
(4, 'TÉCNICO QUIMICA'),
(5, 'TÉCNICO DESENVOLVIMENTO DE SISTEMAS'),
(6, 'TÉCNICO INFORMÁTICA PARA INTERNET'),
(7, 'TÉCNICO ADMINISTRAÇÃO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `forum_answer`
--

CREATE TABLE `forum_answer` (
  `cod` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(80) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `datatime` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `forum_answer`
--

INSERT INTO `forum_answer` (`cod`, `id`, `name`, `email`, `answer`, `datatime`) VALUES
(9, 6, 'Ana ', 'ana@gmail.com', 'Ã© 10', '04/12/19 13:31:55'),
(8, 6, 'JosÃ©', 'jose@gmail.com', 'Na pÃ¡gina 6 Ã© desejÃ¡vel que se descreva a imagem?', '28/11/19 14:21:26'),
(10, 6, 'vasasdad', 'dads@ana', 'sajhdnahjdoilwa', '04/12/19 14:12:13'),
(11, 6, 'Ana', 'ana@gmail.com', 'Pode ser sim.', '04/12/19 14:12:14'),
(12, 6, 'rayane', 'rayane@132asa', 'qual a resposta?', '04/12/19 14:16:04'),
(13, 6, 'Ana', 'ana@gmail.com', '123', '04/12/19 14:39:58'),
(14, 6, 'Gui', 'gui@gmil.com', '333', '04/12/19 14:53:19'),
(15, 6, 'Ana', 'ana@gmail', '2', '04/12/19 15:20:54'),
(16, 6, 'CapÃ£o', 'CapÃ£o_redondo@hotmail.com', 'A lua cheia ....', '04/12/19 15:21:09'),
(17, 6, 'Redondo', 'redondo_capao@hotmail.com', 'Clareia as ruas do capÃ£o...', '04/12/19 15:21:25'),
(18, 6, 'CapÃ£o', 'Capao_redondo@hotmail.com', 'Acima de noix so Deus hulmilde ne nÃ£o ??', '04/12/19 15:22:13'),
(19, 6, 'Redondo', 'redondo_capao@hotmail.com', 'NÃ© nÃ£o, saÃºde PLIM! Mulher e mt som..\r\n', '04/12/19 15:22:47'),
(20, 6, 'Capao', 'Capao_redondo@hotmail.com', 'Vinho branco para todos um advogado bom', '04/12/19 15:23:36'),
(21, 6, 'Capao', 'Capao_redondo@hotmail.com', 'COF COF...', '04/12/19 15:24:06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `forum_question`
--

CREATE TABLE `forum_question` (
  `id` int(4) NOT NULL,
  `topic` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL,
  `name` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL DEFAULT '',
  `datetime` varchar(25) NOT NULL DEFAULT '',
  `view` int(4) NOT NULL DEFAULT '0',
  `reply` int(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `forum_question`
--

INSERT INTO `forum_question` (`id`, `topic`, `detail`, `name`, `email`, `datetime`, `view`, `reply`) VALUES
(7, 'a', 'a', 'a', 'a', '04/12/19 03:21:19', 4, 0),
(6, 'Tarefa de OSA', 'Paginas 5 e 6 do livro postado no portal Bauteca, deve-se ler e resumir as pÃ¡ginas do Manual.', 'Maria', 'maria@email.com', '27/11/19 11:50:08', 55, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `hist_resp`
--

CREATE TABLE `hist_resp` (
  `cod_hist_resp` int(3) NOT NULL,
  `cod_questao` int(11) NOT NULL,
  `resposta` varchar(1) NOT NULL,
  `cod_usuario` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `hist_resp`
--

INSERT INTO `hist_resp` (`cod_hist_resp`, `cod_questao`, `resposta`, `cod_usuario`) VALUES
(1, 51, '', 4),
(2, 53, '', 4),
(3, 54, '', 4),
(4, 54, '', 4),
(5, 54, '', 4),
(6, 54, '', 4),
(7, 54, '', 4),
(8, 54, '', 4),
(9, 54, '', 4),
(10, 54, '', 4),
(11, 54, '', 4),
(12, 54, '', 4),
(13, 54, '', 4),
(14, 54, '', 4),
(15, 54, '', 4),
(16, 54, '', 4),
(17, 54, '', 4),
(18, 54, '', 4),
(19, 54, '', 4),
(20, 54, '', 4),
(21, 54, '', 4),
(22, 54, '', 4),
(23, 54, '', 4),
(24, 54, '', 4),
(25, 51, 'a', 4),
(26, 80, 'a', 4),
(27, 79, 'a', 4),
(28, 75, '', 4),
(29, 78, '', 4),
(30, 73, '', 4),
(31, 81, '', 4),
(32, 76, '', 4),
(33, 77, '', 4),
(34, 82, '', 4),
(35, 74, '', 4),
(36, 80, 'a', 4),
(37, 79, 'a', 4),
(38, 75, '', 4),
(39, 78, '', 4),
(40, 73, '', 4),
(41, 81, '', 4),
(42, 76, '', 4),
(43, 77, '', 4),
(44, 82, '', 4),
(45, 74, '', 4),
(46, 80, 'a', 4),
(47, 79, 'a', 4),
(48, 75, '', 4),
(49, 78, '', 4),
(50, 73, '', 4),
(51, 81, '', 4),
(52, 76, '', 4),
(53, 77, '', 4),
(54, 82, '', 4),
(55, 74, '', 4),
(56, 80, 'a', 4),
(57, 79, 'a', 4),
(58, 75, '', 4),
(59, 78, '', 4),
(60, 73, '', 4),
(61, 81, '', 4),
(62, 76, '', 4),
(63, 77, '', 4),
(64, 82, '', 4),
(65, 74, '', 4),
(66, 78, 'a', 4),
(67, 81, 'a', 4),
(68, 79, 'a', 4),
(69, 82, 'b', 4),
(70, 77, 'c', 4),
(71, 73, 'd', 4),
(72, 80, 'a', 4),
(73, 76, 'c', 4),
(74, 75, 'a', 4),
(75, 74, 'a', 4),
(76, 79, 'a', 4),
(77, 73, 'a', 4),
(78, 80, 'a', 4),
(79, 82, 'a', 4),
(80, 76, 'a', 4),
(81, 78, 'a', 4),
(82, 74, 'a', 4),
(83, 81, 'a', 4),
(84, 77, 'a', 4),
(85, 75, 'a', 4),
(86, 77, 'a', 4),
(87, 79, 'c', 4),
(88, 73, 'd', 4),
(89, 81, 'a', 4),
(90, 78, 'b', 4),
(91, 75, 'd', 4),
(92, 80, 'b', 4),
(93, 74, '', 4),
(94, 82, 'b', 4),
(95, 76, 'd', 4),
(96, 77, '', 4),
(97, 79, '', 4),
(98, 73, '', 4),
(99, 81, '', 4),
(100, 78, '', 4),
(101, 75, '', 4),
(102, 80, '', 4),
(103, 74, '', 4),
(104, 82, '', 4),
(105, 76, 'a', 4),
(106, 74, '', 4),
(107, 80, '', 4),
(108, 76, '', 4),
(109, 78, '', 4),
(110, 82, '', 4),
(111, 73, '', 4),
(112, 79, '', 4),
(113, 75, '', 4),
(114, 81, 'a', 4),
(115, 77, 'a', 4),
(116, 74, 'a', 4),
(117, 80, '', 4),
(118, 76, '', 4),
(119, 78, 'a', 4),
(120, 82, 'c', 4),
(121, 73, 'd', 4),
(122, 79, '', 4),
(123, 75, '', 4),
(124, 81, 'b', 4),
(125, 77, '', 4),
(126, 80, 'a', 4),
(127, 73, 'a', 4),
(128, 75, 'a', 4),
(129, 76, 'a', 4),
(130, 81, 'b', 4),
(131, 77, 'b', 4),
(132, 78, 'b', 4),
(133, 82, 'b', 4),
(134, 79, 'a', 4),
(135, 74, 'a', 4),
(136, 86, 'd', 4),
(137, 88, 'd', 4),
(138, 93, 'c', 4),
(139, 92, 'c', 4),
(140, 89, 'd', 4),
(141, 87, 'b', 4),
(142, 90, 'b', 4),
(143, 94, 'd', 4),
(144, 95, 'a', 4),
(145, 91, 'b', 4),
(146, 88, '', 4),
(147, 91, '', 4),
(148, 89, '', 4),
(149, 95, '', 4),
(150, 86, '', 4),
(151, 90, '', 4),
(152, 93, '', 4),
(153, 87, '', 4),
(154, 92, 'd', 4),
(155, 94, '', 4),
(156, 86, 'd', 4),
(157, 88, 'd', 4),
(158, 87, 'd', 4),
(159, 95, 'd', 4),
(160, 92, 'd', 4),
(161, 94, 'd', 4),
(162, 90, 'd', 4),
(163, 91, 'd', 4),
(164, 89, 'd', 4),
(165, 93, 'd', 4),
(166, 94, '', 4),
(167, 93, '', 4),
(168, 92, '', 4),
(169, 88, '', 4),
(170, 86, '', 4),
(171, 91, '', 4),
(172, 90, '', 4),
(173, 89, '', 4),
(174, 87, '', 4),
(175, 95, '', 4),
(176, 90, 'a', 4),
(177, 89, 'b', 4),
(178, 86, 'c', 4),
(179, 91, 'c', 4),
(180, 88, 'b', 4),
(181, 94, 'c', 4),
(182, 92, 'd', 4),
(183, 95, 'c', 4),
(184, 93, 'a', 4),
(185, 87, 'b', 4),
(186, 91, '', 4),
(187, 90, '', 4),
(188, 87, '', 4),
(189, 95, '', 4),
(190, 94, '', 4),
(191, 88, '', 4),
(192, 93, '', 4),
(193, 86, '', 4),
(194, 89, '', 4),
(195, 92, '', 4),
(196, 91, '', 4),
(197, 90, '', 4),
(198, 87, '', 4),
(199, 95, '', 4),
(200, 94, '', 4),
(201, 88, '', 4),
(202, 93, '', 4),
(203, 86, '', 4),
(204, 89, '', 4),
(205, 92, '', 4),
(206, 94, '', 4),
(207, 87, '', 4),
(208, 88, '', 4),
(209, 92, '', 4),
(210, 91, '', 4),
(211, 90, '', 4),
(212, 95, '', 4),
(213, 93, '', 4),
(214, 86, '', 4),
(215, 89, '', 4),
(216, 94, '', 4),
(217, 87, '', 4),
(218, 88, '', 4),
(219, 92, '', 4),
(220, 91, '', 4),
(221, 90, '', 4),
(222, 95, '', 4),
(223, 93, '', 4),
(224, 86, '', 4),
(225, 89, 'a', 4),
(226, 94, '', 4),
(227, 87, '', 4),
(228, 88, '', 4),
(229, 92, '', 4),
(230, 91, '', 4),
(231, 90, '', 4),
(232, 95, '', 4),
(233, 93, '', 4),
(234, 86, '', 4),
(235, 89, '', 4),
(236, 93, '', 4),
(237, 94, '', 4),
(238, 86, '', 4),
(239, 89, '', 4),
(240, 87, '', 4),
(241, 95, '', 4),
(242, 92, '', 4),
(243, 88, '', 4),
(244, 91, '', 4),
(245, 90, '', 4),
(246, 91, '', 4),
(247, 95, '', 4),
(248, 86, '', 4),
(249, 88, '', 4),
(250, 90, '', 4),
(251, 89, '', 4),
(252, 93, '', 4),
(253, 92, '', 4),
(254, 94, '', 4),
(255, 87, '', 4),
(256, 89, '', 4),
(257, 94, '', 4),
(258, 95, '', 4),
(259, 86, '', 4),
(260, 88, '', 4),
(261, 90, '', 4),
(262, 92, '', 4),
(263, 91, '', 4),
(264, 93, '', 4),
(265, 87, '', 4),
(266, 92, 'd', 4),
(267, 91, '', 4),
(268, 88, '', 4),
(269, 89, '', 4),
(270, 86, '', 4),
(271, 90, '', 4),
(272, 93, '', 4),
(273, 94, '', 4),
(274, 95, '', 4),
(275, 87, '', 4),
(276, 90, '', 4),
(277, 93, '', 4),
(278, 95, '', 4),
(279, 89, '', 4),
(280, 87, '', 4),
(281, 86, '', 4),
(282, 91, '', 4),
(283, 88, '', 4),
(284, 94, '', 4),
(285, 92, '', 4),
(286, 90, '', 4),
(287, 94, '', 4),
(288, 95, '', 4),
(289, 92, '', 4),
(290, 88, '', 4),
(291, 86, '', 4),
(292, 87, '', 4),
(293, 89, '', 4),
(294, 91, '', 4),
(295, 93, '', 4),
(296, 86, '', 10),
(297, 95, '', 10),
(298, 125, '', 10),
(299, 88, '', 10),
(300, 122, '', 10),
(301, 91, '', 10),
(302, 124, '', 10),
(303, 87, '', 10),
(304, 92, '', 10),
(305, 90, '', 10),
(306, 88, '', 10),
(307, 86, '', 10),
(308, 93, '', 10),
(309, 89, '', 10),
(310, 95, '', 10),
(311, 92, '', 10),
(312, 122, '', 10),
(313, 125, '', 10),
(314, 87, '', 10),
(315, 91, '', 10),
(316, 139, 'a', 10),
(317, 131, 'd', 10),
(318, 140, '', 10),
(319, 143, '', 10),
(320, 142, '', 10),
(321, 128, '', 10),
(322, 141, '', 10),
(323, 132, '', 10),
(324, 129, '', 10),
(325, 136, '', 10),
(326, 135, '', 10),
(327, 143, '', 10),
(328, 129, '', 10),
(329, 136, '', 10),
(330, 131, 'b', 10),
(331, 132, '', 10),
(332, 141, '', 10),
(333, 142, '', 10),
(334, 128, '', 10),
(335, 140, '', 10),
(336, 131, 'b', 10),
(337, 136, '', 10),
(338, 143, '', 10),
(339, 132, '', 10),
(340, 140, '', 10),
(341, 129, '', 10),
(342, 139, 'd', 10),
(343, 142, '', 10),
(344, 128, '', 10),
(345, 141, '', 10),
(346, 113, '', 10),
(347, 110, '', 10),
(348, 111, '', 10),
(349, 115, '', 10),
(350, 108, '', 10),
(351, 106, '', 10),
(352, 107, '', 10),
(353, 109, '', 10),
(354, 112, '', 10),
(355, 114, '', 10),
(356, 113, 'c', 10),
(357, 108, 'b', 10),
(358, 109, 'b', 10),
(359, 111, 'c', 10),
(360, 107, 'c', 10),
(361, 114, 'd', 10),
(362, 106, 'a', 10),
(363, 112, 'a', 10),
(364, 110, 'a', 10),
(365, 115, 'a', 10),
(366, 150, '', 10),
(367, 137, 'd', 10),
(368, 148, '', 10),
(369, 145, '', 10),
(370, 146, '', 10),
(371, 147, '', 10),
(372, 144, '', 10),
(373, 149, '', 10),
(374, 151, '', 10),
(375, 152, '', 10),
(376, 113, 'b', 10),
(377, 114, 'a', 10),
(378, 108, 'd', 10),
(379, 106, 'c', 10),
(380, 115, 'd', 10),
(381, 110, 'b', 10),
(382, 111, 'd', 10),
(383, 109, 'a', 10),
(384, 107, 'b', 10),
(385, 112, 'c', 10),
(386, 162, '', 10),
(387, 167, '', 10),
(388, 163, '', 10),
(389, 165, '', 10),
(390, 166, '', 10),
(391, 159, 'a', 10),
(392, 160, 'a', 10),
(393, 164, '', 10),
(394, 161, '', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `hist_resp_dissert`
--

CREATE TABLE `hist_resp_dissert` (
  `cod_hist_resp` int(11) NOT NULL,
  `id_questao` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_prova` int(11) NOT NULL,
  `resposta` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `hist_resp_dissert`
--

INSERT INTO `hist_resp_dissert` (`cod_hist_resp`, `id_questao`, `id_usuario`, `id_prova`, `resposta`) VALUES
(89, 5, 4, 3, '1'),
(88, 4, 4, 3, '1'),
(87, 1, 4, 3, '1'),
(86, 2, 4, 3, '1'),
(85, 3, 4, 3, '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `materia`
--

CREATE TABLE `materia` (
  `cod_materia` int(3) NOT NULL,
  `materia` varchar(90) NOT NULL,
  `cod_curso` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `materia`
--

INSERT INTO `materia` (`cod_materia`, `materia`, `cod_curso`) VALUES
(18, 'TPI', 1),
(17, 'LPOO', 1),
(16, 'LÃ“GICA', 1),
(15, 'MOBILIDADE', 1),
(14, 'TLBD', 1),
(13, 'OSA', 1),
(19, 'Planejamento e administraÃ§Ã£o agroindustrial', 3),
(20, 'FÃ­sico QuÃ­mica', 3),
(21, 'FÃ­sico QuÃ­mica', 4),
(22, 'Qualitativa e Quantitativa', 4),
(23, 'Designer Digital', 5),
(24, 'Fundamentos da InformÃ¡tica', 6),
(25, 'AdministraÃ§Ã£o e Empreendedorismo', 7),
(26, 'AdministraÃ§Ã£o de Vendas', 7),
(27, 'Avicultura', 2),
(28, 'Topografia', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `provas`
--

CREATE TABLE `provas` (
  `cod_provas` int(11) NOT NULL,
  `titulo_prova` varchar(100) NOT NULL,
  `materia` varchar(30) NOT NULL,
  `tempo` time NOT NULL,
  `quant_quests` int(2) NOT NULL,
  `tipo` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `provas`
--

INSERT INTO `provas` (`cod_provas`, `titulo_prova`, `materia`, `tempo`, `quant_quests`, `tipo`) VALUES
(43, 'algoritimo', 'LÃ“GICA', '20:40:00', 0, 'o'),
(42, '00110010 01110010', 'LÃ“GICA', '01:40:00', 0, 'o'),
(41, 'algoritimo', 'LÃ“GICA', '00:40:00', 0, 'o'),
(40, 'algoritimo', 'LÃ“GICA', '00:40:00', 0, 'o'),
(39, 'Algoritimo', 'LÃ“GICA', '00:20:00', 0, 'o'),
(38, 'TESTE', 'TPI', '00:01:00', 0, 'o'),
(37, 'fds', 'Topografia', '00:02:00', 3, 'd'),
(36, 'logica', 'LÃ“GICA', '00:01:00', 3, 'd'),
(35, '', 'LÃ“GICA', '00:40:00', 0, 'o'),
(34, 'info2', 'TPI', '00:01:00', 5, 'd'),
(33, 'info1', 'TPI', '00:01:00', 5, 'd'),
(32, 'FunÃ§Ãµes', 'LPOO', '00:40:00', 0, 'o'),
(28, 'Word', 'OSA', '00:00:07', 0, 'o'),
(31, 'Testes de Conhecimento', 'Fundamentos da InformÃ¡tica', '00:30:00', 0, 'o'),
(27, 'edddd', 'Teste Bauteca', '00:30:00', 4, 'd'),
(44, 'lkalala', 'TPI', '00:01:00', 0, 'o'),
(45, 'Algaritmo', 'LÃ“GICA', '00:20:00', 0, 'o'),
(46, 'Algoritmo', 'LÃ“GICA', '00:40:00', 0, 'o'),
(47, 'algoritimo', 'LÃ“GICA', '20:40:00', 0, 'o'),
(48, 'algaritmo', 'Fundamentos da InformÃ¡tica', '00:20:00', 0, 'o'),
(49, 'Testes de Conhecimento', 'Fundamentos da InformÃ¡tica', '00:40:00', 0, 'o'),
(50, 'Testes de Conhecimento', '', '00:40:00', 0, 'o'),
(51, 'Se lascaram!', 'FÃ­sico QuÃ­mica', '00:15:00', 0, 'o'),
(52, 'algoritimo', 'TLBD', '03:40:00', 0, 'o'),
(53, 'algoritimo', 'OSA', '00:40:00', 0, 'o'),
(54, 'Banco de dados', 'TLBD', '00:15:00', 0, 'o'),
(55, 'algoritimo', 'MOBILIDADE', '00:15:00', 0, 'o'),
(56, '6666', 'Fundamentos da InformÃ¡tica', '10:40:00', 0, 'o'),
(57, 'BEBETO', 'TPI', '00:54:00', 0, 'o'),
(58, 'Top Top Grafia', 'Topografia', '00:40:00', 0, 'o'),
(59, 'Excel', 'OSA', '00:10:00', 0, 'o'),
(60, 'algoritimo', '', '01:40:00', 0, 'o'),
(61, 'desenvolvimento', 'MOBILIDADE', '01:40:00', 0, 'o'),
(62, 'Meeee', 'TPI', '00:10:00', 0, 'o'),
(63, 'kkkkkkkkkk', 'TPI', '00:01:00', 0, 'o'),
(64, 'algoritimo', '', '00:40:00', 0, 'o');

-- --------------------------------------------------------

--
-- Estrutura da tabela `provas_dissertativas`
--

CREATE TABLE `provas_dissertativas` (
  `cod_provas` int(11) NOT NULL,
  `titulo_prova` varchar(100) NOT NULL,
  `materia` varchar(30) NOT NULL,
  `tempo` time NOT NULL,
  `quant_quests` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `provas_dissertativas`
--

INSERT INTO `provas_dissertativas` (`cod_provas`, `titulo_prova`, `materia`, `tempo`, `quant_quests`) VALUES
(1, '55', 'TPI', '00:10:00', 5),
(2, 'TESTE RG', 'Avicultura', '00:05:00', 2),
(3, 'TESTE CORREÃ‡ÃƒO', 'Avicultura', '00:05:00', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes`
--

CREATE TABLE `questoes` (
  `cod_questao` int(11) NOT NULL,
  `questao` varchar(2000) NOT NULL,
  `alt_A` varchar(300) NOT NULL,
  `alt_B` varchar(300) NOT NULL,
  `alt_C` varchar(300) NOT NULL,
  `alt_D` varchar(300) NOT NULL,
  `alt_correta` varchar(1) NOT NULL,
  `cod_prova` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `questoes`
--

INSERT INTO `questoes` (`cod_questao`, `questao`, `alt_A`, `alt_B`, `alt_C`, `alt_D`, `alt_correta`, `cod_prova`) VALUES
(86, 'No Word, quando se deseja criar uma tabela usando a barra de ferramentas, deve-se, inicialmente, clicar na funÃ§Ã£o:', 'Inicio.', 'ExibiÃ§Ã£o.', 'Layout da PÃ¡gina', 'Inserir.', 'd', 28),
(87, 'Durante uma ediÃ§Ã£o, usando Microsoft Word, um funcionÃ¡rio deseja sublinhar uma palavra. O procedimento deve ser:', 'selecionar a palavra e clicar no I na barra de ferramentas.', 'selecionar a palavra e clicar no S na barra de ferramentas.', 'selecionara palavra e digitar Ctrl + _', 'selecionar a palavra e clicar no N na barra de ferramentas.', 'b', 28),
(88, 'Um profissional acaba de escrever um texto no Microsoft Word e quer salvÃ¡-lo, usando o atalho de teclado. Ele deve digitar:', 'Ctrl + A', 'Ctrl + Z', 'Ctrl + C', 'Ctrl + B', 'd', 28),
(89, 'No Microsoft Word, para Windows, em portuguÃªs, o tipo de alinhamento onde o espaÃ§o de ambas as bordas Ã© alinhado com as margens Ã© o:', 'Centralizado.', 'DistribuiÃ§Ã£o espaÃ§ada.', 'Alinhado Ã  direita.', 'Justificado.', 'd', 28),
(90, 'O comando CTRL+Z, CTRL+C e CTRL+V no Microsoft Word, tem originalmente e respectivamente a funÃ§Ã£o de:', 'Excluir a linha toda, copiar e colar.', 'Desfazer a Ãºltima aÃ§Ã£o, copiar e colar.', 'Adicionar um novo parÃ¡grafo, colar e visualizar.', 'Selecionar o texto todo, copiar e visualizar.', 'b', 28),
(91, 'O comando CTLR+Z no Microsoft Word tem originalmente a funÃ§Ã£o de:', 'Selecionar o texto todo', 'Desfazer a Ãºltima aÃ§Ã£o.', 'Excluir a linha toda.', 'Adicionar um novo parÃ¡grafo.', 'b', 28),
(92, 'No Microsoft Word, quando uma palavra estÃ¡ com um sublinhado ondulado em vermelho, significa que:', 'A palavra estÃ¡ em maiÃºscula.', 'A palavra apresenta um erro gramatical.', 'A palavra apresenta um erro de ortografia.', 'A palavra deve ser excluÃ­da.', 'b', 28),
(93, 'Qual tipo de formato de arquivo que pode ser salvo no Microsoft Word, tem o objetivo de realizar a transferÃªncia de documentos entre diferentes programas, e nÃ£o sÃ³ para o Word?', '.txt', '.dot', '.docx', '.rtt', 'c', 28),
(94, 'Qual a principal funÃ§Ã£o do CTRL+C Ã©:', 'Colar', 'Recortar', 'Apagar', 'Copiar', 'd', 28),
(95, 'Qual a funÃ§Ã£o do CTRL+X:', 'Recortar', 'Copiar', 'Colar ', 'Desfazer', 'a', 28),
(106, 'Assinale a alternativa que apresenta corretamente o interpretador de linha de comando no Windows 7', 'cmd', 'ppt', 'bloc', 'calc', 'a', 31),
(107, 'O programa Word possui barras de ferramentas para facilitar a construÃ§Ã£o de um documento. Em um determinado momento um usuÃ¡rio precisou alterar a fonte e seu tamanho e modelo. Marque a alternativa que contÃ©m o nome da barra de ferramentas que indica esses recursos.', 'Regua', 'ConfiguraÃ§Ã£o', 'FormataÃ§Ã£o', 'Arquivo', 'c', 31),
(108, 'O programa desenvolvido por empresa de seguranÃ§a, com o objetivo de eliminar e detectar vÃ­rus no computador, e chamado de:', 'Firefox', 'Antivirus', 'Firemall', 'Antiwall', 'b', 31),
(109, 'A zona obscura na Internet, inacessÃ­vel atravÃ©s dos mecanismos mais populares de busca como o Google e o Bing Ã© denominada', 'Gray Web', 'Deep Web', 'Surface Web', 'NavegaÃ§Ã£o anÃ´nima', 'b', 31),
(110, 'Assinale a alternativa que apresenta corretamente um sistema operacional, cuja funÃ§Ã£o principal Ã© gerenciar recursos, memÃ³ria e processos do sistema, facilitando a interaÃ§Ã£o mÃ¡quina / homem.', 'Firewall', 'Pacote Office', 'Windows', 'Safari', 'c', 31),
(111, 'Quanto ao uso de operadores em fÃ³rmulas em Microsoft EXCEL, assinale a opÃ§Ã£o correta.', ' <>: ExponenciaÃ§Ã£o.', 'Â§: Porcentagem.', '#: ConcatenaÃ§Ã£o.', '&: ConexÃ£o de duas sequÃªncias de texto', 'd', 31),
(112, 'Quando navegamos na internet, sempre nos preocupamos na seguranÃ§a das informaÃ§Ãµes. Marque a alternativa correta em que o browser demonstra que o site estÃ¡ seguro.', 'http', 'https', 'http://', 'Worm', 'b', 31),
(113, 'Analise as informaÃ§Ãµes sobre os atalhos no Microsoft Word 2007.I. Ctrl + Y: usado para desfazer a Ãºltima aÃ§Ã£o. II. Ctrl + O: usado para inserir um novo objeto. III. Ctrl + U: localizar e substituir uma determinada palavra no texto por outra IV. Ctrl + F: localizar alguma palavra no texto. V. Ctrl + barra de espaÃ§os: usado para remover a formataÃ§Ã£o de um parÃ¡grafo ou palavra selecionada.  Em relaÃ§Ã£o aos itens acima, podemos concluir que:', 'Todas as informaÃ§Ãµes estÃ£o erradas', 'Apenas III e V estÃ£o corretas.', 'Apenas I e II estÃ£o erradas.', 'Apenas I e V estÃ£o erradas.', 'b', 31),
(114, 'No Word 2007, uma marca d` Ã¡gua pode ser inserida no  documento. Tal opÃ§Ã£o estÃ¡ disponÃ­vel na guia', 'Layout de pÃ¡gina.', 'ReferÃªncias.', 'Inserir.', 'RevisÃ£o.', 'a', 31),
(115, 'No MS Word 2010, Ã© possÃ­vel dividir o texto em colunas conforme apresentado em jornais e revistas. Na guia layout, sÃ£o algumas das opÃ§Ãµes disponÃ­veis para a configuraÃ§Ã£o de colunas, EXCETO:', 'uma.', ' esquerda.', 'condensada.', 'trÃªs.', 'c', 31),
(116, '', '', '', '', '', '', 40),
(117, '', '', '', '', '', '', 40),
(118, '', '', '', '', '', '', 40),
(119, '', '', '', '', '', '', 40),
(120, '', '', '', '', '', '', 40),
(121, '', '', '', '', '', '', 40),
(122, '', '', '', '', '', 'b', 28),
(123, '', '', '', '', '', '', 28),
(124, '', '', '', '', '', '', 28),
(125, '', '', '', '', '', '', 28),
(126, '10', '', '', '', 'uippk', 'd', 43),
(127, '10', 'a', 'a', 'a', 'a', 'a', 43),
(128, '10', 'b', 'b', 'b', 'b', 'b', 42),
(129, '10', 'c', 'c', 'c', 'c', 'c', 42),
(130, '', '', '', '', '', 'a', 55),
(131, 'Vamos mostrar cultura', 'A Dilma', 'o gUGU MORREU', 'guGUH gAITEIRO', 'MELODY', 'd', 42),
(132, '10', 'd', 'd', 'd', 'd', 'd', 42),
(133, '', '', '', '', '', '', 43),
(134, '', '', '', '', '', 'c', 43),
(135, '5', 'a', 'a', 'a', 'a', 'a', 42),
(136, '5', 'a', 'a', 'a', 'a', 'a', 42),
(137, 'Que dia Ã© hoje?', 'SÃ¡bado', 'Domingo', 'MarÃ§o', 'Todas estÃ£o corretas', 'c', 58),
(138, '6', 'GIGI', 'PRU', 'XOFANA', 'BRABA', 'b', 56),
(139, 'VAMOS ESTOCAR MANDIOCA', 'A Dilma', 'o gUGU TA VIVO', 'CURIOSO', 'DEMONIO', 'a', 42),
(140, '10', 'b', 'b', 'b', 'b', 'b', 42),
(141, '5', 'c', 'c', 'c', 'c', '', 42),
(142, '10', 'd', 'd', 'd', 'd', 'd', 42),
(143, '6', 'a', 'a', 'a', 'a', 'a', 42),
(144, 'Que dia Ã© hoje?', 'SÃ¡bado', 'Domingo', 'MarÃ§o', 'Todas estÃ£o corretas', 'c', 58),
(145, '', '', '', '', '', '', 58),
(146, '', '', '', '', '', '', 58),
(147, '', '', '', '', '', '', 58),
(148, '', '', '', '', '', '', 58),
(149, '', '', '', '', '', '', 58),
(150, '', '', '', '', '', '', 58),
(151, '', '', '', '', '', '', 58),
(152, '', '', '', '', '', '', 58),
(153, 'LKDS;TGL', 'Ã‡JHUFAIOLT', 'SDRVFAL BHJQRL N', 'Ã‡NAGFJÂ´~HNWBL1', 'Ãµjsdibsgma~whnrqÃ§u;b;odujjhgn ha/', '', 42),
(154, '014998459141', 'NÃ£o', 'me ', 'chama', 'que nÃ£o voou responder', 'c', 42),
(155, '10', 'c', 'c', 'a', 'd', 'b', 51),
(156, '6', '', 'a', '', '', '', 51),
(157, 'A', 'A', 'B', 'C', 'D', 'a', 63),
(158, 'b', 'a', 'b', 'c', 'd', '', 63),
(159, 'a', 'a', 'b', 'c', 'd', 'a', 62),
(160, 'a', 'a', 'b', 'c', 'd', 'a', 62),
(161, '', '', '', '', '', '', 62),
(162, '', '', '', '', '', '', 62),
(163, '', '', '', '', '', '', 62),
(164, '', '', '', '', '', '', 62),
(165, '', '', '', '', '', '', 62),
(166, '', '', '', '', '', '', 62),
(167, '', '', '', '', '', '', 62),
(168, '', '', '', '', '', 'd', 61);

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes_dissertativas`
--

CREATE TABLE `questoes_dissertativas` (
  `cod_questao_dissert` int(11) NOT NULL,
  `id_prova` int(11) NOT NULL,
  `questao` varchar(200) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `questoes_dissertativas`
--

INSERT INTO `questoes_dissertativas` (`cod_questao_dissert`, `id_prova`, `questao`, `numero`) VALUES
(12, 3, '5', 5),
(11, 3, '4', 4),
(10, 3, '3', 3),
(9, 3, '2', 2),
(8, 3, '1', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `temporario`
--

CREATE TABLE `temporario` (
  `id_temporaria` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_prova` int(11) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `questao` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cod_usuario` int(3) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `designacao` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod_usuario`, `nome`, `login`, `senha`, `designacao`) VALUES
(1, '1', '1', 'c4ca4238a0b923820dcc509a6f75849b', 'p'),
(2, 'teste', 'teste', '1', 'p'),
(3, 'teste', 'teste', '1', 'p'),
(4, 'q', '2', 'c81e728d9d4c2f636f067f89cc14862c', 'a'),
(5, 'jedi', '04216', 'c6f057b86584942e415435ffb1fa93d4', 'a'),
(6, 'adm', '000', 'c6f057b86584942e415435ffb1fa93d4', 'p'),
(7, 'Administrador', '001', '202cb962ac59075b964b07152d234b70', 'p'),
(8, 'Aluno', '002', '202cb962ac59075b964b07152d234b70', 'a'),
(9, 'adm', 'adm', 'c6f057b86584942e415435ffb1fa93d4', 'p'),
(10, 'student', 'student', 'c6f057b86584942e415435ffb1fa93d4', 'a'),
(11, 'salleti', '04354', '827ccb0eea8a706c4c34a16891f84e7b', 'a'),
(12, 'malu', '77777', '202cb962ac59075b964b07152d234b70', 'a'),
(13, 'malu', '123', '202cb962ac59075b964b07152d234b70', 'a'),
(14, 'professor1', 'adm', 'c6f057b86584942e415435ffb1fa93d4', 'p'),
(15, 'aluno1', 'student', 'c6f057b86584942e415435ffb1fa93d4', 'a'),
(16, '9', '9', '45c48cce2e2d7fbdea1afc51c7c6ad26', 'a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `professor` varchar(220) NOT NULL,
  `titulo` varchar(220) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `roteiro` varchar(10000) NOT NULL,
  `arquivo` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `professor`, `titulo`, `created`, `modified`, `roteiro`, `arquivo`) VALUES
(51, 'Maria', 'FunÃ§Ã£o Do Word', '2019-11-27 19:31:46', NULL, ' O Word Ã© um aplicativo do Microsoft Windows que vem junto na instalaÃ§Ã£o deste. Utiliza-se o aplicativo para ediÃ§Ã£o de textos.Word Ã© um editor de textos com formataÃ§Ã£o complexa. Com o Word, vocÃª pode criar e editar documentos de texto simples ou documentos com formataÃ§Ã£o e elementos grÃ¡ficos complexos.\r\n\r\nMicrosoft Word. O Microsoft Word Ã© um processador de texto produzido pela Microsoft Office Foi criado por Richard Brodie para computadores IBM PC com o sistema operacional DOS em 1983. Mais tarde foram criadas versÃµes para o Apple Macintosh (1984), SCO UNIX e Microsoft Windows (1989).', 'word.jpg'),
(52, 'JoÃ£o', 'FunÃ§Ã£o Do Exel', '2019-11-27 19:34:19', NULL, 'FunÃ§Ãµes do Excel (por categoria) As funÃ§Ãµes de planilha sÃ£o categorizadas de acordo com a funcionalidade. Clique em uma categoria para procurar suas funÃ§Ãµes. Ou pressione Ctrl+F para localizar uma funÃ§Ã£o digitando as primeiras letras ou uma palavra descritiva.', ''),
(56, '1', '1', '2019-12-11 15:24:07', NULL, '1 ', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `bauteca`
--
ALTER TABLE `bauteca`
  ADD PRIMARY KEY (`cod_bau`);

--
-- Índices para tabela `correcao`
--
ALTER TABLE `correcao`
  ADD PRIMARY KEY (`cod_correcao`),
  ADD KEY `id_questao` (`id_questao`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_resposta` (`id_resposta`),
  ADD KEY `id_prova` (`id_prova`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`cod_curso`);

--
-- Índices para tabela `forum_answer`
--
ALTER TABLE `forum_answer`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `forum_question`
--
ALTER TABLE `forum_question`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `hist_resp`
--
ALTER TABLE `hist_resp`
  ADD PRIMARY KEY (`cod_hist_resp`),
  ADD KEY `cod_usuario` (`cod_usuario`),
  ADD KEY `correta` (`resposta`);

--
-- Índices para tabela `hist_resp_dissert`
--
ALTER TABLE `hist_resp_dissert`
  ADD PRIMARY KEY (`cod_hist_resp`),
  ADD KEY `id_questao` (`id_questao`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_prova` (`id_prova`);

--
-- Índices para tabela `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`cod_materia`);

--
-- Índices para tabela `provas`
--
ALTER TABLE `provas`
  ADD PRIMARY KEY (`cod_provas`);

--
-- Índices para tabela `provas_dissertativas`
--
ALTER TABLE `provas_dissertativas`
  ADD PRIMARY KEY (`cod_provas`);

--
-- Índices para tabela `questoes`
--
ALTER TABLE `questoes`
  ADD PRIMARY KEY (`cod_questao`),
  ADD KEY `cod_prova` (`cod_prova`);

--
-- Índices para tabela `questoes_dissertativas`
--
ALTER TABLE `questoes_dissertativas`
  ADD PRIMARY KEY (`cod_questao_dissert`),
  ADD KEY `id_prova` (`id_prova`);

--
-- Índices para tabela `temporario`
--
ALTER TABLE `temporario`
  ADD PRIMARY KEY (`id_temporaria`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roteiro` (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `bauteca`
--
ALTER TABLE `bauteca`
  MODIFY `cod_bau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `correcao`
--
ALTER TABLE `correcao`
  MODIFY `cod_correcao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `cod_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `forum_answer`
--
ALTER TABLE `forum_answer`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `forum_question`
--
ALTER TABLE `forum_question`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `hist_resp`
--
ALTER TABLE `hist_resp`
  MODIFY `cod_hist_resp` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=395;

--
-- AUTO_INCREMENT de tabela `hist_resp_dissert`
--
ALTER TABLE `hist_resp_dissert`
  MODIFY `cod_hist_resp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT de tabela `materia`
--
ALTER TABLE `materia`
  MODIFY `cod_materia` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `provas`
--
ALTER TABLE `provas`
  MODIFY `cod_provas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de tabela `provas_dissertativas`
--
ALTER TABLE `provas_dissertativas`
  MODIFY `cod_provas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `questoes`
--
ALTER TABLE `questoes`
  MODIFY `cod_questao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT de tabela `questoes_dissertativas`
--
ALTER TABLE `questoes_dissertativas`
  MODIFY `cod_questao_dissert` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `temporario`
--
ALTER TABLE `temporario`
  MODIFY `id_temporaria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
