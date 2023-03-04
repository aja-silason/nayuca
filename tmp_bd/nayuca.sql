-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 03-Fev-2023 às 12:44
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `nayuca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncio`
--

CREATE TABLE `anuncio` (
  `idanuncio` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descricaoanuncio` text NOT NULL,
  `imganuncio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `anuncio`
--

INSERT INTO `anuncio` (`idanuncio`, `titulo`, `descricaoanuncio`, `imganuncio`) VALUES
(1, 'O IMC da gente', 'Para calcular o Índice de Massa Corporal, basta seguir a fórmula seguinte: peso / (altura x altura). Ou seja, deve multiplicar a sua altura por ela própria e, depois, dividir o peso por esse resultado ', ''),
(2, 'Semana da Fotografia', 'As Semanas Nacionais da Fotografia. A cada ano, encontros eram realizados em cidades diferentes do país. Por Pedro Vasquez. tamanho da letra imprimir.', '84d59fc853e9ee82e0d7dbaa6704a706.jpg'),
(3, 'Curso de Design de Interior', 'O que faz um profissional de Design de Interiores?\nO designer de interiores planeia e projeta os mais diferentes espaços internos residenciais, comerciais e institucionais, distribuindo os elementos pensando na estética, conforto, saúde e segurança dos usuários — e, é claro, na funcionalidade do local.', 'c1e58a94db18eb7c00daf069c76df872.jpg'),
(4, 'Visita ao Shopping Avennida', 'Visitaremos algumas lojas do Shopping Avennida Morro Bento e ficaremos por dentro das melhores promoções.', '25d7d2cef4b042ddd610ba80b914f280.jpg'),
(5, 'Semana JS', 'Nesta semana teremos palestras sobre a linguagem de programação javascript.', '873b078195f33900ed7c5933052e70f1.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `biblioteca`
--

CREATE TABLE `biblioteca` (
  `id` int(11) NOT NULL,
  `nomelivro` varchar(50) NOT NULL,
  `imglivro` text NOT NULL,
  `desponibilidade` varchar(50) NOT NULL,
  `link` text NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `biblioteca`
--

INSERT INTO `biblioteca` (`id`, `nomelivro`, `imglivro`, `desponibilidade`, `link`, `descricao`) VALUES
(1, 'Corpo São mente Sã', '43e648a9bb97c0b57a1c223713f8cb46.jpg', 'Virtual', '86c72594d97c96ae4383e40a4d32765f.pdf', 'Um livro que ajuda no treino do corpo e alma.'),
(2, 'Sucessos e na Vida académica', '90858ce884c5efae0c687c978052cf07.jpg', 'Ambas', '15988111de7d5b1ec5fe631d4ad09837.pdf', 'Este livro conta com alguns reforços de como ter sucesso na vida estudantil.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cantina`
--

CREATE TABLE `cantina` (
  `idproduto` int(11) NOT NULL,
  `imgproduto` text NOT NULL,
  `nomeproduto` varchar(100) NOT NULL,
  `descricaoproduto` text NOT NULL,
  `precoantigo` varchar(50) NOT NULL,
  `preconovo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cantina`
--

INSERT INTO `cantina` (`idproduto`, `imgproduto`, `nomeproduto`, `descricaoproduto`, `precoantigo`, `preconovo`) VALUES
(1, 'f4e2644bca6fbfe2463481b85ee8e29b.jpg', 'Hamburger Simples', 'Hamburguer simples feito com o mínimo dos igredientes', '1500', '1200'),
(2, '6af17ba485024834ddd682f28ee42c71.jpg', 'Macarrão a Balonhesa', 'Macarrão com todos molhos.', '2000', '1500');

-- --------------------------------------------------------

--
-- Estrutura da tabela `classe`
--

CREATE TABLE `classe` (
  `id` int(11) NOT NULL,
  `idcurso` varchar(11) NOT NULL,
  `classe` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `classe`
--

INSERT INTO `classe` (`id`, `idcurso`, `classe`) VALUES
(1, '1', '10'),
(2, '1', '11'),
(3, '1', '12'),
(4, '1', '13'),
(5, '2', '10'),
(6, '2', '11'),
(7, '2', '12'),
(8, '2', '13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `curso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `curso`) VALUES
(1, 'Informática'),
(2, 'Electrónica e Telecomunicação');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `id` int(11) NOT NULL,
  `idcurso` varchar(11) NOT NULL,
  `idclasse` varchar(11) NOT NULL,
  `disciplinas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`id`, `idcurso`, `idclasse`, `disciplinas`) VALUES
(3, '1', '1', 'Língua Portuguesa'),
(4, '1', '1', 'Matemática'),
(5, '1', '1', 'Física'),
(6, '1', '1', 'Química'),
(7, '1', '1', 'Tecnologia de Informação e Comunicação'),
(8, '1', '1', 'Técnica de Linguagem de Programação'),
(9, '1', '1', 'Sistema de Exploração Arquitetónica de Computadores'),
(10, '1', '1', 'Electrotécnia'),
(11, '1', '1', 'Educação Física'),
(12, '1', '1', 'Empreendedorismo'),
(13, '1', '1', 'Formação de Atitudes Integradoras'),
(14, '1', '1', 'Inglês'),
(15, '1', '2', 'Língua Portuguesa'),
(16, '1', '2', 'Matemática'),
(17, '1', '2', 'Física'),
(18, '1', '2', 'Química'),
(19, '1', '2', 'Desenho Técnico'),
(20, '1', '2', 'Técnica de Linguagem de Programação'),
(21, '1', '2', 'Electrotécnia'),
(22, '1', '2', 'Educação Física'),
(23, '1', '2', 'Empreendedorismo'),
(24, '1', '2', 'Formação de Atitudes Integradoras'),
(25, '1', '2', 'Inglês'),
(26, '1', '3', 'Língua Portuguesa'),
(27, '1', '3', 'Matemática'),
(28, '1', '3', 'Física'),
(29, '1', '3', 'Organização e Gestão Industrial'),
(30, '1', '3', 'Técnica de Linguagem de Programação'),
(31, '1', '3', 'Técnicas de Reparação de Computadores'),
(32, '1', '3', 'Educação Física'),
(33, '1', '3', 'Empreendedorismo'),
(34, '1', '3', 'Inglês Técnico'),
(35, '1', '3', 'Projecto Tecnológico'),
(36, '1', '4', 'Projecto Tecnológico'),
(37, '1', '4', 'Estágio'),
(38, '2', '5', 'Língua Portugesa'),
(39, '2', '5', 'Matemática'),
(40, '2', '5', 'Química'),
(41, '2', '5', 'Física'),
(42, '2', '5', 'Inglês'),
(43, '2', '5', 'Introdução a Programação'),
(44, '2', '5', 'Telecomunicação'),
(45, '2', '5', 'Eletricidade Eletrónica'),
(46, '2', '5', 'Práticas Oficinas'),
(47, '2', '5', 'Formação de Atitudes Integradoras'),
(48, '2', '5', 'Reparação de Eletrodomésticos'),
(49, '2', '5', 'Educação Física'),
(50, '2', '6', 'Língua Portuguesa'),
(51, '2', '6', 'Matemática'),
(52, '2', '6', 'Química'),
(53, '2', '6', 'Física'),
(54, '2', '6', 'Inglês'),
(55, '2', '6', 'Programação II'),
(56, '2', '6', 'Redes de Computadores'),
(57, '2', '6', 'Sistemas Digitais'),
(58, '2', '6', 'Desenho Técnico'),
(59, '2', '6', 'Eletricidade Eletrónica'),
(60, '2', '6', 'Práticas Oficinais'),
(61, '2', '6', 'Empreendedorismo'),
(62, '2', '7', 'Matemática'),
(63, '2', '7', 'Química'),
(64, '2', '7', 'Física'),
(65, '2', '7', 'Inglês'),
(66, '2', '7', 'Projeto Tecnológico'),
(67, '2', '7', 'Rede de Telefonia Móvel'),
(68, '2', '7', 'Tecnologia Telecom'),
(69, '2', '7', 'Sistema Digitais'),
(70, '2', '7', 'Eletricidade Eletrónica'),
(71, '2', '7', 'Práticas Oficinas(Arduíno)'),
(72, '2', '7', 'Organização e Gestão Industrial'),
(73, '2', '7', 'Empreendedorismo'),
(74, '2', '8', 'Projeto Tecnológico'),
(75, '2', '8', 'Estágio');

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas`
--

CREATE TABLE `notas` (
  `id` int(11) NOT NULL,
  `iduser` varchar(100) NOT NULL,
  `iddisciplina` text NOT NULL,
  `disciplina` text NOT NULL,
  `idclasse` text NOT NULL,
  `idcurso` text NOT NULL,
  `Ip1` varchar(10) NOT NULL,
  `Ip2` varchar(10) NOT NULL,
  `Ipt` varchar(10) NOT NULL,
  `IIp1` varchar(10) NOT NULL,
  `IIp2` varchar(10) NOT NULL,
  `IIpt` varchar(10) NOT NULL,
  `IIIp1` varchar(10) NOT NULL,
  `IIIp2` varchar(10) NOT NULL,
  `IIIpt` varchar(10) NOT NULL,
  `pf` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `notas`
--

INSERT INTO `notas` (`id`, `iduser`, `iddisciplina`, `disciplina`, `idclasse`, `idcurso`, `Ip1`, `Ip2`, `Ipt`, `IIp1`, `IIp2`, `IIpt`, `IIIp1`, `IIIp2`, `IIIpt`, `pf`) VALUES
(3, '230105', '3', 'Língua Portuguesa', '1', '1', '10', '10', '20', '13', '14', '14', '11', '12', '11', '10'),
(4, '230105', '4', 'Matemática', '1', '1', '10', '10', '15', '11', '10', '9', '5', '10', '14', '17'),
(5, '230105', '5', 'Física', '1', '1', '15', '20', '15', '15', '15', '20', '15', '15', '15', '15'),
(6, '230105', '6', 'Química', '1', '1', '10', '11', '10', '10', '8', '10', '11', '15', '13', '10'),
(7, '230105', '7', 'Tecnologia de Informação e Comunicação', '1', '1', '10', '10', '15', '5', '9', '10', '17', '15', '16', '15'),
(8, '230105', '8', 'Técnica de Linguagem de Programação', '1', '1', '10', '10', '15', '15', '14', '12', '13', '11', '20', '14'),
(9, '230105', '9', 'Sistema de Exploração Arquitetónica de Computadores', '1', '1', '10', '11', '13', '14', '15', '12', '14', '11', '12', '14'),
(10, '230105', '10', 'Electrotécnia', '1', '1', '10', '12', '13', '14', '15', '12', '14', '11', '12', '14'),
(11, '230105', '11', 'Educação Física', '1', '1', '10', '11', '12', '14', '15', '12', '14', '11', '12', '11'),
(12, '230105', '12', 'Empreendedorismo', '1', '1', '10', '12', '13', '14', '15', '11', '11', '12', '14', '19'),
(13, '230105', '13', 'Formação de Atitudes Integradoras', '1', '1', '10', '12', '11', '15', '14', '11', '13', '11', '14', '11'),
(14, '230105', '14', 'Inglês', '1', '1', '20', '12', '15', '14', '11', '18', '14', '14', '16', '10'),
(29, '230110', '38', 'Língua Portuguesa', '5', '2', '10', '0', '10', '15', '14', '13', '14', '11', '12', '15'),
(30, '230110', '39', 'Matemática', '5', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(31, '230110', '40', 'Química', '5', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(32, '230110', '41', 'Física', '5', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(33, '230110', '42', 'Inglês', '5', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(34, '230110', '43', 'Introdução a Programação', '5', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(35, '230110', '44', 'Telecomunicação', '5', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(36, '230110', '45', 'Eletricidade Electrónica', '5', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(37, '230110', '46', 'Práticas Oficinas', '5', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(38, '230110', '47', 'Formação de Atitudes Integradoras', '5', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(39, '230110', '48', 'Reparação de Eletrodomésticos', '5', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(40, '230110', '49', 'Educação Física', '5', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(52, '230111', '50', 'Língua Portuguesa', '6', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(53, '230111', '51', 'Matemática', '6', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(54, '230111', '52', 'Química', '6', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(55, '230111', '53', 'Física', '6', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(56, '230111', '54', 'Inglês', '6', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(57, '230111', '55', 'Programação II', '6', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(58, '230111', '56', 'Redes de Computadores', '6', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(59, '230111', '57', 'Sistemas Digitais', '6', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(60, '230111', '58', 'Desenho Técnico', '6', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(61, '230111', '59', 'Eletricidade Eletrónica', '6', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(62, '230111', '60', 'Práticas Oficinais', '6', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quadros`
--

CREATE TABLE `quadros` (
  `id` int(11) NOT NULL,
  `nomequadro` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `descricaoquadro` text NOT NULL,
  `imgquadro` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `quadros`
--

INSERT INTO `quadros` (`id`, `nomequadro`, `cargo`, `descricaoquadro`, `imgquadro`) VALUES
(1, 'José Francisco Aguiar', 'Director', 'Formado em Engenharia informática pela UGS.', '1aa48fc4880bb0c9b8a3bf979d3b917e.jpg'),
(2, 'André Fragoso', 'Director Pedagógico', 'Formado em Pedagogia pela UAN', 'fe73f687e5bc5280214e0486b273a5f9.jpg'),
(3, 'Carlos Bimbi', 'Coord. de Informática', 'Formado em Engenharia informática pela UCAN.', '2723d092b63885e0d7c260cc007e8b9d.jpg'),
(4, 'José Pedro André', 'Coord. de E.Telecom', 'Formado em Engenharia Telecomunicações pelo INSUTIC.', '6bc24fc1ab650b25b4114e93a98f1eba.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `descricao` text NOT NULL,
  `iduser` varchar(20) NOT NULL,
  `bi` varchar(20) NOT NULL,
  `idcurso` varchar(11) NOT NULL,
  `idclasse` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `nome`, `img`, `descricao`, `iduser`, `bi`, `idcurso`, `idclasse`) VALUES
(5, 'Gildo Kilola', 'decb96c3bb2ee3dad695dcc2a1168e44.jpg', 'Bom estudante, assíduo, comprometido e sempre a dispor da escola...', '230105', '00895647UE041', '1', '1'),
(7, 'Cleonice André', '822424d113d96e1c793a30b9a0ea3619.jpg', '', '230107', '008545654LA041', '2', '5'),
(10, 'Josefa Abrantes', '9af7b8572de6f8b2573f370a2903126a.jpg', 'Sempre tentando sorrir a cada queda que a vida dá.....', '230110', '008547654KS055', '2', '5'),
(12, 'João Diogo', '6cb2709ea7015a4b84aef772e398e447.jpg', 'Abençoado....', '230111', '008855474LS055', '2', '6');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`idanuncio`);

--
-- Índices para tabela `biblioteca`
--
ALTER TABLE `biblioteca`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cantina`
--
ALTER TABLE `cantina`
  ADD PRIMARY KEY (`idproduto`);

--
-- Índices para tabela `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `quadros`
--
ALTER TABLE `quadros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `idanuncio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `biblioteca`
--
ALTER TABLE `biblioteca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `cantina`
--
ALTER TABLE `cantina`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `classe`
--
ALTER TABLE `classe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de tabela `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de tabela `quadros`
--
ALTER TABLE `quadros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
