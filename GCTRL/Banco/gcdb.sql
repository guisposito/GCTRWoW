-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Jan-2019 às 13:28
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemalogin`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `login`, `senha`) VALUES
(3, 'gui', 'gui', 'e55a09c160c17adafdcf1493dee65401'),
(4, '7', 'gui2', 'e55a09c160c17adafdcf1493dee65401'),
(5, 'Jose', 'j1', 'e55a09c160c17adafdcf1493dee65401'),
(6, '2', 'j2', 'e55a09c160c17adafdcf1493dee65401'),
(7, 'g', 'j12', '03c7c0ace395d80182db07ae2c30f034'),
(8, 'w', 'j1w', 'e55a09c160c17adafdcf1493dee65401'),
(9, 'ssdass', 'j1s', 'e55a09c160c17adafdcf1493dee65401'),
(10, 'wew', 'j1w2', 'e55a09c160c17adafdcf1493dee65401'),
(11, 'wew', 'j1w22', '4ab47e54c2f73ad4c0eb3974709721cd'),
(12, '21', 'j1333', 'e55a09c160c17adafdcf1493dee65401'),
(13, 'eqweeqw', 'j1ewew', 'e55a09c160c17adafdcf1493dee65401'),
(14, 'ewqew', 'j1ewewww', 'e55a09c160c17adafdcf1493dee65401'),
(15, 'sadqw', 'j1wwwwww', 'd41d8cd98f00b204e9800998ecf8427e'),
(16, 'eewqeqwwq', 'j1wwwww', 'd41d8cd98f00b204e9800998ecf8427e'),
(17, 'uuuu', 'j1fdfddddd', 'd41d8cd98f00b204e9800998ecf8427e'),
(18, 'fdsfsd', 'ddddd', 'd41d8cd98f00b204e9800998ecf8427e'),
(19, 'dsadsa', 'j1dddddddddddddd', 'e55a09c160c17adafdcf1493dee65401'),
(20, 'sasdasdasdsa', 'j1ssssssssssss', 'e55a09c160c17adafdcf1493dee65401'),
(21, '2ssdddddddddd', 'j1ddssssssssss', 'd41d8cd98f00b204e9800998ecf8427e'),
(22, 'Ã§llllllllll', 'j1Ã§Ã§Ã§Ã§Ã§Ã§Ã§', 'd41d8cd98f00b204e9800998ecf8427e'),
(23, '2rrrrrrrrrrr', 'j1ttttt', 'd41d8cd98f00b204e9800998ecf8427e'),
(24, '6666666666666', 'j166', 'd41d8cd98f00b204e9800998ecf8427e'),
(25, '0piopop', 'j1op', 'd41d8cd98f00b204e9800998ecf8427e'),
(26, 'eddddd', 'sss', 'd41d8cd98f00b204e9800998ecf8427e'),
(27, 'josue', 'j123', '81dc9bdb52d04dc20036dbd8313ed055'),
(28, 'rtyry', 'guityr', 'd41d8cd98f00b204e9800998ecf8427e'),
(29, '3333', 'gui3', 'e55a09c160c17adafdcf1493dee65401');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
