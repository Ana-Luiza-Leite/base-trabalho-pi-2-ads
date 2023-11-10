-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Jan-2023 às 05:34
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_disciplina`
--

CREATE TABLE `tb_disciplina` (
  `id_disciplina` int(11) NOT NULL,
  `nm_disciplina` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_disciplina`
--

INSERT INTO `tb_disciplina` (`id_disciplina`, `nm_disciplina`) VALUES
(1, 'Português'),
(2, 'Matemática'),
(3, 'Química'),
(4, 'Física');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_forum`
--

CREATE TABLE `tb_forum` (
  `id_post` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_material` int(11) DEFAULT NULL,
  `descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_forum`
--

INSERT INTO `tb_forum` (`id_post`, `id_usuario`, `id_material`, `descricao`) VALUES
(5, 18, 12, 'nao sei divisão?'),
(6, 18, 12, 'como assim?'),
(9, 20, 13, 'O que é um espelho côncavo?'),
(10, 10, 12, 'oi'),
(12, 10, 6, 'bla bla');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_material`
--

CREATE TABLE `tb_material` (
  `id_material` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `nm_materia` varchar(150) DEFAULT NULL,
  `conteudo` text DEFAULT NULL,
  `arquivo` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_material`
--

INSERT INTO `tb_material` (`id_material`, `id_usuario`, `nm_materia`, `conteudo`, `arquivo`) VALUES
(6, 10, 'Português', 'Antífona - Cruz e Souza', 'antifona-cruzesouza.pdf'),
(8, 10, 'Português', 'Desafios durante a pandemia', 'Ana Luiza Leite  Redação sobre Os Desafios da educação em tempos de pandemia.pdf'),
(11, 4, 'Química', 'Aula sobre Aldeídos e Cetonas', 'síncrona 16 - Aldeídos e Cetonas.pdf'),
(12, 4, 'Matemática', 'Aula sobre Intervalos Reais', 'Intervalos reais.pdf'),
(13, 4, 'Física', 'Aula sobre Calorimetria', 'Calorimetria.pdf'),
(14, 13, 'Química', 'Não tem como entender :)', 'Calorimetria.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_questoes`
--

CREATE TABLE `tb_questoes` (
  `id_questoes` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `nm_disciplina` varchar(255) DEFAULT NULL,
  `questao` text DEFAULT NULL,
  `alternativa1` text DEFAULT NULL,
  `alternativa2` text DEFAULT NULL,
  `alternativa3` text DEFAULT NULL,
  `alternativa4` text DEFAULT NULL,
  `alternativa5` text DEFAULT NULL,
  `correta` varchar(10) DEFAULT NULL,
  `comentario` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_questoes`
--

INSERT INTO `tb_questoes` (`id_questoes`, `id_usuario`, `nm_disciplina`, `questao`, `alternativa1`, `alternativa2`, `alternativa3`, `alternativa4`, `alternativa5`, `correta`, `comentario`) VALUES
(1, 10, 'Física', 'bla bla bla', 'oi', '.', '.', '.', '.', '1', 'porque sim'),
(2, 10, 'Física', 'bla bla bla', 'oi', '.', '.', '.', '.', '1', 'porque sim'),
(3, 10, 'Física', 'oi', 'tchau', '.', '.', '.', '.', '1', 'sim'),
(4, 10, 'Física', 'oi', 'tchau', '.', '.', '.', '.', '1', 'sim'),
(5, 10, 'Física', 'Tchau', 'oi', '.', '.', '.', '.', '1', 'porque sim'),
(6, 13, 'Português', 'Em português, com que verbo descrevemos o ato de olhar para algo?', 'Viseira', 'Vizualizelson', 'Vizualisar', 'Visualizar', 'Fitar uzóio', '4', 'O correto do português é escrever assim, então, preste sempre atenção na sua escrita para não escrever elado.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_resposta`
--

CREATE TABLE `tb_resposta` (
  `id_resposta` int(11) NOT NULL,
  `resposta_post` text NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_resposta`
--

INSERT INTO `tb_resposta` (`id_resposta`, `resposta_post`, `id_post`, `id_usuario`) VALUES
(3, 'é divisão é até legal.', 5, 18),
(4, 'eu não gosto de divisão com vírgula.', 5, 19),
(7, '', 12, 10),
(8, 'não sou boa em resolver equações com vírgula e com frações', 5, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `curriculo` varchar(200) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `email`, `nome`, `senha`, `curriculo`, `tipo`) VALUES
(4, 'lucafrancisco@gmail.com', 'Luca Francisco', '202cb962ac59075b964b07152d234b70', NULL, 0),
(5, 'cursotv@gmail.com', 'curso tv', '202cb962ac59075b964b07152d234b70', NULL, 0),
(6, 'tatubolinha@gmail.com', 'tatu bolinha', '202cb962ac59075b964b07152d234b70', 'www.gravatai.ifsul.edu.br', 1),
(7, 'vaquinhakaka@gmail.com', 'vaquinha kaka', '202cb962ac59075b964b07152d234b70', 'www.gravatai.ifsul.edu.br', 1),
(8, 'ana.luizaleite050@gmail.com', 'Luiza Leite', '202cb962ac59075b964b07152d234b70', '', 0),
(9, 'luisfelipe@gmail.com', 'Luis Feleipe', '202cb962ac59075b964b07152d234b70', NULL, 0),
(10, 'leitelu@gmail.com', 'Leite Lu', '202cb962ac59075b964b07152d234b70', 'www.gravatai.ifsul.edu.br', 1),
(13, 'igor.rosa.silveira@gmail.com', 'Iguinho Gameplays', '912e79cd13c64069d91da65d62fbb78c', 'auau.com', 1),
(15, 'IGU@M', 'IGU', 'b59c67bf196a4758191e42f76670ceba', NULL, 1),
(16, 'leite@gmail', 'Leite', '202cb962ac59075b964b07152d234b70', NULL, 1),
(17, 'rita@gmail', 'rita', '202cb962ac59075b964b07152d234b70', NULL, 0),
(18, 'godzilla@gmail', 'godzilla gof jr', '202cb962ac59075b964b07152d234b70', NULL, 0),
(19, 'laviniarusch.ch020@academico.ifsul.edu.br', 'Lavínia Vitória Flores Rusch', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 0),
(20, 'mich@gmail.com', 'Michele Silveira', '827ccb0eea8a706c4c34a16891f84e7b', NULL, 0),
(21, 'souzaa@gmail.com', 'Michele Silveira', '827ccb0eea8a706c4c34a16891f84e7b', 'www.gravatai.ifsul.edu.br', 1),
(22, 'silveira@gmail.com', 'hshdedue', '827ccb0eea8a706c4c34a16891f84e7b', 'hdhdhdhd', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_disciplina`
--
ALTER TABLE `tb_disciplina`
  ADD PRIMARY KEY (`id_disciplina`);

--
-- Índices para tabela `tb_forum`
--
ALTER TABLE `tb_forum`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `fk_forum_usuario` (`id_usuario`),
  ADD KEY `fk_forum_material` (`id_material`);

--
-- Índices para tabela `tb_material`
--
ALTER TABLE `tb_material`
  ADD PRIMARY KEY (`id_material`),
  ADD KEY `fk_materia_usuario` (`id_usuario`);

--
-- Índices para tabela `tb_questoes`
--
ALTER TABLE `tb_questoes`
  ADD PRIMARY KEY (`id_questoes`),
  ADD KEY `fk_questoes_usuario` (`id_usuario`);

--
-- Índices para tabela `tb_resposta`
--
ALTER TABLE `tb_resposta`
  ADD PRIMARY KEY (`id_resposta`),
  ADD KEY `fk_resposta_usuario` (`id_usuario`),
  ADD KEY `fk_resposta_forum` (`id_post`);

--
-- Índices para tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_disciplina`
--
ALTER TABLE `tb_disciplina`
  MODIFY `id_disciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_forum`
--
ALTER TABLE `tb_forum`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `tb_material`
--
ALTER TABLE `tb_material`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `tb_questoes`
--
ALTER TABLE `tb_questoes`
  MODIFY `id_questoes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tb_resposta`
--
ALTER TABLE `tb_resposta`
  MODIFY `id_resposta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_forum`
--
ALTER TABLE `tb_forum`
  ADD CONSTRAINT `fk_forum_material` FOREIGN KEY (`id_material`) REFERENCES `tb_material` (`id_material`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_forum_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `tb_material`
--
ALTER TABLE `tb_material`
  ADD CONSTRAINT `fk_materia_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`);

--
-- Limitadores para a tabela `tb_questoes`
--
ALTER TABLE `tb_questoes`
  ADD CONSTRAINT `fk_questoes_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`);

--
-- Limitadores para a tabela `tb_resposta`
--
ALTER TABLE `tb_resposta`
  ADD CONSTRAINT `fk_resposta_forum` FOREIGN KEY (`id_post`) REFERENCES `tb_forum` (`id_post`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_resposta_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
